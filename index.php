<?php include('init.php');?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<?php include('meta-tag.php');?>
		<!-- Bootstrap -->
		
		<link href="_assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="_assets/css/main.css" rel="stylesheet" />
		<link href="_assets/css/animate.css" rel="stylesheet" type="text/css" />
		<link href="_assets/css/font-awesome.css" rel="stylesheet" />
		<link href="_assets/css/timeline-component.css" rel="stylesheet" />
		<link href="_assets/css/timeline-default.css" rel="stylesheet" />
		
		
		<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css' />
        
        <!--[if gte IE 9]>
        <link type="text/css" rel="stylesheet" href="_assets/css/ie9-gradients.css" />
        <![endif]-->
        
        <!-- LayerSlider styles -->
        <link rel="stylesheet" href="_assets/js/layerslider/css/layerslider.css" type="text/css" />
 
	</head>
	<body>	
		<!-- header-->
		<?php include('header.php');?>
		<!-- End header-->
		
            <div id="index">
            <!--LayerSlider begin-->
           
	           <div class="container index-image">
	       		<div class="row-fluid">
	       			<div class="index-center">
		           	  <div class="span8 index-wrapper animated fadeInLeft">
		           	  <div class="index-left-container">
		           	  	<h1 class="text-center"><span class="index-chinese-font font-shadow">網上補充練習</span></h1>
		           	  	<h2 class="text-center"><span class="index-chinese-font font-shadow">小一至小六補充練習 ‧ 每週學習報告</span><br/>
		           	  	<?php
		           	  		if(isset($_SESSION['studentEmail'])){
		           	  			echo '<a href="learning.php" id="flat-btn" class="flat-button flat-btn-round-3">立即練習！</a>';
		           	  		}else{
		           	  			echo '<a href="learning-trial-menu.php" id="flat-btn" class="flat-button flat-button-3">試用補充練習</a>';
		           	  		}
		           	  	?>
		           	  	

		           	  	</h2>

		           	  </div>
		           	  </div>
		           	  <div class="span4 animated fadeInRight">
		           	  	<div class="indexform">

		           	  		<h3>註冊帳戶 ‧ 免費試用</h3><hr/>

		           	  	
								<form action="" name="indexSignUp" method="POST" class="text-center">

								<ul class="no-bullet index-form">
								<li><?php

								if(isset($_POST['Trial-submit'])){

									if(empty($_POST['name'])){
										$errors[] = "你必需輸入你的學生姓名！";
									}
									if(empty($_POST['email'])){
										$errors[] = "你必需輸入你的電郵！";
									}	
									if(empty($errors)){
									$_SESSION['nameofstudent'] 	= $_POST['name'];
									$_SESSION['emailofstudent'] = $_POST['email'];
									$_SESSION['levelofstudent'] = $_POST['level'];

									echo '<meta HTTP-EQUIV="REFRESH" content="0; url=registration.php">';
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
								              ?></li>
									<li><input class="index-text-input" type="text" name="name" placeholder="學生姓名" /></li>
									<li><input class="index-text-input" type="text" name="email" placeholder="學生電郵" /></li>
									<li><select class="index-text-input" name="level" >
											  <option value="Primary 1">小一</option>
											  <option value="Primary 2">小二</option>
											  <option value="Primary 3">小三</option>
											  <option value="Primary 4">小四</option>
											  <option value="Primary 5">小五</option>
											  <option value="Primary 6">小六</option>
											  <option value="Others">其他</option>
										</select>
									</li>
									<li><input type="submit" name="Trial-submit" class="btn blue-btn" value="註冊"></li>
								</ul>				
								</form> 

		           	  	</div>
		           	  </div>

	           	</div>
	           </div>
	      	</div>
           </div>
           
            <?php //include('index-banner.php');?>
           
       <div class="center-wrapper margin-line">
		<div id="content">
			<div class="container center ">
			
					<h4 align="center"><span class="big-font">Why ExamPilot?</span></h4><hr/>
					<div class="row-fluid">
					<div class="index-bottom-container">
						<div class="span4 text-center">
							<img src="_assets/img/index-icon-01.png" alt="SyncYourLearning" width="150px" height="150px"/>
							<h2>補充練習</h2>
							<p>以香港學制內容為基礎設計之全科補充練習，助學生重溫校內知識，兼可預習課程。</p>
						</div>
						<div class="span4 text-center">
							<img src="_assets/img/index-icon-02.png" alt="SyncYourLearning" width="150px" height="150px"/>
							<h2>學習報告</h2>
							<p>記錄學生練習次數、成積進步或退步走勢。每週傳送予家長，讓你掌握子女學習進度</p>
						</div>
						<div class="span4 text-center">
							<img src="_assets/img/index-icon-03.png" alt="SyncYourLearning" width="150px" height="150px"/>
							<h2>學習獎勵</h2>
							<p>學生完成練習及獲取合格分數將獲得學習點，用以兌換禮品或現金捐款</p>
						</div>
					</div>
					<div class="span12 sign-up-home">
						<?php if(isset($_SESSION['studentEmail'])){
							echo '<a href="learning.php" class="flat-button flat-btn-round-3 span5 offset3">做練習</a>';
						}else{
							echo '<a href="learning-trial-menu.php" class="flat-button flat-btn-round-3 span5 offset3">立即試用！</a>';
						}?>
							
					</div>
					</div>
			</div>
				
	
		
				
				<?php //include('index-content.php');?>


				
			</div><!--/container-->
		</div><!--/content-->
		</div>
		<?php //include('bottom_white_content.php');?> 

		<?php include('footer.php');?>
		
		<script src="_assets/js/layerslider/jQuery/jquery.js"></script>
		<script src="_assets/js/bootstrap.min.js"></script>
        
        
        <!--Timeline JS-->
        <script type="text/javascript" src="_assets/js/timeline-modernizr.custom.js"></script>
        

        <!-- Testimonials -->
        <script type="text/javascript" src="_assets/js/testimonials.js"></script>
        
        <!-- Layer Slider -->
        <script src="_assets/js/layerslider/jQuery/jquery-easing-1.3.js" type="text/javascript"></script>
        <script src="_assets/js/layerslider/jQuery/jquery-transit-modified.js" type="text/javascript"></script>
         
        <!-- LayerSlider from Kreatura Media with Transitions -->
        <script src="_assets/js/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
        <script src="_assets/js/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
        
         
</body>
</html>