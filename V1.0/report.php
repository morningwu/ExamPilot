 <?

 //The Report
date_default_timezone_set('Asia/Hong_Kong'); 
$mission_id			= $missionId;
$assessment_title 	= $getTitle;


$Date_of_answered = date('Y-m-d H:i:s');
$user_id                    = $_SESSION['user_id'];
$student_name               = $_SESSION['student_name'];
                            

    if($score > $total*$passing_rate){

        $pass_fail  =   "pass";
        $earned_learning_points =  $learning_points ;
        mysql_query("UPDATE `users` SET `learning_points` = `learning_points` + '$earned_learning_points' WHERE `user_id` = '$user_id' AND `student_name` = '$student_name'");

      } else{
          $pass_fail  =   "fail";
          $earned_learning_points =  0;
      }
                                
                           
add_to_report($user_id,$student_name,$subject,$mission_id,$learning_area,$level,$assessment_title,$correctly_answered,$incorrectly_answered,$total,$pass_fail,$earned_learning_points,$Date_of_answered);
 //End of Report
?>