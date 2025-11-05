<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class UserModel extends SuperModel
{
  public function selectuser_model_m($local_id = 1)
  {
      $str = "
                SELECT
                    *
                FROM
                    users a
               WHERE
                  a.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }




}
