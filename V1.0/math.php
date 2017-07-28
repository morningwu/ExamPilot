<?php include('init.php');?>
<?
//editablable variables
if(isset($_SESSION['student_name'])){


    $student_name   = $_SESSION['student_name'];
    $level          = mysql_query("SELECT `student_level` FROM `users` WHERE `student_name` = '$student_name'");
    $row            = mysql_fetch_assoc($level);

}
//No. of Assessment
$No_of_assessment_calcuation	    = 0;
$No_of_assessment_text_question     = 0;

$total_assessment_maths          	= $No_of_assessment_calcuation + $No_of_assessment_text_question;

//Completed
$completed_calcuation				= 0;
$completed_text_question			= 0;

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
                        <h1>數學<? if(isset($_SESSION['student_name'])){echo " ( " . $row['student_level'] ." ) "; }?></h1> 
                        <span>小學數學練習 (<?php echo $total_assessment_maths;?>)</span>
                        <span class="right-back-btn">
                        <a class=" btn blue-btn-small" href="learning.php">Back &rarr;</a> 
                    </span>
                </div>

            </div>
        </div>
		</div><!--/container-->
		
		<div id="content">
			<div class="container">
				
				
                <div id="filterSection" data-perrow="4">
                    <div class="row grid-listings">
                        <div class="span3 filterable web seo">
                            <img src="_assets/img/work.jpg" alt="three" />
                            <div class="white-bg box-top-fix">
                            <h3>四則運算</h3>

                               <table>
                                    <tr>
                                        <td align="right"><strong>No. of Missions : </strong> </td>
                                        <td><?php echo $No_of_assessment_calcuation; ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right"><strong>Completed Mission : </strong> </td>
                                        <td><?php echo $completed_calcuation;?></td>
                                    </tr>
                                    <tr>
                                         <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                     </tr>
                                </table>
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="work-single.html">Learn &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span3 filterable logodesign design">
                            <img src="_assets/img/work2.jpg" alt="three" />
                            <div class="white-bg box-top-fix">
                            <h3>應用題</h3>
                               
                                <table>
                                    <tr>
                                        <td align="right"><strong>No. of Missions : </strong> </td>
                                        <td><?php echo $No_of_assessment_text_question; ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right"><strong>Completed Mission : </strong> </td>
                                        <td><?php echo $completed_text_question;?></td>
                                    </tr>
                                    <tr>
                                         <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                     </tr>
                                </table>
                                
                                <div class="aboutsocial">
                                    <a class="btn blue-btn-small" href="work-single.html">Learn &rarr;</a> 
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