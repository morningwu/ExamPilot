<?php 

include('init.php');
//include('function/assessment_counting.php');

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
		
		<div class="container">
			<div class="row">
				<div class="span12">
                    	
                     <div id="inner_title">
                    <h1>數學 ( 小學數學練習 )</h1> 
                  
                    <span class="right-back-btn">
                        <a class=" btn blue-btn-small" href="learning.php"> &larr; Back</a> 
                    </span>
                </div>

			</div>
		</div>
		
		<div id="content">
			<div class="container">
                 
				
                <!--First Row-->
                <h2>數學任務</h2><hr/>
                 <div id="filterSection" data-perrow="4">
                    <div class="row grid-listings">
                        <div class="span3">
                            
                            <img src="_assets/img/maths.png" alt="Maths-Calculation" />
                            <div class="white-bg box-top-fix">
                            <h3><span class="small-font-size">四則運算</span></h3>
                            <table>
                                <tr>
                                    <td align="right"><strong>任務數目 :</strong> </td>
                                    <td><?php echo $No_of_assessment_calucation; ?></td>
                                </tr>
                                <tr>
                                    <td align="right"><strong>完成任務 :</strong> </td>
                                    <td><?php if(isset($_SESSION['student_name'])){echo $completedMathCalculation;}else{echo "你必須登入";}?></td>
                                </tr>
                                 <tr>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                 </tr>
                            </table>
                               
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="math-calculation.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3">
                            
                            <img src="_assets/img/maths-applied-questions.png" alt="Maths-Applied-Questions" />
                            <div class="white-bg box-top-fix">
                            <h3><span class="small-font-size">應用題</span></h3>
                            <table>
                                <tr>
                                    <td align="right"><strong>任務數目 :</strong> </td>
                                    <td><?php echo $No_of_assessment_maths_application;?></td>
                                </tr>
                                <tr>
                                    <td align="right"><strong>完成任務 :</strong> </td>
                                    <td><?php if(isset($_SESSION['student_name'])){echo $completedMathAppliedQuestions;}else{echo "你必須登入";}?></td>
                                </tr>
                                <tr>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                 </tr>
                            </table>
                               
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn" href="english-vocabulary-new.php">快將推出 &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3">
                            
                            <a href="http://www.kumon.com.cn/KHK/index.php?lang=hk" target="_blank"><img src="_assets/img/kumon.png" alt="Sponsored Content" /></a>
                            <div class="white-bg box-top-fix">
                            <h3><span class="small-font-size font-orange">公文式－數學運用</span></h3>
                            <table>
                                <tr>
                                    <td align="right"><strong>任務數目 :</strong> </td>
                                    <td><?php echo $No_of_assessment_maths_demo;?></td>
                                </tr>
                                <tr>
                                    <td align="right"><strong>完成任務 :</strong> </td>
                                    <td><?php if(isset($_SESSION['student_name'])){echo $completedMathAppliedQuestions;}else{echo "你必須登入";}?></td>
                                </tr>
                              
                                <tr>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                 </tr>
                            </table>
                               
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="kumon-calculation.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->

                        <div class="span3">
                            
                            <a href="http://www.kumon.com.cn/KHK/index.php?lang=hk" target="_blank"><img src="_assets/img/Dr-I-Kid.png" alt="Sponsored Content" /></a>
                            <div class="white-bg box-top-fix ">
                            <h3><span class="small-font-size font-orange">Dr.I Kid－應用題</span></h3>
                            <table>
                                <tr>
                                    <td align="right"><strong>任務數目 :</strong> </td>
                                    <td><?php echo $No_of_assessment_maths_demo;?></td>
                                </tr>
                                <tr>
                                    <td align="right"><strong>完成任務 :</strong> </td>
                                    <td><?php if(isset($_SESSION['student_name'])){echo $completedMathAppliedQuestions;}else{echo "你必須登入";}?></td>
                                </tr>
                              
                                <tr>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                 </tr>
                            </table>
                               
                              
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="kumon-calculation.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        
                        
                    </div>
                   
                </div>
                 <!--End of First Row-->
               
               
                </div>
			</div><!--/container-->
			
		</div><!--/hero-->
		
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