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
		
		<?php include('header.php');?>
		<!-- Eng header-->
		
		
		<div class="container height100">
			<div class="row ">
				<div class="span12">
                    <div class="sorry-container">
                    	<div class="inner">
							<h1 align="center"><span class="sorry-text">Sorry</span></h1>
							<h3 align="center">此頁只限管理員登入</h3>
							
							<a href="index.php" class="btn blue-btn">Back</a>
						</div>
                    </div><!--/inner title-->
				</div><!--/span12-->
			</div><!--/row-->
		</div><!--/container-->
		

				
		<div class="extended-height-s"></div>
		
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