<?php
include('student-info.php');

//Gift Name
$gift1	= "Donation";
$gift2	= "iTune Gift Card";
$gift3	= "Mcdonald Coupon";


//Gift Points
$gift1Points1	= 500;
$gift1Points2	= 300;
$gift1Points3	= 200;

//function

function giftRedeemApplication($student_name){
	$to			= "giftredeem@teachmenow.com";
	$subject	= "GiftsRedemption";
	$message	= 

	'<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />'.
		
		'Appliant\'s name :' .$student_name .
		'Appliant\'s id :' 	 .$user_id .
		'Redeem Gifts :' 	 .$giftname.

	'</html>';
	
	mail($to, $subject, $message);
}

?>