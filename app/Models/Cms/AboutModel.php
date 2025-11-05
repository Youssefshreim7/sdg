<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class AboutModel extends SuperModel
{
  public function selectabout_model_m($local_id = 1)
  {
      $str = "
                SELECT
                    *
                FROM
                    about a
               WHERE
                  a.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }




}
