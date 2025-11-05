<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class ItemsModel extends SuperModel
{
  public function selectitems_model_m()
  {
      $str = "
                SELECT
                    items.*
                FROM
                    items
               WHERE
                  items.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }

public function get_items_gallery_m($id)
{
  $str = "
  SELECT * FROM items_gallery WHERE items_id = ? AND is_active = 1
  ";
  return  $this->db->query($str, [$id])->getResultArray();
}
public function items_gallery_save_m($fileName, $id)
  {

    $builder = $this->db->table("items_gallery");
    $builder->insert(array("items_id" => $id, "photo" => $fileName));
  }



}
