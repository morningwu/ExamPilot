<?php include('init.php');?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
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
		<!-- End header-->
		
		<div class="container">
			<div class="row">
				<div class="span12">
                	<div id="inner_title">
                        <h1>Single Work Page</h1>
                        <span>Check out what we made</span>
                    </div><!--/inner title-->
				</div><!--/span12-->
			</div><!--/row-->
		</div><!--/container-->
		
		<div id="content">
			<div class="container">
				<div class="row">
					<div class="span9">
						<div id="myCarousel" class="carousel slide">
							<!-- Carousel items -->
							<div class="carousel-inner">
								<div class="active item"><img src="_assets/img/workbig.jpg" alt="three" /></div>
								<div class="item"><img src="_assets/img/workbig2.jpg" alt="three" /></div>
								<div class="item"><img src="_assets/img/workbig3.jpg" alt="three" /></div>
							</div>
							<!-- Carousel nav -->
							<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
							<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
						</div><!--/my carousel-->
					</div><!--/span 9-->
					
					<div class="span3">
						<h4>Radio Icon</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. 
						Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequat. 
						Mauris ornare tempor nulla, vel sagittis diam convallis eset.</p>
						<hr>
						<h5>What We Did</h5>
							<ul id="checksinglework" class="check">
								<li>Icon Design</li>
								<li>All Concepts</li>
								<li>Search Engine Optimization</li>
							</ul>
						<hr>
						<div class="launch-project">
							<a class="blue-btn ie8-btn-fix" href="#">Launch Project &rarr;</a>
						</div><!--/launch project-->
						
					</div><!--/span 3-->
					
				</div><!--/row-->
			</div><!--/container-->
			
		
		
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