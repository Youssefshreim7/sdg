<?php

namespace App\Controllers\Cms;

use App\Controllers\Cms\Super;
use App\Models\Cms\NewsModel;
use App\Models\Cms\SuperModel;


class News extends Super
{
  public function __construct()
  {

      $this->NewsModel = new NewsModel();
      $this->SuperModel = new SuperModel();


  }
  public function news()
    {


      if (empty(session()->get('username'))) {
      return redirect()->to(base_url('Cms/Login/index'))->send(); // Ensure correct URL and use base_ur
     }


        $data = array();
        $data['db_table_name'] = "news";
        $data['record_name']   = "news";
        $data['records_name'] = $data['menu_active'] = "news";
        $data['form_link'] = site_url("cms/news/news_form/");
        $data['table_link'] = site_url("Cms/news/news");
        $data['table_icon'] = '<i class="kt-menu__link-icon  flaticon-confetti"></i>';

        $data['th'] = ["ID", "Name", "image", "date_created", "status", "action"];
        $data['columns'] = ["id", "name", "image", "date_created", "is_blocked", "is_active"];
        $data['records'] = $this->NewsModel->selectnews_model_m();
      //  echo "<pre>";print_r($data['records'] );die();

      foreach ($data['records'] as $key => $arr) {
          $data['records'][$key]["date_created"]   = datetime_well_format($arr['date_created']);

            $data['records'][$key]["is_active"]   = '
            <button data-toggle="tooltip" data-title="news" data-placement="top" class="btn btn-icon waves-effect waves-light btn-info  " value="'.$arr['id'].'" onclick=\'window.location.href = "news_gallery/'.$arr['id'].'/'.base64_encode($arr['name']).'"\'><i class=" ri-image-add-fill ri-2x"></i> </button>

            <button data-toggle="tooltip" data-title="Edit" data-placement="top" class="btn btn-warning  btn-icon waves-effect waves-light   mx-1   " value="'.$arr['id'].'" onclick=\'window.location.href = "'.$data['form_link'].'/'.$arr['id'].'"\'><i class="ri-edit-box-line ri-2x"></i> </button><button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-danger btn-icon waves-effect waves-light   " value="'.$arr['id'].'" ><i class="ri-delete-bin-5-line ri-2x"></i></button>';

          $data['records'][$key]["is_blocked"]   = ($arr['is_blocked'] == 0 ? '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top"  type="button" class="btn btn-outline-success btn-status" value='.$arr['id'].'> Active </button>' : '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top" 	 type="button" class="btn btn-outline-danger  btn-status" value='.$arr['id'].' style=""> Inactive </button>');




          $data['records'][$key]["image"]   = '<img src="'.base_url() . '/uploads/'.$data['records'][$key]["image"].'" width="125px">';

      }


      return  $this->render("table", $data);
    }
    public function news_form($id = 0)
    {
        $data = array();
        $data['db_table_name'] = "news";
        $data['record_name']   = "news";
        $data['records_name'] = $data['menu_active'] = "news";
        $data['table_link'] = site_url("Cms/news/news");
        $data['submit_link'] = site_url("Cms/news/news_save");
        $data['id'] = $id;

        $data['records'] = array();
        $data['form_title'] = $data['record_name'] . " Add";
        if ($id != 0) {
            $data['form_title'] = $data['record_name'] . " Edit";
        }

        $tableName = 'news';
        $data['record'] = $this->SuperModel->selectSingleData_m($tableName, $id);


        return $this->render("news_form", $data);
    }
    public function news_save()
    {
        $tableName = 'news';
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

            $news = $this->SuperModel->selectSingleData_m($tableName, $id);

            $uploadImage = $news['image'];
        }


        $dbData = array(
            "name" => $data['name'],
 
            "date" => $data['date'],
            "description" => $data['description'],
          "image" => $uploadImage
        );


        $id = $this->SuperModel->saveData_m($tableName, $dbData, $id);


        if (!$id > 0) {
            echo "<script> alert('An error has been occured'); </script>";
        } else {
            $this->swalSuccess(site_url("Cms/news/news"));
        }
        die();
        return  redirect()->to('Cms/news/news');
    }


    public function news_gallery($id = 0, $title = "")
    {
        $data = array();
        $title = base64_decode($title);
        $data['form_title'] = "news: " . $title . " / Image Gallery";
        $data['records_name'] = "news Gallery";
        $data['menu_active'] = "news";
        $data['table_link'] = "";
        $data['db_table_name'] = "news_gallery";
        $data['id'] = $id;

        return $this->render("news_gallery", $data);
    }
    public function news_gallery_save($id)
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
       $this->NewsModel->news_gallery_save_m($uploadImage, $id);
    }

    public function get_news_gallery($id)
    {
        $return = "";
        $rows =  $this->NewsModel->get_news_gallery_m($id);
        foreach ($rows as $key => $value) {
            $file = base_url() . '/uploads/' . $value['photo'];
             $return .= ' <tr> <td> <a href="' . $file . '" target="_blank"> <img src="' . $file . '" width="150" height="150"> </a> </td><td>' . datetime_well_format($value['date_created']) . '</td>  <td> <button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-icon waves-effect waves-light btn-danger m-b-5 btn-sm " value="'. $value['id'] .'" ><i align="" class="ri-delete-bin-5-line ri-2x"></i> </button> </td></tr>';
        }
        $return .= "";

        echo $return;
    }






}
