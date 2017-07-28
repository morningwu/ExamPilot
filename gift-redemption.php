<?php
$num1 = rand()
$giftList 	= mysql_query("SELECT * FROM `gift_table` WHERE `status` = 'active' LIMIT '$num1','$num2');

$gift1	= "Donation 捐款 ($20)";
$gift2	= "Gift Card 禮品卡 ($40)";
$gift3	= "Coupon 贈劵 ($50) ";


$giftOneLearningPoints   = 10000;
$giftTwoLearningPoints   = 20000;
$giftThreeLearningPoints = 25000; 

$giftOnediff			 = $giftOneLearningPoints 	- $extractedLearningPoints;
$giftTwodiff			 = $giftTwoLearningPoints 	- $extractedLearningPoints;
$giftThreediff			 = $giftThreeLearningPoints - $extractedLearningPoints;


?>