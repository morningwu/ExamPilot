<?php include('init.php');?>

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
		
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		
		<!--/ Google Maps -->
	    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
	    <script type="text/javascript" src="_assets/js/gmap3.js"></script>
        <script type="application/javascript" src="_assets/js/contact.js"></script>
	    
	    <script type="text/javascript">
	    	$(function(){
		      $('#test').gmap3({
				 map: {
				    options: {
				      maxZoom: 12 
				    }  
				 },
				 marker:{
				    address: "1 infinite loop cupertino ca 95014",
				    options: {
				     icon: new google.maps.MarkerImage(
				       "_assets/img/google-map-icon.png",
				       new google.maps.Size(130, 130, "px", "px")
				     )
				    }
				 }
				},
				"autofit" );
			});
	    </script>
				
		<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css' />
        
        <!--[if gte IE 9]>
        <link type="text/css" rel="stylesheet" href="_assets/css/ie9-gradients.css" />
        <![endif]-->
        
	</head>
	<body>
		<?php include('header.php');?>
		
		<div class="container">
			<div class="row">
				<div class="span12">
                	<div id="inner_title">
                        <h1>聯絡我們</h1>
                        <span>我們樂於寧聽你的聲音</span>
                    </div><!--/inner title-->
				</div><!--/span12-->
			</div><!--/row-->
		</div><!--/container-->
		
		<!--<div id="test" class="gmap3 animated bounceInUp"></div>-->
		
		<div id="content">
			<div class="container">
				<div class="row">
					<div class="span9">
						<h3>留言給我們</h3>
						
                        <div class="alert" id="smoothieContactResponse" style="display: none;"></div>
                        
						<div id="contact_form">
							<form action="#" id="form" method="post" class="form-inline smoothieContact">
                            	<div class="control-group">
                                	<div class="controls">
                                    	<input class="placeholder span4" type="text" name="name" title="Your Name" placeholder="Your Name" />
                                    	<span class="help-inline"></span>
                                    </div>
                                </div>
                                <div class="control-group">
                                	<div class="controls">
										<input class="placeholder span4 required" type="text" name="email" title="Your Email"  placeholder="Your Email" />
                                		<span class="help-inline"></span> 
									</div>
                                </div>
                                <div class="control-group">
                                	<div class="controls">
										<textarea rows="10" class="placeholder span9" name="message" placeholder="Your Message"></textarea>
                                        <span class="help-inline"></span> 
                                	</div>
                                </div>
								<input class="submit blue-btn" type="submit" value="Send Message" />
							</form> 
						</div><!--/contact form-->
								
					</div><!--/span 12-->
					
					<div class="span3">
						<div class="sidebar-wrap">
							<h3>其他資料</h3>
							<address>
	  							
	  							<abbr title="Phone">P:</abbr> 8120 7272
							</address>
	 
							<address class="nomarg">
							
							  <a href="mailto:hello@exampilot.co">hello@exampilot.co</a>
							</address>
						</div><!--/sidebar wrap-->
				
						
						
						
						
					</div><!--/span3-->
					
				</div><!--/row-->
				
			</div><!--/container-->

			</div><!--/container-->
			
		</div><!--/hero-->
		
		
		<?php include('footer.php');?>
		
		<script src="_assets/js/bootstrap.min.js"></script>
        <!-- Latest Tweets -->
        <script type="text/javascript" src="_assets/js/twitter.js"></script>
     
</body>
</html>