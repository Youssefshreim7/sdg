<?php

namespace App\Controllers\Cms;

use App\Controllers\Cms\Super;
use App\Models\Cms\ProgramModel;
use App\Models\Cms\SuperModel;


class program extends Super
{
  public function __construct()
  {

      $this->ProgramModel = new ProgramModel();
      $this->SuperModel = new SuperModel();


  }
  public function programs()
    {


      if (empty(session()->get('username'))) {
    return redirect()->to(base_url('Cms/Login/index'))->send(); // Ensure correct URL and use base_ur
  }


        $data = array();
        $data['db_table_name'] = "programs";
        $data['record_name']   = "program";
        $data['records_name'] = $data['menu_active'] = "programs";
        $data['form_link'] = site_url("cms/program/program_form/");
        $data['table_link'] = site_url("Cms/program/programs");
        $data['table_icon'] = '<i class="kt-menu__link-icon  flaticon-confetti"></i>';
        $data['canAdd'] = "false";

        $data['th'] = ["ID", "Name" , "date_created", "status", "action"];
        $data['columns'] = ["id", "name", "date_created", "is_blocked", "is_active"];
        $data['records'] = $this->ProgramModel->selectprograms_model_m();
      //  echo "<pre>";print_r($data['records'] );die();

        foreach ($data['records'] as $key => $arr) {
            $data['records'][$key]["date_created"]   = datetime_well_format($arr['date_created']);

              $data['records'][$key]["is_active"]   = '<button data-toggle="tooltip" data-title="Edit" data-placement="top" class="btn btn-warning  btn-icon waves-effect waves-light   mx-1   " value="'.$arr['id'].'" onclick=\'window.location.href = "'.$data['form_link'].'/'.$arr['id'].'"\'><i class="ri-edit-box-line ri-2x"></i> </button><button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-danger btn-icon waves-effect waves-light   " value="'.$arr['id'].'" ><i class="ri-delete-bin-5-line ri-2x"></i></button>';

            $data['records'][$key]["is_blocked"]   = ($arr['is_blocked'] == 0 ? '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top"  type="button" class="btn btn-outline-success btn-status" value='.$arr['id'].'> Active </button>' : '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top" 	 type="button" class="btn btn-outline-danger  btn-status" value='.$arr['id'].' style=""> Inactive </button>');


        }


      return  $this->render("table", $data);
    }
    public function program_form($id = 0)
    {
        $data = array();
        $data['db_table_name'] = "programs";
        $data['record_name']   = "program";
        $data['records_name'] = $data['menu_active'] = "programs";
        $data['table_link'] = site_url("Cms/program/programs");
        $data['submit_link'] = site_url("Cms/program/program_save");
        $data['id'] = $id;

        $data['records'] = array();
        $data['form_title'] = $data['record_name'] . " Add";
        if ($id != 0) {
            $data['form_title'] = $data['record_name'] . " Edit";
        }

        $tableName = 'programs';
        $data['record'] = $this->SuperModel->selectSingleData_m($tableName, $id);

        return $this->render("program_form", $data);
    }
    public function program_save()
    {
        $tableName = 'programs';
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
            $this->swalSuccess(site_url("Cms/program/programs"));
        }
        die();
        return  redirect()->to('Cms/program/programs');
    }




}
