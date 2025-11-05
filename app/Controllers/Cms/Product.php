<?php

namespace App\Controllers\Cms;

use App\Controllers\Cms\Super;
use App\Models\Cms\ProductModel;
use App\Models\Cms\SuperModel;


class Product extends Super
{
  public function __construct()
  {

      $this->ProductModel = new ProductModel();
      $this->SuperModel = new SuperModel();


  }
  public function products()
    {


      if (empty(session()->get('username'))) {
      return redirect()->to(base_url('Cms/Login/index'))->send(); // Ensure correct URL and use base_ur
     }


        $data = array();
        $data['db_table_name'] = "products";
        $data['record_name']   = "product";
        $data['records_name'] = $data['menu_active'] = "products";
        $data['form_link'] = site_url("cms/product/product_form/");
        $data['table_link'] = site_url("Cms/product/products");
        $data['table_icon'] = '<i class="kt-menu__link-icon  flaticon-confetti"></i>';

        $data['th'] = ["ID", "Name","Category", "image","FEATURED", "date_created", "status", "action"];
        $data['columns'] = ["id", "name","catname", "image","is_featured", "date_created", "is_blocked", "is_active"];
        $data['records'] = $this->ProductModel->selectproducts_model_m();
      //  echo "<pre>";print_r($data['records'] );die();

        foreach ($data['records'] as $key => $arr) {
            $data['records'][$key]["date_created"]   = datetime_well_format($arr['date_created']);

              $data['records'][$key]["is_active"]   = '
              <button data-toggle="tooltip" data-title="products" data-placement="top" class="btn btn-icon waves-effect waves-light btn-info  " value="'.$arr['id'].'" onclick=\'window.location.href = "product_gallery/'.$arr['id'].'/'.base64_encode($arr['name']).'"\'><i class=" ri-image-add-fill ri-2x"></i> </button>

              <button data-toggle="tooltip" data-title="Edit" data-placement="top" class="btn btn-warning  btn-icon waves-effect waves-light   mx-1   " value="'.$arr['id'].'" onclick=\'window.location.href = "'.$data['form_link'].'/'.$arr['id'].'"\'><i class="ri-edit-box-line ri-2x"></i> </button><button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-danger btn-icon waves-effect waves-light   " value="'.$arr['id'].'" ><i class="ri-delete-bin-5-line ri-2x"></i></button>';

            $data['records'][$key]["is_blocked"]   = ($arr['is_blocked'] == 0 ? '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top"  type="button" class="btn btn-outline-success btn-status" value='.$arr['id'].'> Active </button>' : '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top" 	 type="button" class="btn btn-outline-danger  btn-status" value='.$arr['id'].' style=""> Inactive </button>');

            $data['records'][$key]["is_featured"]   = ($arr['is_featured'] == 1 ? '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top"  type="button" class="btn  btn-outline-primary btn-hover-scale me-5   btn-new" value='.$arr['id'].'> <i class=" ri-toggle-fill ri-2x"></i> </button>' : '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top" 	 type="button" class="btn btn-outline-danger btn-new" value='.$arr['id'].' style=""> <i class=" ri-toggle-line ri-2x"></i>  </button>');


            $data['records'][$key]["image"]   = '<img src="'.base_url() . '/uploads/'.$data['records'][$key]["image"].'" width="125px">';

        }


      return  $this->render("table", $data);
    }
    public function product_form($id = 0)
    {
        $data = array();
        $data['db_table_name'] = "products";
        $data['record_name']   = "product";
        $data['records_name'] = $data['menu_active'] = "products";
        $data['table_link'] = site_url("Cms/product/products");
        $data['submit_link'] = site_url("Cms/product/product_save");
        $data['id'] = $id;

        $data['records'] = array();
        $data['form_title'] = $data['record_name'] . " Add";
        if ($id != 0) {
            $data['form_title'] = $data['record_name'] . " Edit";
        }

        $tableName = 'products';
        $data['record'] = $this->SuperModel->selectSingleData_m($tableName, $id);
        $data['categories'] = $this->ProductModel->select_all_categories_m();
        $data['sub_cat'] = $this->ProductModel->selectsub_categories_model_m();
         


        return $this->render("product_form", $data);
    }
    public function product_save()
    {
        $tableName = 'products';
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

            $product = $this->SuperModel->selectSingleData_m($tableName, $id);

            $uploadImage = $product['image'];
        }


