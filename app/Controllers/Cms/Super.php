<?php

namespace App\Controllers\Cms;
use App\Controllers\BaseController;
use App\Models\Cms\SuperModel;


class Super extends BaseController
{
  public function __construct()
      {


      $this->SuperModel = new SuperModel();

  }

  //protected $filters = ['auth' => ['before' => ['App\Filters\AuthFilter']]];

  private function checkLoginStatus()
{
    // Logic to check login status
    // Redirect if not logged in
    if (empty(session()->get('username'))) {
      //echo " gggggg    ."; // Debugging statement dd

      return redirect()->to(base_url('Cms/Login/index'))->send(); // Ensure correct URL and use base_url

    }
}
  public function render($viewFileName, $data)
{
    $menuData = array();
    $menuData['menu_active'] = $data['menu_active'];
    $menuData['sub_menu_active'] = isset($data['sub_menu_active']) ? $data['sub_menu_active'] : '';
    $menuData['website_name'] = $this
        ->SuperModel
        ->selectRecordFromTable_m("backend_settings", "2") [0]['value'];
    $menuData['website_logo'] = base_url() . $this
        ->SuperModel
        ->selectRecordFromTable_m("backend_settings", "3") [0]['value'];


        return view('Cms/header', $menuData)
                   . view('Cms/' . $viewFileName, $data)
                   . view('Cms/footer');

}
public function changeIsBlocked()
    {
      $tableName = $this->request->getPost('table');
      $id = $this->request->getPost('id');

        $res = $this
            ->SuperModel
            ->updateStatusRow_m($tableName, $id)[0];

        echo json_encode($res);
        die();
    }


    public function changeIsfet()
        {
          $tableName = $this->request->getPost('table');
          $id = $this->request->getPost('id');

            $res = $this
                ->SuperModel
                ->updatefetRow_m($tableName, $id)[0];

            echo json_encode($res);
            die();
        }

    public function inactiveRow()
    {
      $tableName = $this->request->getPost('table');
      $id = $this->request->getPost('id');

        $res = $this
            ->SuperModel
            ->inactiveRow_m($tableName, $id) [0];

        echo json_encode($res);
        die();
    }
public function swalSuccess($callbackUrl, $type = 'success', $title = 'Form Saved Successfully')
    {
        echo '<link href="' . base_url() . '/assets/cms/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />';
         echo '<script src="' . base_url() . '/assets/cms/assets/libs/sweetalert2/sweetalert2.min.js"></script>';
        echo '<script src="' . base_url() . '/assets/cms/assets/js/pages/sweetalerts.init.js"></script>';
        echo '<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>';
        echo "
        <script>
        $(document).ready(function(){
           Swal.fire({
            icon: '" . $type . "',
            text: '" . $title . "',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
             window.location = '" . $callbackUrl . "';
             });
             });
             </script>";
    }

    public function swalError($callbackUrl, $type = 'error', $title = 'Form did not Saved')
    {
      echo '<link href="' . base_url() . '/assets/cms/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />';
       echo '<script src="' . base_url() . '/assets/cms/assets/libs/sweetalert2/sweetalert2.min.js"></script>';
      echo '<script src="' . base_url() . '/assets/cms/assets/js/pages/sweetalerts.init.js"></script>';
      echo '<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>';
        echo "
            <script>
            $(document).ready(function(){
              Swal.fire({
               icon: '" . $type . "',
               text: '" . $title . "',
               showConfirmButton: false,
               timer: 1500
               }).then(function() {
                window.location = '" . $callbackUrl . "';
                });
                });
                </script>";
        die();
    }

    public function renders($viewFileName, $data)
  {
      $menuData = array();
      $menuData['menu_active'] = $data['menu_active'];
      $menuData['sub_menu_active'] = isset($data['sub_menu_active']) ? $data['sub_menu_active'] : '';
      $menuData['website_name'] = $this
          ->SuperModel
          ->selectRecordFromTable_m("backend_settings", "2") [0]['value'];
      $menuData['website_logo'] = base_url() . $this
          ->SuperModel
          ->selectRecordFromTable_m("backend_settings", "3") [0]['value'];


          return view('Cms/header_staff', $menuData)
                     . view('Cms/' . $viewFileName, $data)
                     . view('Cms/footer_staff');

  }




}
