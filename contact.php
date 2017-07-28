<?php include('init.php');?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title;?></title>
		<?php include('meta-tag.php');?>
		<link href="_assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="_assets/css/main.css" rel="stylesheet" />
		<link href="_assets/css/animate.css" rel="stylesheet" />
		<link href="_assets/css/font-awesome.css" rel="stylesheet" />
		
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		
		<!--/ Google Maps -->
	    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
	    <script type="text/javascript" src="_assets/js/gmap3.js"></script>
        <script type="application/javascript" src="_assets/js/contact.js"></script>
	    
	    <script type="text/javascript">
	    	$(function(){
		      $('#test').gmap3({
				 map: {
				    options: {
				      maxZoom: 12 
				    }  
				 },
				 marker:{
				    address: "1 infinite loop cupertino ca 95014",
				    options: {
				     icon: new google.maps.MarkerImage(
				       "_assets/img/google-map-icon.png",
				       new google.maps.Size(130, 130, "px", "px")
				     )
				    }
				 }
				},
				"autofit" );
			});
	    </script>
				
		<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css' />
        
        <!--[if gte IE 9]>
        <link type="text/css" rel="stylesheet" href="_assets/css/ie9-gradients.css" />
        <![endif]-->
        
	</head>
	<body>
	<div id="wrapper">

		<?php include('header.php');?>
	<div class="center-wrapper">
		<div class="container">
			<div class="row">
				<div class="span12">
                	<div id="inner_title">
                        <h1>聯絡我們</h1>
                        <span>我們樂於聆聽你的聲音</span>
                    </div><!--/inner title-->
				</div><!--/span12-->
			</div><!--/row-->
		</div><!--/container-->
		
		<!--<div id="test" class="gmap3 animated bounceInUp"></div>-->

		
		
		<div id="content">
			<div class="container">
				<div class="row">
					<div class="span8">
					
						
						<div id="contact_form">
							<?php
							if(isset($_POST['contact-submit'])){
								if(empty($_POST['name'])){
									$errors[] = "請輸入你的姓名" ;
								}
								if(empty($_POST['tel'])){

				   					$errors[] = "請輸入你的電話" ;
				  				}
								  if(empty($_POST['email'])){

				   					$errors[] = "請輸入你的電郵" ;
				  				}
				  				if(empty($errors)){

				  				$email 		= $_POST['email'];
				  				$tel   		= $_POST['tel'];
				  				$name   	= $_POST['name'];
				  				$enquiry   	= $_POST['enquiry'];
				  				$message   	= $_POST['message'];

				  				$to 		= "hello@exampilot.hk";
								$subject 	= "General Enquiry (ExamPilot)";
								$message 	= $name .'havs asked a query : '.$enquiry. $message.'Email : ' .$email .'Tel : ' .$tel;
								$headers 	= "From : enquiry@exampilot.hk"; //寄件者

								mail($to,$subject,$message,$headers);
								echo '<div class="alert">謝謝你的查詢！我們會儘快回覆你！</div>';
							
				  		
				  				}
							}
							
							            if(empty($errors) === false){
							              ?>
							              <div class="alert">
							              <ul class="no-bullet">
							                <?php
							                foreach ($errors as $error) {
							                  echo "<li>$error</li>" ;
							                }
							                ?>
							              </ul>
							               </div>
							              <?php

							            }
						?>


							 
							<form action="" name="contact"  method="POST" >
								<table class="contact-form">
									<tr>
										<td>聯絡姓名：</td>
										<td><input class="placeholder span6" type="text" name="name" placeholder="聯絡姓名" /></td>
									</tr>
									<tr>
										<td>聯絡電話：</td>
										<td><input class="placeholder span6" type="text" name="tel" placeholder="聯絡電話" /></td>
									</tr>
									<tr>
										<td>聯絡電郵：</td>
										<td><input class="placeholder span6" type="text" name="email" placeholder="聯絡電郵" /></td>
									</tr>
									<tr>
										<td>查詢事項：</td>
										<td><select name="enquiry" class="placeholder span6">
                                			<option value="general">一般查詢</option>
                                			<option value="bug">問題回報</option>
                                			<option value="advertisement">廣告查詢</option>
                                			<option value="partnership">合作事宜</option>
                                		</select></td>
									</tr>
									<tr>
										<td>查詢內容：</td>
										<td><textarea rows="5" class="placeholder span6" name="message" placeholder="查詢內容"></textarea></td>
									</tr>
									<tr>
										<td></td>
										<td><input class="submit blue-btn" type="submit" name="contact-submit" value="聯絡我們" /></td>
									</tr>
								</table>
                            
                           
                             
                            
								
							</form> 
						</div><!--/contact form-->
								
					</div><!--/span 12-->
					
					<div class="span4">
						<div class="sidebar-wrap">
						
							<ul class="no-bullet contact-sidebar">
								<li>電話：8120 7202</li>
								<li>電郵：<a href="mailto:hello@exampilot.co">hello@exampilot.hk</a></li>
							</ul>
							
	  						
							
	 
							
						</div>

					</div>
					
				</div>
				
			</div>

			</div>
			
		</div>
		</div>
		
		
		<?php include('footer.php');?>
		
		<script src="_assets/js/bootstrap.min.js"></script>
        <!-- Latest Tweets -->
        <script type="text/javascript" src="_assets/js/twitter.js"></script>
     
</body>
</html>