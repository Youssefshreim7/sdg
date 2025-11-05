<?php
namespace App\Controllers;

use App\Models\HomeModel;
use App\Models\Cms\SuperModel;

class Home extends BaseController
{
  public function __construct()
  {
      $this->HomeModel = new HomeModel();
      $this->SuperModel = new SuperModel();

  }

  public function index()
  {
      $data = array();
      $data['sliders'] = $this->HomeModel->select_all_Sliders_model_m();
      $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
      $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();

     $data['news'] = $this->HomeModel->select_news_page_model_m();
     $data['projects'] = $this->HomeModel->select_projects_page_model_m();
     $data['testimonial'] = $this->HomeModel->select_testimonial_page_model_m();
     $data['team'] = $this->HomeModel->select_team_page_model_m();
     //$data['membership'] = $this->HomeModel->select_membership_page_model_m();
     $data['clients'] = $this->HomeModel->select_clients_page_model_m();
     $data['mainservices'] = $this->HomeModel->select_mainservices_page_model_m();
     $data['partner'] = $this->HomeModel->select_partner_page_model_m();
      $data['lastproducts'] = $this->HomeModel->select_last_products_model_m();
      $data['featproducts'] = $this->HomeModel->select_feat_products_model_m();


       //echo "<pre>";print_r($data['sliders'] );die();
       $data['overview'] = $this->HomeModel->select_overview_page_model_m();
       $data['faq'] = $this->HomeModel->select_faq_page_model_m();
       $data['csr'] = $this->HomeModel->select_csr_page_model_m();
       $data['about'] = $this->HomeModel->select_about_page_model_m();
       $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
       $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
       $data['lastnews'] = $this->HomeModel->select_last_post_model_m('1');
       $data['lastevents'] = $this->HomeModel->select_last_post_model_m('2');

       //   $data['cart'] = session()->get('cart') ? session()->get('cart') : [];
       $data['getCartData'] = $this->getCartData();

      //echo "<pre>";print_r($data['getCartData'] );die();



      return view('public/header', $data)
             . view('public/index', $data)
             . view('public/footer');
  }

  public function opencart()
  {
    $data = array();
    $data['getCartData'] = $this->getCartData();
    return view('public/cart_home', $data);
  }

