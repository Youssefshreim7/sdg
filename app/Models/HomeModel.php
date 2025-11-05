<?php

namespace App\Models;

use CodeIgniter\Model;


class HomeModel extends Model
{

  public function select_all_Sliders_model_m()
  {
      $str = "
                SELECT
                    *
                FROM
                    sliders a
               WHERE
                  a.is_active = 1

               ORDER BY
                 a.position ASC

            ";
      return $this->db->query($str)->getResultArray();
  }

  public function select_about_page_model_m()
{
    $str = "
              SELECT
                  *
              FROM
                  about b
             WHERE
                b.is_active = 1 and   b.id = 1

          ";
    return $this->db->query($str)->getRowArray();
}
public function select_faq_page_model_m()
{
  $str = "
            SELECT
                *
            FROM
                faq b
           WHERE
              b.is_active = 1 and   b.id = 1

        ";
  return $this->db->query($str)->getRowArray();
}
public function select_csr_page_model_m()
{
  $str = "
            SELECT
                *
            FROM
                csr b
           WHERE
              b.is_active = 1 and   b.id = 1

        ";
  return $this->db->query($str)->getRowArray();
}
public function select_news_page_model_m()
{
  $str = "
            SELECT
                *
            FROM
                news b
           WHERE
              b.is_active = 1 and   b.id = 1

        ";
  return $this->db->query($str)->getRowArray();
}
public function select_items_page_model_m()
{
  $str = "
            SELECT
                *
            FROM
                items b
           WHERE
              b.is_active = 1 and   b.id = 1

        ";
  return $this->db->query($str)->getRowArray();
}
public function select_projects_page_model_m()
{
  $str = "
            SELECT
                *
            FROM
                projects b
           WHERE
              b.is_active = 1 and   b.id = 1

        ";
  return $this->db->query($str)->getRowArray();
}
public function select_testimonial_page_model_m()
{
  $str = "
            SELECT
                *
            FROM
                testimonial b
           WHERE
              b.is_active = 1 and   b.id = 1

        ";
  return $this->db->query($str)->getRowArray();
}

