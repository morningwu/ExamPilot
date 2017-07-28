<?php
//All variables

$title = "ExamPilot - Supplmentary Exercise | Learning Report | Learning Reward";

//Connection to the database

include('connect.php');
//include('connect1.php');

//Session Start

session_start();
$errors = array();

//report function

include('function/answered-questions.php');

//All important Setting

//print_r($_SESSION);
date_default_timezone_set('Asia/Hong_Kong');

?>