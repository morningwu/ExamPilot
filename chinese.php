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
		<!-- header-->
        <div id="wrapper">
		<?php include('header.php');?>
		<!-- End header-->
		<div class="center-wrapper">
		<div class="container center">
			<div class="row-fluid">
                <div class="span12">
                        
                     <div class="text-center">
                        <h2>中國語文 ( 小學中文練習 )</h2> 
                        <a class="flat-button flat-button-2" <?php echo 'href="learning-menu.php?level='.$studentLevelGet.'"'?> > &larr; 返回</a>
                    </div><hr/>

            </div>
        </div>
		</div><!--/container-->
		
		<div id="content">
			<div class="container center">
				
                    <div class="row-fluid grid-listings">
                        
                        
                        <div class="span6">
                            <img src="_assets/img/chinese.png" alt="chiense-vocabulary" />
                            <div class="white-bg box-top-fix">
                            <h3>詞彙練習</h3>
                              
                            <table class="subject-table">
                                <tr>
                                    <td align="right"><strong>任務數目 : </strong> </td>
                                    <td><?php echo $No_of_chinese_assessment_vocabulary; ?></td>
                                </tr>
                                <tr>
                                    <td align="right"><strong>完成任務 : </strong> </td>
                                    <td><?php echo $completedChineseVocab;?></td>
                                </tr>
                                <tr>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                 </tr>
                            </table>
                                
                                <div class="btn-container">
                                    <a class="flat-button flat-btn-round-3" href="chinese-vocabulary-new.php?level=<?php echo $studentLevelGet;?>">做練習 &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                        <div class="span6">
                            <img src="_assets/img/chinese-comprehension.png" alt="chinese-comprehension" />
                            <div class="white-bg box-top-fix">
                            <h3>閱讀理解</h3>
                               
                                <table class="subject-table">
                                    <tr>
                                        <td align="right"><strong>任務數目 : </strong> </td>
                                        <td><?php echo $No_of_chinese_assessment_comprehension; ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right"><strong>完成任務 : </strong> </td>
                                        <td><?php echo $completedChineseComp ;?></td>
                                    </tr>
                                    <tr>
                                         <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                     </tr>
                                </table>
                                
                                <div class="btn-container">
                                    <a class="flat-button flat-btn-round-3" href="chinese-comprehension.php?level=<?php echo $studentLevelGet;?>">做練習 &rarr;</a> 
                                </div><!--/aboutsocial-->
                            </div><!--/white bg-->
                        </div><!--/span 3-->
                       
                     
                    </div><!--/row-->
                   
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
</body>
</html>