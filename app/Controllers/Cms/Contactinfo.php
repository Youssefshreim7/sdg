<?php

namespace App\Controllers\Cms;

use App\Controllers\Cms\Super;
use App\Models\Cms\ContactinfoModel;
use App\Models\Cms\SuperModel;


class Contactinfo extends Super
{
  public function __construct()
  {

      $this->ContactinfoModel = new ContactinfoModel();
      $this->SuperModel = new SuperModel();


  }
  public function contactinfo()
    {

    if (empty(session()->get('username'))) {
    return redirect()->to(base_url('Cms/Login/index'))->send(); // Ensure correct URL and use base_ur
  }

        $data = array();
        $data['db_table_name'] = "contactinfo";
        $data['record_name']   = "contactinfo";
        $data['records_name'] = $data['menu_active'] = "contactinfo";
        $data['form_link'] = site_url("cms/contactinfo/contactinfo_form/");
        $data['table_link'] = site_url("Cms/contactinfo/contactinfo");
        $data['table_icon'] = '<i class="kt-menu__link-icon  flaticon-confetti"></i>';

        $data['th'] = ["ID",  "Call Number" ,"Chat Number" , "Email","Address", "date_created", "action"];
        $data['columns'] = ["id",    "mobileiraq" ,"mobileleb" , "email","address", "date_created", "is_active"];
        $data['records'] = $this->ContactinfoModel->selectcontactinfo_model_m();
      //  echo "<pre>";print_r($data['records'] );die();

        foreach ($data['records'] as $key => $arr) {
            $data['records'][$key]["date_created"]   = datetime_well_format($arr['date_created']);

              $data['records'][$key]["is_active"]   = '<button data-toggle="tooltip" data-title="Edit" data-placement="top" class="btn btn-warning  btn-icon waves-effect waves-light   mx-1   " value="'.$arr['id'].'" onclick=\'window.location.href = "'.$data['form_link'].'/'.$arr['id'].'"\'><i class="ri-edit-box-line ri-2x"></i> </button>';

            $data['records'][$key]["is_blocked"]   = ($arr['is_blocked'] == 0 ? '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top"  type="button" class="btn btn-outline-success btn-status" value='.$arr['id'].'> Active </button>' : '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top" 	 type="button" class="btn btn-outline-danger  btn-status" value='.$arr['id'].' style=""> Inactive </button>');


        }


      return  $this->render("table", $data);
    }
    public function contactinfo_form($id = 0)
    {
        $data = array();
        $data['db_table_name'] = "contactinfo";
        $data['record_name']   = "contactinfo";
        $data['records_name'] = $data['menu_active'] = "contactinfo";
        $data['table_link'] = site_url("Cms/contactinfo/contactinfo");
        $data['submit_link'] = site_url("Cms/contactinfo/contactinfo_save");
        $data['id'] = $id;

        $data['records'] = array();
        $data['form_title'] = $data['record_name'] . " Add";
        if ($id != 0) {
            $data['form_title'] = $data['record_name'] . " Edit";
        }

        $tableName = 'contactinfo';
        $data['record'] = $this->SuperModel->selectSingleData_m($tableName, $id);

        return $this->render("contactinfo_form", $data);
    }
    public function contactinfo_save()
    {
        $tableName = 'contactinfo';
        $data = $this->request->getVar();

        $id = $data['id'];
        unset($data['id']);




        $dbData = array(
            "address" => $data['address'],
            "mobileiraq" => $data['mobileiraq'],
            "mobileleb" => $data['mobileleb'],
            "mobileksa" => $data['mobileksa'],
            "email" => $data['email'],
            "fax" => $data['fax'],
            "fulladdress" => $data['fulladdress'],
          );


        $id = $this->SuperModel->saveData_m($tableName, $dbData, $id);


        if (!$id > 0) {
            echo "<script> alert('An error has been occured'); </script>";
        } else {
            $this->swalSuccess(site_url("Cms/contactinfo/contactinfo"));
        }
        die();
        return  redirect()->to('Cms/contactinfo/contactinfo');
    }




}
