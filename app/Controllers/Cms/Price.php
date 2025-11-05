<?php

namespace App\Controllers\Cms;

use App\Controllers\Cms\Super;
use App\Models\Cms\PriceModel;
use App\Models\Cms\PlanFeatureModel;

use App\Models\Cms\SuperModel;

class Price extends Super
{
    public function __construct()
    {
        $this->PriceModel = new PriceModel();
        $this->SuperModel = new SuperModel();
    }

    public function price()
    {
        if (empty(session()->get('username'))) {
            return redirect()->to(base_url('Cms/Login/index'))->send(); // Ensure correct URL and use base_url
        }

        $data = array();
        $data['db_table_name'] = "price";
        $data['record_name']   = "Packages";
        $data['records_name'] = $data['menu_active'] = "Packages";
        $data['form_link'] = site_url("cms/price/price_form/");
        $data['table_link'] = site_url("Cms/price/price");
        $data['table_icon'] = '<i class="kt-menu__link-icon  flaticon-confetti"></i>';

        $data['th'] = ["ID", "title",   "date_created", "status", "action"];
        $data['columns'] = ["id", "title",   "date_created", "is_blocked", "is_active"];
        $data['records'] = $this->PriceModel->selectprice_model_m();

        foreach ($data['records'] as $key => $arr) {
            $data['records'][$key]["date_created"] = datetime_well_format($arr['date_created']);

            $data['records'][$key]["is_active"] = '<button data-toggle="tooltip" data-title="Edit" data-placement="top" class="btn btn-warning  btn-icon waves-effect waves-light   mx-1   " value="'.$arr['id'].'" onclick=\'window.location.href = "'.$data['form_link'].'/'.$arr['id'].'"\'><i class="ri-edit-box-line ri-2x"></i> </button><button data-toggle="tooltip" data-title="Remove" data-placement="top" class="btn btn-danger btn-icon waves-effect waves-light   " value="'.$arr['id'].'" ><i class="ri-delete-bin-5-line ri-2x"></i></button>';

            $data['records'][$key]["is_blocked"] = ($arr['is_blocked'] == 0 ? '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top"  type="button" class="btn btn-outline-success btn-status" value='.$arr['id'].'> Active </button>' : '<button data-toggle="tooltip" data-title="Active / Inactive"  data-placement="top" 	 type="button" class="btn btn-outline-danger  btn-status" value='.$arr['id'].' style=""> Inactive </button>');



            // Add download link for PDF
            if (!empty($arr['pdf'])) {
                $data['records'][$key]["pdf"] = '<a href="' . site_url("Cms/price/downloadPdf/" . $arr['id']) . '" class="btn btn-success">Download PDF</a>';
            } else {
                $data['records'][$key]["pdf"] = 'No PDF available';
            }
        }

        return $this->render("table", $data);
    }

    public function price_form($id = 0)
    {
        $data = array();
        $data['db_table_name'] = "price";
        $featureModel = new PlanFeatureModel();
$data['features'] = [];
if ($id != 0) {
    $data['features'] = $featureModel->where('price_id', $id)->findAll();
}
        $data['record_name']   = "Packages";
        $data['records_name'] = $data['menu_active'] = "Packages";
        $data['table_link'] = site_url("Cms/price/price");
        $data['submit_link'] = site_url("Cms/price/price_save");
        $data['id'] = $id;

        $data['records'] = array();
        $data['form_title'] = $data['record_name'] . " Add";
        if ($id != 0) {
            $data['form_title'] = $data['record_name'] . " Edit";
        }

        $tableName = 'price';
        $data['record'] = $this->SuperModel->selectSingleData_m($tableName, $id);

        return $this->render("price_form", $data);
    }

    public function price_save()
{
    $tableName = 'price';
    $data = $this->request->getVar();

    $id = $data['id'];
    unset($data['id']);








    // Prepare data for saving
    $dbData = array(
        "title" => $data['title'],
       "subtitle" => $data['subtitle'],
       "position" => $data['position'],
       "plan" => $data['plan'],
      
       "price" => $data['price']

    );

    $id = $this->SuperModel->saveData_m($tableName, $dbData, $id);

    // Save plan features
    $featureModel = new PlanFeatureModel();
    $featureModel->where('price_id', $id)->delete(); // Clear old features

    if (!empty($data['features'])) {
        foreach ($data['features'] as $featureText) {
            if (!empty(trim($featureText))) {
                $featureModel->insert([
                    'price_id' => $id,
                    'feature_text' => trim($featureText),
                    'is_active' => 1
                ]);
            }
        }
    }

    if (!$id > 0) {
        echo "<script> alert('An error has occurred'); </script>";
    } else {
        $this->swalSuccess(site_url("Cms/price/price"));
    }

    return redirect()->to('Cms/price/price');

}




}
