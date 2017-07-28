<?php

function register_user($email,$password,$parent_name,$tel,$student_name,$student_gender,$student_school,$student_level,$package,$dateofregistration){
  $student_name       = mysql_real_escape_string(htmlentities($student_name));
  //Mail Registration Information to Register
  /*
  $to       = "$email";
  $subject  = "Thank you For Your Registration!(ExamPilot)";
  $message  = 
              "Thank you For Your Registration!This is Your Information:

              Login email : $email
              Password    : $password

              ";
  $from     = "registration@exampilot.com";
  $headers  = "From:" . $from;
  mail($to,$subject,$message,$headers);
*/


  $password           = md5($password);

  mysql_query("INSERT INTO `users`(
    `email`, 
    `password`,
    `parent_name`,
    `tel`,
    `student_name`,
    `student_gender`,
    `student_level`,
    `student_school`,
    `account_type`,
    `date_of_registration`
    )
    
    VALUES (
    '$email',
    '$password',
    '$parent_name',
    '$tel',
    '$student_name',
    '$student_gender',
    '$student_level',
    '$student_school',
    '$package',
    '$dateofregistration'

    )");

  $_SESSION['student_name']     = $student_name;


  echo '<meta HTTP-EQUIV="REFRESH" content="0; url=learning.php">';
}

function user_exist($email){
  $email = mysql_real_escape_string($email);

  $total = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `email` = '{$email}'");

  return (mysql_result($total, 0) == '1') ? true : false;
}
function check_user($email,$password){

  $email        = mysql_real_escape_string(htmlentities($email));
  $password     = md5($password);
  
  $total = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `email` = '{$email}' AND `password` = '{$password}'");

  return (mysql_result($total, 0) == '1') ? true : false;

} 
function check_login(){
  if(isset($_SESSION['student_name']) === false){

    echo '<meta HTTP-EQUIV="REFRESH" content="0; url=sorry.php">';
  }

}
function update_password(){

  $studentId    = $_SESSION['user_id'];
  $studentName  = $_SESSION['student_name'];
  $newPAssword  = md5($_POST['new_password']);

  $passwordUpdate = mysql_query("UPDATE `users` SET `password` ='$newPAssword' WHERE `user_id` = '$studentId' AND `student_name` = '$studentName'");

  echo '<div class="alert" >'. "你的密碼已經更新！" . '</div>';




}


?>