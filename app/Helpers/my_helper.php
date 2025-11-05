<?php

if ( ! function_exists('text_format')){
	function text_format($str) {
		return ucwords(str_replace("_", " ", $str));
	}
}

if ( ! function_exists('datetime_well_format'))
{
	function datetime_well_format($datetime) {
		$date = date_create($datetime);
		return date_format($date, "d-M-Y H:i");
	}
}


if ( ! function_exists('comma_seperated_into_li'))
{
	function comma_seperated_into_li($string) {
		$x = "<ul>";
		$y = explode(",", $string);
		foreach ($y as $key => $value) {
			$x .= "<li>" . $value . "</li>";
		}
		$x .= "</ul>";

		return $x;
	}
}



if ( ! function_exists('amount'))
{
	function amount($priceOne, $priceTwo) {
		$amount = array();

		$smallPrice = 0;
		$bigPrice = 0;
		if($priceOne >= $priceTwo){
			$amount['small_price'] = $priceTwo;
			$amount['large_price'] = $priceOne;
		} else {

			$amount['small_price'] = $priceOne;
			$amount['large_price'] = $priceTwo;
		}
		if ($priceTwo != 0) {
			$amount['percentage_off_num'] = round(abs((1 - $priceOne / $priceTwo) * 100));
		} else {
			$amount['percentage_off_num'] = 0;
		}

		$amount['currency'] = CURRENCY;

		return $amount;
	}
}

if ( ! function_exists('singleProduct'))
{
	function singleProduct($productArr) {
		// echo "<pre>";print_r($productArr);die();
		$link  = site_url('welcome/productdetails/?id='.$productArr['id']);
		$linkQuickView  = site_url('welcome/shopQuickView/?id='.$productArr['id']);
		$img  = base_url() . '/uploads/'.$productArr['photo'];
		$amount = amount($productArr['price'], $productArr['secondary_price']);
		$portion = '';
		if(!empty($amount['large_price'])){
			$portion = '<del>'. $amount['currency'] . $amount['large_price'] .' </del>
			<div class="on_sale">
			<span>'. $amount['percentage_off_num'] .'% Off</span>
			</div> ';
		}

		$label = '';
		if(!empty($productArr['label_hex_color'])){
			$label = '<span class="pr_flash " style="background-color: '.$productArr['label_hex_color'].' !important ">'.$productArr['label_localization_title'].'</span>';
		}

		$presale = '';
		if(!empty($productArr['presale_until_date']) && $productArr['presale_until_date'] != '0000-00-00' && strtotime($productArr['presale_until_date']) >= strtotime(date('Y-m-d'))   ){
			$presale = '<span class="pr_flash pr_flash_right bg-danger">Presale</span>';
		}

		$heart = '';
		if (isset($_SESSION['userID'])) {
			$heart = '<li><a href="#!"><i class="far fa-heart js-wishlist-listiner" data-id="'.$productArr['id'] .'"  ></i></a></li>';

			$CI =& get_instance();
			$dataaa = $CI->db->query("SELECT id FROM wishlist WHERE product_id = ? AND user_id = ?", [$productArr['id'],$_SESSION['userID'] ])->result_array();
			if (isset($dataaa[0]) && !empty($dataaa[0]['id'])) {
				$heart = '<li><a href="#!"><i class="fas fa-heart js-wishlist-listiner" data-id="'.$productArr['id'] .'"  ></i></a></li>';
			} else {
				$heart = '<li><a href="#!"><i class="far fa-heart js-wishlist-listiner" data-id="'.$productArr['id'] .'"  ></i></a></li>';

			}
          // print_r($data);
		}

		echo '
		<div class="item">
		<div class="product">
		'. $label . $presale .'

		<div class="product_img">
		<a href="">
		<img src="'. $img .'" alt="product_img1">
		</a>
		<div class="product_action_box">
		<ul class="list_none pr_action_btn">
		<li class="add-to-cart" onclick="addToCart('.$productArr['id'] .')"><a href="#" ><i class="icon-basket-loaded"></i> Add To Cart</a></li>
		<li><a href="'. $linkQuickView .'" class="popup-ajax"><i class="icon-eye"></i></a></li>
		'.$heart.'
		</ul>
		</div>
		</div>
		<div class="product_info">
		<h6 class="product_title">
		<a href="'. $link .'">
		'. $productArr['title'] .'
		</a>
		</h6>
		<div class="product_price">
		<span class="price">'. $amount['currency'].''.$amount['small_price'] .'</span>
		'. $portion .'

		</div>
		<div class="rating_wrap">
		<div class="rating">
		<div class="product_rate" style="width:80%"></div>
		</div>
		<span class="rating_num">(21)</span>
		</div>
		<div class="pr_desc">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
		</div>
		</div>
		</div>
		</div>
		';
	}
}


if ( ! function_exists('doCURLWithArrResponse'))
{
	function doCURLWithArrResponse($url) {
    // Initialize a CURL session.
		$ch = curl_init();
    // Return Page contents.
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //grab URL and pass it to the variable.
		curl_setopt($ch, CURLOPT_URL, $url);
		$result = curl_exec($ch);
    // convert the XML into php arr
		//$xml = simplexml_load_string($result);
		$json = json_encode($result);
		$arr = json_decode($json, true);
		return $arr;
	}
}




if (!function_exists('format_currency')) {
    function format_currency($amount, $currency)
    {
        // Format the currency amount according to the currency rate and abbreviation
        $formattedAmount = number_format($amount * $currency['rate'], 2);
        return $formattedAmount . ' ' . $currency['abbr'];
    }
}

if (!function_exists('format_currency_d')) {
    function format_currency_d($amount, $currency)
    {
        // Format the currency amount according to the currency rate and abbreviation
        $formattedAmount =  $amount * $currency['rate'];
        return $formattedAmount;
    }
}


if (!function_exists('format_nb_s')) {
function format_nb_s($amount, $currency)
{
		// Format the currency amount according to the currency rate and abbreviation
		$formattedAmount = number_format($amount, 2);
		return $formattedAmount . ' ' . $currency['abbr'];
}
}


if (!function_exists('format_nb')) {
function format_nb($amount)
{
 		$formattedAmount = number_format($amount, 2);
		return $formattedAmount;
}
}


?>
