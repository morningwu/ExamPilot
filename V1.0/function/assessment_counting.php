<?php

//No. of Assessment - English

$English_Grammar_Count                  = mysql_query("SELECT DISTINCT `mission_id` FROM `questions` WHERE `learning_area` = 'Grammar'");
$English_Vocabulary_Count               = mysql_query("SELECT DISTINCT `mission_id` FROM `questions` WHERE `learning_area` = 'Vocabulary'");
$English_Comprehension_Count            = mysql_query("SELECT DISTINCT `mission_id` FROM `questions` WHERE `learning_area` = 'Comprehension'");
$English_Writing_Count                  = mysql_query("SELECT DISTINCT `mission_id` FROM `questions` WHERE `learning_area` = 'Writing'");



$No_of_assessment_grammar               = mysql_num_rows($English_Grammar_Count);
$No_of_assessment_comprehension         = mysql_num_rows($English_Comprehension_Count);
$No_of_assessment_vocabulary            = mysql_num_rows($English_Vocabulary_Count);
$No_of_assessment_writing               = mysql_num_rows($English_Writing_Count);

//No.of Assessment - Chinese

$Chinese_Comprehension_Count            = mysql_query("SELECT DISTINCT `mission_id` FROM `questions_chinese` WHERE `learning_area` = 'Comprehension'");
$Chinese_Vocabulary_Count               = mysql_query("SELECT DISTINCT `mission_id` FROM `questions_chinese` WHERE `learning_area` = 'Vocabulary'");
$Chinese_Writing_Count                  = mysql_query("SELECT DISTINCT `mission_id` FROM `questions_chinese` WHERE `learning_area` = 'Writing'");

$No_of_chinese_assessment_comprehension = mysql_num_rows($Chinese_Comprehension_Count);
$No_of_chinese_assessment_vocabulary    = mysql_num_rows($Chinese_Vocabulary_Count);
$No_of_chinese_assessment_writing       = mysql_num_rows($Chinese_Writing_Count);

//Total
$total_assessment_english               =   $No_of_assessment_grammar + $No_of_assessment_comprehension + $No_of_assessment_vocabulary + $No_of_assessment_writing;
$total_assessment_chinese               =   $No_of_chinese_assessment_comprehension + $No_of_chinese_assessment_vocabulary + $No_of_chinese_assessment_writing ;



//Completed_Assessment
$studentName	=	$_SESSION['student_name'];
if(isset($_SESSION['user_id'])){$studentId		=	$_SESSION['user_id'];}

//All English Assessment Counting
$extractedCompletedEnglishGrammar				= mysql_query("SELECT DISTINCT `mission_id` FROM `answered_questions` WHERE `subject` = 'English' AND `learning_area` = 'Grammar' 		AND `student_name` = '$studentName'");
$extractedCompletedEnglishVocab					= mysql_query("SELECT DISTINCT `mission_id` FROM `answered_questions` WHERE `subject` = 'English' AND `learning_area` = 'Vocabulary' 	AND `student_name` = '$studentName'");
$extractedCompletedEnglishComp					= mysql_query("SELECT DISTINCT `mission_id` FROM `answered_questions` WHERE `subject` = 'English' AND `learning_area` = 'Comprehension' AND `student_name` = '$studentName'");
$extractedCompletedEnglishWriting				= mysql_query("SELECT DISTINCT `mission_id` FROM `answered_questions` WHERE `subject` = 'English' AND `learning_area` = 'Writing' 		AND `student_name` = '$studentName'");

$completedEnglishGrammar						= mysql_num_rows($extractedCompletedEnglishGrammar);
$completedEnglishVocab 							= mysql_num_rows($extractedCompletedEnglishVocab);
$completedEnglishComp 							= mysql_num_rows($extractedCompletedEnglishComp);
$completedEnglishWriting 						= mysql_num_rows($extractedCompletedEnglishWriting);

$completedEnglishAll							= $completedEnglishGrammar+$completedEnglishVocab+$completedEnglishComp+$completedEnglishWriting;

//Al Chinese Assessment Couting

$extractedCompletedChineseVocab					= mysql_query("SELECT DISTINCT `mission_id` FROM `answered_questions` WHERE `subject` = 'Chinese' AND `learning_area` = 'Vocabulary' 	AND `student_name` = '$studentName'");
$extractedCompletedChineseComp					= mysql_query("SELECT DISTINCT `mission_id` FROM `answered_questions` WHERE `subject` = 'Chinese' AND `learning_area` = 'Comprehension' AND `student_name` = '$studentName'");

$completedChineseVocab 							= mysql_num_rows($extractedCompletedChineseVocab);
$completedChineseComp 							= mysql_num_rows($extractedCompletedChineseComp);

?>