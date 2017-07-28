<?php include('init.php');?>
<?php include('function/user.php');?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!-- Bootstrap -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
		
		<div class="container">
			<div class="row">
				<div class="span12">
                	<div id="inner_title">
                        <h3>註冊帳戶</h3>
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

							        	if(isset($_POST['email'], $_POST['password'],$_POST['password_cfm'])){

							        		if(empty($_POST['email'])){
											    $errors[] = "你必需輸入你的登入電郵!";
											  }	
											  if(empty($_POST['password']) || empty($_POST['password_cfm'])){
											    $errors[] = "你必需輸入你的密碼!";
											  }	
											
											  if(empty($_POST['student_name'])){
											    $errors[] = "你必需輸入你的學生姓名!";
											  }	
											  if($_POST['password'] !== $_POST['password_cfm']){
												    $errors[] = "密碼錯誤，請重新輸入";
											  } 

											   if(user_exist($_POST['email'])){
												    $errors[] = "登入電郵已註冊";
											  }
											  if(empty($errors)){

											    $email         			= mysql_real_escape_string($_POST['email']);
											    $password      			= mysql_real_escape_string($_POST['password']);
											    $parent_name          	= mysql_real_escape_string($_POST['parent_name']);
											    $tel          			= mysql_real_escape_string($_POST['tel']);
											    $student_name          	= mysql_real_escape_string($_POST['student_name']);
											    $student_gender         = mysql_real_escape_string($_POST['student_gender']);
											    $student_school        	= mysql_real_escape_string($_POST['student_school']);
											    $student_level         	= mysql_real_escape_string($_POST['student_level']);
											    $package      			= "Free";
											    $dateofregistration     = date('m/d/Y h:i:s a', time());
											   
											  

											    register_user(
											      $email,
											      $password,
											      $parent_name,
											      $tel,
											      $student_name,
											      $student_gender,
											      $student_school,
											      $student_level,
											      $package,
											      $dateofregistration
											     	
											      );

											    unset($_SESSION['nameofstudent'],$_SESSION['emailofstudent'],$_SESSION['levelofstudent']);
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


                       	<div class="span6">
                        <form name="registration " action="" method="post" >
						<div id="contact_form">
							<h3>登入資料</h3>
							<table class="login-form">
								<tr >
									<td class="header"><span class="font-red">登入電郵*：</span></td>
									<td><input class="placeholder span4" type="text" name="email" placeholder="登入電郵"  value="<?php if(isset($_SESSION['emailofstudent'])){ echo $_SESSION['emailofstudent'];}?>"/></td>
								</tr>
								<tr>
									<td class="header"><span class="font-red">登入密碼*：</span></td>
									<td><input class="placeholder span4" type="password" name="password"  placeholder="登入密碼" /></td>
								</tr>
								<tr>
									<td class="header"><span class="font-red">確認密碼*：</span></td>
									<td><input class="placeholder span4" type="password" name="password_cfm"  placeholder="確認密碼" /></td>
								</tr>
								<tr>
									<td><img src="_assets/img/profile-pic-01.png"></td>

								</tr>
								<!--<tr>
									<td class="header">選擇月費：</td>
									<td>
									<select name ="package" class="placeholder span4">
									      <option value="One-Month">一個月($199/月)</option>
										  <option value="Three-Month">三個月($149/月)</option>
										  <option value="Six-Month">六個月($99/月)</option>
									</select>
									</td>
								</tr>-->
								<!--<tr>
									<td class="header"></td>
									<td><a href="pricing.php" class="submit blue-btn" target="_blank">收費模式</a></td>
								</tr>-->
								
								
							</table>

							
						</div>
								
					</div>

					<div class="span6">
					<table class="login-form">
						<h3>學生資料</h3>
								<tr>
									<td class="header">家長姓名：	</td>
									<td><input class="placeholder span4" type="text" name="parent_name"  placeholder="家長姓名" /></td>
								</tr>
								<tr>
									<td class="header">聯絡電話：</td>
									<td><input class="placeholder span4" type="text" name="tel"  placeholder="聯絡電話" /></td>
								</tr>
								<tr>
									<td class="header"><span class="font-red">學生姓名*：</span></td>
									<td><input class="placeholder span4" type="text" name="student_name"  placeholder="學生姓名" value="<?php if(isset($_SESSION['nameofstudent'])){ echo $_SESSION['nameofstudent'];}?>"/></td>
								</tr>
								<tr>
									<td class="header">學生姓別：</td>
									<td>
										<select name= "student_gender" class="placeholder span4">
										  
										  <option value="M">男</option>
										  <option value="F">女</option>
										</select>

									</td>
								</tr>
								<tr>
									<td class="header">就讀學校：</td>
									<td><input class="placeholder span4" type="text" name="student_school"  placeholder="就讀學校" /></td>
								</tr>
								<tr>
									<td class="header">就讀年級：</td>
									<td>
										<select name = "student_level" class="placeholder span4">

										<?php if(isset($_SESSION['levelofstudent'])){ 
											echo '<option value ="'.$_SESSION['levelofstudent'] .'">'.$_SESSION['levelofstudent'].' </option>';
											}else{
									      echo '
										  <option value="Primary 1">小一</option>
										  <option value="Primary 2">小二</option>
										  <option value="Primary 3">小三</option>
										  <option value="Primary 4">小四</option>
										  <option value="Primary 5">小五</option>
										  <option value="Primary 6">小六</option>
										  <option value="Others">其他</option>';

										  }?>
										</select>

									</td>
								</tr>
								<tr>
									<td class="header"></td>
									<td>&nbsp; </td>
								</tr>
						

					</table>

					</div>	
					<div align="center"><input class="submit blue-btn span4" type="submit" value="註冊" /></div>
					</form> 
					
							        	
							        	
					
					
				</div><!--/row-->
				
			</div><!--/container-->

			</div><!--/container-->
			
		</div><!--/hero-->
		
		<?php include('footer.php');?>
		
		<script src="_assets/js/bootstrap.min.js"></script>
        <!-- Latest Tweets -->
        <script type="text/javascript" src="_assets/js/twitter.js"></script>
        <script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('#latest_tweets').jtwt({
				username: 'designedbydash',
				count: '2',
				loader_text: 'Loading Tweets...'
			});
		});
		</script>
</body>
</html>