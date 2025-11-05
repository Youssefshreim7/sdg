<?php

namespace App\Controllers\Cms;

use App\Controllers\Cms\Super;
use App\Models\Cms\SocialmediaModel;
use App\Models\Cms\SuperModel;


class Socialmedia extends Super
{
  public function __construct()
  {

      $this->SocialmediaModel = new SocialmediaModel();
      $this->SuperModel = new SuperModel();


  }
  public function socialmedia()
    {

    if (empty(session()->get('username'))) {
    return redirect()->to(base_url('Cms/Login/index'))->send(); // Ensure correct URL and use base_ur
  }

        $data = array();
        $data['db_table_name'] = "socialmedia";
        $data['record_name']   = "socialmediaus";
        $data['records_name'] = $data['menu_active'] = "socialmedia";
        $data['form_link'] = site_url("cms/socialmedia/socialmedia_form/");
        $data['table_link'] = site_url("Cms/socialmedia/socialmedia");
        $data['table_icon'] = '<i class="kt-menu__link-icon  flaticon-confetti"></i>';

        $data['th'] = ["ID", "Name", "Link", "date_created", "status", "action"];
        $data['columns'] = ["id", "name", "link", "date_created", "is_blocked", "is_active"];
        $data['records'] = $this->SocialmediaModel->selectsocialmedia_model_m();
      //  echo "<pre>";print_r($data['records'] );die();

        foreach ($data['records'] as $key => $arr) {
            $data['records'][$key]["date_created"]   = datetime_well_format($arr['date_created']);

              $data['records'][$key]["is_active"]   = '<button data-toggle="tooltip" data-title="Edit" data-placement="top" class="btn btn-warning  btn-icon waves-effect waves-light   mx-1   " value="'.$arr['id'].'" onclick=\'window.location.href = "'.$data['form_link'].'/'.$arr['id'].'"\'><i class="ri-edit-box-line ri-2x"></i> </button><button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-danger btn-icon waves-effect waves-light   " value="'.$arr['id'].'" ><i class="ri-delete-bin-5-line ri-2x"></i></button>';

            $data['records'][$key]["is_blocked"]   = ($arr['is_blocked'] == 0 ? '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top"  type="button" class="btn btn-outline-success btn-status" value='.$arr['id'].'> Active </button>' : '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top" 	 type="button" class="btn btn-outline-danger  btn-status" value='.$arr['id'].' style=""> Inactive </button>');


        }


      return  $this->render("table", $data);
    }
    public function socialmedia_form($id = 0)
    {
        $data = array();
        $data['db_table_name'] = "socialmedia";
        $data['record_name']   = "socialmediaus";
        $data['records_name'] = $data['menu_active'] = "socialmedia";
        $data['table_link'] = site_url("Cms/socialmedia/socialmedia");
        $data['submit_link'] = site_url("Cms/socialmedia/socialmedia_save");
        $data['id'] = $id;

        $data['records'] = array();
        $data['form_title'] = $data['record_name'] . " Add";
        if ($id != 0) {
            $data['form_title'] = $data['record_name'] . " Edit";
        }

        $tableName = 'socialmedia';
        $data['record'] = $this->SuperModel->selectSingleData_m($tableName, $id);

        return $this->render("socialmedia_form", $data);
    }
    public function socialmedia_save()
    {
        $tableName = 'socialmedia';
        $data = $this->request->getVar();

        $id = $data['id'];
        unset($data['id']);




        $dbData = array(
            "name" => $data['name'],
            "class" => $data['class'],
            "link" => $data['link']
          );


        $id = $this->SuperModel->saveData_m($tableName, $dbData, $id);


        if (!$id > 0) {
            echo "<script> alert('An error has been occured'); </script>";
        } else {
            $this->swalSuccess(site_url("Cms/socialmedia/socialmedia"));
        }
        die();
        return  redirect()->to('Cms/socialmedia/socialmedia');
    }




}
