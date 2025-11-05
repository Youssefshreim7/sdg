<?php

namespace App\Controllers\Cms;

use App\Controllers\Cms\Super;
use App\Models\Cms\TestimonialModel;
use App\Models\Cms\SuperModel;


class Testimonial extends Super
{
  public function __construct()
  {

      $this->TestimonialModel = new TestimonialModel();
      $this->SuperModel = new SuperModel();


  }
  public function testimonial()
    {


      if (empty(session()->get('username'))) {
      return redirect()->to(base_url('Cms/Login/index'))->send(); // Ensure correct URL and use base_ur
     }


        $data = array();
        $data['db_table_name'] = "testimonial";
        $data['record_name']   = "testimonial";
        $data['records_name'] = $data['menu_active'] = "testimonial";
        $data['form_link'] = site_url("cms/testimonial/testimonial_form/");
        $data['table_link'] = site_url("Cms/testimonial/testimonial");
        $data['table_icon'] = '<i class="kt-menu__link-icon  flaticon-confetti"></i>';

        $data['th'] = ["ID", "Name","date_created", "status", "action"];
        $data['columns'] = ["id", "name", "date_created", "is_blocked", "is_active"];
        $data['records'] = $this->TestimonialModel->selecttestimonial_model_m();
      //  echo "<pre>";print_r($data['records'] );die();

        foreach ($data['records'] as $key => $arr) {
            $data['records'][$key]["date_created"]   = datetime_well_format($arr['date_created']);

              $data['records'][$key]["is_active"]   = '

              <button data-toggle="tooltip" data-title="Edit" data-placement="top" class="btn btn-warning  btn-icon waves-effect waves-light   mx-1   " value="'.$arr['id'].'" onclick=\'window.location.href = "'.$data['form_link'].'/'.$arr['id'].'"\'><i class="ri-edit-box-line ri-2x"></i> </button><button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-danger btn-icon waves-effect waves-light   " value="'.$arr['id'].'" ><i class="ri-delete-bin-5-line ri-2x"></i></button>';

            $data['records'][$key]["is_blocked"]   = ($arr['is_blocked'] == 0 ? '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top"  type="button" class="btn btn-outline-success btn-status" value='.$arr['id'].'> Active </button>' : '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top" 	 type="button" class="btn btn-outline-danger  btn-status" value='.$arr['id'].' style=""> Inactive </button>');



        }


      return  $this->render("table", $data);
    }
    public function testimonial_form($id = 0)
    {
        $data = array();
        $data['db_table_name'] = "testimonial";
        $data['record_name']   = "testimonial";
        $data['records_name'] = $data['menu_active'] = "testimonial";
        $data['table_link'] = site_url("Cms/testimonial/testimonial");
        $data['submit_link'] = site_url("Cms/testimonial/testimonial_save");
        $data['id'] = $id;

        $data['records'] = array();
        $data['form_title'] = $data['record_name'] . " Add";
        if ($id != 0) {
            $data['form_title'] = $data['record_name'] . " Edit";
        }

        $tableName = 'testimonial';
        $data['record'] = $this->SuperModel->selectSingleData_m($tableName, $id);


        return $this->render("testimonial_form", $data);
    }
    public function testimonial_save()
    {
        $tableName = 'testimonial';
        $data = $this->request->getVar();

        $id = $data['id'];
        unset($data['id']);



        $dbData = array(
            "name" => $data['name'],
            "position" => $data['position'],
            "description" => $data['description']
          //"image" => $uploadImage
        );


        $id = $this->SuperModel->saveData_m($tableName, $dbData, $id);


        if (!$id > 0) {
            echo "<script> alert('An error has been occured'); </script>";
        } else {
            $this->swalSuccess(site_url("Cms/testimonial/testimonial"));
        }
        die();
        return  redirect()->to('Cms/testimonial/testimonial');
    }


    public function testimonial_gallery($id = 0, $title = "")
    {
        $data = array();
        $data['form_title'] = "testimonial: " . $title . " / Image Gallery";
        $data['records_name'] = "testimonial Gallery";
        $data['menu_active'] = "testimonial";
        $data['table_link'] = "";
        $data['db_table_name'] = "testimonial_gallery";
        $data['id'] = $id;

        return $this->render("testimonial_gallery", $data);
    }
    public function testimonial_gallery_save($id)
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
       $this->testimonialModel->testimonial_gallery_save_m($uploadImage, $id);
    }

    public function get_testimonial_gallery($id)
    {
        $return = "";
        $rows =  $this->testimonialModel->get_testimonial_gallery_m($id);
        foreach ($rows as $key => $value) {
            $file = base_url() . '/uploads/' . $value['photo'];
             $return .= ' <tr> <td> <a href="' . $file . '" target="_blank"> <img src="' . $file . '" width="150" height="150"> </a> </td><td>' . datetime_well_format($value['date_created']) . '</td>  <td> <button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-icon waves-effect waves-light btn-danger m-b-5 btn-sm " value="'. $value['id'] .'" ><i align="" class="ri-delete-bin-5-line ri-2x"></i> </button> </td></tr>';
        }
        $return .= "";

        echo $return;
    }






}
