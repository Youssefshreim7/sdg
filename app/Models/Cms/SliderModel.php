<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class SliderModel extends SuperModel
{
  public function selectSliders_model_m($local_id = 1)
  {
      $str = "
                SELECT
                    *
                FROM
                    sliders a
               WHERE
                  a.is_active = 1
           
            ";
      return $this->db->query($str)->getResultArray();
  }




}
