<?php
//Connecting to Localhost

$dbhost 	= "localhost";
$dbuser 	= "root";
$dbpass 	= "root";

$idbhost	= mysql_real_escape_string($dbhost);
$idbuser	= mysql_real_escape_string($dbuser);
$idbpass	= mysql_real_escape_string($dbpass);

$connect =  mysql_connect($idbhost,$idbuser,$idbpass);
mysql_set_charset("UTF8", $connect);
mysql_select_db('teachmela');

/*
//Connecting to 24Hosting
$dbhost = "localhost";
$dbuser = "morni247_morning";
$dbpass = "chungywu5";

//$idbhost	= mysql_real_escape_string($dbhost);
//$idbuser	= mysql_real_escape_string($dbuser);
//$idbpass	= mysql_real_escape_string($dbpass);

$connect =  mysql_connect($dbhost,$dbuser,$dbpass);
mysql_set_charset("UTF8", $connect);
mysql_select_db('morni247_exampilot');
*/

/*
//Connect with PDO
$dbuser 	= "root";
$dbpass 	= "root";

try {
    $connect = new PDO('mysql:host=localhost;dbname=teachmela', $dbuser, $dbpass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
*/
?>