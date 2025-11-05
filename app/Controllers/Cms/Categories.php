<?php

namespace App\Controllers\Cms;

use App\Controllers\Cms\Super;
use App\Models\Cms\CategoriesModel;
use App\Models\Cms\SuperModel;


class Categories extends Super
{
  public function __construct()
  {

    $this->CategoriesModel = new CategoriesModel();
    $this->SuperModel = new SuperModel();
  }
  public function categories()
  {

    if (empty(session()->get('username'))) {
      return redirect()->to(base_url('Cms/Login/index'))->send(); // Ensure correct URL and use base_ur
    }

    $data = array();
    $data['db_table_name'] = "categories";
    $data['record_name']   = "categories";
    $data['records_name'] = $data['menu_active'] = "categories";
    $data['form_link'] = site_url("cms/categories/categories_form/");
    $data['table_link'] = site_url("Cms/categories/categories");
    $data['table_icon'] = '<i class="kt-menu__link-icon  flaticon-confetti"></i>';

    $data['th'] = ["ID", "Name", "image", "date_created", "status", "action"];
    $data['columns'] = ["id", "name", "image", "date_created", "is_blocked", "is_active"];
    $data['records'] = $this->CategoriesModel->selectcategories_model_m();
    //  echo "<pre>";print_r($data['records'] );die();

    foreach ($data['records'] as $key => $arr) {
      $data['records'][$key]["date_created"]   = datetime_well_format($arr['date_created']);

      $data['records'][$key]["is_active"]   = '<button data-toggle="tooltip" data-title="Edit" data-placement="top" class="btn btn-warning  btn-icon waves-effect waves-light   mx-1   " value="' . $arr['id'] . '" onclick=\'window.location.href = "' . $data['form_link'] . '/' . $arr['id'] . '"\'><i class="ri-edit-box-line ri-2x"></i> </button><button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-danger btn-icon waves-effect waves-light   " value="' . $arr['id'] . '" ><i class="ri-delete-bin-5-line ri-2x"></i></button>';

      $data['records'][$key]["is_blocked"]   = ($arr['is_blocked'] == 0 ? '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top"  type="button" class="btn btn-outline-success btn-status" value=' . $arr['id'] . '> Active </button>' : '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top" 	 type="button" class="btn btn-outline-danger  btn-status" value=' . $arr['id'] . ' style=""> Inactive </button>');
      $data['records'][$key]["image"]   = '<img src="' . base_url() . '/uploads/' . $data['records'][$key]["image"] . '" width="175px">';
    }


    return  $this->render("table", $data);
  }
  public function categories_form($id = 0)
  {
    $data = array();
    $data['db_table_name'] = "categories";
    $data['record_name']   = "categories";
    $data['records_name'] = $data['menu_active'] = "categories";
    $data['table_link'] = site_url("Cms/categories/categories");
    $data['submit_link'] = site_url("Cms/categories/categories_save");
    $data['id'] = $id;

    $data['records'] = array();
    $data['form_title'] = $data['record_name'] . " Add";
    if ($id != 0) {
      $data['form_title'] = $data['record_name'] . " Edit";
    }

    $tableName = 'categories';
    $data['record'] = $this->SuperModel->selectSingleData_m($tableName, $id);

    return $this->render("categories_form", $data);
  }
  public function categories_save()
  {
    $tableName = 'categories';
    $data = $this->request->getVar();

    $id = $data['id'];
    unset($data['id']);
    $uploadImage =  '';
    $photo = $this->request->getFile('image');
    if (!empty($_FILES['image']['name'])) {
      if (!empty($photo)) {
        helper(['image']);
        $path = './uploads';
        if ($photo->isValid() && !$photo->hasMoved()) {
          $photo->move($path, $photo->getRandomName());
          $fileName = $photo->getName();
          $uploadImage = $fileName;
        }
      } else {
        $uploadImage = 'default.png';
      }
    } else {

      $categories = $this->SuperModel->selectSingleData_m($tableName, $id);

      $uploadImage = $categories['image'];
    }




    $dbData = array(
      "name" => $data['name'],
      "image" => $uploadImage
    );


    $id = $this->SuperModel->saveData_m($tableName, $dbData, $id);


    if (!$id > 0) {
      echo "<script> alert('An error has been occured'); </script>";
    } else {
      $this->swalSuccess(site_url("Cms/categories/categories"));
    }
    die();
    return  redirect()->to('Cms/categories/categories');
  }


