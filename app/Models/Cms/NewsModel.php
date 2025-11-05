<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class NewsModel extends SuperModel
{
  public function selectnews_model_m()
  {
      $str = "
                SELECT
                    news.*
                FROM
                    news
               WHERE
                  news.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }

public function get_news_gallery_m($id)
{
  $str = "
  SELECT * FROM news_gallery WHERE news_id = ? AND is_active = 1
  ";
  return  $this->db->query($str, [$id])->getResultArray();
}
public function news_gallery_save_m($fileName, $id)
  {

    $builder = $this->db->table("news_gallery");
    $builder->insert(array("news_id" => $id, "photo" => $fileName));
  }



}