  public function checkout()
{
    $data = array();

    $data['page'] = "about";
    $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
    $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();
    $data['about'] = $this->HomeModel->select_about_page_model_m();
     $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
    $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
      //echo "<pre>";print_r($data['aboutus'] );die();
     $data['shipping_fees'] = $this->HomeModel->getshipping_fees();

      $data['getCartData'] = $this->getCartData();

    //  $data['discount'] = 0;
      //$data['promocode_id'] = 0;


      $user_id = session()->get('userID') ? session()->get('userID') : 0;

  		if ($user_id !=0) {
  			$data['userdata'] = $this->HomeModel->getUserData_m($user_id);
  		} else {
  			$data['userdata'] = array();
  		}
    return view('public/header',  $data)
           . view('public/checkout', $data)
           . view('public/footer');
}

public function submitCheckout()
{

    // Get POST data

    // Get shipping fees from model
     $shipping_fees = $this->HomeModel->getshipping_fees();

    // Get user data from session
    $user_id = session()->get('userID') ?? 0;

    // Retrieve input data
    $address = $this->request->getPost('address');
    $area = $this->request->getPost('area');
    $street = $this->request->getPost('street');
    $building = $this->request->getPost('building');
    $floor = $this->request->getPost('floor');
    $additional_info = $this->request->getPost('additional_info');
     $promocode_id = $this->request->getPost('promocode_id');
    $promo_code_amount_discounts = $this->request->getPost('promo_code_amount_discounts');
    $order_currency = $this->request->getPost('order_currency');
    $order_total_amount = $this->request->getPost('order_total_amount');
    $payment_option = $this->request->getPost('payment_option');
    $order_shipping_amount = $shipping_fees['fees'];


    // Guest information
    $gfullname = $this->request->getPost('fullname');
    $gphone = $this->request->getPost('phone');
    $gemail = $this->request->getPost('email');


    if($payment_option == "Pay by Whish" && $user_id == 0){

      $checkUser = $this->SuperModel->selectData_m('users', ['email' => $gemail, 'is_active' => 1, 'is_blocked' => 0]);
      if ($checkUser) {
          return redirect()->to('home/checkout/?status=error&msg=Checkout failed. User already exists!')->with('error', 'User already exists');
      }

      $password = $this->request->getPost('password');
      $password = md5($password);
      $dbData = [
           "fullname" => $gfullname,
           "email" => $gemail,
           "password" => $password
      ];

      $id = $this->SuperModel->saveData_m('users', $dbData, 0);
      session()->set('userID', $id);
      session()->set('fullname', $gfullname);
      $user_id = $id;

    }

//    $order_shipping_amount = $shipping_fees['fees'];
    $order_status = 0;



    // Generate a unique order reference number
    $generatedReference = $this->generateOrderReferenceNumber();
    while (!$this->HomeModel->isOrderReferenceUnique($generatedReference)) {
        $generatedReference = $this->generateOrderReferenceNumber();
    }

    // Save the order

   //echo "<pre>";print_r($status);die();

   if ($payment_option == "Pay by Whish") {
     $currency ="USD";
        $paymentUrl = $this->handleWhishPayment($order_total_amount, $currency, $generatedReference, $user_id);
        if ($paymentUrl) {
            // Save order to database
            $orderid = $this->HomeModel->saveOrder_m(
                $generatedReference,
                $user_id,
                $address,
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
                session()->get('cart'),
                 $gfullname,
                $gphone,
                $gemail
             );

            // Save payment details
            $this->savePaymentDetails($generatedReference, $orderid, $order_total_amount, $currency, $user_id);
            session()->remove('cart');
            session()->set('promocode', null);
            // Redirect to payment URL
            return redirect()->to($paymentUrl);
        } else {
            // Handle payment initiation error
            return redirect()->to('home/checkout/?status=error&msg=Payment initiation failed');
        }
    } else {
        // Save order to database
        $orderid = $this->HomeModel->saveOrder_m(
            $generatedReference,
            $user_id,
            $address,
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
            session()->get('cart'),
             $gfullname,
            $gphone,
            $gemail
         );

        // Clear the cart
        session()->remove('cart');
        session()->remove('promocode');

        // Redirect to after checkout completed page
        return redirect()->to('home');
    }
}


private function handleWhishPayment($amount, $currency, $externalId, $user_id)
{
    $invoice = 'online payment Signee';

    $paymentUrl = $this->initiateWhishPayment($amount, $currency, $invoice, $externalId);
    if ($paymentUrl && strpos($paymentUrl, 'Error:') === false) {
        return $paymentUrl;
    } else {
        return false;
    }
}



private function savePaymentDetails($externalId, $orderid, $amount, $currency, $user_id)
{
    $dbData = [
        'order_reference' => $externalId,
        'user_id' => $user_id,
        'order_id' => $orderid,
        'amount' => $amount,
        'currency' => $currency,
        'invoice' => 'online payment Signee',
        'status' => "Not Paid"
    ];

    $this->SuperModel->saveData_m('payments', $dbData, 0);
}



public function generateOrderReferenceNumber($length = 15) {
    $characters = '0123456789'; // Numeric characters only
    $max = strlen($characters) - 1;
    $referenceNumber = '';

    for ($i = 0; $i < $length; $i++) {
        $referenceNumber .= $characters[random_int(0, $max)];
    }

    return $referenceNumber;
}


public function signin()
{
  $data = array();

  $data['page'] = "about";
  $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
  $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();
  $data['about'] = $this->HomeModel->select_about_page_model_m();
   $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
  $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
    //echo "<pre>";print_r($data['aboutus'] );die();
    $data['getCartData'] = $this->getCartData();


  return view('public/header',  $data)
         . view('public/signin', $data)
         . view('public/footer');
}

public function signup()
{
  $data = array();

  $data['page'] = "about";
  $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
  $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();
  $data['about'] = $this->HomeModel->select_about_page_model_m();
   $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
  $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
    //echo "<pre>";print_r($data['aboutus'] );die();
    $data['getCartData'] = $this->getCartData();


  return view('public/header',  $data)
         . view('public/signup', $data)
         . view('public/footer');
}

public function forgot_password()
{
  $data = array();

  $data['page'] = "forgotpassword";
  $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
  $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();
  $data['about'] = $this->HomeModel->select_about_page_model_m();
   $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
  $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
    //echo "<pre>";print_r($data['aboutus'] );die();
    $data['getCartData'] = $this->getCartData();


  return view('public/header',  $data)
         . view('public/forgotpassword', $data)
         . view('public/footer');
}

public function submitforgot()
{

    $data = $this->request->getPost();

    $email = $data['email'];
    $checkAcc = $this->HomeModel->checkUseraccountbyemail_m($email);
    if (!$checkAcc) {
        return redirect()->to('home/forgot_password/?status=error&msg=forgot password failed. The user does not exist.')
                         ->with('error', 'The user does not exist.');
    }

    session()->set('otpuserid', $checkAcc['id']);


    // Generate OTP
    $otp_code = '';
    for ($i = 0; $i < 6; $i++) {
        $otp_code .= mt_rand(0, 9);
    }

    $dbDataa = [

        "otp" => $otp_code,

    ];

    $this->SuperModel->saveData_m('users', $dbDataa, $checkAcc['id']);



    return redirect()->to('home/newpassword');
}

public function submitnewpassword()
    {

        $data = $this->request->getPost();

        $otp = $data['otp'];
        $password = $data['password'];
        $cpassword = $data['cpassword'];

        if ($password != $cpassword) {
            return redirect()->to('home/newpassword/?status=error&msg=Failed to set new Password. Password mismatch!')
                             ->with('error', 'Password mismatch');
        }

        $passwordHash = md5($password);
        $user_id = session()->get('otpuserid') ? session()->get('otpuserid') : 0;

        if ($user_id == 0) {
            return redirect()->to('home/newpassword/?status=error&msg=Invalid user session.')
                             ->with('error', 'Invalid user session');
        }

        // Check OTP
        $checkOtp = $this->HomeModel->checkUserOtp_m($user_id, $otp);
        if (!$checkOtp) {
            return redirect()->to('home/newpassword/?status=error&msg=Invalid OTP.')
                             ->with('error', 'Invalid OTP');
        }

        // Update password
        $this->HomeModel->update_user_password_m($user_id, $passwordHash);

        return redirect()->to('home/signin')->with('success', 'Password updated successfully');
    }

public function newpassword()
{
  $data = array();

  $data['page'] = "newpassword";
  $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
  $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();
  $data['about'] = $this->HomeModel->select_about_page_model_m();
   $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
  $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
    //echo "<pre>";print_r($data['aboutus'] );die();
    $data['getCartData'] = $this->getCartData();


  return view('public/header',  $data)
         . view('public/newpassword', $data)
         . view('public/footer');
}

public function register()
{
    $tableName = 'users';

    $data = $this->request->getPost();

    $name = $data['name'];
    $email = $data['email'];
    $password = $data['password'];

    $password = md5($password);

    if ($data['password'] != $data['cpassword']) {
        return redirect()->to('home/signup/?status=error&msg=Failed to signup. Password mismatch!')->with('error', 'Password mismatch');
    }

    $checkUser = $this->SuperModel->selectData_m($tableName, ['email' => $email, 'is_active' => 1, 'is_blocked' => 0]);
    if ($checkUser) {
        return redirect()->to('home/signup/?status=error&msg=Signup failed. User already exists!')->with('error', 'User already exists');
    }

    $dbData = [
         "fullname" => $name,
         "email" => $email,
         "password" => $password
    ];

    $id = $this->SuperModel->saveData_m($tableName, $dbData, 0);
    session()->set('userID', $id);
    session()->set('fullname', $name);

    return redirect()->to('home');
}

public function login()
{
    $tableName = 'users';

    $data = $this->request->getPost();

    $email = $data['email'];
    $password = md5($data['password']);

    // Check if user exists
    $checkAcc = $this->HomeModel->checkUseraccount_m($email);
    if (!$checkAcc) {
        return redirect()->to('home/signin/?status=error&msg=Login failed. The user does not exist.')->with('error', 'The user does not exist.');
    }

    // Validate user credentials
    $checkUser = $this->HomeModel->checkUser_m($email, $password);
    if (!$checkUser) {
        return redirect()->to('home/signin/?status=error&msg=Login failed. Incorrect password.')->with('error', 'Incorrect password.');
    }

    // Set session data
    session()->set('userID', $checkUser['id']);
    session()->set('fullname', $checkUser['fullname']);

    // Redirect to the base URL
    return redirect()->to(base_url());
}

public function logout()
{
    // Unset session data
    session()->remove('userID');
    session()->remove('fullname');

    // Redirect to the base URL
    return redirect()->to(base_url());
}

