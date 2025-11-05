<?php

namespace App\Controllers\Cms;

use App\Controllers\Cms\Super;
use App\Models\Cms\LabelsModel;
use App\Models\Cms\SuperModel;


class Labels extends Super
{
  public function __construct()
  {

      $this->LabelsModel = new LabelsModel();
      $this->SuperModel = new SuperModel();


  }
  public function labels()
    {


      if (empty(session()->get('username'))) {
    return redirect()->to(base_url('Cms/Login/index'))->send(); // Ensure correct URL and use base_ur
  }


        $data = array();
        $data['db_table_name'] = "labels";
        $data['record_name']   = "labels";
        $data['records_name'] = $data['menu_active'] = "labels";
        $data['form_link'] = site_url("cms/labels/labels_form/");
        $data['table_link'] = site_url("Cms/labels/labels");
        $data['table_icon'] = '<i class="kt-menu__link-icon  flaticon-confetti"></i>';
        //$data['canAdd'] = "false";

        $data['th'] = ["ID", "Name", "image", "date_created", "status", "action"];
        $data['columns'] = ["id", "name", "image", "date_created", "is_blocked", "is_active"];
        $data['records'] = $this->LabelsModel->selectlabels_model_m();
      //  echo "<pre>";print_r($data['records'] );die();

        foreach ($data['records'] as $key => $arr) {
            $data['records'][$key]["date_created"]   = datetime_well_format($arr['date_created']);

              $data['records'][$key]["is_active"]   = '<button data-toggle="tooltip" data-title="Edit" data-placement="top" class="btn btn-warning  btn-icon waves-effect waves-light   mx-1   " value="'.$arr['id'].'" onclick=\'window.location.href = "'.$data['form_link'].'/'.$arr['id'].'"\'><i class="ri-edit-box-line ri-2x"></i> </button><button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-danger btn-icon waves-effect waves-light   " value="'.$arr['id'].'" ><i class="ri-delete-bin-5-line ri-2x"></i></button>';

            $data['records'][$key]["is_blocked"]   = ($arr['is_blocked'] == 0 ? '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top"  type="button" class="btn btn-outline-success btn-status" value='.$arr['id'].'> Active </button>' : '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top" 	 type="button" class="btn btn-outline-danger  btn-status" value='.$arr['id'].' style=""> Inactive </button>');

            $data['records'][$key]["image"]   = '<img src="'.base_url() . '/uploads/'.$data['records'][$key]["image"].'" width="75px">';

        }


      return  $this->render("table", $data);
    }
    public function labels_form($id = 0)
    {
        $data = array();
        $data['db_table_name'] = "labels";
        $data['record_name']   = "labels";
        $data['records_name'] = $data['menu_active'] = "labels";
        $data['table_link'] = site_url("Cms/labels/labels");
        $data['submit_link'] = site_url("Cms/labels/labels_save");
        $data['id'] = $id;

        $data['records'] = array();
        $data['form_title'] = $data['record_name'] . " Add";
        if ($id != 0) {
            $data['form_title'] = $data['record_name'] . " Edit";
        }

        $tableName = 'labels';
        $data['record'] = $this->SuperModel->selectSingleData_m($tableName, $id);

        return $this->render("labels_form", $data);
    }
    public function labels_save()
    {
        $tableName = 'labels';
        $data = $this->request->getVar();

        $id = $data['id'];
        unset($data['id']);
        $uploadImage =  '';
        $photo=$this->request->getFile('image');
        if (!empty($_FILES['image']['name'])) {
        if (!empty($photo)) {
                helper(['image']) ;
                $path='./uploads';
                if ($photo->isValid() && !$photo->hasMoved()) {
                    $photo->move($path , $photo->getRandomName());
                    $fileName=$photo->getName();
                    $uploadImage = $fileName;
                }
            } else {
                $uploadImage = 'default.png';
            }

        }else{

            $labels = $this->SuperModel->selectSingleData_m($tableName, $id);

            $uploadImage = $labels['image'];
        }

 


        $dbData = array(
            "name" => $data['name'],
            "number" => $data['number'],
            "image" => $uploadImage,
            "symbol" => $data['symbol']
        
        );


        $id = $this->SuperModel->saveData_m($tableName, $dbData, $id);


        if (!$id > 0) {
            echo "<script> alert('An error has been occured'); </script>";
        } else {
            $this->swalSuccess(site_url("Cms/labels/labels"));
        }
        die();
        return  redirect()->to('Cms/labels/labels');
    }




}
