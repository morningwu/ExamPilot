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
		<div class="center-wrapper">
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
				<div class="row">
                    <div class="tabbable">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab">小一</a></li>
                                <li><a href="#tab2" data-toggle="tab">小二</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <div class="row grid-listings">
                        
                        
                        
                        <div class="span3">
                            <img src="_assets/img/chinese.png" alt="Chinese" />
                            <div class="white-bg learning-container box-top-fix">
                            <h3>中文</h3>
                                <!--<p class="muted-small teampos">web / seo</p>-->
                                <p>中文補充練習</p>
                                <h5>任務列表</h5><hr/>
                                <ul class="no-bullet learning-trial-form">
                                    <li>閱讀理解</li>
                                    <li>詞彙練習</li>
                                </ul>
  
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="chinese-trial.php?level=<?php echo $_GET['level'];?>">做練習 &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3">
                        
                         <img src="_assets/img/english-icon-vocabulary.png" alt="English" />
                           <!-- <img src="_assets/img/english.png" alt="English" />-->
                            <div class="white-bg learning-container box-top-fix">
                            <h3>英文</h3>
                               
                                <p>英文補充練習</p>
                                <h5>Avaliable Mission (<?php echo $totalEnglishTrialCount;?>) </h5><hr/>
                                 <ul class="no-bullet learning-trial-form">
                                    <li>Grammar <span class="font-orange"> ( <? echo $questionCountEngGrammar;?> )</span></li>
                                    <li>Vocabulary <span class="font-orange"> ( <? echo $questionCountEngVocab;?> )</span></li>
                                    <li>Comprehension<span class="font-orange "> ( <? echo $questionCountEngComp;?> ) </span></li>
                                    <!--<li>Writing<span class="font-orange "> ( <? //echo $questionCountEngWriting;?> ) </span></li>-->
                                </ul>

                        
                         
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english-trial.php?level=<?php echo $_GET['level'];?>">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3">
                            <img src="_assets/img/maths.png" alt="Mathematics" />
                            <div class="white-bg learning-container box-top-fix">
                            <h3>數學</h3>
                              
                                <p>數學補充練習</p>
                                  <h5>任務列表(<?php echo $totalMathTrialCount;?>) </h5><hr/>
                                  <ul class="no-bullet learning-trial-form">
                                    <li>四則運算<span class="font-orange"> ( <? echo $questionCountMathCalculation;?> )</span></li>
                                    <li>應用題 <span class="font-orange"> ( <? echo $questionCountMathApplied;?> )</span></li>
                                
                                  </ul>
     
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="maths-trial.php?level=<?php echo $_GET['level'];?>">做練習 &rarr;</a> 
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
                                    </ul>
                                
                                
                                <div class="aboutsocial">
                                    <a class="btn" href="404.php">Coming Soon...</a> 
                                    <!--<a class="btn" href="exam.php">Coming Soon...</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. 
                                    Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequat. 
                                    Mauris ornare tempor nulla, vel sagittis diam convallis eget. Ut ultricies ornare dui, ac accumsan diam 
                                    convallis eget. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequat. 
                                    Mauris ornare tempor nulla, vel sagittis diam convallis eget. Ut ultricies ornare dui, ac accumsan diam 
                                    convallis eget.</p>
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