    public function select_team_page_model_m()
    {
    $str = "
                SELECT
                    *
                FROM
                    team b
            WHERE
                b.is_active = 1 and   b.id = 1

            ";
    return $this->db->query($str)->getRowArray();
    }


public function select_label_page_model_m()
{
  $str = "
            SELECT
                *
            FROM
                labels b
           WHERE
              b.is_active = 1 and   b.is_blocked	 = 0

        ";
  return $this->db->query($str)->getResultArray();
}

public function select_contact_info_model_m()
{
    $str = "
              SELECT
                  *
              FROM
                  contactinfo b
             WHERE
                b.is_active = 1 and   b.id = 1

          ";
    return $this->db->query($str)->getRowArray();
}

public function select_socialmedia_model_m()
{
    $str = "
              SELECT
                  *
              FROM
                  socialmedia b
             WHERE
                b.is_active = 1 and   b.is_blocked = 0
          ";
    return $this->db->query($str)->getResultArray();
}

public function select_all_brands_model_m()
{
    $str = "
              SELECT
                  *
              FROM
                  labels b
             WHERE
                b.is_active = 1 and   b.is_blocked = 0
          ";
    return $this->db->query($str)->getResultArray();
}
public function select_all_categorys_model_m()
{
    $str = "
              SELECT
                  *
              FROM
                  categories c
             WHERE
                c.is_active = 1 and   c.is_blocked = 0
          ";
    return $this->db->query($str)->getResultArray();
}


public function select_all_sub_categorys_model_m()
{
    $str = "
              SELECT
                  *
              FROM
                  sub_categories c
             WHERE
                c.is_active = 1 and   c.is_blocked = 0
          ";
    return $this->db->query($str)->getResultArray();
}

 
public function select_sub_categories_by_category_m($cat_id)
{
    $sql = "SELECT * FROM sub_categories c
            WHERE c.is_active = 1
              AND c.is_blocked = 0
              AND c.cat_id = ?";
    return $this->db->query($sql, [$cat_id])->getResultArray();
}
public function count_products_by_subcat($cat_id,$subcat_id)
{
    $str = "
        SELECT
            COUNT(*) as total
        FROM
            products
        WHERE
            products.is_active = 1 AND products.is_blocked = 0 AND products.categories_id = ? AND products.subcat_id = ?
    ";
    $result = $this->db->query($str, [$cat_id,$subcat_id])->getRow();
    return $result->total;
}
public function select_category_details_model_m($cat_id)
{
    $str = "
              SELECT
                  *
              FROM
                  categories c
             WHERE
                c.is_active = 1 and  c.is_blocked = 0 and  c.id = $cat_id
          ";
    return $this->db->query($str)->getRowArray();
}
public function select_sub_categories_details_model_m($subcat_id)
{
    $str = "
              SELECT
                  *
              FROM
                  sub_categories c
             WHERE
                c.is_active = 1 and  c.is_blocked = 0 and  c.id = $subcat_id
          ";
    return $this->db->query($str)->getRowArray();
}
public function count_subcats_by_cat(int $catId): int
{
    return $this->db->table('sub_categories')
        ->where('cat_id', $catId)
        ->countAllResults();
}

public function select_subcats_by_cat(int $catId, int $limit, int $offset): array
{
    return $this->db->table('sub_categories')
        ->where('cat_id', $catId)
        ->orderBy('name', 'ASC')
        ->limit($limit, $offset)
        ->get()
        ->getResultArray();
}

 

public function select_last_products_model_m()
{
    $str = "
        SELECT
            products.*,
            categories.name catname 
             
         FROM
            products
            INNER JOIN categories ON categories.id = products.categories_id
           
        WHERE
            products.is_active = 1  and   products.is_blocked = 0
        ORDER BY
            products.id DESC
        LIMIT 10    
    ";
    return $this->db->query($str)->getResultArray();
}
public function select_feat_products_model_m()
{
    $str = "
        SELECT
            products.*,
            categories.name catname 
        FROM
            products
            INNER JOIN categories ON categories.id = products.categories_id
        
        WHERE
            products.is_active = 1  and   products.is_blocked = 0  and   products.is_featured = 1
        ORDER BY
            products.id DESC
        LIMIT 8
    ";
    return $this->db->query($str)->getResultArray();
}
public function count_all_products()
{
    $str = "
        SELECT
            COUNT(*) as total
        FROM
            products
        WHERE
            products.is_active = 1 AND products.is_blocked = 0
    ";
    $result = $this->db->query($str)->getRow();
    return $result->total;
}
public function select_products_by_all_model_m($limit, $offset)
{
    $str = "
        SELECT
            products.*,
            categories.name catname
            
        FROM
            products
            INNER JOIN categories ON categories.id = products.categories_id
            
        WHERE
            products.is_active = 1 AND products.is_blocked = 0
        ORDER BY
            products.id DESC
        LIMIT ? OFFSET ?
    ";
    return $this->db->query($str, [$limit, $offset])->getResultArray();
}
public function count_products_by_category($cat_id)
{
    $str = "
        SELECT
            COUNT(*) as total
        FROM
            products
        WHERE
            products.is_active = 1 AND products.is_blocked = 0 AND products.categories_id = ?
    ";
    $result = $this->db->query($str, [$cat_id])->getRow();
    return $result->total;
}
public function select_products_by_category_model_m($cat_id, $limit, $offset)
{
    $str = "
        SELECT
            products.*,
            categories.name catname
         FROM
            products
            INNER JOIN categories ON categories.id = products.categories_id
            
         WHERE
            products.is_active = 1 AND products.is_blocked = 0 AND products.categories_id = ?
        ORDER BY
            products.id DESC
        LIMIT ? OFFSET ?
    ";
    return $this->db->query($str, [$cat_id, $limit, $offset])->getResultArray();
}

public function select_products_by_subcat_model_m($cat_id,$subcat_id, $limit, $offset)
{
    $str = "
        SELECT
            products.*,
            categories.name catname,
            sub_categories.name subcatname
        FROM
            products
            INNER JOIN categories ON categories.id = products.categories_id
            INNER JOIN sub_categories ON sub_categories.id = products.subcat_id

        WHERE
            products.is_active = 1  and   products.is_blocked = 0    AND products.categories_id = ? AND products.subcat_id = ?
        ORDER BY
            products.id DESC
            LIMIT ? OFFSET ?
    ";
    return $this->db->query($str, [$cat_id,$subcat_id, $limit, $offset])->getResultArray();
}
public function select_last_services_model_m()
{
    $str = "
        SELECT
            services.*
         FROM
            services
         WHERE
            services.is_active = 1  and   services.is_blocked = 0
        ORDER BY
            services.id DESC

    ";
    return $this->db->query($str)->getResultArray();
}
public function select_last_servicess_model_m()
{
    $str = "
        SELECT
            services.*
         FROM
            services
         WHERE
            services.is_active = 1  and   services.is_blocked = 0
        ORDER BY
            services.id DESC
            LIMIT 3

    ";
    return $this->db->query($str)->getResultArray();
}
public function select_last_team_model_m()
{
    $str = "
        SELECT
            team.*
         FROM
            team
         WHERE
            team.is_active = 1  and   team.is_blocked = 0
        ORDER BY
            team.id DESC

    ";
    return $this->db->query($str)->getResultArray();
}
public function select_last_faq_model_m()
{
    $str = "
        SELECT
            faq.*
         FROM
            faq
         WHERE
            faq.is_active = 1  and   faq.is_blocked = 0
        ORDER BY
            faq.id DESC

    ";
    return $this->db->query($str)->getResultArray();
}
public function select_last_csr_model_m()
{
    $str = "
        SELECT
            csr.*
         FROM
            csr
         WHERE
            csr.is_active = 1  and   csr.is_blocked = 0
        ORDER BY
            csr.id DESC

    ";
    return $this->db->query($str)->getResultArray();
}
public function select_last_membership_model_m()
{
    $str = "
        SELECT
            membership.*
         FROM
            membership
         WHERE
            membership.is_active = 1  and   membership.is_blocked = 0
        ORDER BY
            membership.id DESC

    ";
    return $this->db->query($str)->getResultArray();
}
public function select_last_clients_model_m()
{
    $str = "
        SELECT
            clients.*
         FROM
            clients
         WHERE
            clients.is_active = 1  and   clients.is_blocked = 0
        ORDER BY
            clients.id DESC

    ";
    return $this->db->query($str)->getResultArray();
}
public function select_last_mainservices_model_m()
{
    $str = "
        SELECT
            mainservices.*
         FROM
            mainservices
         WHERE
            mainservices.is_active = 1  and   mainservices.is_blocked = 0
        ORDER BY
            mainservices.id ASC

    ";
    return $this->db->query($str)->getResultArray();
}
public function select_last_partner_model_m()
{
    $str = "
        SELECT
            partner.*
         FROM
            partner
         WHERE
            partner.is_active = 1  and   partner.is_blocked = 0
        ORDER BY
            partner.id DESC

    ";
    return $this->db->query($str)->getResultArray();
}
public function select_last_news_model_m()
{
    $str = "
        SELECT
            news.*
         FROM
            news
         WHERE
            news.is_active = 1  and   news.is_blocked = 0
        ORDER BY
            news.date DESC

    ";
    return $this->db->query($str)->getResultArray();
}
public function select_last_newss_model_m()
{
    $str = "
        SELECT
            news.*
        FROM
            news
        WHERE
            news.is_active = 1 AND news.is_blocked = 0
        ORDER BY
            news.date DESC
        LIMIT 3
    ";

    return $this->db->query($str)->getResultArray();
}
public function select_last_items_model_m()
{
    $str = "
        SELECT
            items.*
         FROM
            items
         WHERE
            items.is_active = 1  and   items.is_blocked = 0
        ORDER BY
            items.id DESC

    ";
    return $this->db->query($str)->getResultArray();
}
public function select_last_itemss_model_m()
{
    $str = "
        SELECT
            items.*
        FROM
            items
        WHERE
            items.is_active = 1 AND items.is_blocked = 0
        ORDER BY
            items.id DESC
        LIMIT 3
    ";

    return $this->db->query($str)->getResultArray();
}
public function select_last_projectss_model_m()
{
    $str = "
        SELECT
            projects.*
         FROM
            projects
         WHERE
            projects.is_active = 1  and   projects.is_blocked = 0
        ORDER BY
            projects.id DESC
            LIMIT 2
    ";
    return $this->db->query($str)->getResultArray();
}
public function select_last_projects_model_m()
{
    $str = "
        SELECT
            projects.*
         FROM
            projects
         WHERE
            projects.is_active = 1  and   projects.is_blocked = 0
        ORDER BY
            projects.id DESC

    ";
    return $this->db->query($str)->getResultArray();
}
public function select_last_testimonial_model_m()
{
    $str = "
        SELECT
            testimonial.*
         FROM
            testimonial
         WHERE
            testimonial.is_active = 1  and   testimonial.is_blocked = 0
        ORDER BY
            testimonial.id DESC

    ";
    return $this->db->query($str)->getResultArray();
}

public function select_programs_model_m()
{
    $str = "
        SELECT
            *
        FROM
            programs p
        WHERE
            p.id = 1 and    p.is_active = 1  and   p.is_blocked = 0
        ORDER BY
            p.id DESC

    ";
    return $this->db->query($str)->getRowArray();
}

public function select_product_details_model_m($product_id)
{
    $sql = "
        SELECT
            products.*,
            categories.name AS catname
        FROM
            products
        INNER JOIN categories ON categories.id = products.categories_id
        WHERE
            products.is_active = 1 
            AND products.is_blocked = 0 
            AND products.id = ?
    ";
    return $this->db->query($sql, [$product_id])->getRowArray();
}


public function select_gallery_product_model_m($product_id)
{
$str = "
          SELECT
              *
          FROM
              products_gallery b
         WHERE
            b.is_active = 1 and   b.products_id = $product_id

      ";
return $this->db->query($str)->getResultArray();
}
public function select_gallery_news_model_m($news_id)
{
$str = "
          SELECT
              *
          FROM
              news_gallery b
         WHERE
            b.is_active = 1 and   b.news_id = $news_id

      ";
return $this->db->query($str)->getResultArray();
}
public function select_gallery_items_model_m($items_id)
{
$str = "
          SELECT
              *
          FROM
              items_gallery b
         WHERE
            b.is_active = 1 and   b.items_id = $items_id

      ";
return $this->db->query($str)->getResultArray();
}
public function select_gallery_projects_model_m($projects_id)
{
$str = "
          SELECT
              *
          FROM
              projects_gallery b
         WHERE
            b.is_active = 1 and   b.projects_id = $projects_id

      ";
return $this->db->query($str)->getResultArray();
}

public function select_product_related_model_m($product_id, $cat_id)
{
    $str = "
        SELECT
            products.*,
            categories.name AS catname
        FROM
            products
        INNER JOIN categories ON categories.id = products.categories_id
        WHERE
            products.is_active = 1
            AND products.is_blocked = 0
            AND products.id != ?
            AND products.categories_id = ?
        ORDER BY
            products.id DESC
        LIMIT 3
    ";
    return $this->db->query($str, [$product_id, $cat_id])->getResultArray();
}


public function select_services_cat_model_m($cat_id)
{
    $str = "
              SELECT
                  *
              FROM
                  services_cat c
             WHERE
                c.is_active = 1 and  c.is_blocked = 0 and  c.id = $cat_id
          ";
    return $this->db->query($str)->getRowArray();
}

public function select_services_model_m()
{
    $str = "
        SELECT
            services.*
         FROM
            services
         WHERE
            services.is_active = 1  and   services.is_blocked = 0
        ORDER BY
            services.id DESC
     ";
    return $this->db->query($str)->getResultArray();
}
public function select_servicesinfo_model_m($services_id)
{
  $str = "
            SELECT
            services.*
            FROM
            services
           WHERE
              services.is_active = 1 and   services.id = $services_id

        ";
  return $this->db->query($str)->getRowArray();
}
public function select_gallery_services_model_m($services_id)
{
$str = "
          SELECT
              *
          FROM
              services_gallery b
         WHERE
            b.is_active = 1 and   b.services_id = $services_id

      ";
return $this->db->query($str)->getResultArray();
}

public function select_related_services_model_m($services_id)
{
    $str = "
        SELECT
            services.*
                    FROM
            services
         WHERE
            services.is_active = 1  and   services.is_blocked = 0 and  services.id != $services_id
        ORDER BY
            services.id DESC
       LIMIT 5
     ";
    return $this->db->query($str)->getResultArray();
}

public function select_projects_model_m()
{
    $str = "
        SELECT
            *
        FROM
            projects
        WHERE
            projects.is_active = 1  and   projects.is_blocked = 0
        ORDER BY
            projects.id DESC
     ";
    return $this->db->query($str)->getResultArray();
}

public function select_newsinfo_model_m($news_id)
{
  $str = "
            SELECT
            news.*
            FROM
            news
           WHERE
              news.is_active = 1 and   news.id = $news_id

        ";
  return $this->db->query($str)->getRowArray();
}


public function select_related_news_model_m($news_id)
{
    $str = "
        SELECT
            news.*
                    FROM
            news
         WHERE
            news.is_active = 1  and   news.is_blocked = 0 and  news.id != $news_id
        ORDER BY
            news.id DESC
       LIMIT 4
     ";
    return $this->db->query($str)->getResultArray();
}
public function select_itemsinfo_model_m($items_id)
{
  $str = "
            SELECT
            items.*
            FROM
            items
           WHERE
              items.is_active = 1 and   items.id = $items_id

        ";
  return $this->db->query($str)->getRowArray();
}


public function select_related_items_model_m($items_id)
{
    $str = "
        SELECT
            items.*
                    FROM
            items
         WHERE
            items.is_active = 1  and   items.is_blocked = 0 and  items.id != $items_id
        ORDER BY
            items.id DESC
       LIMIT 4
     ";
    return $this->db->query($str)->getResultArray();
}
public function select_projectsinfo_model_m($projects_id)
{
  $str = "
            SELECT
            projects.*
            FROM
            projects
           WHERE
              projects.is_active = 1 and   projects.id = $projects_id

        ";
  return $this->db->query($str)->getRowArray();
}


public function select_related_projects_model_m($projects_id)
{
    $str = "
        SELECT
            projects.*
                    FROM
            projects
         WHERE
            projects.is_active = 1  and   projects.is_blocked = 0 and  projects.id != $projects_id
        ORDER BY
            projects.id DESC
       LIMIT 5
     ";
    return $this->db->query($str)->getResultArray();
}
public function select_projectinfo_model_m($project_id)
{
  $str = "
            SELECT
            *
        FROM
            projects
           WHERE
              projects.is_active = 1 and   projects.is_blocked = 0 and   projects.id = $project_id

        ";
  return $this->db->query($str)->getRowArray();
}





public function search_products_m($searchTerm='')
{
    $str = "
    SELECT
        products.*,
        categories.name catname
         
    FROM
        products
        INNER JOIN categories ON categories.id = products.categories_id
        
    WHERE
        products.is_active = 1  and   products.is_blocked = 0     AND products.name LIKE '%$searchTerm%'
    ORDER BY
        products.id DESC

     ";
    return $this->db->query($str)->getResultArray();
}


public function search_project_m($searchTerm='')
{
    $str = "
        SELECT
          *
        FROM
            projects
        WHERE
            projects.is_active = 1  AND   projects.is_blocked = 0 AND projects.name LIKE '%$searchTerm%'


     ";
    return $this->db->query($str)->getResultArray();
}
public function select_last_price_model_m()
{
    $str = "
        SELECT
            price.*,
            GROUP_CONCAT(plan_features.feature_text SEPARATOR ', ') AS feature_text
        FROM
            price
        LEFT JOIN
            plan_features ON plan_features.price_id = price.id
        WHERE
            price.is_active = 1
            AND price.is_blocked = 0
        GROUP BY
            price.id
        ORDER BY
           price.position ASC
    ";

    return $this->db->query($str)->getResultArray();
}
public function save_subscribe_m($data)
{

      $builder = $this->db->table('subscribers');
      $builder->insert($data);
      $id=$this->db->insertId();
      return $id;

}

public function select_product_by_id($productId)
{
    $sql = "
        SELECT
            *
        FROM
            products
        WHERE
            products.is_active = 1
            AND products.is_blocked = 0
            AND products.id = ?
    ";

    return $this->db->query($sql, [$productId])->getRowArray();
}

public function checkUseraccount_m($email)
{
    $str = "SELECT * FROM users WHERE email = ? AND is_blocked = 0 AND is_active = 1";
    $query = $this->db->query($str, [$email]);
    return $query->getRowArray();
}

public function checkUser_m($email, $password)
{
    $str = "SELECT * FROM users WHERE email = ? AND password = ? AND is_blocked = 0 AND is_active = 1";
    $query = $this->db->query($str, [$email, $password]);
    return $query->getRowArray();
}
public function checkUseraccountbyemail_m($email)
   {
       $str = "SELECT * FROM users WHERE email = ? AND is_blocked = 0 AND is_active = 1";
       $query = $this->db->query($str, [$email]);
       return $query->getRowArray();
   }

