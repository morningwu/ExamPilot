<?php

function add_to_report(
	$user_id,
	$student_name,
	$subject,
	$mission_id,
	$level,
	$learning_area,
	$assessment_title,
	$correctly_answered,
	$incorrectly_answered,
	$total,
	$pass_fail,
	$earned_learning_points,
	$Date_of_answered)

{

//sanitizing data
	/*
	$user_id 				= $_SESSION['user_id'];
	$student_name			= $_SESSION['student_name'];
	
	
	if($score > $total*$passing_rate){
		$pass_fail	=	"pass";
	} else{
		$pass_fail	=	"fail";
	}

	$earned_learning_points	=	$learning_points ;
	*/
mysql_query("INSERT INTO `answered_questions`(

	`user_id`,
	`student_name`,
	`subject`,
	`mission_id`,
	`level`,
	`learning_area`,
	`title`,
	`correct`,
	`wrong`,
	`total`,
	`pass_fail`,
	`earned_learning_points`,
	`Date_of_answered`

	)VALUES(

	'$user_id',
	'$student_name',
	'$subject',
	'$mission_id',
	'$learning_area',
	'$level',
	'$assessment_title',
	'$correctly_answered',
	'$incorrectly_answered',
	'$total',
	'$pass_fail',
	'$earned_learning_points',
	'$Date_of_answered'

	)");

}


?>