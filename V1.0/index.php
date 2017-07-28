<?php include('init.php');?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!-- Bootstrap -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
	           <div class="container index-height index_image">
	         
	           	  <div class="span7 index-wrapper animated fadeInLeft">
	           	  	<h1><span class="font-white">Get Better Grade</span><br/><!--<small><span class="font-white">Exercising 30 minutes a day</small>--></span></h1><hr/>

	           	  	<!--<h2><span class="font-white">Prastice in an Effective Way</span></h2><hr/>-->
	           	  	<h3><span class="font-white">Supplmentary Exercise ‧ Report ‧ Reward </span></h3>
	           	  
	           	  </div>
	           	  <div class="span4 index-wrapper-form animated fadeInRight">
	           	  	<div class="index_form text-center">

	           	  		<h3><span class="font-white">立即註冊<br/>可享14天免費試用</span></h3>	<hr/>



	           	  		<div id="contact_form">
							<form action="" name="index_signup" id="form" method="POST" >


							<table class="login-form">


								<tr >
									<td><input class="placeholder span3" type="text" name="name" placeholder="學生姓名" /></td>
								</tr>
								<tr >
									<td><input class="placeholder span3" type="text" name="email" placeholder="學生電郵" /></td>
								</tr>
								<tr>
									<td>
									<select class="span3" name="level" >
										  <option value="Primary 1">小一</option>
										  <option value="Primary 2">小二</option>
										  <option value="Primary 3">小三</option>
										  <option value="Primary 4">小四</option>
										  <option value="Primary 5">小五</option>
										  <option value="Primary 6">小六</option>
										  <option value="Others">其他</option>';
									</select>
								
									</td>
								</tr>
								
								<tr>

									<td align="center"><input type="submit" name="Trial-submit"class="submit blue-btn" value="註冊"><!--<input class="submit blue-btn" type="submit" value="註冊"/>--></td>
								</tr>
								<tr>
								<td><?php 
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
							              </td>

							</tr>

							</table>

							</form> 

							<?php

							if(isset($_POST['Trial-submit'])){

								if(empty($_POST['name'])){
									$errors[] = "你必需輸入你的學生姓名!";
								}
								if(empty($_POST['email'])){
									$errors[] = "你必需輸入你的學生姓名!";
								}	
								if(empty($errors)){
								$_SESSION['nameofstudent'] 	= $_POST['name'];
								$_SESSION['emailofstudent'] = $_POST['email'];
								$_SESSION['levelofstudent'] = $_POST['level'];

								echo '<meta HTTP-EQUIV="REFRESH" content="0; url=registration.php">';
								}
							}
							?>
						</div>

	           	  	</div>
	           	  </div>
	           </div>
           </div>
           
            <?php //include('index-banner.php');?>
            

		<div id="callout">
        	<div class="container">
                <div class="text-center">
                    <h3> <span class="notice">立即註冊帳戶，可享十四天免費試用</span><!--<span class="pull-right"><a class="blue-btn-small span2" href="registration.php">試用</a></span>--></h3>	
                </div>
                <div class="pull-right">
                    
                </div>
            </div>
        </div>
       
		<div id="content">
			<div class="container">

				<div class="row">
					
				<div class="container">
			
			<div class="main">
				<div class="row">

					<h4 align="center"><span class="big-font">Why ExamPilot?</span></h4><hr/>
					<div class="row">
						<div class="span3">
							<img src="_assets/img/index-icon-01.png" alt="Sync_Your_Learning" width="150px" height="150px"/>
						</div>
						<div class="span8">
							<h2>補充練習</h2>
							<p>ExamPiolt之補充練習以香港學制內容為基礎設計，學生完成練習後，如同重溫校內所學知識，兼可預習未教之課題。練習內容包括中、英、數及模擬考試，助學生提昇校內成績</p>
						</div>
					</div><hr/>
					<div class="row">
					<div class="span3">
							<img src="_assets/img/index-icon-02.png" alt="Primary_Assessment_Learning_Report" width="150px" height="150px"/>
						</div>
						<div class="span8">
							<h2>學習報告</h2>
							<p>學習報告即時反映學生次成積及賺取學習點。報告亦會每週傳予家長，了解學習進度</p>
						</div>
						
					</div><hr/>
						<div class="row">
						<div class="span3">
							<img src="_assets/img/index-icon-03.png" alt="Learning_Points" width="150px" height="150px"/>
						</div>
						<div class="span8">
							<h2>學習獎勵</h2>
							<p>完成練習及獲取合格分數╴學生會獲得學習點，用以兌換禮品，或兌換成現金捐款</p>
						</div>
					</div><hr/>
					


					
					
					
				</div>
				<!--<div class="row">
					<h4 align="center"><span class="big-font">Exampilot的學習模式</span></h4><hr/>
					<ul class="cbp_tmtimeline">
						<li>
							<time class="cbp_tmtime" datetime="2013-04-10 18:30"><span>Step1</span></time>
							<div class="cbp_tmicon cbp_tmicon-phone"></div>
							<div class="cbp_tmlabel">
								<h2><span class="font-white">做練習</span></h2>
								<p>放學 / 補完習返屋企，花15至30分鐘做練習，重溫當日所學或學習新知識<span class="font-red">(Exampilot之練習內仍根據香港小學學制設計)</span></p>
							</div>
						</li>
						<li>
							<time class="cbp_tmtime" datetime="2013-04-11T12:04"><span>Step2</span></time>
							<div class="cbp_tmicon cbp_tmicon-screen"></div>
							<div class="cbp_tmlabel">
								<h2><span class="font-white">睇報告</span></h2>
								<p>完成練習後即時知道答案，系統亦會記錄學生每日完成之練習數目及成績<hr/><a href="student-account.php" class="blue-btn-small">學習報告</a></p>
							</div>
						</li>
						<li>
							<time class="cbp_tmtime" datetime="2013-04-13 05:36"><span>Step3</span></time>
							<div class="cbp_tmicon cbp_tmicon-mail"></div>
							<div class="cbp_tmlabel">
								<h2><span class="font-white">換獎賞</span></h2>
								<p>以「學習點」換取禮物或兌換善款，捐款予慈善機構</p>
							</div>
						</li>
						
					</ul>
				</div>-->
			</div>
		</div>
				</div>
				
				<?php //include('index-content.php');?>
				
                <div class="row">
					<div class="span12 sign-up-home">
						<a href="learning.php" class="blue-btn span5 offset3" href="contact.html">立即試用</a>
					</div><!--/span12-->
					
				</div><!--/row-->

				
			</div><!--/container-->
		</div><!--/content-->
		
		<?php //include('bottom_white_content.php');?> 

		<?php include('footer.php');?>
		
		<script src="_assets/js/layerslider/jQuery/jquery.js"></script>
		<script src="_assets/js/bootstrap.min.js"></script>
        
        <!-- Latest Tweets -->
        <script type="text/javascript" src="_assets/js/twitter.js"></script>
        
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
        <script type="text/javascript">
		jQuery(document).ready(function(){
        	jQuery('#layerslider').layerSlider({
				responsiveUnder: 980,
				sublayerContainer: 940,
				skinsPath: '_assets/js/layerslider/skins/',
				skin : 'fullwidth',
				thumbnailNavigation: 'hover',
				responsive: false,
				slideDirection: 'left',
				delayin: 1000
			});
    	});
		</script>
         
</body>
</html>