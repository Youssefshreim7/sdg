<?php

namespace App\Controllers\Cms;

use App\Controllers\Cms\Super;
use App\Models\Cms\MainservicesModel;
use App\Models\Cms\SuperModel;

class Mainservices extends Super
{
    public function __construct()
    {
        $this->MainservicesModel = new MainservicesModel();
        $this->SuperModel = new SuperModel();
    }

    public function mainservices()
    {
        if (empty(session()->get('username'))) {
            return redirect()->to(base_url('Cms/Login/index'))->send(); // Ensure correct URL and use base_url
        }

        $data = array();
        $data['db_table_name'] = "mainservices";
        $data['record_name']   = "mainservices";
        $data['records_name'] = $data['menu_active'] = "mainservices";
        $data['form_link'] = site_url("cms/mainservices/mainservices_form/");
        $data['table_link'] = site_url("Cms/mainservices/mainservices");
        $data['table_icon'] = '<i class="kt-menu__link-icon  flaticon-confetti"></i>';

        $data['th'] = ["ID", "title", "image", "date_created", "status", "action"];
        $data['columns'] = ["id", "title", "image", "date_created", "is_blocked", "is_active"];
        $data['records'] = $this->MainservicesModel->selectmainservices_model_m();

        foreach ($data['records'] as $key => $arr) {
            $data['records'][$key]["date_created"] = datetime_well_format($arr['date_created']);

            $data['records'][$key]["is_active"] = '<button data-toggle="tooltip" data-title="Edit" data-placement="top" class="btn btn-warning  btn-icon waves-effect waves-light   mx-1   " value="'.$arr['id'].'" onclick=\'window.location.href = "'.$data['form_link'].'/'.$arr['id'].'"\'><i class="ri-edit-box-line ri-2x"></i> </button><button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-danger btn-icon waves-effect waves-light   " value="'.$arr['id'].'" ><i class="ri-delete-bin-5-line ri-2x"></i></button>';

            $data['records'][$key]["is_blocked"] = ($arr['is_blocked'] == 0 ? '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top"  type="button" class="btn btn-outline-success btn-status" value='.$arr['id'].'> Active </button>' : '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top" 	 type="button" class="btn btn-outline-danger  btn-status" value='.$arr['id'].' style=""> Inactive </button>');

            $data['records'][$key]["image"] = '<img src="'.base_url() . '/uploads/'.$data['records'][$key]["image"].'" width="175px">';

            // Add download link for PDF
            if (!empty($arr['pdf'])) {
                $data['records'][$key]["pdf"] = '<a href="' . site_url("Cms/mainservices/downloadPdf/" . $arr['id']) . '" class="btn btn-success">Download PDF</a>';
            } else {
                $data['records'][$key]["pdf"] = 'No PDF available';
            }
        }

        return $this->render("table", $data);
    }

    public function mainservices_form($id = 0)
    {
        $data = array();
        $data['db_table_name'] = "mainservices";
        $data['record_name']   = "mainservices";
        $data['records_name'] = $data['menu_active'] = "mainservices";
        $data['table_link'] = site_url("Cms/mainservices/mainservices");
        $data['submit_link'] = site_url("Cms/mainservices/mainservices_save");
        $data['id'] = $id;

        $data['records'] = array();
        $data['form_title'] = $data['record_name'] . " Add";
        if ($id != 0) {
            $data['form_title'] = $data['record_name'] . " Edit";
        }

        $tableName = 'mainservices';
        $data['record'] = $this->SuperModel->selectSingleData_m($tableName, $id);

        return $this->render("mainservices_form", $data);
    }

    public function mainservices_save()
{
    $tableName = 'mainservices';
    $data = $this->request->getVar();

    $id = $data['id'];
    unset($data['id']);

    // Handle image upload
    $uploadImage = '';
    $photo = $this->request->getFile('image');
    if (!empty($_FILES['image']['name'])) {
        if ($photo->isValid() && !$photo->hasMoved()) {
            $photo->move('./uploads', $photo->getRandomName());
            $uploadImage = $photo->getName();
        } else {
            $uploadImage = 'default.png';
        }
    } else {
        $mainservices = $this->SuperModel->selectSingleData_m($tableName, $id);
        $uploadImage = $mainservices['image'];
    }

  

    // Handle PDF upload (existing logic)
    $pdfFileName = null;
    if (isset($_FILES['pdf_file']) && $_FILES['pdf_file']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = './uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $pdfFileName = uniqid() . '-' . basename($_FILES['pdf_file']['name']);
        $pdfFilePath = $uploadDir . $pdfFileName;
        if (!move_uploaded_file($_FILES['pdf_file']['tmp_name'], $pdfFilePath)) {
            die("Error uploading PDF file.");
        }
    }

    // Prepare data for saving
    $dbData = array(
        "title" => $data['title'],
       
        "pdf" => $pdfFileName,
        "image" => $uploadImage
 
    );

    $id = $this->SuperModel->saveData_m($tableName, $dbData, $id);

    if (!$id > 0) {
        echo "<script> alert('An error has occurred'); </script>";
    } else {
        $this->swalSuccess(site_url("Cms/mainservices/mainservices"));
    }

    return redirect()->to('Cms/mainservices/mainservices');
}


    // Method to handle PDF download
    public function downloadPdf($id)
    {
        // Retrieve the record from the database to get the PDF file name
        $tableName = 'mainservices';
        $record = $this->SuperModel->selectSingleData_m($tableName, $id);

        if (empty($record) || empty($record['pdf'])) {
            // If no record or PDF file exists, handle the error
            return redirect()->to('/cms/mainservices/mainservices')->with('error', 'PDF file not found.');
        }

        // Define the path to the PDF file
        $pdfFilePath = './uploads/' . $record['pdf'];

        if (!file_exists($pdfFilePath)) {
            // If the file doesn't exist, return an error message
            return redirect()->to('/cms/mainservices/mainservices')->with('error', 'PDF file not found.');
        }

        // Set headers for downloading the PDF
        return $this->response->setHeader('Content-Type', 'application/pdf')
                              ->setHeader('Content-Disposition', 'attachment; filename="' . basename($pdfFilePath) . '"')
                              ->setHeader('Content-Length', filesize($pdfFilePath))
                              ->setBody(file_get_contents($pdfFilePath));
    }
}
