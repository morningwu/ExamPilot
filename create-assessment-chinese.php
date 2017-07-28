<?php include('init.php');?>
<?php include('function/admin.php');?>
<?php include('function/questions-chinese.php');?>

<?php admin_login(); ?>
<!--Set Timezone-->
<?php date_default_timezone_set('Asia/Hong_Kong'); $time = date('Y-m-d H:i:s');?>

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
        
        <!--[if gte IE 9]>
        <link type="text/css" rel="stylesheet" href="_assets/css/ie9-gradients.css" />
        <![endif]-->
        
	</head>
	<body>
		<!-- header-->
		
		<?php include('header.php');?>
		<!-- End header-->
	
		<div class="center-wrapper">
		<div class="container">
			<div class="row ">
				<div class="span12">
                    <div id="inner_title">
						<h1>創建題目 ( 中文 ) </h1>
						
						<p><a href="admin-panel.php" class="btn blue-btn-small">Back</a></p>
						
                    </div><!--/inner title-->
				</div><!--/span12-->
			</div><!--/row-->
		</div><!--/container-->
		
		<div id="content">
			
		
			
			<div class="container">
				
                <div class="row about-profiles">

                	<?php

                	if(isset($_POST['create-assessment'])){

                		if(isset($_POST['questions'])){	

					if(empty($_POST['questions'])){
						$errors[] = "You must enter your question!";
						}	
					if(empty($_POST['answer'])){
						$errors[] = "You must enter your answer!";
						}	
					if(questions_exist($_POST['questions'])){
						 $errors[] = "Question has been added!";
						}
					if(empty($errors)){

						$mission_id	 	=	$_POST['mission_id'];
						$level 			=	$_POST['level'];	
						$learning_area 	=	$_POST['learning_area'];
						$question_type 	=	$_POST['question_type'];
						$title 			=	$_POST['title'];
						$questions 		=	$_POST['questions'];
						$selection1		=	$_POST['selection1'];
						$selection2		=	$_POST['selection2'];
						$selection3		=	$_POST['selection3'];
						$selection4		=	$_POST['selection4'];
						$answer  		= 	$_POST['answer'];
						$created_by 	= 	$_SESSION['admin_name'];
						$date_of_creation = $time;
											   
						add_questions(
							$mission_id,
							$level,
							$learning_area,
							$question_type,
							$title,$questions,
							$selection1,
							$selection2,
							$selection3,
							$selection4,
							$answer,
							$created_by,
							$date_of_creation
											     
						  );
						}
						}

					
                	}
					
							

							?>
				
                        	<?php 
							 if(empty($errors) === false){
							   ?>
							    <div class="question_error" >
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



					<from name="create-assessment" action="" method="POST" accept-charset="UTF-8">


					<div id="contact_form">
							<form action="" id="form" method="post" >
							<div class="span6">
							<table class="login-form">
								<tr >
									<td class="header">創建者：</td>
									<td><span class="font-red"><?php echo strtoupper($_SESSION['admin_name']);?></span></td>
								</tr>
								<tr >
									<td class="header">題目創建日期：</td>
									<td><?php echo $time;?></td>
								</tr>
							
								<tr >
									<td class="header">練習ID：</td>
									<td><input class="placeholder span4" type="text" name="mission_id" value="<?php if(isset($_POST['mission_id'])){echo $_POST['mission_id'];} ?>"/></td>
								</tr>
								<tr >
									<td class="header">適合年級：</td>
									<td>
										<select name="level" class="placeholder span4">
											<option value="P.1">小一</option>
											<option value="P.2">小二</option>
											<option value="P.3">小三</option>
											<option value="P.4">小四</option>
											<option value="P.5">小五</option>
											<option value="P.6">小六</option>
										</select>
									</td>
								</tr>
								<tr >
									<td class="header">練習範圍：</td>
									<td>
										<select name="learning_area" class="placeholder span4">
											<option value="Comprehension">閱讀理解</option>
											<option value="Vocabulary">詞彙練習</option>
											
											<option value="Writing">寫作訓練</option>
										</select>
									</td>
								</tr>
								</table>
								</div>
								<div class="span6">
								<table class="login-form">
								<tr >
									<td class="header">題目類別：</td>
									<td>
									<select id="question-type" name="question-type" class='placeholder span4' >
				                       
				                        <option value ="Fill in the Blanks">填充題</option>
				                        <option value ="Mutiple Choice">選擇題</option>
				                    </select>
									</td>
								</tr>

								
								<tr>
									<td class="header">題目標題：</td>
									<td><input class="placeholder span4" type="text" name="title" value="<?php if(isset($_POST['title'])){echo $_POST['title'];} ?>"/></td>
								</tr>
								<tr >
									<td class="header"><span class="font-red">問題：</span></td>
									<td><input class="placeholder span4" type="text" name="questions" ></td>
								</tr>
						
									<tr>
										<td class="header"><span class="font-red">選擇 - 1：</span></td>
										<td><input class="placeholder span4" type="text" name="selection1" value="<?php if(isset($_POST['selection1'])){echo $_POST['selection1'];} ?>"></td>
									</tr>
									<tr>
										<td class="header"><span class="font-red">選擇 - 2：</span></td>
										<td><input class="placeholder span4" type="text" name="selection2" value="<?php if(isset($_POST['selection2'])){echo $_POST['selection2'];} ?>"></td>
									</tr>
									<tr>
										<td class="header"><span class="font-red">選擇 - 3：</span></td>
										<td><input class="placeholder span4" type="text" name="selection3" value="<?php if(isset($_POST['selection3'])){echo $_POST['selection3'];} ?>"></td>
									</tr>
									<tr>
										<td class="header"><span class="font-red">選擇 - 4：</span></td>
										<td><input class="placeholder span4" type="text" name="selection4" value="<?php if(isset($_POST['selection4'])){echo $_POST['selection4'];} ?>"/></td>
									</tr>
								
								<tr>
									<td class="header"><span class="font-red">答案：</span></td>
									<td><input class="placeholder span4" type="text" name="answer" /></td>
								</tr>

							</table>
							<p align="center"><input class="submit blue-btn" name = "create-assessment" type="submit" value="Create" /></p>

							</form> 
						</div>

				
				
				</div>

			</div>
			
		</div>
				
		</div>
		</div>
		<?php include('footer.php');?>

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