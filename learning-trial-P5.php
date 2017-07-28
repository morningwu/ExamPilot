<?php 

include('init.php');
include('function/assessment_counting_trial.php');

?>

<?php

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
        
	</head>
	<body>
        <div id="wrapper">
		<!-- header-->

		<?php include('header.php');?>
		<!-- End header-->
		
		<!--<div class="container">
			<div class="row">
				<div class="span12">
                	<div id="inner_title">
                        <h1>Learning Play Room  </h1>
                        <span>Start Playing Today</span>
                    </div>
				</div>
			</div>
		</div>-->
		<div class="top-container">
           <h1 class="text-center">ExamPilot 試用版</h1>
        </div>
        <h4 align="center">試用我們的網上學習平台</h4><hr/>
		<div id="content">
			<div class="container">
				<!--<div class="row">
					<div id="filterSection_menu" class="span12 filtering animated bounceInUp hidden-phone">
						<div class="btn-group">
							<button class="btn" data-filter="">中文</button>
							<button class="btn" data-filter="web">英文</button>
                            <button class="btn" data-filter="logodesign">數學</button>
							<button class="btn"  data-filter="seo">考試道場 </button>
							<button class="btn" data-filter="development">development</button>
							<button class="btn" data-filter="design">design</button>
						</div>
					</div>
				</div>-->
				
                <div id="filterSection" data-perrow="4">
                    <div class="row grid-listings">
                        
                        
                        
                        <div class="span3">
                            <img src="_assets/img/chinese.png" alt="Chinese" />
                            <div class="white-bg learning-container box-top-fix">
                            <h3>中文</h3>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                                <p>中文補充練習</p>
                                <h5>任務列表 (<?php echo $total_assessment_chinese;?>) </h5><hr/>
                                <ul class="no-bullet learning-trial-form">
                                    <li>閱讀理解 <span class="font-orange"> ( <?php echo  $No_of_chinese_assessment_comprehension ; ?> ) </span></li>
                                    <li>詞彙練習 <span class="font-orange "> ( <?php echo $No_of_chinese_assessment_vocabulary ; ?> ) </span></li>
                                </ul>
  
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="chinese-trial.php">做練習 &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3">
                        
                         <img src="_assets/img/english-icon-vocabulary.png" alt="English" />
                           <!-- <img src="_assets/img/english.png" alt="English" />-->
                            <div class="white-bg learning-container box-top-fix">
                            <h3>英文</h3>
                               
                                <p>英文補充練習</p>
                                <h5>Avaliable Mission (<?php echo $total_assessment_english;?>) </h5><hr/>
                                 <ul class="no-bullet learning-trial-form">
                                    <li>Grammar <span class="font-orange"> ( <? echo $No_of_assessment_grammar;?> )</span></li>
                                    <li>Vocabulary <span class="font-orange"> ( <? echo $No_of_assessment_vocabulary;?> )</span></li>
                                    <li>Comprehension<span class="font-orange "> ( <? echo $No_of_assessment_comprehension;?> ) </span></li>
                                </ul>

                        
                         
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-trial.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3">
                            <img src="_assets/img/maths.png" alt="Mathematics" />
                            <div class="white-bg learning-container box-top-fix">
                            <h3>數學</h3>
                              
                                <p>數學補充練習</p>
                                  <h5>任務列表(<?php echo $total_assessment_math;?>) </h5><hr/>
                                  <ul class="no-bullet learning-trial-form">
                                    <li>四則運算<span class="font-orange"> ( <? echo $No_of_assessment_calucation;?> )</span></li>
                                    <li>應用題 <span class="font-orange"> ( <? echo $No_of_assessment_maths_application;?> )</span></li>
                                
                                  </ul>
     
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="maths-trial.php">做練習 &rarr;</a> 
                                    <!--<a class="btn" href="math.php">Coming Soon...</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="span3">
                            <img src="_assets/img/exam.png" alt="three" />
                            <div class="white-bg learning-container box-top-fix">
                            <h3>考試道場</h3>
                           
                                 <p>小學模擬考試</p>
                                   <h5>任務列表</h5><hr/>
                                    <ul class="no-bullet learning-trial-form">
                                    <li>TSA 模擬考試</li>
                                    <li>應用題 <span class="font-orange"> ( <? echo $No_of_assessment_maths_application;?> )</span></li>
                                
                                  </ul>
                                
                                
                                <div class="aboutsocial">
                                    <a class="btn" href="404.php">Coming Soon...</a> 
                                    <!--<a class="btn" href="exam.php">Coming Soon...</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                   
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