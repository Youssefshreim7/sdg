<?php

namespace App\Controllers\Cms;
use App\Controllers\BaseController;
use App\Models\Cms\AdminModel;


class Login extends BaseController
{
  public function __construct()
  {
    //  helper(['url','form']);

      $this->AdminModel = new AdminModel();
  }

    public function index()
{
  $data = array();

  $data['website_name'] = $this->AdminModel->selectRecordFromTable_m("backend_settings","2")[0]['value'];
  $data['website_logo'] = $this->AdminModel->selectRecordFromTable_m("backend_settings","3")[0]['value'];

  //echo "<pre>";print_r($data['website_logo']);die();
  return view('Cms/login', $data);

}
public function login()
{

  $username = $this->request->getPost('username');
  $password = $this->request->getPost('password');
  $adminInfo = $this->AdminModel->checkAdmin_m($username, $password);

  if (empty($adminInfo)) {
    return redirect()->to('Cms/Login/index');
    echo 'error';die();
  } else {


    session()->set('username', $username);
    session()->set('admin_id', $adminInfo->id);


    echo 'success';die();
  }
  echo 'error';die();
}


}
