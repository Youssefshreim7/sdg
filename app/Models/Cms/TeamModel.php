<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class TeamModel extends SuperModel
{
  public function selectteam_model_m($local_id = 1)
  {
      $str = "
                SELECT
                    *
                FROM
                    team a
               WHERE
                  a.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }




}
