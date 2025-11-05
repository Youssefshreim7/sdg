<?php

namespace App\Controllers\Cms;

use App\Controllers\Cms\Super;
use App\Models\Cms\AdminModel;
use App\Models\Cms\SuperModel;


class Admin extends Super
{

  public function __construct()
{
    parent::__construct(); // Call the parent constructor explicitly

    // Other constructor logic for Admin class
    // ...
    $this->AdminModel = new AdminModel();
    $this->SuperModel = new SuperModel();
}

  public function logout()
    {
        session()->remove('username');
        return redirect()->to('Cms/Login/index');
    }
    public function index()
      {
        //echo "<pre>";print_r(session()->get('admin_id'));die();
        if (empty(session()->get('username'))) {
      return redirect()->to(base_url('Cms/Login/index'))->send(); // Ensure correct URL and use base_ur
    }

          $data = array();
          $data['menu_active'] = "dashboard";
          $data['db_table_name'] = "";



          $data['website_name'] = $this->AdminModel->selectRecordFromTable_m("backend_settings", "2")[0]['value'];
          $data['website_logo'] = base_url() . $this->AdminModel->selectRecordFromTable_m("backend_settings", "3")[0]['value'];

          $data['panels'] = array();
          $data['panels'][] = array(
              "title" => "System Administrators",
              "icon" => "mdi mdi-account-lock-outline",
              "color" => "bg-success",
              "link" => site_url('cms/admin/admins'),
              "active" => $this->AdminModel->getCount_m("system_admin",0),
              "inactive" => $this->AdminModel->getCount_m("system_admin",1),
              "total" => $this->AdminModel->getCount_m("system_admin",null)
          );



          return view('Cms/header', $data)
                     . view('Cms/index' , $data)
                     . view('Cms/footer');


  }
  public function admins()
    {
        if (session()->get('admin_id') != '1') {
            $this->logout();
        }
        $data = array();
        $data['db_table_name'] = "system_admin";
        $data['record_name'] = $data['menu_active']  = "System Administrator";
        $data['records_name'] = "System Administrators";
        $data['form_link'] = site_url("cms/admin/admin_form/");
        $data['table_link'] = site_url("cms/admin/admins");
        $data['table_icon'] = '<i class="kt-menu__link-icon flaticon-users"></i>';
        $data['th'] = ["id", "full_name", "username", "administration_type", "status", "actions"];
        $data['columns'] = ["id", "full_name", "username", "type", "is_blocked", "is_active"];
        $data['records'] = $this->AdminModel->selectFromTable_m("system_admin");


        foreach ($data['records'] as $key => $arr) {
            $data['records'][$key]["type"]  = $arr['type'] == '1' ? 'Super Administrator': 'Admin';

            $data['records'][$key]["is_blocked"]   = ($arr['is_blocked'] == 0 ? '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top"  type="button" class="btn btn-outline-success btn-status" value='.$arr['id'].'> Active </button>' : '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top" 	 type="button" class="btn btn-outline-danger  btn-status" value='.$arr['id'].' style=""> Inactive </button>');



            $data['records'][$key]["is_active"]   = '<button data-toggle="tooltip" data-title="Edit" data-placement="top" class="btn btn-warning  btn-icon waves-effect waves-light   mx-1   " value="'.$arr['id'].'" onclick=\'window.location.href = "'.$data['form_link'].'/'.$arr['id'].'"\'><i class="ri-edit-box-line ri-2x"></i> </button><button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-danger btn-icon waves-effect waves-light   " value="'.$arr['id'].'" ><i class="ri-delete-bin-5-line ri-2x"></i></button>';
        }


        return $this->render("admins", $data);
    }

    public function admin_form($id = 0)
{
    if (session()->get('admin_id') != '1') {
      $this->logout();
    }
    $data = array();
    $data['db_table_name'] = "system_admin";
    $data['record_name'] = $data['menu_active']  = "System Administrator";
    $data['records_name'] = "System Administrators";
    $data['table_link'] = site_url("Cms/Admin/admins");
    $data['submit_link'] = site_url("cms/admin/admin_save");
    $data['id'] = $id;
    $data['record'] = array();
    $data['form_title'] = "System Administrator Add";
    if ($id != 0) {
        $data['record'] = $this->SuperModel->selectRecordFromTable_m("system_admin", $id)[0];
        $data['form_title'] = "System Administrator Edit";
    }

    return $this->render("admin_form", $data);

    }

    public function admin_save()
    {
       if (session()->get('admin_id') != '1') {
        $this->logout();
       }
       $data = $this->request->getVar(null, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $id = $data['id'];
        unset($data['id']);

        $isUsernameExists = $this->SuperModel->isUsernameExists_m($data['username'], $id);
    //    echo "<pre>";print_r($isUsernameExists);die();

        if ($isUsernameExists == 'true') {
            // error
            echo "<script> alert('Username already exsits'); </script>";
          return  redirect()->to('Cms/Admin/admin_form/'.$id);
        }

        if ($id == 0) {
            $data['password'] = md5($data['password']);
            $res = $this->AdminModel->saveAdmin_m($data);
        } else {
            if (isset($data['password'])) {
                $data['password'] = md5($data['password']);
            }

            $res = $this->AdminModel->saveAdmin_m($data, $id);
        }

        if ($res != 1) {
            echo "<script> alert('An error has been occured'); </script>";
        } else {
            $this->swalSuccess(site_url('Cms/Admin/admins'));
        }
        die();
        return  redirect()->to('Cms/Admin/admins');

    }

}
