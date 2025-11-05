<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class PriceModel extends SuperModel
{
  public function selectprice_model_m($local_id = 1)
  {
      $str = "
                SELECT
                    *
                FROM
                    price a
               WHERE
                  a.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }




}
