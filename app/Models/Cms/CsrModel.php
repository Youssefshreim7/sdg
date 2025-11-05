<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class CsrModel extends SuperModel
{
  public function selectcsr_model_m($local_id = 1)
  {
      $str = "
                SELECT
                    *
                FROM
                    csr a
               WHERE
                  a.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }




}
