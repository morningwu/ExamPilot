<?php include('init.php');?>
<?php include('function/user.php');?>

<?php $assessment_title = "Mission 36 : Fruits and Vegetables";?>

<?php check_login();?>
    
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!-- Bootstrap -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="_assets/css/reveal.css" rel="stylesheet" />
		<link href="_assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="_assets/css/main.css" rel="stylesheet" />
		<link href="_assets/css/animate.css" rel="stylesheet" />
		<link href="_assets/css/font-awesome.css" rel="stylesheet" />
		
		<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css' />
        <?php include('function/QnA.php');?>
        <!--[if gte IE 9]>
        <link type="text/css" rel="stylesheet" href="_assets/css/ie9-gradients.css" />
        <![endif]-->
        
	</head>
	<body>
		<!-- header-->

		<?php include('header.php');?>
		<!-- End header-->
		<!-- Learning Video modeal Box-->

        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 id="myModalLabel">Learning Video</h2>
               
             </div>
            <div class="modal-body">
                 <h4>IELTS Speaking in 3 minutes</h4>
                <!--<h4>Text in a modal</h4>-->
                 <iframe width="100%" height="300" src="//www.youtube.com/embed/TyYHs1-6Vls?rel=0" frameborder="0" allowfullscreen></iframe>

            </div>
            <div class="modal-footer">
               
                <button class="btn btn-primary">ok</button>
            </div>
        </div>

        <div class="container">
            <div class="row">
                
                <div class="span12">
                    <div id="inner_title">
                        <h1>English Comprehension</h1>
                        <h5><?php echo $assessment_title;?></h5>
                        <span class="right-back-btn">

                            <a class=" btn blue-btn-small" href="english-comprehension.php">Back &rarr;</a> 
                        </span>
                    </div>
                </div>
            </div><!--/row-->
        </div><!--/container-->



		<div id="content">
            <div class="container">
                <div class="row">

                <!-- Assessment Content Start -->
                    
                    <?php include('question/english/comprehension/36-Fruits-and-Vegetables.php');?>
                <!-- Assessment Content End-->
                
                
            </div><!--/row-->
            </div><!--/container-->
            
            <br>
            
        </div><!--/hero-->
			
		</div><!--/hero-->
		
		<?php include('footer.php');?>
		
		
	   
   
        <script src="_assets/js/jquery-1.4.4.min.js"></script>
        <script src="_assets/js/jquery.reveal.js"></script>
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="_assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="_assets/js/filter.js"></script>
        
        <!-- Latest Tweets -->
        <script type="text/javascript" src="_assets/js/twitter.js"></script>
        

        <!-- hide and show Div-->

        <script language="javascript"> 
            function toggle() {
                var ele = document.getElementById("toggleText");
                var text = document.getElementById("displayText");
                if(ele.style.display == "block") {
                        ele.style.display = "none";
                    text.innerHTML = "Start Assessment";
                }
                else {
                    ele.style.display = "block";
                    text.innerHTML = "Close";
                }
            } 
            </script>
 


</body>
</html>