   public function checkUserOtp_m($user_id, $otp)
{
    $str = "SELECT * FROM users WHERE id = ? AND otp = ? ";
    $query = $this->db->query($str, [$user_id, $otp]);
    return $query->getRowArray();
}

public function update_user_password_m($user_id, $password)
{
    $builder = $this->db->table('users');
    $builder->set('password', $password);
    $builder->where('id', $user_id);
    return $builder->update();
}
public function getUserData_m($user_id)
{
    $query = $this->db->query("SELECT * FROM users WHERE id = ?", [$user_id]);
    return $query->getResultArray();
}


   public function saveOrder_m(
        $generatedReference,
        $user_id,
        $address_name,
        $area,
        $street,
        $building,
        $floor,
        $additional_info,
        $promocode_id,
        $promo_code_amount_discounts,
        $order_total_amount,
        $order_currency,
        $order_shipping_amount,
        $order_status,
        $payment_option,
        $cartObj,
        $gfullname,
        $gphone,
        $gemail
    ) {

        // Insert order data
        $data = [
            'order_reference' => $generatedReference,
            'user_id' => $user_id,
            'address_name' => $address_name,
            'area' => $area,
            'street' => $street,
            'building' => $building,
            'floor' => $floor,
            'additional_note' => $additional_info,
            'promo_code_id' => $promocode_id,
            'promo_code_amount_discount' => $promo_code_amount_discounts,
            'order_total_amount' => $order_total_amount,
            'order_currency' => $order_currency,
            'order_shipping_amount' => $order_shipping_amount,
            'order_status' => $order_status,
            'payment_option' => $payment_option,
            'guest_name' => $gfullname,
            'guest_phone' => $gphone,
            'guest_email' => $gemail,
        ];

        $builder = $this->db->table('orders');
        $builder->insert($data);
        $order_id = $this->db->insertID();

        // Insert order items
        foreach ($cartObj as $item) {

            $product_id = $item->id;
            $quantity = $item->quantity;
            $price = $item->price;

            $this->updateStockQuantity($product_id,$quantity);
            $itemData = [
                'order_id' => $order_id,
                'product_id' => $product_id,
                 'quantity' => $quantity,
                'item_amount' => $price,
            ];

            $builder = $this->db->table('order_items');
            $builder->insert($itemData);
        }

        return $order_id;
    }




