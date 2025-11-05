<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class MembershipModel extends SuperModel
{
  public function selectmembership_model_m($local_id = 1)
  {
      $str = "
                SELECT
                    *
                FROM
                    membership a
               WHERE
                  a.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }




}
