<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class TestimonialModel extends SuperModel
{
  public function selecttestimonial_model_m()
  {
      $str = "
                SELECT
                    testimonial.*
                FROM
                    testimonial
               WHERE
                  testimonial.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }

public function get_testimonial_gallery_m($id)
{
  $str = "
  SELECT * FROM testimonial_gallery WHERE testimonial_id = ? AND is_active = 1
  ";
  return  $this->db->query($str, [$id])->getResultArray();
}
public function testimonial_gallery_save_m($fileName, $id)
  {

    $builder = $this->db->table("testimonial_gallery");
    $builder->insert(array("testimonial_id" => $id, "photo" => $fileName));
  }



}
