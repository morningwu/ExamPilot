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
	 <div id="wrapper">
		<!-- header-->
		
		<?php include('header.php');?>
		<!-- Eng header-->
		<div class="center-wrapper">
		
		<div class="container height100">
			<div class="row ">
				<div class="span12">
                    <div class="sorry-container">
                    	<div class="inner">
							<h1 align="center"><span class="sorry-text">Sorry</span></h1>
							<div class="divide30"></div>
							<h3 align="center ">我地還在日夜趕製此頁，留低你既聯絡電郵，我地會於準備好時通知你！</h3>

							<div id="contact_form ">
							<form action="#" id="form" method="POST" >
							<table class="login-form " align="center">
								<tr>
									<td><input class="placeholder span4" type="text" name="email" placeholder="電郵地址" /></td>
								</tr>
								<tr>
									<td><input class="submit blue-btn" type="submit" value="留低電郵" /></td>
								</tr>
							</table>

							</form> 
						</div>

						</div>
                    </div>

				</div><!--/span12-->
			</div><!--/row-->
		</div><!--/container-->
		</div>
		</div>

				
			
		
		<?php include('footer.php');?>
		
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="_assets/js/bootstrap.min.js"></script>
		
        
  
</body>
</html>