    public function updateStockQuantity($id, $qty)
    {
        // Escape and bind parameters for security
        $sql = "UPDATE products SET stock_quantity = stock_quantity - ? WHERE id = ?";
        $this->db->query($sql, [$qty, $id]);

        // Fetch the updated quantity
        $sql = "SELECT stock_quantity FROM products WHERE id = ?";
        $query = $this->db->query($sql, [$id]);
        return $query->getRowArray();
    }




public function isOrderReferenceUnique($orderReference)
  {
       $builder = $this->db->table('orders');
      $count = $builder->where('order_reference', $orderReference)->countAllResults();

      return $count == 0; // Returns true if the reference is unique, false if it already exists
  }

  public function updatePaymentStatus($externalId, $status) {
      // Prepare the SQL query with placeholders
      $sql = "UPDATE payments SET status = ? WHERE order_reference = ?";

      // Execute the query with the actual values
      $this->db->query($sql, [$status, $externalId]);
  }



public function select_paymentstatus_model_m($externalId)
{
    $str = "
              SELECT
               *
              from
              payments
              WHERE
                payments.is_active = 1 and  payments.is_blocked = 0 and  payments.order_reference = ?
          ";
    return $this->db->query($str,$externalId)->getRowArray();
}

public function getSinglePromocode($promocode)
{
    $today = date("Y-m-d");
    $sql = "
    SELECT * FROM promocodes
    WHERE promocode = ?
    AND start_date <= ?
    AND end_date >= ?
    AND is_active = 1
    AND is_blocked = 0
    ";

    $query = $this->db->query($sql, [$promocode, $today, $today]);
    $result = $query->getRowArray();

    // Uncomment the following line for debugging
    // echo $this->db->getLastQuery();

    return $result;
}

public function getshipping_fees()
{
    $sql = "SELECT * FROM shipping_fees WHERE id = 1";
    $query = $this->db->query($sql);
    return $query->getRowArray();
}

public function getActiveCurrencies()
{
    $sql = "SELECT * FROM currencies WHERE is_active = ?";
    $query = $this->db->query($sql, [1]); // 1 for active currencies
    return $query->getResultArray();
}

public function getCurrencyByAbbr($abbr)
{
    $sql = "SELECT * FROM currencies WHERE abbr = ?";
    $query = $this->db->query($sql, [$abbr]);
    return $query->getRowArray();
}

public function selectSingleOrder($order_id)
{
    $sql = "SELECT * FROM orders WHERE id = ? ORDER BY id DESC";
    $query = $this->db->query($sql, [$order_id]);

    return $query->getResultArray();
}
public function selectSingleOrderItems($order_id)
  {
      $sql = "
      SELECT order_items.*,
             products.name
      FROM   order_items
             INNER JOIN products
                     ON order_items.product_id = products.id
       WHERE  order_id = ?
      ORDER  BY order_items.id DESC
      ";
      $query = $this->db->query($sql, [$order_id]);

      return $query->getResultArray();
  }

  public function selectUserorders_model_m($userID)
{
    $sql = "
        SELECT
            a.*
        FROM
            orders a
        WHERE
            a.user_id = ?
            AND a.is_active = 1
    ";
    $query = $this->db->query($sql, [$userID]);

    return $query->getResultArray();
}


}
