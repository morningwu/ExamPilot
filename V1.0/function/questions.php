<?php

function add_questions($mission_id,$level,$learning_area,$question_type,$title,$questions,$selection1,$selection2,$selection3,$selection4,$answer,$created_by,$date_of_creation){

  $questions          = mysql_real_escape_string(htmlentities($questions));
  $selection1         = mysql_real_escape_string(htmlentities($selection1));
  $selection2         = mysql_real_escape_string(htmlentities($selection2));
  $selection3         = mysql_real_escape_string(htmlentities($selection3));
  $selection4         = mysql_real_escape_string(htmlentities($selection4));
  $answer        	    = mysql_real_escape_string(htmlentities($answer));
  
  mysql_query("INSERT INTO `questions`(
    `mission_id`, 
    `level`,
    `learning_area`,
    `question_type`,
    `title`,
    `questions`,
    `selection1`,
    `selection2`,
    `selection3`,
    `selection4`,
    `answer`,
    `created_by`,
    `date_of_creation`

    )
    
    VALUES (
    '$mission_id',
    '$level',
    '$learning_area',
    '$question_type',
    '$title',
    '$questions',
    '$selection1',
    '$selection2',
    '$selection3',
    '$selection4',
    '$answer',
    '$created_by',
    '$date_of_creation'

    )");

  echo '<div class="question_notice">'."Questions has been added!Thanks you!".'</div>';
}



function questions_exist($questions){
  $questions = mysql_real_escape_string($questions);

  $total = mysql_query("SELECT COUNT(`question_id`) FROM `questions` WHERE `questions` = '{$questions}'");

  return (mysql_result($total, 0) == '1') ? true : false;
}


?>