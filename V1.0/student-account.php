<?php 

include('init.php');
include('function/user.php');
include('gifts.php');
include('student-info.php');

?>
<?php check_login();?>


<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title;?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!-- Bootstrap -->
		<meta name="Teachmenow" content="width=device-width, initial-scale=1.0" />
		<link href="_assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="_assets/css/main.css" rel="stylesheet" />
		<link href="_assets/css/animate.css" rel="stylesheet" />
		<link href="_assets/css/font-awesome.css" rel="stylesheet" />
		
		<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css' />
        
	</head>
	<body>

		<!-- header-->
		
		<?php include('header.php');?>
		<!--
		<div class="container">
			<div class="row ">
				<div class="span12">
                    <div id="inner_title">
						<h1><?php //if(isset($_SESSION['student_name'])){echo $_SESSION['student_name'] . "'s Information";}?></h1>
						<span></span>

                    </div>
				</div>
			</div>
		</div>
			-->
		<div id="content">
			<div class="container">
				<div class="row">

					
				</div><!--/row-->
			</div><!--/container-->
			
			<br>
			
			<div class="container">
				
                

                <div class="row">
                <div class="span3">
                	
                	<div class="tab-content white-bg">
                	<h3>學生資料</h3>
                		<img src="_assets/img/profile-pic-04.png" alt="Student_profile"/><hr/>
                		<h4 align="center"><?php if(isset($_SESSION['student_name'])){echo $_SESSION['student_name'];}?></h4>
                		<h4 align="center"><span class="font-orange">學習點：<?php if(isset($_SESSION['student_name'])){echo $learning_points;} //$level ?></span></h4>
                		<p align="center"><a href="logout.php" class="btn red-btn">登出</a></p>
                	
                	</div>


                	
                </div>
					<div class="span9">
                        <div class="tabbable white-bg table-header-fonts"> <!-- Only required for left/right tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab">學生資料</a></li>
                                <li><a href="#tab2" data-toggle="tab">學習報告</a></li>
                                <li><a href="#tab3" data-toggle="tab">學習獎賞</a></li>
                                <li><a href="#tab4" data-toggle="tab">更改密碼</a></li>
                              
                            </ul>
                            <div class="tab-content wide-bg">
                                <div class="tab-pane active " id="tab1">

                                <!-- Student report -->
                                	<div id="myModal-change-password" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; ">
			            				<div class="modal-header">
			              					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			              					<h2 id="myModalLabel" align="center">更改密碼</h2>
			            				</div>
			            				<div class="modal-body">

										</div>
          							</div>
                                	
                                		

                                		<?php


                                		/*
                                		if(isset($_POST['new_password'])){
                                			if(empty($errors)){
                                				echo 
                                				'<div class="alert">'.
                                					"你的密碼已經更新！" . 
                                				'</div>';
                                			}
                                		}
                                		*/
                                		?>
                                	
	                                    <table class="student-account-table">
	                                    	<tr>
	                                    		<td class="header">帳戶類別：</td>
	                                    		<td class="content"><?php echo $account_type;?> </td>
	                                    	</tr>
	                                    	<tr>
	                                    		<td class="header">帳戶狀況：</td>
	                                    		<td class="content"><?php echo "<span class='font-green'>" . $account_status . "</span>" . " ( Expired On :". $expired_date ." ) " ;?></td>
	                                    	</tr>
	                                    	<tr>
	                                    		<td class="header">學習點：</td>
	                                    		<td class="content"><?php echo $learning_points;?></td>
	                                    	</tr>
	                                    	<tr>
	                                    		<td class="header">學生姓名：</td>
	                                    		<td class="content"><?php echo $student_name; ?></td>
	                                    	</tr>
	                                    	
	                                    	<tr>
	                                    		<td class="header">學生姓別：</td>
	                                    		<td class="content"><?php echo $student_gender; ?></td>
	                                    	</tr>
	                                    	<tr>
	                                    		<td class="header">學校名稱：</td>
	                                    		<td class="content"><?php echo $student_school; ?></td>
	                                    	</tr>
	                                    	<tr>
	                                    		<td class="header">家長姓名：</td>
	                                    		<td class="content"><?php echo $parent_name; ?></td>
	                                    	</tr>
	                                    	<tr>
	                                    		<td class="header">登入電郵：</td>
	                                    		<td class="content"><?php echo $login_email;?> <!--<a data-toggle="modal" ref="#myModal-change-password" class="btn blue-btn-small ie8-btn-fix">更改密碼</a>--></td>
	                                    	</tr>
	                                    	<tr>
	                                    		<td class="header">學生級別：</td>
	                                    		<td class="content"><?php echo $student_level;?></td>
	                                    	</tr>
	                                    	
	                                    </table>
                                    
                                    
                                </div>

                                <div class="tab-pane" id="tab2">

                                <!-- Student report detail(All) -->
                                	<div id="reportAll" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; ">
			            				<div class="modal-header">
			              					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			              					<h2 id="myModalLabel" align="center">學習報告 (全部) </h2>
			            				</div>
			            				<div class="modal-body">
			              					
				             				<table class="report-table">

				             					<tr>
				             						<td align="center" class="header"><span class="font-red">No.</span></td>
				             						<td align="center" class="header"><span class="font-red">日期</span></td>
				             						<td align="center" class="header"><span class="font-red">科目</span></td>
				             						<td align="center" class="header"><span class="font-red">題目類型</span></td>
				             						<td align="center" class="header"><span class="font-red">練習名稱</span></td>
				             						<td align="center" class="header"><span class="font-red">合格?</span></td>
				             						<td align="center" class="header"><span class="font-red">得分</span></td>
				             						<td align="center" class="header"><span class="font-orange">學習點</span></td>
				             					</tr>

				             					<?
				             					$noAnswered =1;
				             					
				             					while($detailExtractedData = mysql_fetch_assoc($report_total)){
				             						
				             						$subjectAnswered		=	$detailExtractedData['subject'];
				             						$learningAreaAnswered	=	$detailExtractedData['learning_area'];
				             						$titleAnswered			=	$detailExtractedData['title'];
				             						$passAndFailAnswered	=	$detailExtractedData['pass_fail'];
				             						$earnedPointsAnswered	=	$detailExtractedData['earned_learning_points'];
				             						$answeredCorrect		=	$detailExtractedData['correct'];
				             						$answeredTotal			=	$detailExtractedData['total'];
				             						$answeredResult			=	$answeredCorrect/$answeredTotal;
				             						$answerResultPercentage	=	round($answeredResult*100);
				             						$timeAnswered			=	$detailExtractedData['Date_of_answered'];

				             						echo 
				             						'<tr>
				             						<td align="center">'.$noAnswered.'</td>
				             						<td align="center">'.$timeAnswered.'</td>
				             						<td align="center">'.$subjectAnswered.'</td>
				             						<td align="center">'.$learningAreaAnswered.'</td>
				             						<td align="center">'.$titleAnswered.'</td>
				             						<td align="center">';
				             						if($passAndFailAnswered == "pass"){echo '<span class="font-green">'.$passAndFailAnswered.'</span>';}else{echo '<span class="font-red">'.$passAndFailAnswered.'</span>';}

				             						echo '</td>
				             						<td align="center">'.$answerResultPercentage.'</td>
				             						<td align="center">'.$earnedPointsAnswered.'</td>

				             						</tr>';
				             						$noAnswered++;
				             					}

				             					?>
				             				</table>

										</div>
			            				<div class="modal-footer" >
			              					<!--<button class="btn blue-btn" data-dismiss="modal">傳送報告</button>-->
			              					<!--<button class="btn btn-primary">Save changes</button>-->
			            				</div>
          								</div>

          								<!--Student Report Detail (Pass)-->
          								<div id="reportPass" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; ">
			            				<div class="modal-header">
			              					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			              					<h2 id="myModalLabel" align="center">學習報告 <span class="font-green">(Pass)</span></h2>
			            				</div>
			            				<div class="modal-body">
			              					
				             				<table class="report-table">

				             					<tr>
				             						<td align="center" class="header"><span class="font-red">No.</span></td>
				             						<td align="center" class="header"><span class="font-red">日期</span></td>
				             						<td align="center" class="header"><span class="font-red">科目</span></td>
				             						<td align="center" class="header"><span class="font-red">類別</span></td>
				             						<td align="center" class="header"><span class="font-red">練習名稱</span></td>
				             						<td align="center" class="header"><span class="font-red">Pass/Fail?</span></td>
				             						<td align="center" class="header"><span class="font-red">得分</span></td>
				             						<td align="center" class="header"><span class="font-orange">學習點</span></td>
				             					</tr>

				             					<?
				             					$noAnswered =1;
				             					
				             					while($detailExtractedData = mysql_fetch_assoc($report_pass)){
				             						
				             						$subjectAnswered		=	$detailExtractedData['subject'];
				             						$learningAreaAnswered	=	$detailExtractedData['learning_area'];
				             						$titleAnswered			=	$detailExtractedData['title'];
				             						$passAndFailAnswered	=	$detailExtractedData['pass_fail'];
				             						$earnedPointsAnswered	=	$detailExtractedData['earned_learning_points'];
				             						$answeredCorrect		=	$detailExtractedData['correct'];
				             						$answeredTotal			=	$detailExtractedData['total'];
				             						$answeredResult			=	$answeredCorrect/$answeredTotal;
				             						$answerResultPercentage	=	round($answeredResult*100);
				             						$timeAnswered			=	$detailExtractedData['Date_of_answered'];

				             						echo 
				             						'<tr>
				             						<td align="center">'.$noAnswered.'</td>
				             						<td align="center">'.$timeAnswered.'</td>
				             						<td align="center">'.$subjectAnswered.'</td>
				             						<td align="center">'.$learningAreaAnswered.'</td>
				             						<td align="center">'.$titleAnswered.'</td>
				             						<td align="center">';
				             						if($passAndFailAnswered == "pass"){echo '<span class="font-green">'.$passAndFailAnswered.'</span>';}else{echo '<span class="font-red">'.$passAndFailAnswered.'</span>';}

				             						echo '</td>
				             						<td align="center">'.$answerResultPercentage.'</td>
				             						<td align="center">'.$earnedPointsAnswered.'</td>
				             						
				             						</tr>';
				             						$noAnswered++;
				             					}

				             					?>
				             				</table>

										</div>
			            				<div class="modal-footer" >
			              					<!--<button class="btn blue-btn" data-dismiss="modal">傳送報告</button>-->
			              					<!--<button class="btn btn-primary">Save changes</button>-->
			            				</div>
          								</div>

          								<!--Student Report Detail (Fail)-->
          								<div id="reportFail" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; ">
			            				<div class="modal-header">
			              					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			              					<h2 id="myModalLabel" align="center">學習報告 <span class="font-red">(Fail)</span></h2>
			            				</div>
			            				<div class="modal-body">
			              					
				             				<table class="report-table">

				             					<tr>
				             						<td align="center" class="header"><span class="font-red">No.</span></td>
				             						<td align="center" class="header"><span class="font-red">日期</span></td>
				             						<td align="center" class="header"><span class="font-red">科目</span></td>
				             						<td align="center" class="header"><span class="font-red">類別</span></td>
				             						<td align="center" class="header"><span class="font-red">練習名稱</span></td>
				             						<td align="center" class="header"><span class="font-red">Pass/Fail?</span></td>
				             						<td align="center" class="header"><span class="font-red">得分</span></td>
				             						<td align="center" class="header"><span class="font-orange">學習點</span></td>
				             					</tr>

				             					<?
				             					$noAnswered =1;
				             					
				             					while($detailExtractedData = mysql_fetch_assoc($report_fail)){
				             						
				             						$subjectAnswered		=	$detailExtractedData['subject'];
				             						$learningAreaAnswered	=	$detailExtractedData['learning_area'];
				             						$titleAnswered			=	$detailExtractedData['title'];
				             						$passAndFailAnswered	=	$detailExtractedData['pass_fail'];
				             						$earnedPointsAnswered	=	$detailExtractedData['earned_learning_points'];
				             						$answeredCorrect		=	$detailExtractedData['correct'];
				             						$answeredTotal			=	$detailExtractedData['total'];
				             						$answeredResult			=	$answeredCorrect/$answeredTotal;
				             						$answerResultPercentage	=	round($answeredResult*100);
				             						$timeAnswered			=	$detailExtractedData['Date_of_answered'];

				             						echo 
				             						'<tr>
				             						<td align="center">'.$noAnswered.'</td>
				             						<td align="center">'.$timeAnswered.'</td>
				             						<td align="center">'.$subjectAnswered.'</td>
				             						<td align="center">'.$learningAreaAnswered.'</td>
				             						<td align="center">'.$titleAnswered.'</td>
				             						<td align="center">';
				             						if($passAndFailAnswered == "pass"){echo '<span class="font-green">'.$passAndFailAnswered.'</span>';}else{echo '<span class="font-red">'.$passAndFailAnswered.'</span>';}

				             						echo '</td>
				             						<td align="center">'.$answerResultPercentage.'</td>
				             						<td align="center">'.$earnedPointsAnswered.'</td>
				             						

				             						</tr>';
				             						$noAnswered++;
				             					}

				             					?>
				             				</table>

										</div>
			            				<div class="modal-footer" >
			              					<!--<button class="btn blue-btn" data-dismiss="modal">傳送報告</button>-->
			              					<!--<button class="btn btn-primary">Save changes</button>-->
			            				</div>
          								</div>
					
				
                                     <table class="student-account-table">
                                    
                                     	<tr>
	                                    	<td class="header "><span class="font-red">&nbsp;</span></td>
	                                    	<td class="report-content large-font">全部</td>
	                                    	<td class="report-content large-font"><span class="font-green">Pass</span></td>
	                                    	<td class="report-content large-font"><span class="font-red">Fail</span></td>
	                                    	<td class="report-content large-font">合格率</td>
	                                    </tr>
	                                     <tr>
	                                    	<td class="header ">&nbsp;</td>
	                                    	<td class="report-content large-font"><a data-toggle="modal" href="#reportAll" class="btn blue-btn btn-small ie8-btn-fix">詳情</a></td>
	                                    	<td class="report-content large-font"><a data-toggle="modal" href="#reportPass" class="btn green-btn btn-small ie8-btn-fix">詳情</a></td>
	                                    	<td class="report-content large-font"><a data-toggle="modal" href="#reportFail" class="btn red-btn btn-small ie8-btn-fix">詳情</a></td>
	                                    	<td class="report-content large-font">&nbsp;</td>
	                                    </tr>
	                                    <tr>
	                                    	<td class="header"><span class="font-red">全部：</span></td>
	                                    	<td class="report-content"><span class="font-red"><?php echo $completed_mission_total;?> </span><!--<a data-toggle="modal" href="#myModal" class="btn blue-btn-small ie8-btn-fix">詳情</a>--></td>
	                                    	<td class="report-content"><?php echo $passedMissionAll;?></td>
	                                    	<td class="report-content"><?php echo $failedMissionAll;?></td>
	                                    	<td class="report-content"><?php echo round($passingRateAll*100).'%'; ?></td> 
	                                    </tr>	
	                                  <tr>
	                                    	<td class="header">中文：</td>
	                                    	<td class="report-content"><?php echo  $completed_mission_chinese; ?></td>
	                                    	<td class="report-content"><?php echo $passedMissionChinese;?></td>
	                                    	<td class="report-content"><?php echo $failedMissionChinese;?></td>
	                                    	<td class="report-content"><?php echo round($passingRateChinese*100).'%';?></td>
	                                    </tr>
	                                    <tr>
	                                    	<td class="header">英文：</td>
	                                    	<td class="report-content"><?php echo $completed_mission_english; ?></td>
	                                    	<td class="report-content"><?php echo $passedMissionEnglish;?> </td>
	                                    	<td class="report-content"><?php echo $failedMissionEnglish;?></td>
	                                    	<td class="report-content"><?php echo round($passingRateEnglish*100).'%';?></td>
	                                    </tr>
	                                    <tr>
	                                    	<td class="header">數學：</td>
	                                    	<td class="report-content"><?php echo $completed_mission_math; ?></td>
	                                    	<td class="report-content"><?php echo $passedMissionMath;?></td>
	                                    	<td class="report-content"><?php echo $failedMissionMath;?></td>
	                                    	<td class="report-content"><?php echo round($passingRateMath*100).'%';?></td>
	                                    </tr>

	                             
	                                </table>
	                                <hr/>
	                                <p align="center">學習報告會於每星期六傳送至 ：<?php echo $login_email;?></p>


                                </div>
                                <div class="tab-pane" id="tab3">
                                   

                                    <table class="student-account-table ">
	                                    <tr>
	                                    	<td class="header"><span class="font-orange"><?php echo $_SESSION['student_name'];?>'s學習點：</span></td>
	                                    	<td class="content"><span class="font-orange"><?php echo $learning_points;?></span></td>
	                                    </tr>	
	                                  
	                                </table>
	                                <hr/>
	                                <table class="gift-table">
	                                    <tr>
	                                    	<td><img src="_assets/img/gift-icon-03.png" alt="Donation"/></td>
	                                    	<td><img src="_assets/img/gift-icon-02.png" alt="Gift Card"/></td>
	                                    	<td><img src="_assets/img/gift-icon-01.png" alt="Coupon"/></td>
	                                    </tr>	
	                                    
	                                    <tr>
		                                    	<td>1 : <?php echo $gift1 ?><hr/><a class=" btn blue-btn-small" href="gift-redeem.php">換領</a></td>
		                                    	<td>2 : <?php echo $gift2 ?><hr/><a class=" btn blue-btn-small" href="gift-redeem-1.php">換領</a></td>
		                                    	<td>3 : <?php echo $gift3 ?><hr/><a class=" btn blue-btn-small" href="gift-redeem-2.php">換領</a></td>
	                                    </tr>	
	                                    	
												                                  
	                                </table>
                                </div>
                                <div class="tab-pane" id="tab4">
                                   

                                  <h2>更改密碼</h2><hr/>
                                 
                                  <?php

			              					if(isset($_POST['change_password'])){

			              						if(empty($_POST['new_password'])){

			              							$errors[] = "你必需輸入你的新密碼！";
			              						
			     
			              						}
			              						if($_POST['new_password'] !== $_POST['cfm_password']){

			              							$errors[] = "輸入密碼不符！請重新輸入！";

			              						}
			              						
			              						if(empty($errors)){

			              							$new_password = $_POST['new_password'];
			              							update_password($new_password);
			              						}
	
			              					}

			              					?>
			              				

			              						<div id="contact_form">
				             					<?php 
							              			if(empty($errors) === false){
							                	?>
							                 	<div class="alert" >
								                	<ul class="no-bullet">
								                  <?php
								                  foreach ($errors as $error) {
								                    echo "<li> {$error} </li>";     
								                  }
								                  ?>
								                	</ul>
							                 	</div>
							                 
							              <?php
							                }

							              ?>		
											</div>

			              					<form action="" name ="change-password" id="form" method="post" >
												<table class="login-form">
													<tr >
														<td class="header">新密碼：</td>
														<td><input class="placeholder span4" type="password" name="new_password" placeholder="新密碼" /></td>
													</tr>
													<tr>
														<td class="header">確認密碼：</td>
														<td><input class="placeholder span4" type="password" name="cfm_password"  placeholder="確認密碼" /></td>
													</tr>
										
													<tr>
														<td class="header"></td>
														<td><input class="submit blue-btn" type="submit" name="change_password" value="更改" /></td>
													</tr>

												</table>

												</form> 
	                                
                                </div>
                               
                            </div>
                        </div>
                	</div>
                	</div>

				
              
			</div><!--/container-->
			
		</div><!--/hero-->
				
		
		
		<?php include('footer.php');?>

		<!-- Report Modal Box-->

	
		
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="_assets/js/bootstrap.min.js"></script>
        
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