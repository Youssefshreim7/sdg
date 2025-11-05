<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class FaqModel extends SuperModel
{
  public function selectfaq_model_m($local_id = 1)
  {
      $str = "
                SELECT
                    *
                FROM
                    faq a
               WHERE
                  a.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }




}
