<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class ProjectsModel extends SuperModel
{
  public function selectprojects_model_m()
  {
      $str = "
                SELECT
                    projects.*
                FROM
                    projects
               WHERE
                  projects.is_active = 1

            ";
      return $this->db->query($str)->getResultArray();
  }

public function get_projects_gallery_m($id)
{
  $str = "
  SELECT * FROM projects_gallery WHERE projects_id = ? AND is_active = 1
  ";
  return  $this->db->query($str, [$id])->getResultArray();
}
public function projects_gallery_save_m($fileName, $id)
  {

    $builder = $this->db->table("projects_gallery");
    $builder->insert(array("projects_id" => $id, "photo" => $fileName));
  }



}
