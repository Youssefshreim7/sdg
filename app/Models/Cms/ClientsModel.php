<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class ClientsModel extends SuperModel
{
  public function selectclients_model_m($local_id = 1)
  {
      $str = "
                SELECT
                    *
                FROM
                    clients a
               WHERE
                  a.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }




}
