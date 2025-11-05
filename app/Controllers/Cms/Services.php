<?php

namespace App\Controllers\Cms;

use App\Controllers\Cms\Super;
use App\Models\Cms\ServicesModel;
use App\Models\Cms\SuperModel;


class Services extends Super
{
  public function __construct()
  {

      $this->ServicesModel = new ServicesModel();
      $this->SuperModel = new SuperModel();


  }
  public function services()
    {


      if (empty(session()->get('username'))) {
      return redirect()->to(base_url('Cms/Login/index'))->send(); // Ensure correct URL and use base_ur
     }


        $data = array();
        $data['db_table_name'] = "services";
        $data['record_name']   = "services";
        $data['records_name'] = $data['menu_active'] = "services";
        $data['form_link'] = site_url("cms/services/services_form/");
        $data['table_link'] = site_url("Cms/services/services");
        $data['table_icon'] = '<i class="kt-menu__link-icon  flaticon-confetti"></i>';

        $data['th'] = ["ID", "Name", "image", "date_created", "status", "action"];
        $data['columns'] = ["id", "name", "image", "date_created", "is_blocked", "is_active"];
        $data['records'] = $this->ServicesModel->selectservices_model_m();
      //  echo "<pre>";print_r($data['records'] );die();

        foreach ($data['records'] as $key => $arr) {
            $data['records'][$key]["date_created"]   = datetime_well_format($arr['date_created']);

              $data['records'][$key]["is_active"]   = '

              <button data-toggle="tooltip" data-title="Edit" data-placement="top" class="btn btn-warning  btn-icon waves-effect waves-light   mx-1   " value="'.$arr['id'].'" onclick=\'window.location.href = "'.$data['form_link'].'/'.$arr['id'].'"\'><i class="ri-edit-box-line ri-2x"></i> </button><button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-danger btn-icon waves-effect waves-light   " value="'.$arr['id'].'" ><i class="ri-delete-bin-5-line ri-2x"></i></button>';

            $data['records'][$key]["is_blocked"]   = ($arr['is_blocked'] == 0 ? '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top"  type="button" class="btn btn-outline-success btn-status" value='.$arr['id'].'> Active </button>' : '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top" 	 type="button" class="btn btn-outline-danger  btn-status" value='.$arr['id'].' style=""> Inactive </button>');

            $data['records'][$key]["image"]   = '<img src="'.base_url() . '/uploads/'.$data['records'][$key]["image"].'" width="175px">';

        }


      return  $this->render("table", $data);
    }
    public function services_form($id = 0)
    {
        $data = array();
        $data['db_table_name'] = "services";
        $data['record_name']   = "services";
        $data['records_name'] = $data['menu_active'] = "services";
        $data['table_link'] = site_url("Cms/services/services");
        $data['submit_link'] = site_url("Cms/services/services_save");
        $data['id'] = $id;

        $data['records'] = array();
        $data['form_title'] = $data['record_name'] . " Add";
        if ($id != 0) {
            $data['form_title'] = $data['record_name'] . " Edit";
        }

        $tableName = 'services';
        $data['record'] = $this->SuperModel->selectSingleData_m($tableName, $id);


        return $this->render("services_form", $data);
    }
    public function services_save()
    {
        $tableName = 'services';
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

            $services = $this->SuperModel->selectSingleData_m($tableName, $id);

            $uploadImage = $services['image'];
        }
            // Handle icon upload (new logic)
            $uploadIcon = '';
            $iconFile = $this->request->getFile('icon');
            if (!empty($_FILES['icon']['name'])) {
                if ($iconFile->isValid() && !$iconFile->hasMoved()) {
                    $iconFile->move('./uploads', $iconFile->getRandomName());
                    $uploadIcon = $iconFile->getName();
                } else {
                    $uploadIcon = 'default-icon.png'; // Use a default icon if upload fails
                }
            } else {
                $mainservices = $this->SuperModel->selectSingleData_m($tableName, $id);
                $uploadIcon = $mainservices['icon'];
            }


        $dbData = array(
            "name" => $data['name'],
            "description" => $data['description'],
          "image" => $uploadImage,
          "icon" => $uploadIcon
        );


        $id = $this->SuperModel->saveData_m($tableName, $dbData, $id);


        if (!$id > 0) {
            echo "<script> alert('An error has been occured'); </script>";
        } else {
            $this->swalSuccess(site_url("Cms/services/services"));
        }
        die();
        return  redirect()->to('Cms/services/services');
    }


    public function services_gallery($id = 0, $title = "")
    {
        $data = array();
        $data['form_title'] = "services: " . $title . " / Image Gallery";
        $data['records_name'] = "services Gallery";
        $data['menu_active'] = "services";
        $data['table_link'] = "";
        $data['db_table_name'] = "services_gallery";
        $data['id'] = $id;

        return $this->render("services_gallery", $data);
    }
    public function services_gallery_save($id)
    {
        $uploadImage =  '';
        $photo = $this->request->getFile('file_name');
        if (!empty($_FILES['file_name']['name'])) {
            if (!empty($photo)) {
                helper(['image']);
                $path = './uploads';
                if ($photo->isValid() && !$photo->hasMoved()) {
                    $photo->move($path, $photo->getRandomName());
                    $fileName = $photo->getName(); // TODO: add exten
                    $uploadImage = $fileName;
                }
            } else {
                // TODO: return error and block the flow
            }
        }
       $this->ServicesModel->services_gallery_save_m($uploadImage, $id);
    }

    public function get_services_gallery($id)
    {
        $return = "";
        $rows =  $this->ServicesModel->get_services_gallery_m($id);
        foreach ($rows as $key => $value) {
            $file = base_url() . '/uploads/' . $value['photo'];
             $return .= ' <tr> <td> <a href="' . $file . '" target="_blank"> <img src="' . $file . '" width="150" height="150"> </a> </td><td>' . datetime_well_format($value['date_created']) . '</td>  <td> <button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-icon waves-effect waves-light btn-danger m-b-5 btn-sm " value="'. $value['id'] .'" ><i align="" class="ri-delete-bin-5-line ri-2x"></i> </button> </td></tr>';
        }
        $return .= "";

        echo $return;
    }






}
