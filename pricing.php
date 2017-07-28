<?php include('init.php');?>
<?php 

//edtable variables

$tel 		= "82107272";
$email		= "hello@exampilot.co";

?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<?php include('meta-tag.php');?>
		<link href="_assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="_assets/css/main.css" rel="stylesheet" />
		<link href="_assets/css/animate.css" rel="stylesheet" />
		<link href="_assets/css/font-awesome.css" rel="stylesheet" />
		<link href="_assets/css/pricing-table.css" rel="stylesheet" />
		
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
                        <h1>收費模式</h1>
                        <span>更少，同時更多</span>
                    </div><!--/inner title-->
				</div><!--/span12-->
			</div><!--/row-->
		</div><!--/container-->
		
		<div id="content">
			<div class="container">
			<div class="row">
				<div class="span9">	
					<div class="row">
						<div class="span3">
							<div class="pricing_table">
								<h2>1個月</h2>
								<div class="p-price">
									<h5>$199<span>/ month</span></h5>
								</div><!--/p price-->
	
								<ul>
									<li>中文補充練習</li>
									<li>英文補充練習</li>
									<li>數學補充練習</li>
									<li>小五、小六呈分試模擬試卷</li>
									<li><span class="font-red">作文批改(每科3篇)</span></li>
									<li>網上導師指導</li>
								</ul>
								<a class="blue-btn-small pricing-btn" href="#">選擇計劃</a>
							</div>
						</div><!--/span3-->
						
						<div class="span3">
							<div class="pricing_table">
								<h2>3個月</h2>
								<div class="p-price">
									<h5>$149<span>/ month</span></h5>
								</div><!--/p price-->
	
								<ul>
									<li>中文補充練習</li>
									<li>英文補充練習</li>
									<li>數學補充練習</li>
									<li>小五、小六呈分試模擬試卷</li>
									<li><span class="font-red">作文批改(每科5篇)</span></li>
									<li>網上導師指導</li>
								</ul>
								<a class="blue-btn-small pricing-btn" href="#">選擇計劃</a>
							</div>
						</div><!--/span3-->

						<div class="span3">
							<div class="pricing_table">
								<h2>6個月</h2>
								<div class="p-price">
									<h5>99<span>/ month</span></h5>
								</div><!--/p price-->
	
								<ul>
									<li>中文補充練習</li>
									<li>英文補充練習</li>
									<li>數學補充練習</li>
									<li>小五、小六呈分試模擬試卷</li>
									<li><span class="font-red">作文批改(每科8篇)</span></li>
									<li>網上導師指導</li>
								</ul>
								<a class="blue-btn-small pricing-btn" href="#">選擇計劃</a>
							</div>
						</div><!--/span3-->
						
					</div><!--/row-->
					
				
					
				</div><!--/span 9-->
				
				<div class="span3">
					
					
					<div class="sidebar-wrap">
						<h3>聯絡我們</h3>
						<table>
							<tr>
								<td>電話：</td>
								<td><?php echo $tel;?></td>
							</tr>
							<tr>
								<td>電郵：</td>
								<td><?php echo $email;?></td>
							</tr>
						</table>
					</div>
					
					
					
					
				</div><!--/span3-->
				
			</div><!--/row-->
			
		</div><!--/container-->
			
			<br>
			
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