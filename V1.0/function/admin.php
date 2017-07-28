<?php

function register_admin($admin_name,$password,$email){

  $admin_name         = mysql_real_escape_string(htmlentities($admin_name));
  $password           = md5($password);

  mysql_query("INSERT INTO `admin`(
    `admin_name`, 
    `password`,
    `email`
    )
    
    VALUES (
    '$admin_name',
    '$password',
    '$email'

    )");

  echo '<meta HTTP-EQUIV="REFRESH" content="0; url=admin-panel.php">';
}

function admin_exist_email($email){
  $email = mysql_real_escape_string($email);

  $total = mysql_query("SELECT COUNT(`admin_id`) FROM `admin` WHERE `email` = '{$email}'");

  return (mysql_result($total, 0) == '1') ? true : false;
}
function admin_exist_name($admin_name){
  $email = mysql_real_escape_string($admin_name);

  $total = mysql_query("SELECT COUNT(`admin_id`) FROM `admin` WHERE `admin_name` = '{$admin_name}'");

  return (mysql_result($total, 0) == '1') ? true : false;
}
function check_admin($admin_name,$password){

  $admin_name   = mysql_real_escape_string(htmlentities($admin_name));
  $password     = md5($password);
  
  $total = mysql_query("SELECT COUNT(`admin_id`) FROM `admin` WHERE `admin_name` = '{$admin_name}' AND `password` = '{$password}'");

  return (mysql_result($total, 0) == '1') ? true : false;

} 
function admin_login(){
  if(isset($_SESSION['admin_name']) === false){

    echo '<meta HTTP-EQUIV="REFRESH" content="0; url=sorry-admin.php">';
  }

}
?>