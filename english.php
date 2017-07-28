<?php 

include('init.php');
include('function/assessment_counting.php');
include('function/user.php');
//Check if user logged in
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

        <!-- Slider css and jsStart-->
        <!--<link href="_assets/slider/css/demo.css" rel="stylesheet" />-->
        <link href="_assets/slider/css/jquery.jscrollpane.css" rel="stylesheet" />
        <!--<link href="_assets/slider/css/reset.css" rel="stylesheet" />-->
        <link href="_assets/slider/css/style.css" rel="stylesheet" />


        <!--Slider css and js End-->

        
	</head>
	<body>
		<!-- header-->
        <div id="wrapper">
		<?php include('header.php');?>
        <div class="center-wrapper">
		<!-- End header-->
		
		<div class="container center">
			<div class="row-fluid">
				<div class="span12">
                    
                     <div class="text-center">
                        <h2>English ( 小學英文練習 ) </h2> 
                        <h2><a class="flat-button flat-button-2" <?php echo 'href="learning-menu.php?level='.$studentLevelGet.'"'?> > &larr; Back</a></h2>
                     </div><hr/>

			     </div>
		</div>
		
		<div id="content">
			<div class="container center">
                 
				
                <!--First Row-->
            
                 <div id="filterSection" data-perrow="4">
                    <div class="row-fluid grid-listings">
                        <div class="span4">
                            
                            <img src="_assets/img/english-icon-grammar.png" alt="english-grammar" />
                            <div class="white-bg box-top-fix">
                            <h3><span class="small-font-size">Grammar</span></h3>
                            <table class="subject-table">
                                <tr>
                                    <td align="right"><strong>No. of Missions : </strong> </td>
                                    <td><?php echo $No_of_assessment_grammar; ?></td>
                                </tr>
                                <tr>
                                    <td align="right"><strong>Completed Mission : </strong> </td>
                                    <td><?php echo $completedEnglishGrammar;?></td>
                                </tr>
                                 <tr>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                 </tr>
                            </table>
                               
                                <div class="btn-container">
                                    <a class="flat-button flat-btn-round-3" href="english-grammar-new.php?level=<?php echo $studentLevelGet;?>">Learn &rarr;</a> 
                                </div><!--/btn-container-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span4">
                            
                            <img src="_assets/img/english-icon-vocabulary.png" alt="english-vocabulary" />
                            <div class="white-bg box-top-fix">
                            <h3><span class="small-font-size">Vocabulary</span></h3>
                            <table class="subject-table">
                                <tr>
                                    <td align="right"><strong>No. of Missions : </strong> </td>
                                    <td><?php echo $No_of_assessment_vocabulary; ?></td>
                                </tr>
                                <tr>
                                    <td align="right"><strong>Completed Mission : </strong> </td>
                                    <td><?php echo $completedEnglishVocab;?></td>
                                </tr>
                                <tr>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                 </tr>
                            </table>
                               
                              
                                
                                <div class="btn-container">
                                    <a class="flat-button flat-btn-round-3" href="english-vocabulary-new.php?level=<?php echo $studentLevelGet;?>">Learn &rarr;</a> 
                                </div><!--/btn-container-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span4">
                           
                            <img src="_assets/img/english-icon-comprehension.png" alt="english-comprehension" />
                            <div class="white-bg box-top-fix">
                            <h3><span class="small-font-size">Comprehension</span></h3>
                           <table class="subject-table">
                                <tr>
                                    <td align="right"><strong>No. of Missions : </strong> </td>
                                    <td><?php echo $No_of_assessment_comprehension; ?></td>
                                </tr>
                                <tr>
                                    <td align="right"><strong>Completed Mission : </strong> </td>
                                    <td><?php echo $completedEnglishComp;?></td>
                                </tr>
                                <tr>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                 </tr>
                                  
                            </table>
                              
                                <div class="btn-container">
                                    <a class="flat-button flat-btn-round-3" href="english-comprehension-new.php?level=<?php echo $studentLevelGet;?>">Learn &rarr;</a> 
                                </div><!--/btn-container-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                       <!-- <div class="span3 ">
                            
                            <img src="_assets/img/english-icon-writing.png" alt="english-writing" />
                            <div class="white-bg box-top-fix">
                            <h3><span class="small-font-size">Writing</span></h3>
                           <table>
                                <tr>
                                    <td align="right"><strong>No. of Missions : </strong> </td>
                                    <td><?php //echo $No_of_assessment_writing; ?></td>
                                </tr>
                                <tr>
                                    <td align="right"><strong>Completed Mission : </strong> </td>
                                    <td><?php //echo $completedEnglishWriting;?></td>
                                </tr>
                                 <tr>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                 </tr>
                            </table>
 
                                <div class="btn-container">
                                    <a class="btn" href="#">快將推出 &rarr;</a> 
                                </div>
                            </div>
                        </div>-->
                    </div>
                   
                </div>
                 <!--End of First Row-->
               
               
                </div>
			</div><!--/container-->
			
		</div><!--/hero-->
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