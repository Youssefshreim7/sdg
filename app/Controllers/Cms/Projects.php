<?php

namespace App\Controllers\Cms;

use App\Controllers\Cms\Super;
use App\Models\Cms\ProjectsModel;
use App\Models\Cms\SuperModel;


class Projects extends Super
{
  public function __construct()
  {

      $this->ProjectsModel = new ProjectsModel();
      $this->SuperModel = new SuperModel();


  }
  public function projects()
    {


      if (empty(session()->get('username'))) {
      return redirect()->to(base_url('Cms/Login/index'))->send(); // Ensure correct URL and use base_ur
     }


        $data = array();
        $data['db_table_name'] = "projects";
        $data['record_name']   = "projects";
        $data['records_name'] = $data['menu_active'] = "projects";
        $data['form_link'] = site_url("cms/projects/projects_form/");
        $data['table_link'] = site_url("Cms/projects/projects");
        $data['table_icon'] = '<i class="kt-menu__link-icon  flaticon-confetti"></i>';

        $data['th'] = ["ID", "Name", "image", "date_created", "status", "action"];
        $data['columns'] = ["id", "name", "image", "date_created", "is_blocked", "is_active"];
        $data['records'] = $this->ProjectsModel->selectprojects_model_m();
      //  echo "<pre>";print_r($data['records'] );die();

      foreach ($data['records'] as $key => $arr) {
          $data['records'][$key]["date_created"]   = datetime_well_format($arr['date_created']);

          $data['records'][$key]["is_active"]   = '
          <button data-toggle="tooltip" data-title="projects" data-placement="top" class="btn btn-icon waves-effect waves-light btn-info  " value="'.$arr['id'].'" onclick=\'window.location.href = "projects_gallery/'.$arr['id'].'/'.base64_encode($arr['name']).'"\'><i class=" ri-image-add-fill ri-2x"></i> </button>

          <button data-toggle="tooltip" data-title="Edit" data-placement="top" class="btn btn-warning  btn-icon waves-effect waves-light   mx-1   " value="'.$arr['id'].'" onclick=\'window.location.href = "'.$data['form_link'].'/'.$arr['id'].'"\'><i class="ri-edit-box-line ri-2x"></i> </button><button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-danger btn-icon waves-effect waves-light   " value="'.$arr['id'].'" ><i class="ri-delete-bin-5-line ri-2x"></i></button>';

          $data['records'][$key]["is_blocked"]   = ($arr['is_blocked'] == 0 ? '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top"  type="button" class="btn btn-outline-success btn-status" value='.$arr['id'].'> Active </button>' : '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top" 	 type="button" class="btn btn-outline-danger  btn-status" value='.$arr['id'].' style=""> Inactive </button>');




          $data['records'][$key]["image"]   = '<img src="'.base_url() . '/uploads/'.$data['records'][$key]["image"].'" width="125px">';

      }


      return  $this->render("table", $data);
    }
    public function projects_form($id = 0)
    {
        $data = array();
        $data['db_table_name'] = "projects";
        $data['record_name']   = "projects";
        $data['records_name'] = $data['menu_active'] = "projects";
        $data['table_link'] = site_url("Cms/projects/projects");
        $data['submit_link'] = site_url("Cms/projects/projects_save");
        $data['id'] = $id;

        $data['records'] = array();
        $data['form_title'] = $data['record_name'] . " Add";
        if ($id != 0) {
            $data['form_title'] = $data['record_name'] . " Edit";
        }

        $tableName = 'projects';
        $data['record'] = $this->SuperModel->selectSingleData_m($tableName, $id);


        return $this->render("projects_form", $data);
    }
    public function projects_save()
    {
        $tableName = 'projects';
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

            $projects = $this->SuperModel->selectSingleData_m($tableName, $id);

            $uploadImage = $projects['image'];
        }


        $dbData = array(
            "name" => $data['name'],
     
            "description" => $data['description'],
          "image" => $uploadImage
        );


        $id = $this->SuperModel->saveData_m($tableName, $dbData, $id);


        if (!$id > 0) {
            echo "<script> alert('An error has been occured'); </script>";
        } else {
            $this->swalSuccess(site_url("Cms/projects/projects"));
        }
        die();
        return  redirect()->to('Cms/projects/projects');
    }


    public function projects_gallery($id = 0, $title = "")
    {
        $data = array();
        $title = base64_decode($title);
        $data['form_title'] = "projects: " . $title . " / Image Gallery";
        $data['records_name'] = "projects Gallery";
        $data['menu_active'] = "projects";
        $data['table_link'] = "";
        $data['db_table_name'] = "projects_gallery";
        $data['id'] = $id;

        return $this->render("projects_gallery", $data);
    }
    public function projects_gallery_save($id)
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
       $this->ProjectsModel->projects_gallery_save_m($uploadImage, $id);
    }

    public function get_projects_gallery($id)
    {
        $return = "";
        $rows =  $this->ProjectsModel->get_projects_gallery_m($id);
        foreach ($rows as $key => $value) {
            $file = base_url() . '/uploads/' . $value['photo'];
             $return .= ' <tr> <td> <a href="' . $file . '" target="_blank"> <img src="' . $file . '" width="150" height="150"> </a> </td><td>' . datetime_well_format($value['date_created']) . '</td>  <td> <button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-icon waves-effect waves-light btn-danger m-b-5 btn-sm " value="'. $value['id'] .'" ><i align="" class="ri-delete-bin-5-line ri-2x"></i> </button> </td></tr>';
        }
        $return .= "";

        echo $return;
    }


}
