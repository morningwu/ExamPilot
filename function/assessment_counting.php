<?php
/*
$studentLevelGet = $_GET['level'];

$English_Grammar_Count                  = mysql_query("SELECT DISTINCT `mission_id` FROM `questions` WHERE `learning_area` = 'Grammar' 			AND `level` = '$studentLevelGet'");
$English_Vocabulary_Count               = mysql_query("SELECT DISTINCT `mission_id` FROM `questions` WHERE `learning_area` = 'Vocabulary' 		AND `level` = '$studentLevelGet'");
$English_Comprehension_Count            = mysql_query("SELECT DISTINCT `mission_id` FROM `questions` WHERE `learning_area` = 'Comprehension' 	AND `level` = '$studentLevelGet'");
$English_Writing_Count                  = mysql_query("SELECT DISTINCT `mission_id` FROM `questions` WHERE `learning_area` = 'Writing' 			AND `level` = '$studentLevelGet'");

$No_of_assessment_grammar               = mysql_num_rows($English_Grammar_Count);
$No_of_assessment_comprehension         = mysql_num_rows($English_Comprehension_Count);
$No_of_assessment_vocabulary            = mysql_num_rows($English_Vocabulary_Count);
$No_of_assessment_writing               = mysql_num_rows($English_Writing_Count);

//No.of Assessment - Chinese

$Chinese_Comprehension_Count            = mysql_query("SELECT DISTINCT `mission_id` FROM `questions_chinese` WHERE `learning_area` = 'Comprehension' 	AND `level` = '$studentLevelGet'");
$Chinese_Vocabulary_Count               = mysql_query("SELECT DISTINCT `mission_id` FROM `questions_chinese` WHERE `learning_area` = 'Vocabulary' 		AND `level` = '$studentLevelGet'");
$Chinese_Writing_Count                  = mysql_query("SELECT DISTINCT `mission_id` FROM `questions_chinese` WHERE `learning_area` = 'Writing' 			AND `level` = '$studentLevelGet'");

$No_of_chinese_assessment_comprehension = mysql_num_rows($Chinese_Comprehension_Count);
$No_of_chinese_assessment_vocabulary    = mysql_num_rows($Chinese_Vocabulary_Count);
$No_of_chinese_assessment_writing       = mysql_num_rows($Chinese_Writing_Count);

//No. of Maths
$mathsCalcuationCount            		= mysql_query("SELECT DISTINCT `mission_id` FROM `questions_maths` WHERE `learning_area` = 'Calculation'      AND `level` = '$studentLevelGet'");
$mathsAppliedCount				 		= mysql_query("SELECT DISTINCT `mission_id` FROM `questions_maths` WHERE `learning_area` = 'AppliedQuestions' AND `level` = '$studentLevelGet'");

$No_of_assessment_calucation			= mysql_num_rows($mathsCalcuationCount);
$No_of_assessment_maths_application		= mysql_num_rows($mathsAppliedCount);

//Total
$total_assessment_english               =  $No_of_assessment_grammar + $No_of_assessment_comprehension + $No_of_assessment_vocabulary + $No_of_assessment_writing;
$total_assessment_chinese               =  $No_of_chinese_assessment_comprehension + $No_of_chinese_assessment_vocabulary + $No_of_chinese_assessment_writing;
$total_assessment_math					=  $No_of_assessment_calucation + $No_of_assessment_maths_application;

$No_of_assessment_maths_demo 			= 10;

//Completed_Assessment
if(isset($_SESSION['student_name'])){
	$studentName	=	$_SESSION['student_name'];
	if(isset($_SESSION['user_id'])){$studentId		=	$_SESSION['user_id'];}

	//All English Assessment Counting
	$extractedCompletedEnglishGrammar				= mysql_query("SELECT DISTINCT `mission_id` FROM `answered_questions` WHERE `subject` = 'English' AND `learning_area` = 'Grammar' 		AND `student_name` = '$studentName' AND `level` = '$studentLevelGet'");
	$extractedCompletedEnglishVocab					= mysql_query("SELECT DISTINCT `mission_id` FROM `answered_questions` WHERE `subject` = 'English' AND `learning_area` = 'Vocabulary' 	AND `student_name` = '$studentName' AND `level` = '$studentLevelGet'");
	$extractedCompletedEnglishComp					= mysql_query("SELECT DISTINCT `mission_id` FROM `answered_questions` WHERE `subject` = 'English' AND `learning_area` = 'Comprehension' AND `student_name` = '$studentName' AND `level` = '$studentLevelGet'");
	$extractedCompletedEnglishWriting				= mysql_query("SELECT DISTINCT `mission_id` FROM `answered_questions` WHERE `subject` = 'English' AND `learning_area` = 'Writing' 		AND `student_name` = '$studentName' AND `level` = '$studentLevelGet'");

	$completedEnglishGrammar						= mysql_num_rows($extractedCompletedEnglishGrammar);
	$completedEnglishVocab 							= mysql_num_rows($extractedCompletedEnglishVocab);
	$completedEnglishComp 							= mysql_num_rows($extractedCompletedEnglishComp);
	$completedEnglishWriting 						= mysql_num_rows($extractedCompletedEnglishWriting);

	$completedEnglishAll							= $completedEnglishGrammar+$completedEnglishVocab+$completedEnglishComp+$completedEnglishWriting;

	//Al Chinese Assessment Couting

	$extractedCompletedChineseVocab					= mysql_query("SELECT DISTINCT `mission_id` FROM `answered_questions` WHERE `subject` = 'Chinese' AND `learning_area` = 'Vocabulary' 	AND `student_name` = '$studentName' AND `level` = '$studentLevelGet'");
	$extractedCompletedChineseComp					= mysql_query("SELECT DISTINCT `mission_id` FROM `answered_questions` WHERE `subject` = 'Chinese' AND `learning_area` = 'Comprehension' AND `student_name` = '$studentName' AND `level` = '$studentLevelGet'");

	$completedChineseVocab 							= mysql_num_rows($extractedCompletedChineseVocab);
	$completedChineseComp 							= mysql_num_rows($extractedCompletedChineseComp);

	//All Math Assessment Counting
	$extractedCompletedMathCalculation				= mysql_query("SELECT DISTINCT `mission_id` FROM `answered_questions` WHERE `subject` = 'Math' AND `learning_area` = 'Calculation' 			AND `student_name` = '$studentName' AND `level` = '$studentLevelGet'");
	$extractedCompletedMathAppliedQuestions		    = mysql_query("SELECT DISTINCT `mission_id` FROM `answered_questions` WHERE `subject` = 'Math' AND `learning_area` = 'AppliedQuestions' 	AND `student_name` = '$studentName' AND `level` = '$studentLevelGet'");

	$completedMathCalculation 						= mysql_num_rows($extractedCompletedMathCalculation);
	$completedMathAppliedQuestions 				    = mysql_num_rows($extractedCompletedMathAppliedQuestions);

}
*/
?>