  public function about()
{
    $data = array();

    $data['page'] = "about";
    $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
    $data['csr'] = $this->HomeModel->select_csr_page_model_m();
    $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();
    $data['about'] = $this->HomeModel->select_about_page_model_m();
    $data['team'] = $this->HomeModel->select_team_page_model_m();
    $data['membership'] = $this->HomeModel->select_membership_page_model_m();
    $data['csrr'] = $this->HomeModel->select_last_csr_model_m();
    $data['partner'] = $this->HomeModel->select_partner_page_model_m();
    $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
    $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
      //echo "<pre>";print_r($data['aboutus'] );die();
      $data['getCartData'] = $this->getCartData();


    return view('public/header',  $data)
           . view('public/about', $data)
           . view('public/footer');
}
public function faq()
{
  $data = array();

  $data['page'] = "faq";
  $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
  $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();
  $data['faq'] = $this->HomeModel->select_faq_page_model_m();
  $data['team'] = $this->HomeModel->select_team_page_model_m();
  $data['membership'] = $this->HomeModel->select_membership_page_model_m();
  $data['partner'] = $this->HomeModel->select_partner_page_model_m();
  $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
  $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
    //echo "<pre>";print_r($data['aboutus'] );die();
    $data['getCartData'] = $this->getCartData();


  return view('public/header',  $data)
         . view('public/faq', $data)
         . view('public/footer');
}
public function csr()
{
  $data = array();

  $data['page'] = "about";
  $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
  $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();
  $data['csr'] = $this->HomeModel->select_csr_page_model_m();
  $data['team'] = $this->HomeModel->select_team_page_model_m();
  $data['membership'] = $this->HomeModel->select_membership_page_model_m();
  $data['partner'] = $this->HomeModel->select_partner_page_model_m();
  $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
  $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
    //echo "<pre>";print_r($data['aboutus'] );die();
    $data['getCartData'] = $this->getCartData();


  return view('public/header',  $data)
         . view('public/csr', $data)
         . view('public/footer');
}
public function news()
{
  $data = array();

  $data['page'] = "news";
  $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
  $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();
  $data['about'] = $this->HomeModel->select_about_page_model_m();
  $data['team'] = $this->HomeModel->select_team_page_model_m();
  $data['news'] = $this->HomeModel->select_news_page_model_m();
   $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
  $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
    //echo "<pre>";print_r($data['aboutus'] );die();
    $data['getCartData'] = $this->getCartData();


  return view('public/header',  $data)
         . view('public/news', $data)
         . view('public/footer');
}
public function projects()
{
  $data = array();

  $data['page'] = "projects";
  $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
  $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();
  $data['about'] = $this->HomeModel->select_about_page_model_m();
  $data['team'] = $this->HomeModel->select_team_page_model_m();
  $data['projects'] = $this->HomeModel->select_projects_page_model_m();
   $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
  $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
    //echo "<pre>";print_r($data['aboutus'] );die();
    $data['getCartData'] = $this->getCartData();


  return view('public/header',  $data)
         . view('public/projects', $data)
         . view('public/footer');
}
public function testimonial()
{
  $data = array();

  $data['page'] = "testimonial";
  $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
  $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();
  $data['about'] = $this->HomeModel->select_about_page_model_m();
  $data['team'] = $this->HomeModel->select_team_page_model_m();
  $data['testimonial'] = $this->HomeModel->select_testimonial_page_model_m();
   $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
  $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
    //echo "<pre>";print_r($data['aboutus'] );die();
    $data['getCartData'] = $this->getCartData();


  return view('public/header',  $data)
         . view('public/testimonial', $data)
         . view('public/footer');
}
public function allproducts()
{
  $data = array();

  $pager = service('pager');
  $page = $this->request->getVar('page') ?? 1;
  $perPage = 9;
  $total = $this->HomeModel->count_all_products();
  // Fetch products for the current page
  $data['allprod'] = $this->HomeModel->select_products_by_all_model_m($perPage, ($page - 1) * $perPage);

    // Pass pagination links to the view
//  $data['pager'] = $pager->makeLinks($page, $perPage, $total);
  $data['pager'] = $pager->makeLinks($page, $perPage, $total, 'default_costum');


  $data['page'] = "allproducts";
  $data['about'] = $this->HomeModel->select_about_page_model_m();
   $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
  $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

  $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
  $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();
  $data['getCartData'] = $this->getCartData();


  //$data['prod_by_cat'] = $this->HomeModel->select_products_by_category_model_m($cat_id);

    //echo "<pre>";print_r($data['aboutus'] );die();


  return view('public/header',  $data)
         . view('public/allproducts', $data)
         . view('public/footer');
}

public function products_by_category($cat_id)
{
  $data = array();
  $data['getCartData'] = $this->getCartData();

  $pager = service('pager');
  $page = $this->request->getVar('page') ?? 1;
  $perPage = 9;
  $total = $this->HomeModel->count_products_by_category($cat_id);
  // Fetch products for the current page
  $data['prod_by_cat'] = $this->HomeModel->select_products_by_category_model_m($cat_id, $perPage, ($page - 1) * $perPage);

    // Pass pagination links to the view
//  $data['pager'] = $pager->makeLinks($page, $perPage, $total);
  $data['pager'] = $pager->makeLinks($page, $perPage, $total, 'default_costum');


  $data['page'] = "products_by_category";
  $data['about'] = $this->HomeModel->select_about_page_model_m();
   $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
  $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

  $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
  $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();

  $data['cat_info'] = $this->HomeModel->select_category_details_model_m($cat_id);

  //$data['prod_by_cat'] = $this->HomeModel->select_products_by_category_model_m($cat_id);

    //echo "<pre>";print_r($data['aboutus'] );die();


  return view('public/header',  $data)
         . view('public/products_by_cat', $data)
         . view('public/footer');
}

public function products_by_brand($brand_id)
{
  $data = array();
  $data['getCartData'] = $this->getCartData();

  $data['page'] = "products_by_brand";

  $pager = service('pager');
  $page = $this->request->getVar('page') ?? 1;
  $perPage = 9;
  $total = $this->HomeModel->count_products_by_brand($brand_id);
  // Fetch products for the current page
  $data['prod_by_brand'] = $this->HomeModel->select_products_by_brand_model_m($brand_id, $perPage, ($page - 1) * $perPage);

    // Pass pagination links to the view
  //  $data['pager'] = $pager->makeLinks($page, $perPage, $total);
  $data['pager'] = $pager->makeLinks($page, $perPage, $total, 'default_costum');


  $data['about'] = $this->HomeModel->select_about_page_model_m();
   $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
  $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

  $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
  $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();

  $data['brand_info'] = $this->HomeModel->select_brand_details_model_m($brand_id);


    //echo "<pre>";print_r($data['aboutus'] );die();


  return view('public/header',  $data)
         . view('public/products_by_brand', $data)
         . view('public/footer');
}

public function productdetails($product_id)
{
  $data = array();

  $data['page'] = "productdetails";

  $data['about'] = $this->HomeModel->select_about_page_model_m();
  $data['overview'] = $this->HomeModel->select_overview_page_model_m();
  $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
  $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
  $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
  $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();

  $data['product_info'] = $this->HomeModel->select_product_details_model_m($product_id);
  $data['productgall'] = $this->HomeModel->select_gallery_product_model_m($product_id);
  $data['product_related'] = $this->HomeModel->select_product_related_model_m($product_id,$data['product_info']['brands_id']);
  $data['getCartData'] = $this->getCartData();

  //  echo "<pre>";print_r($data['product_related'] );die();


  return view('public/header',  $data)
         . view('public/productdetails', $data)
         . view('public/footer');
}
public function newsdetails($news_id)
{
  $data = array();

  $data['page'] = "newsdetails";

  $data['about'] = $this->HomeModel->select_about_page_model_m();
  $data['overview'] = $this->HomeModel->select_overview_page_model_m();
  $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
  $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
  $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
  $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();

  $data['news'] = $this->HomeModel->select_last_news_model_m();
  $data['newsinfo'] = $this->HomeModel->select_newsinfo_model_m($news_id);
  $data['newsgall'] = $this->HomeModel->select_gallery_news_model_m($news_id);
  $data['newsrelated'] = $this->HomeModel->select_related_news_model_m($news_id);

//echo "<pre>";print_r($data['newsgall'] );die();


  return view('public/header',  $data)
         . view('public/newsdetails', $data)
         . view('public/footer');
}

public function projectsdetails($projects_id)
{
  $data = array();

  $data['page'] = "projectsdetails";

  $data['about'] = $this->HomeModel->select_about_page_model_m();
  $data['overview'] = $this->HomeModel->select_overview_page_model_m();
  $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
  $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
  $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
  $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();

  $data['projects'] = $this->HomeModel->select_last_projects_model_m();
  $data['projectsinfo'] = $this->HomeModel->select_projectsinfo_model_m($projects_id);
  $data['projectsgall'] = $this->HomeModel->select_gallery_projects_model_m($projects_id);
  $data['projectsrelated'] = $this->HomeModel->select_related_projects_model_m($projects_id);

 //echo "<pre>";print_r($data['projectsgall'] );die();


  return view('public/header',  $data)
         . view('public/projectsdetails', $data)
         . view('public/footer');
}
public function posts($post_cat_id)
{
  $data = array();

  $data['page'] = "posts";
  $data['getCartData'] = $this->getCartData();

  $data['about'] = $this->HomeModel->select_about_page_model_m();
  $data['overview'] = $this->HomeModel->select_overview_page_model_m();
  $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
  $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

  $data['cat_info'] = $this->HomeModel->select_posts_cat_model_m($post_cat_id);
  $data['allposts'] = $this->HomeModel->select_posts_model_m($post_cat_id);
  $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
  $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();
    //echo "<pre>";print_r($data['aboutus'] );die();


  return view('public/header',  $data)
         . view('public/posts', $data)
         . view('public/footer');
}

public function postdetails($post_id)
{
    $data = array();
    $data['page'] = "postdetails";
    $data['getCartData'] = $this->getCartData();

    $data['about'] = $this->HomeModel->select_about_page_model_m();
    $data['overview'] = $this->HomeModel->select_overview_page_model_m();
    $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
    $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
    $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
    $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();
    $data['postinfo'] = $this->HomeModel->select_postinfo_model_m($post_id);
    $data['postgall'] = $this->HomeModel->select_gallery_post_model_m($post_id);
    $data['postrelated'] = $this->HomeModel->select_related_posts_model_m($post_id);

  //  echo "<pre>";print_r($data['postinfo'] );die();


    return view('public/header',  $data)
           . view('public/postdetails', $data)
           . view('public/footer');
}

public function projects()
{
  $data = array();

  $data['page'] = "projects";

  $data['about'] = $this->HomeModel->select_about_page_model_m();
  $data['overview'] = $this->HomeModel->select_overview_page_model_m();
  $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
  $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

  $data['allprojects'] = $this->HomeModel->select_projects_model_m();

    //echo "<pre>";print_r($data['aboutus'] );die();


  return view('public/header',  $data)
         . view('public/projects', $data)
         . view('public/footer');
}

public function projectdetails($project_id)
{
    $data = array();
    $data['page'] = "projectdetails";

    $data['about'] = $this->HomeModel->select_about_page_model_m();
    $data['overview'] = $this->HomeModel->select_overview_page_model_m();
    $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
    $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();

    $data['projectinfo'] = $this->HomeModel->select_projectinfo_model_m($project_id);
    $data['projectgall'] = $this->HomeModel->select_gallery_projects_model_m($project_id);
    $data['projectrelated'] = $this->HomeModel->select_related_projects_model_m($project_id);

  //  echo "<pre>";print_r($data['postinfo'] );die();


    return view('public/header',  $data)
           . view('public/projectdetails', $data)
           . view('public/footer');
}

public function contactinfo()
{
    $data = array();
    $data['page'] = "contactus";
    $data['getCartData'] = $this->getCartData();
    $data['faq'] = $this->HomeModel->select_faq_page_model_m();
    $data['about'] = $this->HomeModel->select_about_page_model_m();
    $data['overview'] = $this->HomeModel->select_overview_page_model_m();
    $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
    $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
      //echo "<pre>";print_r($data['aboutus'] );die();
      $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
      $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();

    return view('public/header',  $data)
           . view('public/contactus', $data)
           . view('public/footer');
}

public function send_mail()
 {
     helper(['form']);

     $from_email = $this->request->getPost('email');
     $to_email = "info@signee.net";
     $subject = $this->request->getPost('subject');
     $name = $this->request->getPost('name');
     $phone = $this->request->getPost('phone');

      $message = $this->request->getPost('message');

     $line = "\n";
      $me = "Message: ";
        $ph = "Phone: ";
      $message_body =   $ph . ' ' .  $phone . $me . ' ' . $line . ' ' . $message;

     // Prepare data for database if needed


     // Load email library
     $email = \Config\Services::email();

     $email->setFrom($from_email, $name);
     $email->setTo($to_email);
     $email->setSubject($subject);
     $email->setMessage($message_body);

     // Send mail
     if ($email->send()) {
       session()->setFlashdata('success', 'Your message has been sent successfully.');
     } else {
       session()->setFlashdata('error', 'Failed to send your message. Please try again.');
     }

     return redirect()->to(site_url('home/contactinfo'));
 }

