<?php

include('init.php');
$giftListDetail 		 = mysql_query("SELECT * FROM `gift_table` WHERE `status` = 'active' ORDER BY `gift_order` ASC");
$giftDetailextracted 	 = mysql_fetch_array($giftListDetail);



?>