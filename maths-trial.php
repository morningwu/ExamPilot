<?php 

include('init.php');
include('function/assessment_counting_trial.php');

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
		<div class="center-wrapper">
		<div class="container">
			<div class="row">
				<div class="span12">
                    	
                    <div id="inner_title">
                    <h2 class="text-center">數學 ( 試用版 ) <?php echo " ( " . $_GET['level'] . " ) ";?></h2> 
                    
                    <div class="text-center">
                        <a id="flat-btn" class="flat-button flat-button-2" href="learning-trial.php?level=<?php echo $_GET['level'];?>"> &larr; 返回</a> 
                    </div>
                </div>

			</div>
		</div>
		
		<div id="content">
			<div class="container">
                 
				
                <!--First Row-->
               
                 <div id="filterSection" data-perrow="4">
                    <div class="row-fluid">
                    <div class="container center">
                        <div class="span6">
                            
                             <img src="_assets/img/maths.png" alt="Maths-Calculation" />
                            <div class="white-bg box-top-fix">
                            <h3><span class="small-font-size">四則運算</span></h3>
                            <table>
                                <tr>
                                    <td align="right"><strong>任務數量 : </strong> </td>
                                    <td><?php echo $questionCountMathCalculation; ?></td>
                                </tr>
                               
                                 <tr>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                 </tr>
                            </table>
                               
                                <div class="aboutsocial">
                                    <a id="flat-btn" class="flat-button flat-btn-round-3" href="math-calculation-trial.php?level=<?php echo $_GET['level'];?>">做練習 &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span6 ">
                            
                            <img src="_assets/img/maths-applied-questions.png" alt="Maths-Applied-Questions" />
                            <div class="white-bg box-top-fix">
                            <h3><span class="small-font-size">應用題</span></h3>
                            <table>
                                <tr>
                                    <td align="right"><strong>任務數量 : </strong> </td>
                                    <td><?php echo $questionCountMathApplied; ?></td>
                                </tr>
                          
                                <tr>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                 </tr>
                            </table>
                               
                              
                                
                                <div class="aboutsocial">
                                    <a id="flat-btn" class="flat-button flat-btn-round-3" href="math-applied-trial.php?level=<?php echo $_GET['level'];?>">做練習 &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                    </div>
                       
                    </div>
                   
                </div>
                 <!--End of First Row-->
               
               
                </div>
			</div>
			
		</div>
        </div>
		
		<?php include('footer.php');?>
		
		
		
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="_assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="_assets/js/filter.js"></script>
        
        <!-- Latest Tweets -->
        <script type="text/javascript" src="_assets/js/twitter.js"></script>
    
         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript" src="_assets/slider/js/jquery.easing.1.3.js"></script>
        <!-- the jScrollPane script -->
        <script type="text/javascript" src="_assets/slider/js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="_assets/slider/js/jquery.contentcarousel.js"></script>
        <script type="text/javascript">
            $('#ca-container').contentcarousel();
        </script>
</body>
</html>