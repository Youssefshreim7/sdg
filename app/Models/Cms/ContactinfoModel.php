<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class ContactinfoModel extends SuperModel
{
  public function selectcontactinfo_model_m($local_id = 1)
  {
      $str = "
                SELECT
                    *
                FROM
                    contactinfo a
               WHERE
                  a.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }




}
