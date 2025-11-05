<?php

namespace App\Controllers\Cms;

use App\Controllers\Cms\Super;
use App\Models\Cms\OrderModel;
use App\Models\Cms\SuperModel;


class Order extends Super
{
  public function __construct()
  {

      $this->OrderModel = new OrderModel();
      $this->SuperModel = new SuperModel();

  }

  public function orders()
    {

      if (empty(session()->get('username'))) {
    return redirect()->to(base_url('Cms/Login/index'))->send(); // Ensure correct URL and use base_ur
     }

       $order_status = $this->request->getGet('order_status');
       $order_status_title = $this->getOrderByStatus($order_status);



        $data = array();
        $data['db_table_name'] = "orders";
        $data['record_name']   = "Order";
        $data['records_name'] = "Orders / ".$order_status_title;
        $data['menu_active'] = "orders";
        $data['sub_menu_active'] = $order_status;
        $data['form_link'] = site_url("cms/order/order_form/?order_status=".$order_status);
        $data['table_link'] = site_url("cms/order/orders/?order_status=".$order_status);
        $data['table_icon'] = '<i class="kt-menu__link-icon  flaticon-confetti"></i>';
        $data['canAdd'] = "false";

        $data['th'] = ["id", "REF id ", "name", "phone" , "Currencies"  ,"payment_option","Order Date", "status", "actions"];
      $data['columns'] = ["id","order_reference", "guest_name","guest_phone","order_currency" ,"payment_option","date_created", "is_blocked", "is_active"];
        $data['records'] = $this->OrderModel->selectOrders_m($order_status);
      //  echo "<pre>";print_r($data['records'] );die();

        foreach ($data['records'] as $key => $arr) {
            $data['records'][$key]["date_created"]   = datetime_well_format($arr['date_created']);

              $data['records'][$key]["is_active"]   = '<button data-toggle="tooltip" data-title="Edit" data-placement="top" class="btn btn-warning  btn-icon waves-effect waves-light   mx-1   " value="'.$arr['id'].'" onclick=\'window.location.href = "'.$data['form_link'].'&order_id='.$arr['id'].'"\'><i class=" ri-eye-line ri-2x"></i> </button><button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-danger btn-icon waves-effect waves-light   " value="'.$arr['id'].'" ><i class="ri-delete-bin-5-line ri-2x"></i></button>';

            $data['records'][$key]["is_blocked"]   = $order_status_title;


        }


      return  $this->render("table", $data);
    }
    public function order_form($id = 0)
    {
      $order_status = $this->request->getGet('order_status');
      $order_id = $this->request->getGet('order_id');
      $order_status_title = $this->getOrderByStatus($order_status);


        $data = array();
        $data['db_table_name'] = "orders";
        $data['record_name']   = "Order";
        $data['records_name'] = "Orders / ".$order_status_title;
        $data['menu_active'] = "orders";
        $data['sub_menu_active'] = $order_status;
        $data['form_link'] = site_url("cms/order/order_form/?order_status=".$order_status);
        $data['table_link'] = site_url("cms/order/orders/?order_status=".$order_status);
        $data['submit_link'] = site_url("cms/order/order_save/");
        $data['id'] = $id;

        $data['records'] = array();
        $data['form_title'] = $data['record_name'] . " Add";
        if ($id != 0) {
            $data['form_title'] = $data['record_name'] . " Edit";
        }


        $data['record'] = $this->OrderModel->selectSingleOrder_m($order_id)[0];
        $data['orderurrency'] = $this->OrderModel->getCurrencyByAbbr($data['record']['order_currency']);

        $data['order_items'] = $this->OrderModel->selectSingleOrderItems_m($order_id);
        $data['order_payments'] = $this->OrderModel->select_paymentstatus_model_m($data['record']['order_reference']);




        return $this->render("order_form", $data);
    }

    private function getOrderByStatus($orderStatus)
      {
          $orderStatusTitle = '';
          switch ($orderStatus) {
              case '0':
                  $orderStatusTitle = 'Pending';
                  break;
              case '1':
                  $orderStatusTitle = 'Confirmed';
                  break;
              case '2':
                  $orderStatusTitle = 'Shipped';
                  break;
              case '3':
                  $orderStatusTitle = 'Shipped';
                  break;
              case '4':
                  $orderStatusTitle = 'Returned';
                  break;
              case '5':
                  $orderStatusTitle = 'Canceled';
                  break;
              default:
                  $orderStatusTitle = 'Unknown';
                  break;
          }
          return $orderStatusTitle;
      }



    public function order_save()
    {
      $data = $this->request->getVar();

    //  echo "<pre>";print_r($data);die();

       $this->OrderModel->updateOrder_m($data['order_id'], ["order_status"=>$data['order_status']]);

        return  redirect()->to($data['table_link']);
    }




}
