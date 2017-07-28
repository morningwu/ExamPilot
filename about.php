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
		
		<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css' />
        
        <!--[if gte IE 9]>
        <link type="text/css" rel="stylesheet" href="_assets/css/ie9-gradients.css" />
        <![endif]-->
        
	</head>
	<body>
		<!-- header-->
		<div id="wrapper">
		<?php include('header.php');?>
		<!-- Eng header-->
		<div class="center-wrapper">
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
						<h1 align="center">買了一整櫃的補充練習，但真的有用嗎?</h1>
                    </div><!--/inner title-->
				</div><!--/span12-->
			</div><!--/row-->
		</div><!--/container-->
		
		<div id="content">
			<div class="container">
				<div class="row">
				<div class="about-bg"><img src="_assets/img/dull-student.png" alt="Messy BookShelf" align="center"/></div>
				<div class="about-content">
					<p>你一年買了多少補充練習?</p>
					<p>又有多少於學期末完成了?</p>
					<p>我們相信，學生已經厭倦了沒趣的補充練習</p>
					<p><span class="font-orange">ExamPilot</span>希望置入遊戲元素予傳統補充練習方式，以校內所授知識為本，設計補充練習</p>
					<p>學生「玩學」同時重溫及學習校內知識</p>
					
				</div>
				<!--<h1 align="center"><span class="font-orange">Exam Pilot , Problem Solved</span></h1>-->
				</div><!--/row-->

				<div class="row">
					<div class="span12">
						<h3>我們的特色</h3>
					</div><!--/span12-->
				</div>
                <div class="row grid-listings">
					<div class="span3">
						<img src="_assets/img/index-icon-new-1.png" alt="Learning-Assessment" />
						<div class="white-bg box-top-fix text-center">
							<h4>學習任務</h4>
							<p><span class="notice">超過2000條補充練習</span></p>

							<!--<a href="#">Read More &rarr;</a>-->
						</div><!--/work bg-->
					</div><!--/span3-->
					<!--<div class="span3">
						<img src="_assets/img/icon2.png" alt="work" />
						<div class="white-bg box-top-fix text-center">
							<h4>問野練功</h4>
							<p><span class="notice">問野學野</span></p>
							<a href="#">Read More &rarr;</a>
						</div>
					</div>-->
					<div class="span3">
						<img src="_assets/img/index-icon-new-2.png" alt="Learning-Report" />
						<div class="white-bg box-top-fix text-center">
							<h4>玩學報告</h4>
							<p><span class="notice">學習報告</span></p>
							<!--<a href="#">Read More &rarr;</a>-->
						</div><!--/work bg-->
					</div><!--/span3-->
					<div class="span3">
						<img src="_assets/img/index-icon-new-3.png" alt="Learning-Reward" />
						<div class="white-bg box-top-fix text-center">
							<h4>玩學獎賞</h4>
							<p><span class="notice">兌換獎賞</span></p>
							<!--<a href="#">Read More &rarr;</a>-->
						</div><!--/work bg-->
					</div><!--/span3-->
					<div class="span3">
						<img src="_assets/img/index-icon-new-4.png" alt="Learning-Trial" />
						<div class="white-bg box-top-fix text-center">
							<h4>內容同步</h4>
							<p><span class="notice">練習與教學內容同步</span></p>
							<!--<a href="#">Read More &rarr;</a>-->
						</div><!--/work bg-->
					</div><!--/span3-->
					
				</div>

				<div class="row">
					<div class="span12 sign-up-home">
						<a href="learning-trial-menu.php" class="flat-button flat-btn-round-3 span5 offset3">立即試用！</a>
					</div><!--/span12-->
					
				</div><!--/row-->

			</div><!--/container-->

			
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