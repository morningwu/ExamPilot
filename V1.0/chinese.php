<?php 

include('init.php');
include('function/assessment_counting.php');

?>

<?


//editablable variables
if(isset($_SESSION['student_name'])){


    $student_name   = $_SESSION['student_name'];
    $level          = mysql_query("SELECT `student_level` FROM `users` WHERE `student_name` = '$student_name'");
    $row            = mysql_fetch_assoc($level);

}


?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!-- Bootstrap -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
		<!-- header-->

		<?php include('header.php');?>
		<!-- End header-->
		
		<div class="container">
			<div class="row">
                <div class="span12">
                        
                     <div id="inner_title">
                        <h1>中國語文<? if(isset($_SESSION['student_name'])){echo " ( " . $row['student_level'] ." ) "; }?></h1> 
                        <span>小學中文練習 (<?php echo $total_assessment_chinese;?>)</span>
                        <span class="right-back-btn">
                        <a class=" btn blue-btn-small" href="learning.php"> &larr; Back</a> 
                    </span>
                </div>

            </div>
        </div>
		</div><!--/container-->
		
		<div id="content">
			<div class="container">
				
				
                <div id="filterSection" data-perrow="4">
                    <div class="row grid-listings">
                        
                        
                        <div class="span3 filterable development">
                            <img src="_assets/img/english-icon-2.png" alt="english-vocabulary" />
                            <div class="white-bg box-top-fix">
                            <h3>詞彙練習</h3>
                              
                                <table>
                                <tr>
                                    <td align="right"><strong>No. of Missions : </strong> </td>
                                    <td><?php echo $No_of_chinese_assessment_vocabulary; ?></td>
                                </tr>
                                <tr>
                                    <td align="right"><strong>Completed Mission : </strong> </td>
                                    <td><?php echo $completedChineseVocab;?></td>
                                </tr>
                                <tr>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                 </tr>
                            </table>
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="chinese-vocabulary-new.php">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            <img src="_assets/img/english-icon-3.png" alt="english-comprehension" />
                            <div class="white-bg box-top-fix">
                            <h3>閱讀理解</h3>
                               
                                <table>
                                    <tr>
                                        <td align="right"><strong>No. of Missions : </strong> </td>
                                        <td><?php echo $No_of_chinese_assessment_comprehension; ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right"><strong>Completed Mission : </strong> </td>
                                        <td><?php echo $completedChineseComp ;?></td>
                                    </tr>
                                    <tr>
                                         <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                     </tr>
                                </table>
                                
                                <div class="aboutsocial">
                                    <a class="btn" href="#">Coming Soon</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                       
                     
                    </div><!--/row-->
                   
                </div>
             
                   
                </div>
			</div><!--/container-->
			
		</div><!--/hero-->
		
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