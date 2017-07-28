<?php 

include('init.php');
include('function/user.php');
include('student-info-learning-points.php');
include('student-info.php');

?>
<?php check_login();?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title;?></title>
		<?php include('meta-tag.php');?>
		<link href="_assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="_assets/css/main.css" rel="stylesheet" />
		<link href="_assets/css/animate.css" rel="stylesheet" />
		<link href="_assets/css/font-awesome.css" rel="stylesheet" />
		
		<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css' />
        
	</head>
	<body>
		<div id="wrapper">
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
		</div>-->
		<div class="center-wrapper">
		<div id="content">
			
			<div class="container">

                <div class="row-fluid">
	                <div class="span3">
	                	
	                	<div class="tab-content white-bg">
	                	<h3>學生資料</h3>
	                	<?php 
	                	if(empty($profilePic)){echo '<img src="_assets/img/profilepic/default-01.png" alt="ProfilePic">';}else{echo '<img src="'.$profilePic.'" alt="ProfilePic">';}?><hr/>
	                		
	                		
	                		<h4 align="center"><?php if(isset($_SESSION['student_name'])){echo $_SESSION['student_name'];}?></h4>
	                		<h4 align="center"><span class="font-orange">學習點：<?php if(isset($_SESSION['student_name'])){echo $learning_points;} //$level ?></span></h4>
	                		<p align="center"><a href="logout.php" class="flat-button flat-button-2">登出</a></p>
	                	
	                	</div>

	   <!--             	<div class="tab-content white-bg">
	                		<h3>推薦教學內容</h3>
	                	</div>-->
	                	

	                	
	                </div>
					<div class="span9">
						<!--<div class="advertising-container">
							<a href="#"><img src="_assets/img/advertisement.png"></a>
						</div>-->

                        <div class="tabbable white-bg table-header-fonts"> <!-- Only required for left/right tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab">學習報告</a></li>
                                <li><a href="#tab2" data-toggle="tab">學生資料</a></li>
                                <li><a href="#tab3" data-toggle="tab">更改帳戶資料</a></li>
                                 <li><a href="#tab4" data-toggle="tab">更改密碼</a></li>
                              
                            </ul>
                            <div class="tab-content wide-bg">
                                <div class="tab-pane active" id="tab1">
                                	<!--<img src="_assets/img/advertisement.png">-->
                                 <!-- Student report detail(All) -->
                                	<div id="reportAll" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; ">
			            				<?php include('report/report-all.php');?>	
          							</div>
          						<!--Student Report Detail (Pass)-->
          							<div id="reportPass" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; ">
			            				<?php include('report/report-success.php');?>	
          							</div>
          						<!--Student Report Detail (Fail)-->
          							<div id="reportFail" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; ">
			            				<?php include('report/report-fail.php');?>
          							</div>
          							<div id="reportChinese" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; ">
			            				<?php include('report/report-chinese.php');?>
          							</div>
          							<div id="reportEnglish" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; ">
			            				<?php include('report/report-english.php');?>
          							</div>
          							<div id="reportMath" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; ">
			            				<?php include('report/report-math.php');?>
          							</div>
					
                                     <table class="student-account-table">
                                    
                                     	<!--<tr class="top-header">
	                                    	<td class="header "><span class="font-red">&nbsp;</span></td>
	                                    	<td class="report-content large-font">全部</td>
	                                    	<td class="report-content large-font"><span class="font-green">合格</span></td>
	                                    	<td class="report-content large-font"><span class="font-red">不合格</span></td>
	                                    	<td class="report-content large-font">合格率</td>
	                                    </tr>-->
	                                     <tr>
	                                    	<td class="header ">&nbsp;</td>
	                                    	<td class="report-content large-font"><a data-toggle="modal" href="#reportAll" class="flat-button flat-button-1">全部</a></td>
	                                    	<td class="report-content large-font"><a data-toggle="modal" href="#reportPass" class="flat-button flat-btn-round-3">合格</a></td>
	                                    	<td class="report-content large-font"><a data-toggle="modal" href="#reportFail" class="flat-button flat-button-2">不合格</a></td>
	                                    	<td class="report-content large-font">合格率</td>
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
	                                    	<td class="header"><a data-toggle="modal" href="#reportChinese" class="flat-button flat-btn-round-2">中文</a></td>
	                                    	<td class="report-content"><?php echo $completed_mission_chinese; ?></td>
	                                    	<td class="report-content"><?php echo $passedMissionChinese;?></td>
	                                    	<td class="report-content"><?php echo $failedMissionChinese;?></td>
	                                    	<td class="report-content"><?php echo round($passingRateChinese*100).'%';?></td>
	                                    </tr>
	                                    <tr>
	                                    	<td class="header"><a data-toggle="modal" href="#reportEnglish" class="flat-button flat-btn-round-2">英文</a></td>
	                                    	<td class="report-content"><?php echo $completed_mission_english; ?></td>
	                                    	<td class="report-content"><?php echo $passedMissionEnglish;?> </td>
	                                    	<td class="report-content"><?php echo $failedMissionEnglish;?></td>
	                                    	<td class="report-content"><?php echo round($passingRateEnglish*100).'%';?></td>
	                                    </tr>
	                                    <tr>
	                                    	<td class="header"><a data-toggle="modal" href="#reportMath" class="flat-button flat-btn-round-2">數學</a></td>
	                                    	<td class="report-content"><?php echo $completed_mission_math; ?></td>
	                                    	<td class="report-content"><?php echo $passedMissionMath;?></td>
	                                    	<td class="report-content"><?php echo $failedMissionMath;?></td>
	                                    	<td class="report-content"><?php echo round($passingRateMath*100).'%';?></td>
	                                    </tr>

	                             
	                                </table>
	                                <hr/>
	                                <p align="center">學習報告會於每週末傳送至 ：<?php echo $login_email;?></p>

                                
                                </div>



                                <div class="tab-pane" id="tab2">

                                <!-- Student report -->
            
	                                    <table class="student-account-table">
	                                    
	                                    	<tr>
	                                    		<td class="header">帳戶狀況：</td>
	                                    		<td class="content"><?php echo "<span class='font-green'>" . $account_status . "</span>"; if(!empty($expired_date)){echo ' ( Expired On : ' .$expired_date. ' ) ' ;}?></td>
	                                    	</tr>
	                                    	<tr>
	                                    		<td class="header">學習點：</td>
	                                    		<td class="content"><?php if($learning_points == 0 ){echo "你仲未有學習點阿！快點 <a href='learning.php' class='flat-button flat-button-1'>開始練習</a>";	} else{echo $learning_points;}?></td>
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
	                                    		<td class="content"><?php echo $login_email;?> </td>
	                                    	</tr>
	                                    	<tr>
	                                    		<td class="header">學生級別：</td>
	                                    		<td class="content"><?php echo $student_level;?></td>
	                                    	</tr>
	                                    	
	                                    </table>

                                </div>
                                <div class="tab-pane" id="tab3">
                                  <h2>更改帳戶資料</h2><hr/>
                                 
                                  <?php

			              					if(isset($_POST['change_information'])){
			
			              						
			              						if(empty($errors)){

			              				
			              							$parentTel    = $_POST['tel'];
			              							$school 	  = $_POST['school'];
			              							$gender 	  = $_POST['student_gender'];
			              							updateInfo($parentTel,$school,$gender);
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
													
													<tr>
														<td class="header">家長電話：</td>
														<td><input class="placeholder span4" type="text" name="tel" value="<?php echo $parent_tel;?>" /></td>
													</tr>
													<tr>
														<td class="header">就讀學校：</td>
														<td><input class="placeholder span4" type="text" name="school"  value="<?php echo $student_school;?>"/></td>
													</tr>
													
													<tr>
														<td class="header">學生姓別：</td>
														<td>
															<select name="student_gender" class="placeholder span4" >
															  <option value="M">男</option>
															  <option value="F">女</option>
															  
															</select>
														</td>
													</tr>
													
													<tr>
														<td class="header"></td>
														<td><input class="submit blue-btn" type="submit" name="change_information" value="更改資料" /></td>
													</tr>

												</table>

												</form> 
                           				 </div>
			                             <div class="tab-pane" id="tab4">
			                                  <h2>更改密碼</h2><hr/>
			                                 
			                                  <?php

						              					if(isset($_POST['password-change'])){
			
						              						if(empty($_POST['new_password'])){

						              							$errors[] = "你必須輸入你的新密碼";

						              						}
						              						if($_POST['new_password'] !== $_POST['cfm_password']){

						              							$errors[] = "輸入密碼不符！請重新輸入！";

						              						}
						              						
						              						if(empty($errors)){

						              							$new_password = $_POST['new_password'];
						              						
						              							updatePassword($new_password);
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
																
															
											<tr>
												<td class="header">新密碼：</td>
												<td><input class="placeholder span4" type="password" name="new_password" placeholder="新密碼" /></td>
											</tr>
											<tr>
												<td class="header">確認密碼：</td>
												<td><input class="placeholder span4" type="password" name="cfm_password"  placeholder="確認密碼" /></td>
											</tr>
																
													
											<tr>
												<td class="header"></td>
												<td><input class="submit blue-btn" type="submit" name="password-change" value="更改密碼" /></td>
											</tr>

										</table>

										</form> 
			                    </div>
                        </div>
                	</div>
                	</div>

				
              
			</div>
			
		</div>
				
		</div>
		</div>
		</div>
		<?php include('footer.php');?>

		<!-- Report Modal Box-->

		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="_assets/js/bootstrap.min.js"></script>
        
    
</body>
</html>