  public function sub_categories()
  {

    if (empty(session()->get('username'))) {
      return redirect()->to(base_url('Cms/Login/index'))->send(); // Ensure correct URL and use base_ur
    }

    $data = array();
    $data['db_table_name'] = "sub_categories";
    $data['record_name']   = "sub_categories";
    $data['records_name'] = $data['menu_active'] = "sub_categories";
    $data['form_link'] = site_url("cms/categories/sub_categories_form/");
    $data['table_link'] = site_url("Cms/categories/sub_categories");
    $data['table_icon'] = '<i class="kt-menu__link-icon  flaticon-confetti"></i>';

    $data['th'] = ["ID", "Name", "Photo","category name", "date_created", "status", "action"];
    $data['columns'] = ["id", "name","image", "catname", "date_created", "is_blocked", "is_active"];
    $data['records'] = $this->CategoriesModel->selectsub_categories_model_m();
    //  echo "<pre>";print_r($data['records'] );die();

    foreach ($data['records'] as $key => $arr) {
      $data['records'][$key]["date_created"]   = datetime_well_format($arr['date_created']);

      $data['records'][$key]["is_active"]   = '<button data-toggle="tooltip" data-title="Edit" data-placement="top" class="btn btn-warning  btn-icon waves-effect waves-light   mx-1   " value="' . $arr['id'] . '" onclick=\'window.location.href = "' . $data['form_link'] . '/' . $arr['id'] . '"\'><i class="ri-edit-box-line ri-2x"></i> </button><button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-danger btn-icon waves-effect waves-light   " value="' . $arr['id'] . '" ><i class="ri-delete-bin-5-line ri-2x"></i></button>';

      $data['records'][$key]["is_blocked"]   = ($arr['is_blocked'] == 0 ? '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top"  type="button" class="btn btn-outline-success btn-status" value=' . $arr['id'] . '> Active </button>' : '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top" 	 type="button" class="btn btn-outline-danger  btn-status" value=' . $arr['id'] . ' style=""> Inactive </button>');
       $data['records'][$key]["image"]   = '<img src="' . base_url() . '/uploads/' . $data['records'][$key]["image"] . '" width="175px">';
    }


    return  $this->render("table", $data);
  }
  public function sub_categories_form($id = 0)
  {
    $data = array();
    $data['db_table_name'] = "sub_categories";
    $data['record_name']   = "sub_categories";
    $data['records_name'] = $data['menu_active'] = "sub_categories";
    $data['table_link'] = site_url("Cms/categories/sub_categories");
    $data['submit_link'] = site_url("Cms/categories/sub_categories_save");
    $data['id'] = $id;

    $data['records'] = array();
    $data['form_title'] = $data['record_name'] . " Add";
    if ($id != 0) {
      $data['form_title'] = $data['record_name'] . " Edit";
    }

    $tableName = 'sub_categories';
    $data['record'] = $this->SuperModel->selectSingleData_m($tableName, $id);
    $data['categories'] = $this->CategoriesModel->selectcategories_model_m();

    return $this->render("sub_categories_form", $data);
  }
  public function sub_categories_save()
  {
    $tableName = 'sub_categories';
    $data = $this->request->getVar();

    $id = $data['id'];
    unset($data['id']);
        $uploadImage =  '';
    $photo = $this->request->getFile('image');
    if (!empty($_FILES['image']['name'])) {
      if (!empty($photo)) {
        helper(['image']);
        $path = './uploads';
        if ($photo->isValid() && !$photo->hasMoved()) {
          $photo->move($path, $photo->getRandomName());
          $fileName = $photo->getName();
          $uploadImage = $fileName;
        }
      } else {
        $uploadImage = 'default.png';
      }
    } else {

      $sub_categories = $this->SuperModel->selectSingleData_m($tableName, $id);

      $uploadImage = $sub_categories['image'];
    }




    $dbData = array(
      "name" => $data['name'],
      "cat_id" => $data['cat_id'],
      "image" => $uploadImage
    );


    $id = $this->SuperModel->saveData_m($tableName, $dbData, $id);


    if (!$id > 0) {
      echo "<script> alert('An error has been occured'); </script>";
    } else {
      $this->swalSuccess(site_url("Cms/categories/sub_categories"));
    }
    die();
    return  redirect()->to('Cms/categories/sub_categories');
  }
}
