<?php
$MailToAddress = "answer@teachmela.com"; 
$redirectURL = "thanks.php"; 
$missing_fields_redirectURL = "index.php";
$MailSubject = "General Parent Request (TutorCityHK)";
$MailFrom = "TutorCityHK <enquiry@tutorcityhk.com>";
$MailToCC = ""; 
$Message = "";
    if (!is_array($HTTP_POST_VARS))
    return;
reset($HTTP_POST_VARS);
	while(list($key, $val) = each($HTTP_POST_VARS)) {
		$GLOBALS[$key] = $val;
		if (is_array($val)) { 
			$Message .= "<b>$key:</b> ";
			foreach ($val as $vala) { 
				$vala =stripslashes($vala);
				$Message .= "$vala, ";
			} 
			$Message .= "<br>";
		} 	
		else {
			$val = stripslashes($val);
			if (($key == "Submit") || ($key == "submit")) { } 	
			else {
			if ($key == "selection") $key = "Selection";
			
	
	
			if ($val == "") { $Message .= "<strong>$key:</strong> - <br>\r\n"; }
			else {
			if ($key == "x" || $key == "y" || $val == "No"){ }
			else {
					$Message .= "<strong>$key:</strong>&nbsp;&nbsp;$val<br/>\r\n"; }
				}
			}
		}
	} 
$Message = "<font size=\"4\">".$Message."</font>";
mail( $MailToAddress, $MailSubject, $Message, "Content-Type: text/html; charset=utf-8\r\nFrom: ".$MailFrom."\r\nBCc: ".$MailToCC);
header("Location: ".$redirectURL);
?>
<html>
<head>
<title></title>
</head>
<body>
</body>
</html>
