<?php

function register_user($email,$password,$parent_name,$tel,$student_name,$address,$student_gender,$student_school,$student_level,$package,$dateofregistration,$profilePic){
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
    `address`,
    `student_gender`,
    `student_level`,
    `student_school`,
    `account_type`,
    `date_of_registration`,
    `profile_pic`
    )
    
    VALUES (
    '$email',
    '$password',
    '$parent_name',
    '$tel',
    '$student_name',
    '$address',
    '$student_gender',
    '$student_level',
    '$student_school',
    '$package',
    '$dateofregistration',
    '$profilePic' 

    )");

  $_SESSION['student_name']     = $student_name;
  $_SESSION['studentEmail']     = $email;
  $extractedsessionid           = mysql_query("SELECT `user_id` FROM `users` WHERE `email` = '$email'");
  $sessionID                    = mysql_fetch_assoc($extractedsessionid);
  $_SESSION['user_id']          = $sessionID['user_id'];


  echo '<meta HTTP-EQUIV="REFRESH" content="0; url=learning.php">';
}

function user_exist($email){
  $email = mysql_real_escape_string($email);

  $total = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `email` = '{$email}'");

  return (mysql_result($total, 0) == '1') ? true : false;
}
function user_exist_name($student_name){
  $student_name = mysql_real_escape_string($student_name);

  $total = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `student_name` = '{$student_name}'");

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
function updateInfo($parentTel,$school,$gender){

  $studentId    = $_SESSION['user_id'];
  $studentEmail = $_SESSION['studentEmail'];

   mysql_query("UPDATE `users` SET 

    `tel`               ='$parentTel',
    `student_school`    ='$school',
    `student_gender`    ='$gender'

    WHERE `user_id` = '$studentId' AND `email` = '$studentEmail'");

  echo '<meta HTTP-EQUIV="REFRESH" content="0; url=thanks-info-update.php">';

}
function updatePassword($new_password){

    $studentId    = $_SESSION['user_id'];
    $studentEmail = $_SESSION['studentEmail'];
    $newPassword  = md5($new_password);

   mysql_query("UPDATE `users` SET 

    `password`          ='$newPassword'

    WHERE `user_id` = '$studentId' AND `email` = '$studentEmail'");

  echo '<meta HTTP-EQUIV="REFRESH" content="0; url=thanks-info-update.php">';

}
function profilePicUpload(){

        $target = "_assets/img/profilepic/"; 
        $target = $target . basename($_FILES['profile-pic']['name']) ; 
        $ok=1; 

        //Here we check that $ok was not set to 0 by an error 
        if ($ok==0){ 
           Echo "圖像上載出錯，請重新上載"; 
        } 
        //All Upload Condition Goes here

        //chekcing if the file exist
            

        //If everything is ok we try to upload it 
        else { 
            if(move_uploaded_file($_FILES['profile-pic']['tmp_name'], $target)){ 
              
              //  echo "文件". basename( $_FILES['profile-pic']['name']). " 已上載"; 

            } else { 
              echo "文件錯誤，請重新上載"; 
              } 
       } 


}

function forgetPassword($email,$tel){

  $to      = 'enquiry@exampilot.hk';
  $subject = 'ExamPilot (Forget Password)';
  $message = "Someone has Forgot his/her password user email :$email tel : $tel ";
  
  $headers = 'From: admin@exampilot.hk' . "\r\n" .
    'Reply-To: admin@exampilot.hk' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);

echo '<meta HTTP-EQUIV="REFRESH" content="0; url=thanks-forgotten.php">';

}

?>