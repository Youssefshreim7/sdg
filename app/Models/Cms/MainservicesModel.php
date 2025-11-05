<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class MainservicesModel extends SuperModel
{
  public function selectmainservices_model_m($local_id = 1)
  {
      $str = "
                SELECT
                    *
                FROM
                    mainservices a
               WHERE
                  a.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }




}
