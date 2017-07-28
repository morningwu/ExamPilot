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
                        <h1>考試道場</h1>
                        <span>Primary 6</span>
                        <span class="right-back-btn">
                            <a class=" btn blue-btn-small" href="learning.php">Back &rarr;</a> 
                        </span>
                    </div><!--/inner title-->
				</div><!--/span12-->
			</div><!--/row-->
		</div><!--/container-->
		
		<div id="content">
			<div class="container">
				
				
                <div id="filterSection" data-perrow="4">
                    <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            <img src="_assets/img/work.jpg" alt="three" />
                            <div class="white-bg box-top-fix">
                            <h4>呈分試練習</h4>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                                <p>There are many variations of passages or lorem ipsum available, but the majority.</p>
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="#">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            <img src="_assets/img/work2.jpg" alt="three" />
                            <div class="white-bg box-top-fix">
                            <h4>TSA練習</h4>
                               
                                <p>There are many variations of passages or lorem ipsum available, but the majority.</p>
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="#">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable development">
                            <img src="_assets/img/work3.jpg" alt="three" />
                            <div class="white-bg box-top-fix">
                            <h4>Cambridge English</h4>
                              
                                <p>There are many variations of passages or lorem ipsum available, but the majority.</p>
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="#">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
              
                    </div><!--/row-->
                   
                </div>
                   
                </div>
			</div><!--/container-->
			
		</div><!--/hero-->
		
		<?php include('footer.php');?>
		
		
		
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="_assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="_assets/js/filter.js"></script>
        
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