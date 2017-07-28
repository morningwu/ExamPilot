 <?

//The Report
date_default_timezone_set('Asia/Hong_Kong'); 
$mission_id			= $missionId;
$assessment_title 	= $getTitle;
$Date_of_answered 	= date('Y-m-d H:i:s');
$user_id            = $_SESSION['user_id'];
$student_name       = $_SESSION['student_name'];

//Counting the Questions Attempt
if($subject == "Chinese"){
	$attemptCount       = mysql_query("SELECT `title` FROM `answered_questions` WHERE `student_name` = '{$student_name}' AND `mission_id` = '$missionId' AND `subject` = 'Chinese'");
	$passAttemptCount   = mysql_query("SELECT `title` FROM `answered_questions` WHERE `student_name` = '{$student_name}' AND `mission_id` = '$missionId' AND `subject` = 'Chinese' AND `pass_fail` = 'pass'");
}elseif($subject == "English"){
	$attemptCount       = mysql_query("SELECT `title` FROM `answered_questions` WHERE `student_name` = '{$student_name}' AND `mission_id` = '$missionId' AND `subject` = 'English'");
	$passAttemptCount   = mysql_query("SELECT `title` FROM `answered_questions` WHERE `student_name` = '{$student_name}' AND `mission_id` = '$missionId' AND `subject` = 'English' AND `pass_fail` = 'pass'");
}elseif($subject == "Math"){
	$attemptCount       = mysql_query("SELECT `title` FROM `answered_questions` WHERE `student_name` = '{$student_name}' AND `mission_id` = '$missionId' AND `subject` = 'Maths'");
	$passAttemptCount   = mysql_query("SELECT `title` FROM `answered_questions` WHERE `student_name` = '{$student_name}' AND `mission_id` = '$missionId' AND `subject` = 'Maths' AND `pass_fail` = 'pass'");
}

$attempt            = mysql_num_rows($attemptCount);
$passAttempt 		= mysql_num_rows($passAttemptCount);

//End of counting the question attempt

    if($score > $total*$passing_rate){

        $pass_fail  =   "pass";
        
        if($passAttempt == 0 ){
        	$earned_learning_points =  $learning_points ;
        }elseif($passAttempt == 1){
        	$earned_learning_points =  $learning_points*0.75 ;
        }elseif($passAttempt == 2){
        	$earned_learning_points =  $learning_points*0.5 ;
        }elseif($passAttempt == 3){
        	$earned_learning_points =  $learning_points*0.25 ;
        }elseif($passAttempt == 4){
        	$earned_learning_points =  $learning_points*0.1 ;
        }elseif($passAttempt >= 5){
        	$earned_learning_points =  $learning_points*0;
        }
        
        mysql_query("UPDATE `users` SET `learning_points` = `learning_points` + '$earned_learning_points' WHERE `user_id` = '$user_id' AND `student_name` = '$student_name'");

      } else{
          $pass_fail  =   "fail";
          $earned_learning_points =  0;
      }
                                
                           
add_to_report($user_id,$student_name,$subject,$mission_id,$learning_area,$level,$assessment_title,$correctly_answered,$incorrectly_answered,$total,$pass_fail,$earned_learning_points,$Date_of_answered);
 //End of Report
?>