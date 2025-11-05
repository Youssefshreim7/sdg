<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class ProductModel extends SuperModel
{
  public function selectproducts_model_m()
  {
      $str = "
                SELECT
                    products.*,
                      categories.name catname
                FROM
                    products
                    INNER JOIN categories ON categories.id = products.categories_id
               
               WHERE
                  products.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }

  public function select_all_categories_m()
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

public function get_product_gallery_m($id)
{
  $str = "
  SELECT * FROM products_gallery WHERE products_id = ? AND is_active = 1
  ";
  return  $this->db->query($str, [$id])->getResultArray();
}
public function product_gallery_save_m($fileName, $id)
  {

    $builder = $this->db->table("products_gallery");
    $builder->insert(array("products_id" => $id, "photo" => $fileName));
  }

public function selectbrands_model_m()
{
    $str = "
              SELECT
                  *
              FROM
                  brands a
             WHERE
                a.is_active = 1

          ";
    return $this->db->query($str)->getResultArray();
}

public function selectlabels_model_m()
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
public function select_all_brands_m()
{
    $str = "
              SELECT
                  *
              FROM
                  brands a
             WHERE
                a.is_active = 1 and   a.is_blocked = 0

          ";
    return $this->db->query($str)->getResultArray();
}
public function select_all_labels_m()
{
    $str = "
              SELECT
                  *
              FROM
                  labels a
             WHERE
                a.is_active = 1 and   a.is_blocked = 0

          ";
    return $this->db->query($str)->getResultArray();
}

}
