<?php

//student Information 
$user_id		= $_SESSION['user_id'];
$student_name	= $_SESSION['student_name'];
$studentEmail   = $_SESSION['studentEmail'];

$result 			= mysql_query("SELECT * FROM `users` WHERE `student_name` = '$student_name'");
$row				= mysql_fetch_assoc($result);
$parent_name		= $row['parent_name'];
$parent_tel			= $row['tel'];
$login_email		= $row['email'];
$student_level		= $row['student_level'];
$student_gender		= $row['student_gender'];
$account_type 		= $row['account_type'];
$student_school 	= $row['student_school'];
$account_status 	= $row['status'];
$learning_points 	= $row['learning_points'];
$expired_date		= $row['account_expiry'];
$level 				= $row['level'];
$profilePic 		= $row['profile_pic'];

//Report

$report_total 				= mysql_query("SELECT * FROM `answered_questions` WHERE `student_name` = '$student_name' AND `user_id` = '$user_id' 					     ORDER BY `pass_fail` DESC,`Date_of_answered` DESC");
$report_pass 				= mysql_query("SELECT * FROM `answered_questions` WHERE `student_name` = '$student_name' AND `user_id` = '$user_id' AND `pass_fail` = 'pass' ORDER BY `Date_of_answered` DESC");
$report_fail 				= mysql_query("SELECT * FROM `answered_questions` WHERE `student_name` = '$student_name' AND `user_id` = '$user_id' AND `pass_fail` = 'fail' ORDER BY `Date_of_answered` DESC");

$report_english 			= mysql_query("SELECT * FROM `answered_questions` WHERE `student_name` = '$student_name' AND `user_id` = '$user_id' AND `subject` = 'English' ORDER BY `pass_fail` DESC,`Date_of_answered` DESC");
$report_chinese 			= mysql_query("SELECT * FROM `answered_questions` WHERE `student_name` = '$student_name' AND `user_id` = '$user_id' AND `subject` = 'Chinese' ORDER BY `pass_fail` DESC,`Date_of_answered` DESC");
$report_math 				= mysql_query("SELECT * FROM `answered_questions` WHERE `student_name` = '$student_name' AND `user_id` = '$user_id' AND `subject` = 'Math'    ORDER BY `pass_fail` DESC,`Date_of_answered` DESC");

$passedMssionCountEnglish	= mysql_query("SELECT * FROM `answered_questions` WHERE `student_name` = '$student_name' AND `user_id` = '$user_id' AND `subject`='English' AND `pass_fail` = 'pass'");
$passedMssionCountChinese	= mysql_query("SELECT * FROM `answered_questions` WHERE `student_name` = '$student_name' AND `user_id` = '$user_id' AND `subject`='Chinese' AND `pass_fail` = 'pass'");
$passedMssionCountMath		= mysql_query("SELECT * FROM `answered_questions` WHERE `student_name` = '$student_name' AND `user_id` = '$user_id' AND `subject`='Math' 	AND `pass_fail` = 'pass'");

$completed_mission_total	= mysql_num_rows($report_total);
$completed_mission_english	= mysql_num_rows($report_english);
$completed_mission_math		= mysql_num_rows($report_math);
$completed_mission_chinese	= mysql_num_rows($report_chinese);

$passCount 					= mysql_num_rows($report_pass);
$failCount 					= mysql_num_rows($report_fail);

$passedMissionEnglish		= mysql_num_rows($passedMssionCountEnglish);
$passedMissionChinese		= mysql_num_rows($passedMssionCountChinese);
$passedMissionMath			= mysql_num_rows($passedMssionCountMath);
$passedMissionAll			= $passedMissionEnglish + $passedMissionChinese + $passedMissionMath;

$failedMissionAll			= $completed_mission_total 		- $passedMissionAll;
$failedMissionEnglish		= $completed_mission_english 	- $passedMissionEnglish;
$failedMissionChinese		= $completed_mission_chinese 	- $passedMissionChinese;
$failedMissionMath			= $completed_mission_math 		- $passedMissionMath;

//Passing Rate

if($completed_mission_total		 == 0 ){$passingRateAll 	= 0;}else{ $passingRateAll 		=	$passedMissionAll/$completed_mission_total;}
if($completed_mission_english 	 == 0 ){$passingRateEnglish = 0;}else{ $passingRateEnglish 	=	$passedMissionEnglish/$completed_mission_english;}
if($completed_mission_chinese    == 0 ){$passingRateChinese = 0;}else{ $passingRateChinese 	=	$passedMissionChinese/$completed_mission_chinese;}
if($completed_mission_math       == 0 ){$passingRateMath 	= 0;}else{ $passingRateMath 	=	$passedMissionMath/$completed_mission_math;}


?>