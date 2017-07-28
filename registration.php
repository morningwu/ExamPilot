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
		<script type="text/javascript" src="_assets/js/main.js"></script>

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
		<!-- header-->
		<?php include('header.php');?>
		<!-- End header-->
		<div class="center-wrapper">
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
											    $errors[] = "你必需輸入學生姓名!";
											  }	
											  if($_POST['password'] !== $_POST['password_cfm']){
												    $errors[] = "密碼錯誤，請重新輸入";
											  } 

											   if(user_exist($_POST['email'])){
												    $errors[] = "登入電郵已註冊";
											  }
											  if(user_exist_name($_POST['student_name'])){
												    $errors[] = "登入名稱已註冊";
											  }
											  if(empty($errors)){

											    $email         			= mysql_real_escape_string($_POST['email']);
											    $password      			= mysql_real_escape_string($_POST['password']);
											    $parent_name          	= mysql_real_escape_string($_POST['parent_name']);
											    $tel          			= mysql_real_escape_string($_POST['tel']);
											    $student_name          	= mysql_real_escape_string($_POST['student_name']);
											    $address          		= mysql_real_escape_string($_POST['address']);
											    $student_gender         = mysql_real_escape_string($_POST['student_gender']);
											    $student_school        	= mysql_real_escape_string($_POST['student_school']);
											    $student_level         	= mysql_real_escape_string($_POST['student_level']);
											    $package      			= "Free";
											    $dateofregistration     = date('m/d/Y h:i:s a', time());
											    
											    $profilePic = "_assets/img/profilepic/" . basename($_FILES['profile-pic']['name']);
											    	
												

											  	if(isset($_POST['profile-pic-choose'])) {

											  		if($_POST['profile-pic-choose'] == "profilepic1"){$profilePic = "_assets/img/profilepic/default-01.png";}
											  		if($_POST['profile-pic-choose'] == "profilepic2"){$profilePic = "_assets/img/profilepic/default-02.png";}
											  		if($_POST['profile-pic-choose'] == "profilepic3"){$profilePic = "_assets/img/profilepic/default-03.png";}
											  		if($_POST['profile-pic-choose'] == "profilepic4"){$profilePic = "_assets/img/profilepic/default-04.png";}
											  		if($_POST['profile-pic-choose'] == "profilepic5"){$profilePic = "_assets/img/profilepic/default-05.png";}
											  		if($_POST['profile-pic-choose'] == "profilepic6"){$profilePic = "_assets/img/profilepic/default-06.png";}
											  		
											  	}else{$profilePic = "";}
											  
											    profilePicUpload();
											    register_user(
											      $email,
											      $password,
											      $parent_name,
											      $tel,
											      $student_name,
											      $address,
											      $student_gender,
											      $student_school,
											      $student_level,
											      $package,
											      $dateofregistration,
											      $profilePic
											     	
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
                        <form name="registration" action="" method="POST" enctype="multipart/form-data">
						<div id="contact_form">
							<h3>登入資料</h3>
							<ul class="no-bullet reg-form">
								<li><span class="font-red">*登入電郵：</span><input class="placeholder span4" type="text" name="email" placeholder="登入電郵(學習報告將以電郵每週傳送予家長)"  value="<?php if(isset($_SESSION['emailofstudent'])){ echo $_SESSION['emailofstudent'];}?>"/></li>
								<li><span class="font-red">*登入密碼：</span><input class="placeholder span4" type="password" name="password"  placeholder="登入密碼" /></li>
								<li><span class="font-red">*確認密碼：</span><input class="placeholder span4" type="password" name="password_cfm"  placeholder="確認密碼" /></li>
								<li>上載頭像：<input class="placeholder span4" type="file" name="profile-pic" class="placeholder span4" /></li>
								<li>選擇頭像：
								<select name="profile-pic-choose" class="placeholder span4" onchange="showDiv(this)">
									<option >請選擇</option>
									<option value="profilepic1">頭像1</option>
									<option value="profilepic2">頭像2</option>
									<option value="profilepic3">頭像3</option>
									<option value="profilepic4">頭像4</option>
									<option value="profilepic5">頭像5</option>
									<option value="profilepic6">頭像6</option>
									
								</select>
								</li>
								<li><a data-toggle="modal" id="profile-btn" href="#myModal" class="blue-btn ie8-btn-fix">頭像一覽</a></li>
							</ul>
								
							<!-- Profile Pic Modal-->
					
										  
										<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; ">
				            				<div class="modal-header">
				              					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				              					<h3 class="text-center" id="myModalLabel">選擇頭像</h3>
				            				</div>
			            				<div class="modal-body">
			              					<table class="profile-pic-table">
			              						<tr>
			              							<td><img src="_assets/img/profilepic/default-01.png"></td>
			              							<td><img src="_assets/img/profilepic/default-02.png"></td>
			              							<td><img src="_assets/img/profilepic/default-03.png"></td>
			              						</tr>
			              						<tr>
			              							<td><h4>頭像 1</h4></td>
			              							<td><h4>頭像 2</h4></td>
			              							<td><h4>頭像 3</h4></td>
			              						</tr>
			              						<tr>
			              							<td><img src="_assets/img/profilepic/default-04.png"></td>
			              							<td><img src="_assets/img/profilepic/default-05.png"></td>
			              							<td><img src="_assets/img/profilepic/default-06.png"></td>
			              						</tr>
			              						<tr>
			              							<td><h4>頭像 4</h4></td>
			              							<td><h4>頭像 5</h4></td>
			              							<td><h4>頭像 6</h4></td>
			              						</tr>
			              					</table>
										</div>
          								</div>
								</div>
							</div>

					<div class="span6">
					<h3>學生資料</h3>
					<ul class="no-bullet reg-form">
						<li>家長姓名：<input class="placeholder span4" type="text" name="parent_name"  placeholder="家長姓名" value="<?php if(isset($_POST['parent_name'])){ echo $_POST['parent_name'];}?>"/></li>
						<li>聯絡電話：<input class="placeholder span4" type="text" name="tel"  placeholder="聯絡電話" value="<?php if(isset($_POST['tel'])){ echo $_POST['tel'];}?>"/></li>
						<li><span class="font-red">*學生姓名：</span><input class="placeholder span4" type="text" name="student_name"  placeholder="學生姓名" value="<?php if(isset($_SESSION['nameofstudent'])){ echo $_SESSION['nameofstudent'];}elseif(isset($_POST['student_name'])){echo $_POST['student_name'];}?>"/></li>
						<li>居住地址：<input class="placeholder span4" type="text" name="address"  placeholder="居住地址" value="<?php if(isset($_POST['address'])){ echo $_POST['address'];}?>"/></li>
						<li>學生姓別：
							<select name= "student_gender" class="placeholder span4">
											  
								<option value="M">男</option>
								<option value="F">女</option>
							</select>
						</li>
						<li>就讀學校：<input class="placeholder span4" type="text" name="student_school"  placeholder="就讀學校" /></li>
						<li>就讀年級：<select name = "student_level" class="placeholder span4">

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
						</li>
					</ul>

					</div>	
					<div align="center"><input class="submit blue-btn span4" type="submit" value="註冊" /></div>
					</form> 
				
				</div>
				
			</div>

			</div>
			
		</div>
	
		</div>
		<?php include('footer.php');?>


        
      		<script src="http://code.jquery.com/jquery-latest.js"></script>
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