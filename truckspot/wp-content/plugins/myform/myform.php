<?php
/**
*	Plugin Name: My form plugin
*/

// enqueue scripts
add_action( 'wp_enqueue_scripts', 'my_assets' );
// ajax select model
add_action('wp_ajax_select_model', 'ajax_select_model');
add_action('wp_ajax_nopriv_select_model', 'ajax_select_model');
// ajax search
add_action('wp_ajax_search_city', 'ajax_search_city');
add_action('wp_ajax_nopriv_search_city', 'ajax_search_city');
// checkCity
add_action('wp_ajax_check_city', 'check_city');
add_action('wp_ajax_nopriv_check_city', 'check_city');
// Form submit
add_action('wp_ajax_form_submit', 'form_submit');
add_action('wp_ajax_nopriv_form_submit', 'form_submit');


// enqueue scripts
function my_assets()	{
	wp_enqueue_script( 'myform', plugins_url('js/myform.js', __FILE__), array('jquery') );

	wp_localize_script('myform', 'myPlugin', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
	));
}


// ajax select model
function ajax_select_model(){
	global $wpdb;
	$wpdb->hide_errors();

	$model = trim($_POST['model']);
	
	$models = $wpdb->get_results( $wpdb->prepare("SELECT model FROM vehicles WHERE make = %s GROUP BY model", $model), ARRAY_A );

	foreach ($models as $model) { ?>
		<option value="<?php echo $model['model'] ?>"><?php echo $model['model'] ?></option>
	<?php }

	wp_die();
}


// ajax search
function ajax_search_city(){
	global $wpdb;
	$wpdb->hide_errors();

	$zip_list = trim($_POST['zip_list']);
	$zip_list = strval($zip_list);
	$result_zip = '%' . $wpdb->esc_like( $zip_list ) . '%';

	$cities = $wpdb->get_results( $wpdb->prepare("SELECT city, zip FROM us_cities WHERE city LIKE %s OR zip LIKE %s LIMIT 10", $result_zip, $result_zip), ARRAY_A );

	foreach ($cities as $city) { ?>
		<option value="<?php echo $city['zip'] ?> : <?php echo $city['city'] ?>"><?php echo $city['zip'] ?> : <?php echo $city['city'] ?></option>
	<?php }

	
	wp_die();
}

// check_city
function check_city(){
	global $wpdb;
	$wpdb->hide_errors();

	$arrCity = $_POST['data'];

	$resiltCity = $wpdb->get_col( "SELECT id FROM us_cities WHERE zip = $arrCity[0] AND city = '$arrCity[1]'");
	if ($resiltCity){
		echo 1;
	}else{
		echo 0;
	}

	wp_die();
}


// getVehicles
function getVehicles(){
	global $wpdb;
	$wpdb->hide_errors();

	$vehicles = $wpdb->get_results( "SELECT make FROM vehicles WHERE NULLIF(model, '') IS NOT NULL GROUP BY make", ARRAY_A);

	foreach ($vehicles as $vehicle) { ?>
		<option value="<?php echo $vehicle['make'] ?>"><?php echo $vehicle['make'] ?></option>
	<?php }
}


function getStateByZipCode($zipCode){
	global $wpdb;
	$wpdb->hide_errors();

	$state = $wpdb->get_results( $wpdb->prepare("SELECT state FROM us_cities WHERE zip = %s", $zipCode), ARRAY_A );

	if (count($state) > 0) {
		return $state[0]['state'];
	}

	wp_die();
}


