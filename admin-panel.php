<?php include('init.php');?>
<?php include('function/admin.php');?>

<?php admin_login(); ?>

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
		<!-- End header-->
		<div class="center-wrapper">
		
		<div class="container">
			<div class="row ">
				<div class="span12">
                    <div class="text-center" id="inner_title">
						<h1>Content Provider Admin Panel</h1>
						<span>This is where you chaning the way our students learn</span>

                    </div><!--/inner title-->
				</div><!--/span12-->
			</div><!--/row-->
		</div><!--/container-->
		
		<div id="content">
			
		
			
			<div class="container text-center">
				
                <div class="row about-profiles">
					<div class="span4">
						<img src="_assets/img/admin-create-english.png" alt="English" />
						<div class="white-bg box-top-fix">
						<h3>English</h3>
						<h4>Create Assessment</h4>
							
							<p>English</p>
							<a href="create-assessment.php" class="btn blue-btn-small">Create</a>
						</div><!--/white bg-->
					</div><!--/span 3-->
					<div class="span4">
						<img src="_assets/img/admin-create-chinese.png" alt="Chinese" />
						<div class="white-bg box-top-fix">
						<h3>中文</h3>
						<h4>Create Assessment</h4>
							
							<p>Chinese</p>
							<a href="create-assessment-chinese.php" class="btn blue-btn-small">Create</a>
						</div><!--/white bg-->
					</div><!--/span 3-->
					<div class="span4">
						<img src="_assets/img/admin-create-maths.png" alt="Mathematics" />
						<div class="white-bg box-top-fix">
						<h3>數學</h3>
						<h4>Create Assessment</h4>
							
							<p>Mathematics</p>
							<a href="create-assessment-maths.php" class="btn blue-btn-small">Create</a>
						</div><!--/white bg-->
					</div><!--/span 3-->
				
				</div><!--/row-->


			

			</div><!--/container-->
			
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