        $dbData = array(
            "name" => $data['name'],
            "sku" => $data['sku'],
             "description" => $data['description'],
            "categories_id" => $data['categories_id'],
            "subcat_id" => $data['subcat_id'],
            
             "image" => $uploadImage
        );


        $id = $this->SuperModel->saveData_m($tableName, $dbData, $id);


        if (!$id > 0) {
            echo "<script> alert('An error has been occured'); </script>";
        } else {
            $this->swalSuccess(site_url("Cms/product/products"));
        }
        die();
        return  redirect()->to('Cms/product/products');
    }


    public function product_gallery($id = 0, $title = "")
    {
        $data = array();
        $data['form_title'] = "product: " . base64_decode($title) . " / Image Gallery";
        $data['record_name']   = "productg";
        $data['records_name'] = "product Gallery";
        $data['menu_active'] = "products";
        $data['table_link'] = "";
        $data['db_table_name'] = "products_gallery";
        $data['id'] = $id;

        return $this->render("product_gallery", $data);
    }
    public function products_gallery_save($id)
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
       $this->ProductModel->product_gallery_save_m($uploadImage, $id);
    }

    public function get_products_gallery($id)
    {
        $return = "";
        $rows =  $this->ProductModel->get_product_gallery_m($id);
        foreach ($rows as $key => $value) {
            $file = base_url() . '/uploads/' . $value['photo'];
             $return .= ' <tr> <td> <a href="' . $file . '" target="_blank"> <img src="' . $file . '" width="150" height="150"> </a> </td><td>' . datetime_well_format($value['date_created']) . '</td>  <td> <button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-icon waves-effect waves-light btn-danger m-b-5 btn-sm " value="'. $value['id'] .'" ><i align="" class="ri-delete-bin-5-line ri-2x"></i> </button> </td></tr>';
        }
        $return .= "";

        echo $return;
    }



    public function brands()
      {

      if (empty(session()->get('username'))) {
      return redirect()->to(base_url('Cms/Login/index'))->send(); // Ensure correct URL and use base_ur
    }

          $data = array();
          $data['db_table_name'] = "brands";
          $data['record_name']   = "brands";
          $data['records_name'] = $data['menu_active'] = "brands";
          $data['form_link'] = site_url("cms/product/brands_form/");
          $data['table_link'] = site_url("Cms/product/brands");
          $data['table_icon'] = '<i class="kt-menu__link-icon  flaticon-confetti"></i>';

          $data['th'] = ["ID", "Name","Image", "date_created", "status", "action"];
          $data['columns'] = ["id", "name","image", "date_created", "is_blocked", "is_active"];
          $data['records'] = $this->ProductModel->selectbrands_model_m();
        //  echo "<pre>";print_r($data['records'] );die();

          foreach ($data['records'] as $key => $arr) {
              $data['records'][$key]["date_created"]   = datetime_well_format($arr['date_created']);

                $data['records'][$key]["is_active"]   = '<button data-toggle="tooltip" data-title="Edit" data-placement="top" class="btn btn-warning  btn-icon waves-effect waves-light   mx-1   " value="'.$arr['id'].'" onclick=\'window.location.href = "'.$data['form_link'].'/'.$arr['id'].'"\'><i class="ri-edit-box-line ri-2x"></i> </button><button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-danger btn-icon waves-effect waves-light   " value="'.$arr['id'].'" ><i class="ri-delete-bin-5-line ri-2x"></i></button>';

              $data['records'][$key]["is_blocked"]   = ($arr['is_blocked'] == 0 ? '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top"  type="button" class="btn btn-outline-success btn-status" value='.$arr['id'].'> Active </button>' : '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top" 	 type="button" class="btn btn-outline-danger  btn-status" value='.$arr['id'].' style=""> Inactive </button>');

              $data['records'][$key]["image"]   = '<img src="'.base_url() . '/uploads/'.$data['records'][$key]["image"].'" width="175px">';


          }


        return  $this->render("table", $data);
      }


      public function brands_form($id = 0)
      {
          $data = array();
          $data['db_table_name'] = "brands";
          $data['record_name']   = "brands";
          $data['records_name'] = $data['menu_active'] = "brands";
          $data['table_link'] = site_url("Cms/product/brands");
          $data['submit_link'] = site_url("Cms/product/brands_save");
          $data['id'] = $id;

          $data['records'] = array();
          $data['form_title'] = $data['record_name'] . " Add";
          if ($id != 0) {
              $data['form_title'] = $data['record_name'] . " Edit";
          }

          $tableName = 'brands';
          $data['record'] = $this->SuperModel->selectSingleData_m($tableName, $id);

          return $this->render("brands_form", $data);
      }

      public function brands_save()
      {
          $tableName = 'brands';
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

              $brands = $this->SuperModel->selectSingleData_m($tableName, $id);

              $uploadImage = $brands['image'];
          }





          $dbData = array(
              "name" => $data['name'],
              "image" => $uploadImage
          );


          $id = $this->SuperModel->saveData_m($tableName, $dbData, $id);


          if (!$id > 0) {
              echo "<script> alert('An error has been occured'); </script>";
          } else {
              $this->swalSuccess(site_url("Cms/product/brands"));
          }
          die();
          return  redirect()->to('Cms/product/brands');
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
            $data['form_link'] = site_url("cms/product/labels_form/");
            $data['table_link'] = site_url("Cms/product/labels");
            $data['table_icon'] = '<i class="kt-menu__link-icon  flaticon-confetti"></i>';

            $data['th'] = ["ID", "Name", "date_created", "status", "action"];
            $data['columns'] = ["id", "name", "date_created", "is_blocked", "is_active"];
            $data['records'] = $this->ProductModel->selectlabels_model_m();
          //  echo "<pre>";print_r($data['records'] );die();

            foreach ($data['records'] as $key => $arr) {
                $data['records'][$key]["date_created"]   = datetime_well_format($arr['date_created']);

                  $data['records'][$key]["is_active"]   = '<button data-toggle="tooltip" data-title="Edit" data-placement="top" class="btn btn-warning  btn-icon waves-effect waves-light   mx-1   " value="'.$arr['id'].'" onclick=\'window.location.href = "'.$data['form_link'].'/'.$arr['id'].'"\'><i class="ri-edit-box-line ri-2x"></i> </button><button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-danger btn-icon waves-effect waves-light   " value="'.$arr['id'].'" ><i class="ri-delete-bin-5-line ri-2x"></i></button>';

                $data['records'][$key]["is_blocked"]   = ($arr['is_blocked'] == 0 ? '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top"  type="button" class="btn btn-outline-success btn-status" value='.$arr['id'].'> Active </button>' : '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top" 	 type="button" class="btn btn-outline-danger  btn-status" value='.$arr['id'].' style=""> Inactive </button>');


            }


          return  $this->render("table", $data);
        }


        public function labels_form($id = 0)
        {
            $data = array();
            $data['db_table_name'] = "labels";
            $data['record_name']   = "labels";
            $data['records_name'] = $data['menu_active'] = "labels";
            $data['table_link'] = site_url("Cms/product/labels");
            $data['submit_link'] = site_url("Cms/product/labels_save");
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


           $dbData = array(
                "name" => $data['name']
            );


            $id = $this->SuperModel->saveData_m($tableName, $dbData, $id);


            if (!$id > 0) {
                echo "<script> alert('An error has been occured'); </script>";
            } else {
                $this->swalSuccess(site_url("Cms/product/labels"));
            }
            die();
            return  redirect()->to('Cms/product/labels');
        }




}