 public function support()
 {
     $data = array();
     $data['page'] = "support";

     $data['about'] = $this->HomeModel->select_about_page_model_m();
     $data['overview'] = $this->HomeModel->select_overview_page_model_m();
     $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
     $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
       //echo "<pre>";print_r($data['aboutus'] );die();


     return view('public/header',  $data)
            . view('public/support', $data)
            . view('public/footer');
 }

 public function send_support_mail()
  {
      helper(['form']);

      $from_email = $this->request->getPost('email');
      $to_email = "info@signee.net";
      $subject = $this->request->getPost('subject');
      $name = $this->request->getPost('name');
       $message = $this->request->getPost('message');

      $line = "\n";
       $me = "Message: ";
       $message_body = $me . ' ' . $line . ' ' . $message;

      // Prepare data for database if needed


      // Load email library
      $email = \Config\Services::email();

      $email->setFrom($from_email, $name);
      $email->setTo($to_email);
      $email->setSubject($subject);
      $email->setMessage($message_body);

      // Send mail
      if ($email->send()) {
        session()->setFlashdata('success', 'Your message has been sent successfully.');
      } else {
        session()->setFlashdata('error', 'Failed to send your message. Please try again.');
      }

      return redirect()->to(site_url('home/support'));
  }

public function searchresult()
{

    $data = array();

    $data['page'] = "searchresult";
    $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
    $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();
    $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
    $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
    $searchTerm = $this->request->getGet('search');

    $data['getCartData'] = $this->getCartData();

     $data['results_products'] = $this->HomeModel->search_products_m($searchTerm);
//     $data['results_projects'] = $this->HomeModel->search_project_m($searchTerm);


    // Example: Pass search term to view
    $data['searchTerm'] = $searchTerm;

    // Load your view with the search results or data
     return view('public/header',  $data)
           . view('public/search_results', $data)
           . view('public/footer');
}

public function subscribe()
{
    // Validate input
    $validation = \Config\Services::validation();
    $validation->setRule('email', 'Email', 'required|valid_email');

    if (!$validation->withRequest($this->request)->run()) {
        // Validation failed
        return redirect()->back()->withInput()->with('error', $validation->getErrors());
    }

    // Validation passed
    $email = $this->request->getPost('email');
    $dbData = ['email' => $email];

    // Save to database using model method
    $this->HomeModel->save_subscribe_m($dbData);

    // Set success message
    $successMessage = 'Thank you for subscribing!';

    // Redirect back to the same page with success message
    return redirect()->back()->with('success', $successMessage);
}

public function indexx()
{

    $data['cartItems'] = session()->get('cart') ?? [];
    return view('cart/index', $data);
}

public function cart()
{
  $data = array();

  $data['page'] = "cart";
  $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
  $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();
  $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
  $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
    //echo "<pre>";print_r($data['aboutus'] );die();

  $data['getCartData'] = $this->getCartData();
  //echo "<pre>";print_r($data['getCartData'] );die();



  return view('public/header',  $data)
         . view('public/cart', $data)
         . view('public/footer');
}


private function getCartData()
{
     $cart = session()->get('cart') ? session()->get('cart') : [];

    $cartForTable = [];
    $total = 0;
    $totalQty = 0;

    foreach ($cart as $item) {
        $rowTotal = $item->price * $item->quantity; // Calculate row total
        $cartForTable[] = [
            'id' => $item->id,
            'name' => $item->name,
            'quantity' => $item->quantity,
            'price' => $item->price,
            'image' => $item->image,
            'stock_quantity' => $item->stock_quantity,
            'rowTotal' => $rowTotal,
        ];

        $total += $rowTotal;
        $totalQty += $item->quantity;
    }

    return [
        'cartForTable' => $cartForTable,
        'total' => $total,
        'totalQty' => $totalQty,
    ];
}

public function add()
{
        if ($this->request->getPost()) {
        $productId = $this->request->getPost('productId');
        $quantity = $this->request->getPost('quantity');


        $cart = session()->get('cart') ? session()->get('cart') : [];

         $product = $this->HomeModel->select_product_by_id($productId);

        if ($product) {
            if (isset($cart[$productId])) {
                $cart[$productId]->quantity += $quantity;
            } else {
                $item = new \stdClass();
                $item->id = $product['id'];
                $item->name = $product['name'];
                $item->price = $product['price'];
                $item->image = $product['image'];
                $item->stock_quantity = $product['stock_quantity'];
                $item->quantity = $quantity;

                $cart[$productId] = $item;
            }
            session()->set('cart', $cart);


            // Calculate the total quantity
            $totalQty = 0;
            foreach ($cart as $item) {
                $totalQty += $item->quantity;
            }

            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Product added to cart',
                'totalQty' => $totalQty
            ]);
         }

