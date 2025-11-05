<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class LabelsModel extends SuperModel
{
  public function selectlabels_model_m($local_id = 1)
  {
      $str = "
                SELECT
                    *
                FROM
                    labels a
               WHERE
                  a.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }




}
