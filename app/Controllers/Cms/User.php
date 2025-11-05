<?php

namespace App\Controllers\Cms;

use App\Controllers\Cms\Super;
use App\Models\Cms\UserModel;
use App\Models\Cms\SuperModel;


class User extends Super
{
  public function __construct()
  {

      $this->UserModel = new UserModel();
      $this->SuperModel = new SuperModel();


  }
  public function user()
    {


      if (empty(session()->get('username'))) {
      return redirect()->to(base_url('Cms/Login/index'))->send(); // Ensure correct URL and use base_ur
     }


        $data = array();
        $data['db_table_name'] = "user";
        $data['record_name']   = "users";
        $data['records_name'] = $data['menu_active'] = "users";
        $data['form_link'] = site_url("cms/user/user_form/");
        $data['table_link'] = site_url("Cms/user/user");
        $data['table_icon'] = '<i class="kt-menu__link-icon  flaticon-confetti"></i>';
        $data['canAdd'] = "false";

        $data['th'] = ["ID", "full name", "email","Type","date_created", "action"];
        $data['columns'] = ["id", "fullname", "email","type", "date_created", "is_active"];
        $data['records'] = $this->UserModel->selectuser_model_m();
      //  echo "<pre>";print_r($data['records'] );die();

        foreach ($data['records'] as $key => $arr) {
            $data['records'][$key]["date_created"]   = datetime_well_format($arr['date_created']);

              $data['records'][$key]["is_active"]   = '<button data-toggle="tooltip" data-title="Edit" data-placement="top" class="btn btn-warning  btn-icon waves-effect waves-light   mx-1   " value="'.$arr['id'].'" onclick=\'window.location.href = "'.$data['form_link'].'/'.$arr['id'].'"\'><i class=" ri-eye-line ri-2x"></i> </button><button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-danger btn-icon waves-effect waves-light   " value="'.$arr['id'].'" ><i class="ri-delete-bin-5-line ri-2x"></i></button>';

             $data['records'][$key]["type"]   = 'Manual Login';


        }


      return  $this->render("table", $data);
    }


    public function user_form($id = 0)
    {
        $data = array();
        $data['db_table_name'] = "user";
        $data['record_name']   = "users";
        $data['records_name'] = $data['menu_active'] = "users";
        $data['table_link'] = site_url("Cms/user/user");
        $data['submit_link'] = site_url("Cms/user/user_save");
        $data['id'] = $id;

        $data['records'] = array();
        $data['form_title'] = $data['record_name'] . " Add";
        if ($id != 0) {
            $data['form_title'] = $data['record_name'] . " Edit";
        }

        $tableName = 'users';
        $data['record'] = $this->SuperModel->selectSingleData_m($tableName, $id);
        $data['record']["type"]   = 'Manual Login';
        return $this->render("user_form", $data);
    }
    public function user_save()
    {
        $tableName = 'users';
        $data = $this->request->getVar();

        $id = $data['id'];
        unset($data['id']);



        $dbData = array(
            "name" => $data['name'],
            "description" => $data['description']
         );


        $id = $this->SuperModel->saveData_m($tableName, $dbData, $id);


        if (!$id > 0) {
            echo "<script> alert('An error has been occured'); </script>";
        } else {
            $this->swalSuccess(site_url("Cms/user/user"));
        }
        die();
        return  redirect()->to('Cms/user/user');
    }




}