        return $this->response->setJSON(['status' => 'error', 'message' => 'Product not found']);
    }

    return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid request']);
}

public function update_cart()
{
    if ($this->request->getPost()) {
        $productId = $this->request->getPost('productId');
        $quantity = $this->request->getPost('quantity');
        $cart = session()->get('cart') ? session()->get('cart') : [];

        if (isset($cart[$productId])) {
            $cart[$productId]->quantity = $quantity;
            $cart[$productId]->rowTotal = $cart[$productId]->price * $quantity;
            session()->set('cart', $cart);

            // Calculate the new grand total and total quantity
            $grandTotal = 0;
            $totalQty = 0;
            foreach ($cart as $item) {
                $grandTotal += $item->price * $item->quantity;
                $totalQty += $item->quantity;
            }

            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Cart updated',
                'rowTotal' => $cart[$productId]->rowTotal,
                'grandTotal' => $grandTotal,
                'totalQty' => $totalQty
            ]);
        }

        return $this->response->setJSON(['status' => 'error', 'message' => 'Product not found in cart']);
    }

    return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid request']);
}
   public function delete_product()
  {
      if ($this->request->getPost()) {
          $productId = $this->request->getPost('productId');

           $cart = session()->get('cart') ? session()->get('cart') : [];

           if (isset($cart[$productId])) {
                unset($cart[$productId]); // Remove the item from the cart
                session()->set('cart', $cart);

                // Calculate the new grand total
                $grandTotal = 0;
                $totalQty = 0;
                foreach ($cart as $item) {
                    $grandTotal += $item->price * $item->quantity;
                    $totalQty += $item->quantity;
                }

                return $this->response->setJSON([
                    'status' => 'success',
                    'message' => 'Product removed from cart',
                    'grandTotal' => $grandTotal,
                    'totalQty' => $totalQty
                ]);
            }


          return $this->response->setJSON(['status' => 'error', 'message' => 'Product not found in cart']);
      }

      return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid request']);
  }

   public function clear_cart()
{
     session()->remove('cart'); // Removes the cart session data

    return $this->response->setJSON(['status' => 'success', 'message' => 'Cart has been cleared']);
}



