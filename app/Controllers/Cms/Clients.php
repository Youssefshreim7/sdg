<?php

namespace App\Controllers\Cms;

use App\Controllers\Cms\Super;
use App\Models\Cms\ClientsModel;
use App\Models\Cms\SuperModel;


class Clients extends Super
{
  public function __construct()
  {

      $this->ClientsModel = new ClientsModel();
      $this->SuperModel = new SuperModel();


  }
  public function clients()
    {


      if (empty(session()->get('username'))) {
    return redirect()->to(base_url('Cms/Login/index'))->send(); // Ensure correct URL and use base_ur
  }


        $data = array();
        $data['db_table_name'] = "clients";
        $data['record_name']   = "clients";
        $data['records_name'] = $data['menu_active'] = "clients";
        $data['form_link'] = site_url("cms/clients/clients_form/");
        $data['table_link'] = site_url("Cms/clients/clients");
        $data['table_icon'] = '<i class="kt-menu__link-icon  flaticon-confetti"></i>';

        $data['th'] = ["ID", "Name", "image", "date_created", "status", "action"];
        $data['columns'] = ["id", "name", "image", "date_created", "is_blocked", "is_active"];
        $data['records'] = $this->ClientsModel->selectclients_model_m();
      //  echo "<pre>";print_r($data['records'] );die();

        foreach ($data['records'] as $key => $arr) {
            $data['records'][$key]["date_created"]   = datetime_well_format($arr['date_created']);

              $data['records'][$key]["is_active"]   = '<button data-toggle="tooltip" data-title="Edit" data-placement="top" class="btn btn-warning  btn-icon waves-effect waves-light   mx-1   " value="'.$arr['id'].'" onclick=\'window.location.href = "'.$data['form_link'].'/'.$arr['id'].'"\'><i class="ri-edit-box-line ri-2x"></i> </button><button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-danger btn-icon waves-effect waves-light   " value="'.$arr['id'].'" ><i class="ri-delete-bin-5-line ri-2x"></i></button>';

            $data['records'][$key]["is_blocked"]   = ($arr['is_blocked'] == 0 ? '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top"  type="button" class="btn btn-outline-success btn-status" value='.$arr['id'].'> Active </button>' : '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top" 	 type="button" class="btn btn-outline-danger  btn-status" value='.$arr['id'].' style=""> Inactive </button>');

            $data['records'][$key]["image"]   = '<img src="'.base_url() . '/uploads/'.$data['records'][$key]["image"].'" width="175px">';

        }


      return  $this->render("table", $data);
    }
    public function clients_form($id = 0)
    {
        $data = array();
        $data['db_table_name'] = "clients";
        $data['record_name']   = "clients";
        $data['records_name'] = $data['menu_active'] = "clients";
        $data['table_link'] = site_url("Cms/clients/clients");
        $data['submit_link'] = site_url("Cms/clients/clients_save");
        $data['id'] = $id;

        $data['records'] = array();
        $data['form_title'] = $data['record_name'] . " Add";
        if ($id != 0) {
            $data['form_title'] = $data['record_name'] . " Edit";
        }

        $tableName = 'clients';
        $data['record'] = $this->SuperModel->selectSingleData_m($tableName, $id);

        return $this->render("clients_form", $data);
    }
    public function clients_save()
    {
        $tableName = 'clients';
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

            $clients = $this->SuperModel->selectSingleData_m($tableName, $id);

            $uploadImage = $clients['image'];
        }


        $dbData = array(
          "name" => $data['name'],



          "image" => $uploadImage
        );


        $id = $this->SuperModel->saveData_m($tableName, $dbData, $id);


        if (!$id > 0) {
            echo "<script> alert('An error has been occured'); </script>";
        } else {
            $this->swalSuccess(site_url("Cms/clients/clients"));
        }
        die();
        return  redirect()->to('Cms/clients/clients');
    }




}
