<?php include('init.php');?>
<?php include('function/admin.php');?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
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
		<!-- header-->
		<?php include('header.php');?>
		<!-- End header-->
		<div class="center-wrapper">
		<div class="container">
			<div class="row">
				<div class="span12">
                	<div id="inner_title">
                        <h3>Content Provider Account Registration</h3>
                        <!--<span>Get in touch with us</span>-->
                    </div><!--/inner title-->
				</div><!--/span12-->
			</div><!--/row-->
		</div><!--/container-->
		
		<!--<div id="test" class="gmap3 animated bounceInUp"></div>-->
		
		<div id="content">
			<div class="container extended-container" >
				<div class="row">
				<?php
							        	//Register message

							        	if(isset($_POST['admin_name'], $_POST['password'],$_POST['password_cfm'])){

							        		if(empty($_POST['admin_name'])){
											    $errors[] = "你必需輸入你的登入名稱!";
											  }	
											  if(empty($_POST['password']) || empty($_POST['password_cfm'])){
											    $errors[] = "你必需輸入你的密碼!";
											  }	
											  if($_POST['password'] !== $_POST['password_cfm']){
												    $errors[] = "密碼錯誤，請重新輸入";
											  } 

											   if(admin_exist_name($_POST['admin_name'])){
												    $errors[] = "登入名稱已註冊";
											  }
											   if(admin_exist_email($_POST['email'])){
												    $errors[] = "登入電郵已註冊";
											  }
											  if(empty($errors)){

											    $admin_name         	= $_POST['admin_name'];
											    $password      			= $_POST['password'];
											    $email          		= $_POST['email'];
											    
											   
											  

											    register_admin(
											      $admin_name,
											      $password,
											      $email
											     
											     
											      );

											    $_SESSION['admin_name'] 			= htmlentities($_POST['admin_name']);
    											$_SESSION['admin_id']   			= mysql_query("SELECT `admin_id` FROM `admin` WHERE `email` = '$email'");
							        			
							        			
							        			}
							        	}

							        	?>
				
				
                       
                        	<?php 
							              if(empty($errors) === false){
							                ?>
							                 <div class="alert" >
							                <ul class="no-bullet">
							                  <?php
							                  foreach ($errors as $error) {
							                    echo "<li> {$error} </li>";     
							                  }
							                  ?>
							                </ul>
							                 </div>
							              <?php
							                }
							              ?>


                       	<div class="span8">
                        <form name="registration" action="" method="POST" >
						<div id="contact_form">
							<h3>Account Information</h3>
							<table class="login-form">
								<tr >
									<td class="header">登入名稱：</td>
									<td><input class="placeholder span4" type="text" name="admin_name" placeholder="登入名稱" /></td>
								</tr>
								<tr>
									<td class="header">登入密碼：</td>
									<td><input class="placeholder span4" type="password" name="password"  placeholder="登入密碼" /></td>
								</tr>
								<tr>
									<td class="header">確認密碼：</td>
									<td><input class="placeholder span4" type="password" name="password_cfm"  placeholder="確認密碼" /></td>
								</tr>
								<tr>
									<td class="header">聯絡電郵：</td>
									<td><input class="placeholder span4" type="text" name="email"  placeholder="聯絡電郵" /></td>
								</tr>
								<tr>
									<td class="header"></td>
									<td><input type="submit" value="註冊帳戶" class="btn blue-btn"> <a href="admin-login.php" >Already have an Account?</a></td>
								</tr>
								
								
							</table>

							

							
						</div>
								
					</div>
					</form> 
					<div class="span4">
					<h3>Contact Us</h3>
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
        <!--<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('#latest_tweets').jtwt({
				username: 'designedbydash',
				count: '2',
				loader_text: 'Loading Tweets...'
			});
		});
		</script>-->
</body>
</html>