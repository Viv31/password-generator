<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//error_reporting(0);


	$all = sanitize_text_field($_POST['all']);
	//echo $all;die;
	$only_alphabet = sanitize_text_field($_POST['only_alphabet']);
	$only_numbers = sanitize_text_field($_POST['only_numbers']);
	$only_specialcharacters = sanitize_text_field($_POST['only_specialcharacters']);
	$length = sanitize_text_field($_POST['length']);

	/*  IF Length is not defined by user so it will be 30 */

	if($length == ""){
		$length = '30';

	}

/* GENERATE PASSWORD WITH ALL OPTIONS */

if(isset($all)){

	$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789~!@#%^&*()_+=';
	$random_string_length = $length;
	 $random_password = '';
	  $max = strlen($characters) - 1;
  		for ($i = 0; $i < $random_string_length; $i++) {
       $random_password .= $characters[mt_rand(0, $max)];
		 }

		 //echo $random_password; die;

}

/* GENERATE PASSWORD WITH ALL 3 FIELDS */

else if(isset($only_alphabet) && isset($only_specialcharacters) && isset($only_numbers) ){

	$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890~!@#%^&*()_+=$';
	$random_string_length = $length;
	 $random_password = '';
	  $max = strlen($characters) - 1;
  		for ($i = 0; $i < $random_string_length; $i++) {
       $random_password .= $characters[mt_rand(0, $max)];
		 }

		 echo esc_attr($random_password);
}

/* GENERATE PASSWORD WITH ALPHABET AND NUMBERS  */

else if(isset($only_alphabet) && isset($only_numbers)){
	$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
	$random_string_length = $length;
	 $random_password = '';
	  $max = strlen($characters) - 1;
  		for ($i = 0; $i < $random_string_length; $i++) {
       $random_password .= $characters[mt_rand(0, $max)];
		 }

		 echo esc_attr($random_password);

}

/* GENRATE PASSWORD WITH ALPHABET AND SPECIAL CHARACTERS */

else if(isset($only_alphabet) && isset($only_specialcharacters)){

	$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz~!@#%^&*()_+=$';
	$random_string_length = $length;
	 $random_password = '';
	  $max = strlen($characters) - 1;
  		for ($i = 0; $i < $random_string_length; $i++) {
       $random_password .= $characters[mt_rand(0, $max)];
		 }

		 echo esc_attr($random_password);
}

/* GENRATE PASSWORD WITH NUMBERS AND SPECIAL CHARACTERS */


else if(isset($only_numbers) && isset($only_specialcharacters)){

	$characters = '1234567890~!@#%^&*()_+=$';
	$random_string_length = $length;
	 $random_password = '';
	  $max = strlen($characters) - 1;
  		for ($i = 0; $i < $random_string_length; $i++) {
       $random_password .= $characters[mt_rand(0, $max)];
		 }

		echo esc_attr($random_password);
}

/*  GENERATE PASSWORD WITH ALPHABET   */


else if(isset($only_alphabet)){
	$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	$random_string_length = $length;
	 $random_password = '';
	  $max = strlen($characters) - 1;
  		for ($i = 0; $i < $random_string_length; $i++) {
       $random_password .= $characters[mt_rand(0, $max)];
		 }

		echo esc_attr($random_password);



}

/*  GENERATE PASSWORD WITH NUMBERS   */


else if(isset($only_numbers)){

	$characters = '1234567890';
	$random_string_length = $length;
	 $random_password = '';
	  $max = strlen($characters) - 1;
  		for ($i = 0; $i < $random_string_length; $i++) {
       $random_password .= $characters[mt_rand(0, $max)];
		 }

		 echo esc_attr($random_password);
}

/*  GENERATE PASSWORD WITH SPECIAL CHARACTERS   */

else if(isset($only_specialcharacters)){

	$characters = '~!@#%^&*()_+=$';
	$random_string_length = $length;



	 $random_password = '';
	  $max = strlen($characters) - 1;
  		for ($i = 0; $i < $random_string_length; $i++) {
       $random_password .= $characters[mt_rand(0, $max)];
		 }

		 echo esc_attr($random_password);

}

?>
