<?php

namespace App\Controllers\Cms;

use App\Controllers\Cms\Super;
use App\Models\Cms\CsrModel;
use App\Models\Cms\SuperModel;


class Csr extends Super
{
  public function __construct()
  {

      $this->CsrModel = new CsrModel();
      $this->SuperModel = new SuperModel();


  }
  public function csr()
    {


      if (empty(session()->get('username'))) {
      return redirect()->to(base_url('Cms/Login/index'))->send(); // Ensure correct URL and use base_ur
     }


        $data = array();
        $data['db_table_name'] = "csr";
        $data['record_name']   = "csr";
        $data['records_name'] = $data['menu_active'] = "csr";
        $data['form_link'] = site_url("cms/csr/csr_form/");
        $data['table_link'] = site_url("Cms/csr/csr");
        $data['table_icon'] = '<i class="kt-menu__link-icon  flaticon-confetti"></i>';

        $data['th'] = ["ID", "title", "image", "date_created", "status", "action"];
        $data['columns'] = ["id", "title", "image", "date_created", "is_blocked", "is_active"];
        $data['records'] = $this->CsrModel->selectcsr_model_m();
      //  echo "<pre>";print_r($data['records'] );die();

      foreach ($data['records'] as $key => $arr) {
          $data['records'][$key]["date_created"]   = datetime_well_format($arr['date_created']);

            $data['records'][$key]["is_active"]   = '


            <button data-toggle="tooltip" data-title="Edit" data-placement="top" class="btn btn-warning  btn-icon waves-effect waves-light   mx-1   " value="'.$arr['id'].'" onclick=\'window.location.href = "'.$data['form_link'].'/'.$arr['id'].'"\'><i class="ri-edit-box-line ri-2x"></i> </button><button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-danger btn-icon waves-effect waves-light   " value="'.$arr['id'].'" ><i class="ri-delete-bin-5-line ri-2x"></i></button>';

          $data['records'][$key]["is_blocked"]   = ($arr['is_blocked'] == 0 ? '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top"  type="button" class="btn btn-outline-success btn-status" value='.$arr['id'].'> Active </button>' : '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top" 	 type="button" class="btn btn-outline-danger  btn-status" value='.$arr['id'].' style=""> Inactive </button>');






      }


      return  $this->render("table", $data);
    }
    public function csr_form($id = 0)
    {
        $data = array();
        $data['db_table_name'] = "csr";
        $data['record_name']   = "csr";
        $data['records_name'] = $data['menu_active'] = "csr";
        $data['table_link'] = site_url("Cms/csr/csr");
        $data['submit_link'] = site_url("Cms/csr/csr_save");
        $data['id'] = $id;

        $data['records'] = array();
        $data['form_title'] = $data['record_name'] . " Add";
        if ($id != 0) {
            $data['form_title'] = $data['record_name'] . " Edit";
        }

        $tableName = 'csr';
        $data['record'] = $this->SuperModel->selectSingleData_m($tableName, $id);


        return $this->render("csr_form", $data);
    }
    public function csr_save()
    {
        $tableName = 'csr';
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

        }

        $dbData = array(
          "title" => $data['title'],
          "description" => $data['description'],
          "image" => $uploadImage
        );


        $id = $this->SuperModel->saveData_m($tableName, $dbData, $id);


        if (!$id > 0) {
            echo "<script> alert('An error has been occured'); </script>";
        } else {
            $this->swalSuccess(site_url("Cms/csr/csr"));
        }
        die();
        return  redirect()->to('Cms/csr/csr');
    }


    public function csr_gallery($id = 0, $title = "")
    {
        $data = array();
        $title = base64_decode($title);
        $data['form_title'] = "csr: " . $title . " / Image Gallery";
        $data['records_name'] = "csr Gallery";
        $data['menu_active'] = "csr";
        $data['table_link'] = "";
        $data['db_table_name'] = "csr_gallery";
        $data['id'] = $id;

        return $this->render("csr_gallery", $data);
    }
    public function csr_gallery_save($id)
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
       $this->csrModel->csr_gallery_save_m($uploadImage, $id);
    }

    public function get_csr_gallery($id)
    {
        $return = "";
        $rows =  $this->CsrModel->get_csr_gallery_m($id);
        foreach ($rows as $key => $value) {
            $file = base_url() . '/uploads/' . $value['photo'];
             $return .= ' <tr> <td> <a href="' . $file . '" target="_blank"> <img src="' . $file . '" width="150" height="150"> </a> </td><td>' . datetime_well_format($value['date_created']) . '</td>  <td> <button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-icon waves-effect waves-light btn-danger m-b-5 btn-sm " value="'. $value['id'] .'" ><i align="" class="ri-delete-bin-5-line ri-2x"></i> </button> </td></tr>';
        }
        $return .= "";

        echo $return;
    }






}
