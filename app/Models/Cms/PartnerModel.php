<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class PartnerModel extends SuperModel
{
  public function selectpartner_model_m($local_id = 1)
  {
      $str = "
                SELECT
                    *
                FROM
                    partner a
               WHERE
                  a.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }




}
