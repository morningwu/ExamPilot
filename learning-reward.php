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
			<div class="center-wrapper">
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
                	<?php 
                	if(empty($profilePic)){echo '<img src="_assets/img/profilepic/default-01.png" alt="ProfilePic">';}else{echo '<img src="'.$profilePic.'" alt="ProfilePic">';}?><hr/>

                		<h4 align="center"><?php if(isset($_SESSION['student_name'])){echo $_SESSION['student_name'];}?></h4>
                		<h4 align="center"><span class="font-orange">學習點：<?php if(isset($_SESSION['student_name'])){echo $learning_points;} //$level ?></span></h4>
                		<p align="center"><a href="logout.php" class="flat-button flat-button-2">登出</a></p>
                	
                	</div>


                	
                </div>
					<div class="span9">
                        <div class="tabbable white-bg table-header-fonts"> <!-- Only required for left/right tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab">學習獎賞</a></li>
                                
                              
                            </ul>
                            <div class="tab-content wide-bg">
                                <div class="tab-pane active " id="tab1">
                                  <table class="student-account-table center">
	                                    <tr>
	                                    	<td colspan="2"><h1><span class="font-orange"><?php echo $_SESSION['student_name'] ;?>的學習點：<?php echo $learning_points;?></span></h1></td>
	                                    	
	                                    </tr>	
	                                  
	                                </table><hr/>

									<form name="gift-redemption" method="POST" action="">
									<div class="row gift-container-center">
	                                <?php
	                              		while($rowGiftList = mysql_fetch_assoc($giftListDetail)){

	                              			$giftName				= $rowGiftList['Gift_Name'];
	                              			$imgLocation			= $rowGiftList['img_location'];
	                              			$giftLearningPoints		= $rowGiftList['Learning_Points'];
	                              			$giftLearningPointsMore = $giftLearningPoints - $learning_points;
	                              			echo 
	                              			'<div class="span3 gift-container">
	                              				<div class="gift-img-container"><img src="'.$imgLocation.'" ></div>
			                              			<div class="name">' .$giftName.'</div>
			                              			<div class="point"><input type="text" name= "learningPoints" value ="'.$giftLearningPoints.'" class="inputtext" readonly></div>
			                              			<div class="more">要多<span class="font-red">' .$giftLearningPointsMore.' </span>點先換到!</div>
			                              		<input name="giftName" type="radio" value="'.$giftName.'">
		                              		</div>';
	                              		}

	                              		
									?>	 
									</div>
											<hr/>
											<div class="center">
												<input type="submit" name="gift-redemption-submit" class="btn blue-btn" value="換領"> 
											</div>
									            

	                              		</form>

	                              		<?php
	                              			if(isset($_POST['gift-redemption-submit'])){

	                              				if(isset($_POST['giftName'])){$postGiftName	= $_POST['giftName'];}
	                              				if(isset($_POST['learningPoints'])){$postGiftPoints = $_POST['learningPoints'];}

	                              				if(empty($_POST['giftName'])){

	                              					$errors[] = '你必需選擇禮物!';	
	                              				}
	                              				/*if($postGiftPoints > $learning_points){
	                              					echo $postGiftPoints . $learning_points;
	                              					$errors[] = '你都唔夠分！點換比你阿！';	
	                              				}*/

	                              				if(empty($errors)){

	                              					giftRedeemApplication($postGiftName);
	                              				}
	                              			}
	                              		?>
	                                 <?php 
							              if(empty($errors) === false){
							                ?>
							                 <div class="alert center" >
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