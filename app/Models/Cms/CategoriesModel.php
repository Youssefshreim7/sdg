<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class CategoriesModel extends SuperModel
{
  public function selectcategories_model_m()
  {
      $str = "
                SELECT
                    *
                FROM
                    categories a
               WHERE
                  a.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }

  public function selectsub_categories_model_m()
  {
      $str = "
                SELECT
                sub_categories.*,
                categories.name catname
                FROM
                    sub_categories
                    INNER JOIN categories ON categories.id = sub_categories.cat_id
               WHERE
                  sub_categories.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }



}
