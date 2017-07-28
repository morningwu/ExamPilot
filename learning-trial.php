<?php 

$totalChineseTrialCount = 0;
$totalEnglishTrialCount = 0;
$totalMathTrialCount =0;
?>

<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<title>ExamPilot</title>
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
           <h1 class="text-center">ExamPilot 試用版 <?php echo "(" . $_GET['level'] . ")";?></h1>
        </div>
        <h4 align="center">試用我們的網上學習平台</h4>
        <h3 align="center"><a id ="flat-btn" class="flat-button flat-button-2"  href="learning-trial-menu.php?level=<?php echo $_GET['level'];?>">返回 &rarr;</a></h3><hr/>
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
                    <div class="row-fluid">
                        <div class="container center">
                    
                    <?php
                    //Chinese Start
                    if($totalChineseTrialCount == 0){
                        echo 

                        "<div class='span4'>
                            <img src='_assets/img/chinese.png'/>
                            <div class='white-bg learning-container box-top-fix'>
                                <h3>中文</h3>
                                <span class='no-exercise'>暫時未有 ".$_GET['level']." 中文練習</span><hr/>
                                <div class='aboutsocial'><a id ='flat-btn' class='flat-button flat-button-2' href='learning-trial-menu.php?level=".$_GET['level']."'>返回 &rarr;</a></div>
                            </div>
                        </div>";

                    }else{
                        echo '

                        <div class="span4">
                            <img src="_assets/img/chinese.png" alt="Chinese" />
                            <div class="white-bg learning-container box-top-fix">
                            <h3>中文</h3>
                              
                                <h5>任務列表 ('.$totalChineseTrialCount.') </h5><hr/>
                                <ul class="no-bullet learning-trial-form">
                                    <li>閱讀理解 <span class="font-orange"> ( '.$questionCountChinComp .' ) </span></li>
                                    <li>詞彙練習 <span class="font-orange "> ( '. $questionCountChinVocab .' ) </span></li>
                                </ul>
  
                                <div class="aboutsocial">
                                    <a id ="flat-btn" class="flat-button flat-btn-round-3"  href="chinese-trial.php?level='. $_GET["level"].'">做練習 &rarr;</a> 
                                </div>
                            </div>
                        </div>
                        ';
                    }
                    //Chinese End

                    //English Start
                    if($totalEnglishTrialCount == 0){
                        echo 

                         "<div class='span4'>
                            <img src='_assets/img/english.png'/>
                            <div class='white-bg learning-container box-top-fix'>
                                <h3>英文</h3>
                                <span class='no-exercise'>暫時未有 ".$_GET['level']." 英文練習</span><hr/>
                                <div class='aboutsocial'><a id ='flat-btn' class='flat-button flat-button-2' href='learning-trial-menu.php?level=".$_GET['level']."'>返回 &rarr;</a></div>
                            </div>
                        </div>";

        
                    }else{
                        echo '

                        <div class="span4">
                            <img src="_assets/img/english-icon-vocabulary.png" alt="English" />
                            <div class="white-bg learning-container box-top-fix">
                            <h3>英文</h3>
 
                                <h5>Avaliable Mission ('.$totalEnglishTrialCount.') </h5><hr/>
                                <ul class="no-bullet learning-trial-form">
                                    <li>Grammar <span class="font-orange"> ( '.$questionCountEngGrammar .' )</span></li>
                                    <li>Vocabulary <span class="font-orange"> ( '.$questionCountEngVocab.' )</span></li>
                                    <li>Comprehension<span class="font-orange "> ( '. $questionCountEngComp.' ) </span></li>
                                </ul>
  
                                <div class="aboutsocial">
                                    <a id ="flat-btn" class="flat-button flat-btn-round-3"  href="english-trial.php?level='. $_GET["level"].'">做練習 &rarr;</a> 
                                </div>
                            </div>
                        </div>
                        ';
                    }
                    //English End

                    //Maths Start
                    if($totalMathTrialCount == 0){
                        echo 
                        "<div class='span4'>
                            <img src='_assets/img/maths.png'/>
                            <div class='white-bg learning-container box-top-fix'>
                                <h3>數學</h3>
                                <span class='no-exercise'>暫時未有 ".$_GET['level']." 數學練習</span><hr/>
                                <div class='aboutsocial'><a id ='flat-btn' class='flat-button flat-button-2' href='learning-trial-menu.php?level=".$_GET['level']."'>返回 &rarr;</a></div>
                            </div>
                        </div>";
                    }else{
                        echo '

                        <div class="span4">
                            <img src="_assets/img/maths.png" alt="Math" />
                            <div class="white-bg learning-container box-top-fix">
                            <h3>數學</h3>
                             <h5>任務列表 ('.$totalMathTrialCount.') </h5><hr/>
                                <ul class="no-bullet learning-trial-form">
                                    <li>四則運算 <span class="font-orange"> ( '.$questionCountMathCalculation .' )</span></li>
                                    <li>應用題 <span class="font-orange"> ( '.$questionCountMathApplied.' )</span></li>
                                    
                                </ul>
  
                                <div class="aboutsocial">
                                    <a id ="flat-btn" class="flat-button flat-btn-round-3"  href="maths-trial.php?level='. $_GET["level"].'">做練習 &rarr;</a> 
                                </div>
                            </div>
                        </div>
                        ';
                    }
                    //Maths End

                    ?>
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