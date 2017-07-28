<?php 

include('init.php');
include('function/assessment_counting.php');
include('function/user.php');
check_login();

//editablable variables
if(isset($_SESSION['studentEmail']))

{
    $studentLevelGet     = $_GET['level'];
    $student_name        = $_SESSION['student_name'];
    $studentEmail        = $_SESSION['studentEmail'];
    $result              = mysql_query("SELECT * FROM `users` WHERE `email` = '$studentEmail'");
    $row                 = mysql_fetch_assoc($result);
    $student_level       = $row['student_level'];
    $_SESSION['user_id'] = $row['user_id'];
}

//Counting Assessment
$level              = $_GET['level'];
$englishTotal       = mysql_query("SELECT DISTINCT `mission_id` FROM `questions`         WHERE `level` = '$level'");
$englishTotalCount  = mysql_num_rows($englishTotal);
$chineseTotal       = mysql_query("SELECT DISTINCT `mission_id` FROM `questions_chinese` WHERE `level` = '$level'");
$chineseTotalCount  = mysql_num_rows($chineseTotal);
$mathTotal          = mysql_query("SELECT DISTINCT `mission_id` FROM `questions_maths`   WHERE `level` = '$level'");
$mathTotalCount     = mysql_num_rows($mathTotal);
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
        <div class="center-wrapper">
		<!-- End header-->
		
		<!--<div class="container">
			<div class="row">
				<div class="span12">
                	<div id="inner_title">
                        <h1>補充練習道場</h1>
                        <span>做練習 ‧ 睇報告 ‧ 賺獎賞</span>
                    </div>
				</div>
			</div>
		</div>-->

		<div class="top-container">
           <?php if(isset($_SESSION['student_name'])){echo "<h1 align='center'><span class='font-orange'>". $student_name . " Are You Ready?</span></h1>"; }?>
        </div>
        
        <h2 align="center"><?php echo $studentLevelGet . " 補充練習";?></h2>
        <h3 align="center"><a href="learning.php" class="flat-button flat-button-2">返回</a></h3><hr/>
		<div id="content">
			<div class="container center">
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
				

                    <div class="row-fluid">
                        <div class="container center">
                    
                    <?php
                    //Chinese Start
                    if($chineseTotalCount == 0){
                        echo 

                        "<div class='span4'>
                            <img src='_assets/img/chinese.png'/>
                            <div class='white-bg learning-container box-top-fix'>
                                <h3>中文</h3>
                                <span class='no-exercise'>暫時未有 ".$_GET['level']." 中文練習</span><hr/>
                                <div class='aboutsocial'><a id ='flat-btn' class='flat-button flat-button-2' href='learning.php?level=".$_GET['level']."'>返回 &rarr;</a></div>
                            </div>
                        </div>";

                    }else{
                        echo '

                        <div class="span4">
                            <img src="_assets/img/chinese.png" alt="Chinese" />
                            <div class="white-bg learning-container box-top-fix">
                            <h3>中文</h3>
                              
                                <h5>任務列表 ('.$chineseTotalCount.') </h5><hr/>
                                <ul class="no-bullet learning-trial-form">
                                    <li>閱讀理解 <span class="font-orange"> ( '.$No_of_chinese_assessment_comprehension.' ) </span></li>
                                    <li>詞彙練習 <span class="font-orange "> ( '. $No_of_chinese_assessment_vocabulary .' ) </span></li>
                                </ul>
  
                                <div class="aboutsocial">
                                    <a id ="flat-btn" class="flat-button flat-btn-round-3"  href="chinese.php?level='. $_GET["level"].'">做練習 &rarr;</a> 
                                </div>
                            </div>
                        </div>
                        ';
                    }
                    //Chinese End

                    //English Start
                    if($englishTotalCount == 0){
                        echo 

                         "<div class='span4'>
                            <img src='_assets/img/english.png'/>
                            <div class='white-bg learning-container box-top-fix'>
                                <h3>英文</h3>
                                <span class='no-exercise'>暫時未有 ".$_GET['level']." 英文練習</span><hr/>
                                <div class='aboutsocial'><a id ='flat-btn' class='flat-button flat-button-2' href='learning.php?level=".$_GET['level']."'>返回 &rarr;</a></div>
                            </div>
                        </div>";

        
                    }else{
                        echo '

                        <div class="span4">
                            <img src="_assets/img/english-icon-vocabulary.png" alt="English" />
                            <div class="white-bg learning-container box-top-fix">
                            <h3>英文</h3>
 
                                <h5>Avaliable Mission ('.$englishTotalCount.') </h5><hr/>
                                <ul class="no-bullet learning-trial-form">
                                    <li>Grammar <span class="font-orange"> ( '.$No_of_assessment_grammar .' )</span></li>
                                    <li>Vocabulary <span class="font-orange"> ( '.$No_of_assessment_vocabulary.' )</span></li>
                                    <li>Comprehension<span class="font-orange "> ( '. $No_of_assessment_comprehension.' ) </span></li>
                                </ul>
  
                                <div class="aboutsocial">
                                    <a id ="flat-btn" class="flat-button flat-btn-round-3"  href="english.php?level='. $_GET["level"].'">做練習 &rarr;</a> 
                                </div>
                            </div>
                        </div>
                        ';
                    }
                    //English End

                    //Maths Start
                    if($mathTotalCount == 0){
                        echo 
                        "<div class='span4'>
                            <img src='_assets/img/maths.png'/>
                            <div class='white-bg learning-container box-top-fix'>
                                <h3>數學</h3>
                                <span class='no-exercise'>暫時未有 ".$_GET['level']." 數學練習</span><hr/>
                                <div class='aboutsocial'><a id ='flat-btn' class='flat-button flat-button-2' href='learning.php?level=".$_GET['level']."'>返回 &rarr;</a></div>
                            </div>
                        </div>";
                    }else{
                        echo '

                        <div class="span4">
                            <img src="_assets/img/maths.png" alt="Math" />
                            <div class="white-bg learning-container box-top-fix">
                            <h3>數學</h3>
                             <h5>任務列表 ('.$mathTotalCount.') </h5><hr/>
                                <ul class="no-bullet learning-trial-form">
                                    <li>四則運算 <span class="font-orange"> ( '.$No_of_assessment_calucation .' )</span></li>
                                    <li>應用題 <span class="font-orange"> ( '.$No_of_assessment_maths_application.' )</span></li>
                                    
                                </ul>
  
                                <div class="aboutsocial">
                                    <a id ="flat-btn" class="flat-button flat-btn-round-3"  href="maths.php?level='. $_GET["level"].'">做練習 &rarr;</a> 
                                </div>
                            </div>
                        </div>
                        ';
                    }
                    //Maths End

                    ?>
                        </div>
                    </div>
			
		</div><!--/hero-->
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