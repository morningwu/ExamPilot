<?php

if(isset($_SESSION['user_id'])){ 	$userId	= $_SESSION['user_id'];}
if(isset($_SESSION['student_name'])){ 	$studentName	= $_SESSION['student_name'];}
$learningPointsResult 	 = mysql_query("SELECT * FROM `users` WHERE `student_name` = '$studentName'");
$learningPointsRow		 = mysql_fetch_assoc($learningPointsResult);
$giftListDetail 		 = mysql_query("SELECT * FROM `gift_table` WHERE `status` = 'active' ORDER BY `gift_order` ASC");

$extractedLearningPoints = $learningPointsRow['learning_points'];

$gift1	= "麥當勞禮品劵";
$gift2	= "無印良品文具套裝";
$gift3	= "PlayStation 4";

$gift1Pic = "<img src='_assets/img/gift/mcdonald.png' width='250px'>";
$gift2Pic = "<img src='_assets/img/muji01.jpg' width='250px'>";
$gift3Pic = "<img src='_assets/img/ps4.jpg' width='250px'>";

$giftOneLearningPoints   = 5000;
$giftTwoLearningPoints   = 17500;
$giftThreeLearningPoints = 1690000; 

$giftOnediff			 = $giftOneLearningPoints 	- $extractedLearningPoints;
$giftTwodiff			 = $giftTwoLearningPoints 	- $extractedLearningPoints;
$giftThreediff			 = $giftThreeLearningPoints - $extractedLearningPoints;

/*
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

*/

function giftRedeemApplication($postGiftName){

	$fetchGift				= mysql_query("SELECT * FROM `gift_table` WHERE `Gift_Name` = '$postGiftName'");
	$fetchGiftDetail		= mysql_fetch_assoc($fetchGift);
	$fetchGiftId 			= $fetchGiftDetail['giftId'];
	$fetchGiftName 			= $fetchGiftDetail['Gift_Name'];
	$fetchGiftPoints		= $fetchGiftDetail['Learning_Points'];
	$userId					= $_SESSION['user_id'];
	$studentName 			= $_SESSION['student_name'];
	$fetchApplicantInfo		= mysql_query("SELECT * FROM `users` WHERE `student_name` = '$studentName'");
	$applicantInfoDetail	= mysql_fetch_assoc($fetchApplicantInfo);
	$parentName 			= $applicantInfoDetail['parent_name'];
	$studentTel 			= $applicantInfoDetail['tel'];
	$studentEmail 			= $applicantInfoDetail['email'];
	$studentLearningPoints 	= $applicantInfoDetail['learning_points'];
	$redeemApplicationTime	= date('Y-m-d H:i:s');

	mysql_query("INSERT INTO `gift_redemption_table`(
		`giftId`,
		`name`,
		`learning_points`,
		`student_name`,
		`student_id`,
		`parent_name`,
		`tel`,
		`email`,
		`student_learning_points`,
		`date_of_redemption`

		)VALUES(
		'$fetchGiftId',
		'$fetchGiftName',
		'$fetchGiftPoints',
		'$studentName',
		'$userId',
		'$parentName',
		'$studentTel',
		'$studentEmail',
		'$studentLearningPoints',
		'$redeemApplicationTime'
		)");

	echo '<div class="alert center">我們己經收到你的申請！將會儘快連絡你! <a href="learning.php" class="btn blue-btn-small">繼續練習</a></div>';
}
?>