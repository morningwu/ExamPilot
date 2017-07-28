<?php 
include('init.php');
include('function/user.php');

//Check if user logged in
check_login();

//editablable variables
if(isset($_SESSION['studentEmail']))
{

    $studentLevelGet        = $_GET['level'];
    $student_name           = $_SESSION['student_name'];
    $studentEmail           = $_SESSION['studentEmail'];
    $questionEnglish        = mysql_query("SELECT DISTINCT (`mission_id`),`question_type`,`title` FROM `questions` WHERE `subject` = 'English' AND `learning_area` = 'Comprehension' AND `level` = '$studentLevelGet'");
    $level                  = mysql_query("SELECT `student_level` FROM `users` WHERE `student_name` = '$student_name'");
    $row                    = mysql_fetch_assoc($level);
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

        <!-- Slider css and jsStart-->
        <!--<link href="_assets/slider/css/demo.css" rel="stylesheet" />-->
        <link href="_assets/slider/css/jquery.jscrollpane.css" rel="stylesheet" />
        <!--<link href="_assets/slider/css/reset.css" rel="stylesheet" />-->
        <link href="_assets/slider/css/style.css" rel="stylesheet" />


       

        <!--Slider css and js End-->


        
	</head>
	<body>
		<!-- header-->

		<?php include('header.php');?>
		<!-- End header-->
		<div class="center-wrapper">
		<div class="container center">
			<div class="row-fluid">
				<div class="span12">
                    <div id="inner_title">
                    <h2 class="text-center">English Comprehension<? if(isset($_SESSION['student_name'])){echo " ( " . $row['student_level'] ." ) "; }?></h2> 
             
                    <div class="text-center">
                   <a class="flat-button flat-button-2" href="english.php?level=<?php echo $studentLevelGet;?>"> &larr; Back</a>  
                    </div>
                </div>

			</div>
		  </div>
        </div>
		
		<div id="content">
			<div class="container">
              
				<?php
                //Where the selection goes
                
                $photoNum   = 1;
                $rowCount   = 3;
             
                while ($fetch_questions = mysql_fetch_assoc($questionEnglish)){

                    $missionId                  =   $fetch_questions['mission_id'];
                    $assessmentTitle            =   mysql_real_escape_string($fetch_questions['title']);
                    $questionType               =   mysql_real_escape_string($fetch_questions['question_type']);
                    
                    $attemptCount                =   mysql_query("SELECT `title` FROM `answered_questions` WHERE `student_name` = '{$student_name}' AND `mission_id` = '$missionId' AND `subject` = 'English' AND `learning_area` = 'Comprehension'");
                    $attempt                     =   mysql_num_rows($attemptCount) ;    

                    //Replacing all space with dash
                    $trimmed_title              = preg_replace('/\s+/', ' ', $assessmentTitle);
                    $trimmed_questionType       = preg_replace('/\s+/', ' ', $questionType);
                    if($rowCount      == 3){ echo '<div class="row grid-listings">';}

                    echo 
                    '<div class="span4 filterable assessment-container">
                        <img src="_assets/img/english/comprehension/comprehension-icon-'.$photoNum.'.png" alt="English-Comprehension-Icon"/>
                            <div class="white-bg box-top-fix ">
                            
                            <h3>Mission : ' .$missionId         .'</h3>
                            <div class="assessment-content-container">
                            <table>
                                <tr class="extended-table-row">
                                    <td colspan="2"><h4>'.$assessmentTitle .'</h4></td>
                                </tr>
                                <tr>
                                    <td align="right">Type：</td>
                                    <td>'.$questionType.'</td>
                                </tr>
                                <tr>
                                    <td align="right">Status：</td>
                                    <td>';

                                    if($attempt >= 1){echo "<span class='font-green'>Clear!</span>";}else{echo "<span class='font-orange'>New!</span>";}

                                    echo'</td>
                                </tr>

                                 <tr>
                                    <td align="right">Attempt：</td>
                                    <td>';

                                    if($attempt == 0){echo "<span class='font-orange'>".$attempt."</span>";}else{echo "<span class='font-green'>".$attempt."</span>";}

                                    echo
                                    '</td>
                                </tr>
                            </table>
                               
                            </div>

                                <div class="btn-container">
                                    <a class="flat-button flat-btn-round-3" href="english-comprehension-questions.php?id='.$missionId.'&level='.$studentLevelGet.'&assessmenttitle='.$trimmed_title.'&questiontype='.$trimmed_questionType.'">Learn &rarr;</a> 
                                </div>
                            </div>
                    </div>';

                        $photoNum ++;
                        $rowCount ++;

                        if($rowCount == 3){echo '</div>';$rowCount = 0;}
                }
                
                
                ?>
                    
                </div>
			</div>
			
		</div>
		</div>
		<?php include('footer.php');?>
		
		
		
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="_assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="_assets/js/filter.js"></script>
        
        <!-- Latest Tweets -->
   
       
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