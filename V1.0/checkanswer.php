<?php
 $question_title = "Very-little/very-few/not-enough";
    
$question        = mysql_query("SELECT `questions`,`question_id`               FROM `questions` where `title` = '$question_title'");
$answer          = mysql_query("SELECT `answer`,`question_id`                  FROM `questions` where `title` = '$question_title'");
$selection       = mysql_query("SELECT `selection1`,`selection2`,`selection3`  FROM `questions` where `title` = '$question_title'");

$score = 0;

$sumbitted_answer = $_POST['answer'];

    if($sumbitted_answer == $answer){
       $score++;
      }

      echo $score;
?>