public function checkPaymentStatus() {
    $currency = $this->request->getPost('currency');
    $externalId = $this->request->getPost('externalId');

    $status = $this->getPaymentStatus($currency, $externalId);

    if ($status && strpos($status, 'Error:') === false) {
        echo "Payment status: " . $status;
    } else {
        // Handle error
        echo $status; // Display the error message
    }
}

public function initiateWhishPayment($amount, $currency, $invoice, $externalId) {
    $url = 'https://lb.sandbox.whish.money/itel-service/api/payment/whish'; // API endpoint for Whish

    // Define the callback and redirect URLs
    $successCallbackUrl = site_url('home/callbackUrl?externalId=' . $externalId . '&currency=' . $currency);
    $failureCallbackUrl = site_url('home/callbackUrl?externalId=' . $externalId . '&currency=' . $currency);
    $successRedirectUrl = site_url('home/paymentstatus');
    $failureRedirectUrl = site_url('home/paymentstatus');

    // Prepare the data for the request
    $data = [
        'amount' => $amount,
        'currency' => $currency,
        'invoice' => $invoice,
        'externalId' => (int) $externalId, // Cast externalId to an integer
        'successCallbackUrl' => 'https://signee.net/',
        'failureCallbackUrl' => 'https://signee.net/',
        'successRedirectUrl' => 'https://translate.google.com/',
        'failureRedirectUrl' => 'https://translate.google.com/'
    ];

    // Initialize cURL session
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Connection: keep-alive',
        'channel: 10193045', // Replace with the actual channel value
        'secret: 9bb5c47ca16a4926aecdd1299f94b449', // Replace with the actual secret value
        'websiteurl: signee.net' // Replace with the actual website URL value

    ]);

    // Execute cURL request
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        $error = 'cURL Error: ' . curl_error($ch);
        curl_close($ch);
        return $error;
    }

    // Close cURL session
    curl_close($ch);

    // Decode JSON response
    $responseData = json_decode($response, true);

    // Check if $responseData is an array and has the 'status' key
    if (is_array($responseData) && isset($responseData['status'])) {
        // Check if request was successful
        if ($responseData['status']) {
            // Ensure 'data' key exists and is an array before accessing
            if (isset($responseData['data']) && is_array($responseData['data']) && isset($responseData['data']['collectUrl'])) {
                return $responseData['data']['collectUrl']; // Return the payment URL
            } else {
                return 'Error: Invalid response format - missing collectUrl';
            }
        } else {
            // Handle error case
            $code = isset($responseData['code']) ? (is_array($responseData['code']) ? json_encode($responseData['code']) : $responseData['code']) : 'Unknown';
            $dialogTitle = isset($responseData['dialog']['title']) ? (is_array($responseData['dialog']['title']) ? json_encode($responseData['dialog']['title']) : $responseData['dialog']['title']) : 'No title provided';
            $dialogMessage = isset($responseData['dialog']['message']) ? (is_array($responseData['dialog']['message']) ? json_encode($responseData['dialog']['message']) : $responseData['dialog']['message']) : 'No message provided';
            return 'Error: ' . $code . ' - ' . $dialogTitle . ': ' . $dialogMessage; // Return error information
        }
    } else {
        return 'Error: Invalid response format - missing status';
    }
}