// Form submit
function form_submit(){
	$data = array();
	parse_str($_POST['data'], $data);


	// Email
	$multiple_to_recipients = SCF::get('email_data_form', 5);


	// Subject
	$subject = 'TruckSpotLogistics form data';


	// Values-START
	// --Name
	$fullName = explode(" ", $data['full_name']);
	$firstName = array_shift($fullName);
	$lastName = implode(' ', $fullName);
	// --Phone
	$phone = str_replace(['+1', ' ', '(', ')', '-'], '', $data['phone']);
	// --Origin data
	$origin = explode(" : ", $data['pickup_city']);
	$originState = getStateByZipCode($origin[0]);
	// --Moving data
	$moving = explode(" : ", $data['delivery_city']);
	$movingState = getStateByZipCode($moving[0]);
	// --Move date
	if ( $data['ship_date'] == 'specific_date' ) {
		$moveDate = $data['when_date'];
	} else{
		$moveDate = $data['ship_date'];
	}
	// Values-END


	// // Message
	$message = 'Email: ' . $data['email'] . '<br>';
	$message .= 'First name: ' . $firstName . '<br>';
	$message .= 'Last name: ' . $lastName . '<br>';
	$message .= 'Phone number: ' . $phone . '<br>';
	$message .= 'Origin city: ' . $origin[1] . '<br>';
	$message .= 'Origin state: ' . $originState . '<br>';
	$message .= 'Origin zip: ' . $origin[0] . '<br>';
	$message .= 'Move date: ' . $moveDate . '<br>';
	$message .= 'Moving city: ' . $moving[1] . '<br>';
	$message .= 'Moving state: ' . $movingState . '<br>';
	$message .= 'Moving zip: ' . $moving[0] . '<br>';
	$message .= 'Vehicle type: ' . $data['vehicle_type'] . '<br>';

	//Vehicle data-START
	switch ($data['form_type']) {
		//Form1 - Car
		case "form_type_1":
		for ($i = 1; $i <= 6; $i++) {
			$select_make = 'select_make-' . $i;
			$select_model = 'select_model-' . $i;
			$select_year = 'select_year-' . $i;
			if (in_array($data[$select_make], $data)) {
				$message .= 'Vehicle make'. $i .': ' . $data[$select_make] . '<br>';
			}
			if (in_array($data[$select_model], $data)) {
				$message .= 'Vehicle model'. $i .': ' . $data[$select_model] . '<br>';
			}
			if (in_array($data[$select_year], $data)) {
				$message .= 'Vehicle year'. $i .': ' . $data[$select_year] . '<br>';
			}
		}
		$message .= 'Doesnotrun: ' . $data['does_run'] . '<br>';
		break;
		//Form2 - ATV/UTV, Motorcycle, Snowmobile
		case "form_type_2":
		for ($i = 1; $i <= 6; $i++) {
			$vehicle_all = 'vehicle_all-' . $i;
			if (in_array($data[$vehicle_all], $data)) {
				$message .= 'Full vehicle name'. $i .': ' . $data[$vehicle_all] . '<br>';
			}
		}
		$message .= 'Doesnotrun: ' . $data['does_run'] . '<br>';
		break;
		//Form2 - Boat and Other
		case "form_type_3":
		for ($i = 1; $i <= 6; $i++) {
			$vehicle_all = 'vehicle_all-' . $i;
			$lengthFt = 'length_ft-' . $i;
			$lengthIn = 'length_in-' . $i;
			$widthFt = 'width_ft-' . $i;
			$widthIn = 'width_in-' . $i;
			$heightFt = 'height_ft-' . $i;
			$heightIn = 'height_in-' . $i;
			$weigthLbs = 'weigth_lbs-' . $i;
			if (in_array($data[$vehicle_all], $data)) {
				$message .= 'Full vehicle name'. $i .': ' . $data[$vehicle_all] . '<br>';
			}
			if (in_array($data[$lengthFt], $data)) {
				$message .= 'length'. $i .': ' . $data[$lengthFt].'Ft ' . $data[$lengthIn].'In' . '<br>';
			}
			if (in_array($data[$widthFt], $data)) {
				$message .= 'width'. $i .': ' . $data[$widthFt].'Ft ' . $data[$widthIn].'In' . '<br>';
			}
			if (in_array($data[$heightFt], $data)) {
				$message .= 'height'. $i .': ' . $data[$heightFt].'Ft ' . $data[$heightIn].'In' . '<br>';
			}
			if (in_array($data[$weigthLbs], $data)) {
				$message .= 'weight'. $i .': ' . $data[$weigthLbs] . 'Lbs<br>';
			}
		}
		if ($data['is_trailer']) {
			$message .= 'Is it on trailer: ' . $data['is_trailer'] . '<br>';
		} else{
			$message .= 'Is it operable: ' . $data['is_operable'] . '<br>';
		}
		break;
	}
	//Vehicle data-END
	

	// Headers
	$headers .= 'From: TruckSpotLogistics <wordpress@truckspotlogistics.com>' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";


	// Send
	wp_mail( $multiple_to_recipients, $subject, $message, $headers);


	wp_die();
}