<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class SocialmediaModel extends SuperModel
{
  public function selectsocialmedia_model_m($local_id = 1)
  {
      $str = "
                SELECT
                    *
                FROM
                    socialmedia a
               WHERE
                  a.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }




}
