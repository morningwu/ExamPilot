<?php
/*
$forgottenPasswordEmail = $_POST['forgotten-password-email'];
$forgottenPasswordTel = $_POST['forgotten-password-tel'];

$MailToAddress = "info@exampilot.co"; 
*/
$redirectURL = "thanks-forgotten.php"; 
/*

$missing_fields_redirectURL = "login.php";
$MailSubject = "Forgotten Password (ExamPilot)";
$MailFrom = "Exam Pilot Password Retrieve <info@exampilot.co>";
$MailToCC = ""; 
$Message = "
Applicants Email : $forgottenPasswordEmail 
Tel : $forgottenPasswordTel 
";

mail( $MailToAddress, $MailSubject, $Message, "Content-Type: text/html; charset=utf-8\r\nFrom: ".$MailFrom."\r\nBCc: ".$MailToCC);
*/header("Location: ".$redirectURL);

?>
