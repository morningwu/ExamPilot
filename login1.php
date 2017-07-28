<?php include('init.php');?>
<?php include('function/user.php');?>

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
	    
				
		<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css' />
        
        <!--[if gte IE 9]>
        <link type="text/css" rel="stylesheet" href="_assets/css/ie9-gradients.css" />
        <![endif]-->
        
	</head>
	<body>
		<div id="wrapper">
			<div id="main-wrapper">
				
		<!-- header-->
		<?php include('header.php');?>
		<!-- End header-->
		
		<div class="container">
			<div class="row">
				<div class="span12">
                	<div id="inner_title">
                        <h3>學生登入</h3>
                        <!--<span>Get in touch with us</span>-->
                    </div><!--/inner title-->
				</div><!--/span12-->
			</div><!--/row-->
		</div><!--/container-->
		
		<!--<div id="test" class="gmap3 animated bounceInUp"></div>-->
		<?php

		//Login

if(isset($_POST['email'],$_POST['password'])){
  if(empty($_POST['email'])){

    $errors[] = "請輸入登入電郵!" ;
  }
  if(empty($_POST['password'])){
    $errors[] = "請輸入登入密碼!";
  }
  if(check_user($_POST['email'],$_POST['password']) === false){

    $errors[] = "登入名稱或密碼錯誤！請重新輸入！";
  }
  if(empty($errors)){

  	$email = mysql_real_escape_string($_POST['email']);

  	$mysql_set_login_name 		= mysql_query("SELECT * FROM `users` WHERE `email` = '$email'");
  	
  	$set_login_name 			= mysql_fetch_array($mysql_set_login_name);
  	
  	$_SESSION['student_name'] 	= htmlentities($set_login_name['student_name']);
  	$_SESSION['user_id'] 		= htmlentities($set_login_name['user_id']);
  	$_SESSION['studentEmail']   = htmlentities($set_login_name['email']);
    
   echo '<meta HTTP-EQUIV="REFRESH" content="0; url=learning.php">';
   // die();
  }
}


if(isset($_POST['forgotten-password-submit'])){

	if(empty($_POST['forgotten-password-email'])){

    $errors[] = "請輸入你的電郵!" ;
  	}
  	if(empty($_POST['forgotten-password-tel'])){

    $errors[] = "請輸入你的電話!" ;
  	}
  	if(empty($errors)){

  		$email = $_POST['forgotten-password-email'];
  		$tel   = $_POST['forgotten-password-tel'];

  		forgetPassword($email,$tel);
  		
  	}

}
		?>
		<div id="content">
			<div class="container">
				<div class="row">
					<div class="span8">
						
                        	<?php
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
                       
                        <!-- Forgotten Password Modal Box-->

                        <div id="myModal-forgotten-password" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
			            	<div class="modal-header">
			              		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			              		<h2 id="myModalLabel" align="center">忘記密碼?</h2>
			            	</div>
			            	<div class="modal-body">
			            	<h4 align="center">請輸入你的登入電郵及聯絡電話，我們會為你重置登入密碼</h4>

			            	<form name="forgotten-password" action="" method="POST" id="form">
								<table class="login-form">
									<tr >
										<td class="header">登入電郵：</td>
										<td><input class="placeholder span4" type="text" name="forgotten-password-email" placeholder="登入電郵" /></td>
									</tr>
									<tr>
										<td class="header">聯絡電話：</td>
										<td><input class="placeholder span4" type="text" name="forgotten-password-tel"  placeholder="聯絡電話" /></td>
									</tr>
									
									<tr>
										<td class="header"></td>
										<td><input class="submit blue-btn" name="forgotten-password-submit" type="submit" value="取回密碼" /></td>
									</tr>

								</table>

							</form> 
			     
							</div>
          				</div>
          				<!--End of Forgotten Password-->
          				
						<div id="contact_form">
							<form action="" id="form" method="post" >
							<table class="login-form">
								<tr >
									<td class="header">登入電郵：</td>
									<td><input class="placeholder span4" type="text" name="email" placeholder="登入電郵" /></td>
								</tr>
								<tr>
									<td class="header">登入密碼：</td>
									<td><input class="placeholder span4" type="password" name="password"  placeholder="登入密碼" /></td>
								</tr>
								<tr>
									<td class="header"></td>
									<td><a data-toggle="modal" href="#myModal-forgotten-password">忘記密碼? </a> |  <a href="registration.php">仲未註冊?</a></td>

								</tr>
								<tr>
									<td class="header"></td>
									<td><input class="submit blue-btn" type="submit" value="登入" /></td>
								</tr>

							</table>

							</form> 
						</div>

					</div>
					<div class="span4">
						<img src="_assets/img/profilePic-04.png">

					</div>
					
				</div><!--/row-->
				
			</div><!--/container-->

			</div><!--/container-->
			
			</div>
		
		</div>
		
		<?php include('footer.php');?>
		
		<script src="_assets/js/bootstrap.min.js"></script>
        <!-- Latest Tweets -->
        <script type="text/javascript" src="_assets/js/twitter.js"></script>
</body>
</html>