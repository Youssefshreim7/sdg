<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class ServicesModel extends SuperModel
{
  public function selectservices_model_m()
  {
      $str = "
                SELECT
                    services.*
                FROM
                    services
               WHERE
                  services.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }

public function get_services_gallery_m($id)
{
  $str = "
  SELECT * FROM services_gallery WHERE services_id = ? AND is_active = 1
  ";
  return  $this->db->query($str, [$id])->getResultArray();
}
public function services_gallery_save_m($fileName, $id)
  {

    $builder = $this->db->table("services_gallery");
    $builder->insert(array("services_id" => $id, "photo" => $fileName));
  }



}
