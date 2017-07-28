<?php 

include('init.php');
include('function/assessment_counting.php');
include('function/user.php');

?>

<?php
check_login();

if(isset($_SESSION['studentEmail']))

{
    $student_name       = $_SESSION['student_name'];
    $studentEmail       = $_SESSION['studentEmail'];
    $result              = mysql_query("SELECT * FROM `users` WHERE `email` = '$studentEmail'");
    $row                 = mysql_fetch_assoc($result);
    $student_level       = $row['student_level'];
    $_SESSION['user_id'] = $row['user_id'];
}

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
            <p align="center"><?php if(isset($_SESSION['student_name'])){echo "<h1 align='center'><span class='font-orange'>Hello! ". $student_name . "</span></h1>"; }?></p>
        </div>
        
        <h4 align="center">我們會自動為你分派 <?php echo $student_level;?> 之練習</h4><hr/>
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

                                 <table class="subject-table">
                                    <tr>
                                        <td class="english-subject-header">閱讀理解</td>
                                        <td><span class="font-orange"> ( <?php echo  $No_of_chinese_assessment_comprehension ; ?> ) </span></td>
                                    </tr>
                                    <tr>
                                        <td class="english-subject-header">詞彙練習</td>
                                        <td><span class="font-orange"> ( <?php echo $No_of_chinese_assessment_vocabulary ; ?> ) </span></td>
                                    </tr>
                                  
                                    <!--<tr>
                                        <td class="english-subject-header">寫作訓練</td>
                                        <td><span class="font-orange"> ( <?php //echo $No_of_chinese_assessment_writing ?> ) </span></td>
                                    </tr>-->
                                   
                                    
                                </table>
                             
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="chinese.php?level=<?php echo $studentLevel;?>">做練習 &rarr;</a> 
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
                                <table class="subject-table">
                                    <tr>
                                        <td class="english-subject-header">Grammar</td>
                                        <td><span class="font-orange"> ( <? echo $No_of_assessment_grammar;?> )</span></td>
                                    </tr>
                                    <tr>
                                        <td class="english-subject-header">Vocabulary</td>
                                        <td><span class="font-orange"> ( <? echo $No_of_assessment_vocabulary;?> )</span></td>
                                    </tr>
                                    <tr>
                                        <td class="english-subject-header">Comprehension</td>
                                        <td><span class="font-orange"> ( <? echo $No_of_assessment_comprehension;?> ) </span></td>
                                    </tr>
                                    <!--<tr>
                                        <td class="english-subject-header">Writing</td>
                                        <td><span class="font-orange"> ( <? //echo $No_of_assessment_writing;?> )</span></td>
                                    </tr>-->
                                </table>
                         
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="english.php?level=<?php echo $studentLevel;?>">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3">
                            <img src="_assets/img/maths.png" alt="Mathematics" />
                            <div class="white-bg learning-container box-top-fix">
                            <h3>數學</h3>
                              
                                <p>數學補充練習</p>
                                  <h5>任務列表(<?php echo $total_assessment_math;?>) </h5><hr/>
                                <table class="subject-table">
                                    <tr>
                                        <td class="english-subject-header">四則運算</td>
                                        <td><span class="font-orange"> ( <? echo $No_of_assessment_calucation;?> )</span></td>
                                    </tr>
                                    <tr>
                                        <td class="english-subject-header">應用題</td>
                                        <td><span class="font-orange"> ( <? echo $No_of_assessment_maths_application;?> )</span></td>
                                    </tr>
                                    
                                </table>
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="maths.php?level=<?php echo $studentLevel;?>">做練習 &rarr;</a> 
                                    <!--<a class="btn" href="math.php">Coming Soon...</a> -->
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3">
                            <img src="_assets/img/exam.png" alt="three" />
                            <div class="white-bg learning-container box-top-fix">
                            <h3>考試道場</h3>
                           
                                 <p>小學模擬考試</p>
                                   <h5>任務列表</h5><hr/>
                                   <table class="subject-table">
                                    <tr>
                                        <td class="english-subject-header"><strong>TSA 模擬考試</strong></td>
                                        <td><span class="font-orange">( 0 )</span></td>
                                    </tr>
                                   
                                    
                                </table>
                                
                                <div class="aboutsocial">
                                    <a class="btn" href="404.php">Coming Soon...</a> 
                                    <!--<a class="btn" href="exam.php">Coming Soon...</a> -->
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                    </div><!--/row-->
                   
                </div>
			</div><!--/container-->
			
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