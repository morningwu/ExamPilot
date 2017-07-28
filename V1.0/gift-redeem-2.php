<?php 
include('init.php');
include('gifts.php');

$giftname = $gift3;
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title;?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!-- Bootstrap -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="_assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="_assets/css/main.css" rel="stylesheet" />
		<link href="_assets/css/animate.css" rel="stylesheet" />
		<link href="_assets/css/font-awesome.css" rel="stylesheet" />
		
		<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css' />
        
        <!--[if gte IE 9]>
        <link type="text/css" rel="stylesheet" href="_assets/css/ie9-gradients.css" />
        <![endif]-->
        
	</head>
	<body>
		<!-- header-->
		
		<?php include('header.php');?>
		<!-- Eng header-->
		<!--
		<div class="container">
			<div class="row ">
				<div class="span12">
       				<div class="banner_center">
						<img src="_assets/img/banner1-1.png"></img>
              		</div>
				</div>
			</div>
		</div>-->
		
		<div class="container">
			<div class="row ">
				<div class="span12">
                    <div id="inner_title">
						<h1>換領獎賞 ( <?php echo $gift3; ?> ) </h1>
						<span>學習分．換禮品</span>

                    </div><!--/inner title-->
				</div><!--/span12-->
			</div><!--/row-->
		</div><!--/container-->
		
		<div id="content">
			<div class="container">
				<div class="row">

					
				</div><!--/row-->
			</div><!--/container-->
			
			<br>
				
			<div class="container">
				
                <div class="row about-profiles">
                <div class="span3">
						<div class="sidebar-wrap">
							<h3><?php echo $_SESSION['student_name']; ?></h3>
							<p>年級：<?php echo $student_level;?></p>
							<p><span class="font-orange">學習點：<?php echo $learning_points;?></span></p>
	 	
							
						</div><!--/sidebar wrap-->

					</div><!--/span3-->
					<div class="span9">
						<!--<img src="_assets/img/character/c2.jpg" alt="three" />-->
						<?php 
							if(isset($_POST['gift-redeem-submit'])){
								//giftRedeemApplication($student_name);
								echo '<div class="alert">你的換領申請已送出！</div>';
								echo '<meta HTTP-EQUIV="REFRESH" content="1; url=student-account.php">';

							}
						?>
						<img src="_assets/img/gift-redeem-03.png" alt="Gift-Redemption-Logo" />
						<div class="white-bg box-top-fix">
							<h2>換領禮品：<?php echo $giftname;?></h2><hr/>
							<p><span class="font-red">學習點：<?php echo $gift1Points3;?></span></p>
							<form name="gift" method="POST" action="">
								<input type="submit" class="btn blue-btn-small" name="gift-redeem-submit" value="確認換領">
							</form>
						</div>
					</div>
				</div><!--/row-->


                

			</div><!--/container-->
			
		</div><!--/hero-->
				
		
		
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