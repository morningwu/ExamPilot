<?php include('init.php');?>
<?php include('function/admin.php');?>

<?php admin_login(); ?>

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
	
		
		<div class="container">
			<div class="row ">
				<div class="span12">
                    <div id="inner_title">
						<h1>Admin Panel</h1>
						<span>This is where you create your assessment</span>

                    </div><!--/inner title-->
				</div><!--/span12-->
			</div><!--/row-->
		</div><!--/container-->
		
		<div id="content">
			
		
			
			<div class="container">
				<div class="row about-profiles">
					<div class="span12">
						<h3><?php echo "Hello !".$_SESSION['admin_name'];?></h3>
						
					</div><!--/span12-->
                </div>
                <div class="row about-profiles">
					<div class="span3">
						<img src="_assets/img/admin-create-english.png" alt="English" />
						<div class="white-bg box-top-fix">
						<h3>English</h3>
						<h4>Create Assessment</h4>
							
							<p>English</p>
							<a href="create-assessment.php" class="btn blue-btn-small">Create</a>
						</div><!--/white bg-->
					</div><!--/span 3-->
					<div class="span3">
						<img src="_assets/img/admin-create-chinese.png" alt="Chinese" />
						<div class="white-bg box-top-fix">
						<h3>中文</h3>
						<h4>Create Assessment</h4>
							
							<p>Chinese</p>
							<a href="create-assessment-chinese.php" class="btn blue-btn-small">Create</a>
						</div><!--/white bg-->
					</div><!--/span 3-->
					<div class="span3">
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