public function callbackUrl()
{
    // Extract parameters from the request
    $externalId = $this->request->getGet('externalId');
    $currency = $this->request->getGet('currency'); // Ensure you pass this parameter or use a default value

    // Get the payment status
    $status = $this->getPaymentStatus($currency, $externalId);

    // Check if getPaymentStatus returned an error
    if (strpos($status, 'Error:') === 0) {
        // An error occurred while getting the payment status
        // Log the error or handle it accordingly
        log_message('error', 'Payment status check failed: ' . $status);

        // Respond to the payment provider (e.g., with HTTP 500 Internal Server Error or appropriate status)
        return $this->response->setStatusCode(500)->setBody('Payment status check failed');
    }

    // Update the payment status in the database
    $this->HomeModel->update_payment_status_m($externalId, $status);

    // Handle the payment status
    if ($status == 'success') {
        // Payment was successful
        // Example: $this->orderModel->updateOrderStatus($externalId, 'paid');

        // Respond to the payment provider (e.g., with HTTP 200 OK)
        return $this->response->setStatusCode(200)->setBody('Payment status updated successfully');
    } else {
        // Payment failed or status is not as expected
        // Example: $this->orderModel->updateOrderStatus($externalId, 'failed');

        // Respond to the payment provider (e.g., with HTTP 500 Internal Server Error or appropriate status)
        return $this->response->setStatusCode(500)->setBody('Payment status update failed');
    }
}

