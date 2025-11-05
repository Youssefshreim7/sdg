<?php

namespace App\Models\Cms;

use CodeIgniter\Model;


class SuperModel extends Model
{

  public function checkAdmin_m($username, $password)
{
return $this->db->table('system_admin')
                        ->where(array("username"=>$username, "password"=>md5($password), "is_active"=>"1", "is_blocked" => "0"))
                        ->get()
                        ->getRow();

}
public function checkstaff_m($username, $password)
{
 return $this->db->table('staff')
                 ->where(array("username"=>$username, "password"=>md5($password), "is_active"=>"1", "is_blocked" => "0"))
                 ->get()
                 ->getRow();
}
  public function selectRecordFromTable_m($tableName, $recordId)
    {
      return $this->db->table($tableName)
                              ->where('is_active','1')
                              ->where('id',$recordId)
                              ->get()
                              ->getResultArray();

    }
    public function selectFromTable_m($tableName)
    {
      return $this->db->table($tableName)
                              ->where('is_active','1')
                              ->get()
                              ->getResultArray();

    }

    public function isUsernameExists_m($username, $currentId)
    {
        $isExists = 'false';
        $res = array();
        if ($currentId == 0) {
            $res = $this->db->query("SELECT * FROM system_admin WHERE is_active = '1' AND username = ?  ", [$username])->getRowArray();
        } else {
            $res = $this->db->query("SELECT * FROM system_admin WHERE is_active = '1' AND username = ? AND id != ?  ", [$username, $currentId])->getRowArray();
        }
        if (!empty($res)) {
            $isExists = 'true';
        }
        return $isExists;
    }
    public function selectSingleData_m($tableName, $id)
{
    $str = "
        SELECT
          *
        FROM
          ".$tableName."
        WHERE
          id = $id
";
    $return =  $this->db->query($str, [$id])->getResultArray();
    return  isset($return[0]) ? $return[0] : array();
}
public function saveData_m($tableName, $data, $id = 0)
{
    if ($id == 0) {
      $builder = $this->db->table($tableName);
      $builder->insert($data);
      $id=$this->db->insertId();
      return $id;
    } else {
      $this->db->table($tableName)->where(array("id"=>$id, "is_active"=>'1'))->update($data);
      return $id;
    }
}

    public function updateStatusRow_m($tableName, $id)
{
    $tableName = $this->db->escapeString($tableName);
    $id = $this->db->escapeString($id);

    $queryStr = "UPDATE $tableName SET  is_blocked = IF(is_blocked = 1 , 0 , 1) WHERE id = '$id' ";

    $this->db->query($queryStr); // Parametered query. More secure.


    // $this->db->reset_query(); //Finish the above query

    return $this->db->table($tableName)
                                    ->select('is_blocked')
                                    ->where('id', $id)
                                    ->get()->getResult();

}

public function updatefetRow_m($tableName, $id)
{
$tableName = $this->db->escapeString($tableName);
$id = $this->db->escapeString($id);

$queryStr = "UPDATE $tableName SET  is_featured = IF(is_featured = 1 , 0 , 1) WHERE id = '$id' ";

$this->db->query($queryStr); // Parametered query. More secure.


// $this->db->reset_query(); //Finish the above query

return $this->db->table($tableName)
                                ->select('is_featured')
                                ->where('id', $id)
                                ->get()->getResult();

}

public function inactiveRow_m($tableName, $id)  //AS DELETE
{
    $tableName = $this->db->escapeString($tableName);
    $id = $this->db->escapeString($id);

    $queryStr = "UPDATE $tableName SET  is_active = 0 WHERE id = '$id' ";

    $this->db->query($queryStr); // Parametered query. More secure.


    // $this->db->reset_query(); //Finish the above query
    return $this->db->table($tableName)
                                    ->select('is_active')
                                    ->where('id', $id)
                                    ->get()->getResult();


}
public function selectData_m($tableName, $data)
 {
     $builder = $this->db->table($tableName);
     $query = $builder->getWhere($data);

     return $query->getResult();
 }

}
