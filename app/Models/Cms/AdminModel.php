<?php

namespace App\Models\Cms;

use App\Models\Cms\SuperModel;


class AdminModel extends SuperModel
{



  public function getCount_m($tableName, $is_blocked = null)
    {
        $str = "";
        if(!is_null($is_blocked)){
            $str = " WHERE  is_blocked = $is_blocked";
        }
        return $this->db->query("SELECT COUNT(id) as count FROM $tableName ".$str)->getRow()->count;
    }
    public function saveAdmin_m($data, $id = 0)
      {
          if ($id == 0) {
            $builder = $this->db->table('system_admin');
            $builder->insert($data);
          } else {
              $this->db->table('system_admin')->where(array("id"=>$id, "is_active"=>'1'))->update($data);
          }
          return 1;
      }

public function staff_cat_info_m($staff_id)
 {

     $str = "
         SELECT
             staff_category.*

         FROM
             staff_category
         WHERE
        staff_category.id  = $staff_id
           and
            staff_category.is_active = 1
     ";
     return $this->db->query($str)->getRowArray();

   }

   public function select_nb_of_appointment_perMonth_model_m()
   {
       // Get the current year and month
       $currentYear = date('Y');
       $currentMonth = date('m');

       $str = "
              SELECT
              COUNT(*) as nb_of_appointments
              FROM
              appointment_doctor
              WHERE
              YEAR(appointment_doctor.date) = $currentYear
              AND
              MONTH(appointment_doctor.date) = $currentMonth
              AND
              appointment_doctor.is_active = 1
             ";
       $result = $this->db->query($str)->getRowArray();
       return $result['nb_of_appointments'];
   }

   public function select_nb_of_appointment_ph_perMonth_model_m()
   {
       // Get the current year and month
       $currentYear = date('Y');
       $currentMonth = date('m');

       $str = "
              SELECT
              COUNT(*) as nb_of_appointments
              FROM
              appointment_pharmacy
              WHERE
              YEAR(appointment_pharmacy.date) = $currentYear
              AND
              MONTH(appointment_pharmacy.date) = $currentMonth
              AND
              appointment_pharmacy.is_active = 1
             ";
       $result = $this->db->query($str)->getRowArray();
       return $result['nb_of_appointments'];
   }

   public function select_nb_of_visit_perMonth_model_m()
   {
       // Get the current year and month
       $currentYear = date('Y');
       $currentMonth = date('m');

       $str = "
              SELECT
              COUNT(*) as nb_of_appointments
              FROM
              visit_doctor
              WHERE
              YEAR(visit_doctor.date_visit) = $currentYear
              AND
              MONTH(visit_doctor.date_visit) = $currentMonth
              AND
              visit_doctor.is_active = 1
             ";
       $result = $this->db->query($str)->getRowArray();
       return $result['nb_of_appointments'];
   }

   public function select_nb_of_visit__ph_perMonth_model_m()
   {
       // Get the current year and month
       $currentYear = date('Y');
       $currentMonth = date('m');

       $str = "
              SELECT
              COUNT(*) as nb_of_appointments
              FROM
              visit_pharmacy
              WHERE
              YEAR(visit_pharmacy.date_visit) = $currentYear
              AND
              MONTH(visit_pharmacy.date_visit) = $currentMonth
              AND
              visit_pharmacy.is_active = 1
             ";
       $result = $this->db->query($str)->getRowArray();
       return $result['nb_of_appointments'];
   }
}