public function paymentstatus()
{
    $externalId = session()->get('externalId');
    //$userID = session()->get('userID');

    session()->remove('externalId');

    // Get the payment status
     $data = array();

    $data['page'] = "paymentstatus";
    $data['allbrands'] = $this->HomeModel->select_all_brands_model_m();
    $data['allcats'] = $this->HomeModel->select_all_categorys_model_m();
    $data['about'] = $this->HomeModel->select_about_page_model_m();
     $data['contactinfo'] = $this->HomeModel->select_contact_info_model_m();
    $data['socialmedia'] = $this->HomeModel->select_socialmedia_model_m();
      //echo "<pre>";print_r($data['aboutus'] );die();
      $data['getCartData'] = $this->getCartData();

      $data['paystatus'] = $this->HomeModel->select_paymentstatus_model_m($externalId);


    return view('public/header',  $data)
           . view('public/paymentstatus', $data)
           . view('public/footer');
}


public function getPaymentStatus($currency, $externalId) {
    $url = 'https://lb.sandbox.whish.money/itel-service/api/payment/collect/status';

    $data = [
        'currency' => $currency,
        'externalId' => (int) $externalId,
    ];

    // Initialize cURL session
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Connection: keep-alive',
            'channel: 10193045', // Replace with the actual channel value
            'secret: 9bb5c47ca16a4926aecdd1299f94b449', // Replace with the actual secret value
            'websiteurl: signee.net' // Replace with the actual website URL value
        ]
    ]);

    // Execute cURL request
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        $error = 'cURL Error: ' . curl_error($ch);
        curl_close($ch);
        return $error;
    }

    // Close cURL session
    curl_close($ch);

    // Decode JSON response
    $responseData = json_decode($response, true);

    // Check if $responseData is an array and has the 'status' key
    if (is_array($responseData) && isset($responseData['status'])) {
        // Check if request was successful
        if ($responseData['status']) {
            // Ensure 'data' key exists and is an array before accessing
            if (isset($responseData['data']) && is_array($responseData['data']) && isset($responseData['data']['collectStatus'])) {
                return $responseData['data']['collectStatus']; // Return the collect status
            } else {
                return 'Error: Invalid response format - missing collectStatus';
            }
        } else {
            // Handle error case
            $code = isset($responseData['code']) ? (is_array($responseData['code']) ? json_encode($responseData['code']) : $responseData['code']) : 'Unknown';
            $dialogTitle = isset($responseData['dialog']['title']) ? (is_array($responseData['dialog']['title']) ? json_encode($responseData['dialog']['title']) : $responseData['dialog']['title']) : 'No title provided';
            $dialogMessage = isset($responseData['dialog']['message']) ? (is_array($responseData['dialog']['message']) ? json_encode($responseData['dialog']['message']) : $responseData['dialog']['message']) : 'No message provided';
            return 'Error: ' . $code . ' - ' . $dialogTitle . ': ' . $dialogMessage;
        }
    } else {
        return 'Error: Invalid response format - missing status';
    }
}

public function applyPromoCode()
{
    // Load the session service
    session()->set('promocode', null);

    $echo = new \stdClass();
    $promocode = $this->request->getPost('promocode');
    $promocodeData = $this->HomeModel->getSinglePromocode($promocode); // Assuming the model is properly loaded and named

    if (isset($promocodeData) && !empty($promocodeData)) {
        $echo->class = "text-success";
        $x = $promocodeData['percentage'] . "%";
        $echo->msg = "A " . $x . " Will be applied!";
        session()->set('promocode', $promocodeData);
    } else {
        $echo->class = "text-danger";
        $echo->msg = "Invalid promocode!";
        session()->set('promocode', null);
    }

    return $this->response->setJSON($echo);
}




}
