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

        <!-- Slider css and jsStart-->
        <!--<link href="_assets/slider/css/demo.css" rel="stylesheet" />-->
        <link href="_assets/slider/css/jquery.jscrollpane.css" rel="stylesheet" />
        <!--<link href="_assets/slider/css/reset.css" rel="stylesheet" />-->
        <link href="_assets/slider/css/style.css" rel="stylesheet" />


       

        <!--Slider css and js End-->


        
	</head>
	<body>
		<!-- header-->

		<?php include('header.php');?>
		<!-- End header-->
		
		<div class="container">
			<div class="row">
				<div class="span12">
                	<div id="inner_title">
                        <h1>Our Thoughts and Ideas</h1>
                        <span>Read what we are doing.</span>
                    </div><!--/inner title-->
				</div><!--/span12-->
			</div><!--/row-->
		</div><!--/container-->
		
		<div id="content">
			<div class="container">
				<div class="row">
					<div class="span9 animated bounceInUp">
						<div class="blog-wrap">
							<img src="_assets/img/blog.jpg" alt="full-icon" />
							<div class="white-bg box-top-fix white-bg-blog">
								<a href="blog-single.html"><h3>Our new iOS app, out </h3></a>
								<div class="blog-meta">
									<p class="muted">
										<i class=" icon-user"></i> <a class="muted" href="#">David Bradley</a> &nbsp; - &nbsp;
										<i class="icon-calendar"></i>Oct. 17th, 2012 &nbsp; - &nbsp; 
										<i class=" icon-comment-alt"></i> <a class="muted" href="#">4 Comments</a>
									</p>
								</div><!--/blog meta-->
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. 
								Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequat. 
								Mauris ornare tempor nulla, vel sagittis diam convallis eget.</p>
							
								<a href="blog-single.html">Read More &rarr;</a>
							</div><!--/white bg-->
						</div><!--/blog wrap-->
						
						<div class="blog-wrap">
							<img src="_assets/img/blog2.jpg" alt="full-icon" />
							<div class="white-bg box-top-fix white-bg-blog">
								<a href="blog-single.html"><h3>New Ideas, new website, new market. </h3></a>
								<div class="blog-meta">
									<p class="muted">
										<i class=" icon-user"></i> <a class="muted" href="#">David Bradley</a> &nbsp; - &nbsp;
										<i class="icon-calendar"></i>Oct. 17th, 2012 &nbsp; - &nbsp; 
										<i class=" icon-comment-alt"></i> <a class="muted" href="#">4 Comments</a>
									</p>
								</div><!--/blog meta-->
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. 
								Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequat. 
								Mauris ornare tempor nulla, vel sagittis diam convallis eget.</p>
							
								<a href="blog-single.html">Read More &rarr;</a>
							</div><!--/white bg-->
						</div><!--/blog wrap-->
						
						<div class="blog-wrap">
							<img src="_assets/img/blog3.jpg" alt="full-icon" />
							<div class="white-bg box-top-fix white-bg-blog">
								<a href="blog-single.html"><h3>How to tell when you make your customers mad. </h3></a>
								<div class="blog-meta">
									<p class="muted">
										<i class=" icon-user"></i> <a class="muted" href="#">David Bradley</a> &nbsp; - &nbsp;
										<i class="icon-calendar"></i>Oct. 17th, 2012 &nbsp; - &nbsp; 
										<i class=" icon-comment-alt"></i> <a class="muted" href="#">4 Comments</a>
									</p>
								</div><!--/blog meta-->
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. 
								Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequat. 
								Mauris ornare tempor nulla, vel sagittis diam convallis eget.</p>
							
								<a href="blog-single.html">Read More &rarr;</a>
							</div><!--/white bg-->
						</div><!--/blog wrap-->
						
						
						<div class="pagination pagination-centered pagination-padding">
							<ul>
								<li class="disabled"><a href="#">«</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">»</a></li>
							</ul>
						</div><!--/pagination-->
		
						
					</div><!--/span 9-->
					
					
					
					
					
				
				<div class="span3">
					<div class="sidebar-wrap">
						<h5>Search</h5>
						<form id="sidebarsearch" class="form-horizontal">
							<input class="span3" type="text" placeholder="And ye shall find...">
						</form>
					</div><!--/sidebar wrap-->
				
				
					<div class="sidebar-wrap">
						<h5>Categories</h5>
						<ul class="cats">
							<li><a href="typography.html">Typography</a></li>
	                        <li><a href="elements.html">Elements</a></li>
	                        <li><a href="full-width.html">Full Width</a></li>
	                        <li><a href="pricing-tables.html">Pricing Tables</a></li>
	                        <li><a href="right-sidebar.html">Right Sidebar</a></li>
	                        <li><a href="left-sidebar.html">Left Sidebar</a></li>
	                        <li><a href="404.html">404 Page</a></li>
						</ul>
					</div><!--/sidebar wrap-->
					
					<div class="sidebar-wrap">
						<h5>Text Blurb</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. 
						Pellentesque nec lacus elit.</p>
					</div><!--/sidebar wrap-->
					
					<div class="sidebar-wrap tag-cloud">
						<h5>Popular Tags</h5>
						<a href="#">Blog</a> <a href="#">Popular</a> <a href="#">Theme</a> <a href="#">Affiliate</a> 
						<a href="#">Ideas</a> <a href="#">Portfolio</a> <a href="#">Twitter</a> 
						<a href="#">Social Media</a> <a href="#">Cloud</a> <a href="#">Events</a>
					</div><!--/sidebar wrap-->
					
					<div class="sidebar-wrap">
					
						<div class="tabbable"> <!-- Only required for left/right tabs -->
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab1" data-toggle="tab"><i class="icon-edit"></i> New Post</a></li>
								<li><a href="#tab2" data-toggle="tab"><i class="icon-heart-empty"></i> Most Liked</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="tab1">
								
									<img class="thumb-left-pic" src="_assets/img/blog-sidebar-icon.png" alt="blog-sidebar-icon" />
									<div class="description">
										<h6><a href="#">Take a look at our new ThemeForest files today.</a></h6>
										<p class="muted-small">Nov. 21, 2012  </p>
									</div><!--/description-->
									<div class="clear"></div>
									<img class="thumb-left-pic" src="_assets/img/blog-sidebar-icon.png" alt="blog-sidebar-icon" />
									<div class="description">
										<h6><a href="#">Working on something fresh for you guys.</a></h6>
										<p class="muted-small">Dec. 12, 2012  </p>
									</div><!--/description-->
									<div class="clear"></div>
									<img class="thumb-left-pic" src="_assets/img/blog-sidebar-icon.png" alt="blog-sidebar-icon" />
									<div class="description">
										<h6><a href="#">Your thoughts on the iPhone 5? Here's ours...</a></h6>
										<p class="muted-small">March. 18, 2012 </p>
									</div><!--/description-->
									
									
								</div><!--/tab pane-->
								<div class="tab-pane" id="tab2">
									<img class="thumb-left-pic" src="_assets/img/blog-sidebar-icon.png" alt="blog-sidebar-icon" />
									<div class="description">
										<h6><a href="#">We just got some new toys, they are great!</a></h6>
										<p class="muted-small">Nov. 21, 2012 </p>
									</div><!--/description-->
									<div class="clear"></div>
									<img class="thumb-left-pic" src="_assets/img/blog-sidebar-icon.png" alt="blog-sidebar-icon" />
									<div class="description">
										<h6><a href="#">Why do you think people tend to trust others?</a></h6>
										<p class="muted-small">Apr. 14, 2012 </p>
									</div><!--/description-->
									<div class="clear"></div>
									<img class="thumb-left-pic" src="_assets/img/blog-sidebar-icon.png" alt="blog-sidebar-icon" />
									<div class="description">
										<h6><a href="#">What happens when you add us and an all nighted get?</a></h6>
										<p class="muted-small">May 2, 2012 </p>
									</div><!--/description-->

								</div><!--/tab pane-->
							</div><!--/tab content-->
						</div><!--/tabbable-->
					</div><!--/sidebar wrap-->

					
					
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