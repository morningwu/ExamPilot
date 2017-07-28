<?php
//All variables

$title = "ExamPilot - Discovering New Way To Learn｜小學補充練習｜學習報告 | 學習獎賞 | 考試試題庫 | 詞彙及閱讀理解練習";

//Connection to the database

include('connect.php');
//include('connect1.php');

//Session Start

session_start();
$errors = array();

//report function

include('function/answered-questions.php');
include('function/notification.php');

//All important Setting

//print_r($_SESSION);
date_default_timezone_set('Asia/Hong_Kong');

if(isset($_SESSION['studentEmail'])){
	$studentEmailFetch  		= $_SESSION['studentEmail'];
	$studentInfo 				= mysql_query("SELECT `student_level` FROM `users` WHERE `email` = '$studentEmailFetch'");
	$studentInfoFetch   		= mysql_fetch_assoc($studentInfo);
	$studentLevelOriginal 		= $studentInfoFetch['student_level'];

	if($studentLevelOriginal == "Primary 1"){
		$studentLevel = "P.1";
	}elseif($studentLevelOriginal == "Primary 2"){
		$studentLevel = "P.2";
	}
	elseif($studentLevelOriginal == "Primary 3"){
		$studentLevel = "P.3";
	}
	elseif($studentLevelOriginal == "Primary 4"){
		$studentLevel = "P.4";
	}
	elseif($studentLevelOriginal == "Primary 5"){
		$studentLevel = "P.5";
	}
	elseif($studentLevelOriginal == "Primary 6"){
		$studentLevel = "P.6";
	}
}else{
	$studentLevel = "P.5";
}

?>

<!-- start Mixpanel --><script type="text/javascript">(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===e.location.protocol?"https:":"http:")+'//cdn.mxpnl.com/libs/mixpanel-2.2.min.js';f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f);b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==
typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");for(g=0;g<i.length;g++)f(c,i[g]);
b._i.push([a,e,d])};b.__SV=1.2}})(document,window.mixpanel||[]);
mixpanel.init("90b329fcab83bc85627c0fc3db432065");</script><!-- end Mixpanel -->


