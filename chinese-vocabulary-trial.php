<?php 
include('init.php');
include('function/user.php');

$level                      = $_GET['level'];
$questionChinese            = mysql_query("SELECT DISTINCT (`mission_id`),`question_type`,`title` FROM `questions_chinese` WHERE `subject` = 'Chinese' AND `learning_area` = 'Vocabulary' AND `level` = '$level' LIMIT 0,6");

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
     <div id="wrapper">
		<!-- header-->

		<?php include('header.php');?>
		<!-- End header-->
		<div class="center-wrapper">
		<div class="container">
			
			<div class="row-fluid">
                <div class="span12">
                     <div id="inner_title">
                       <h2 class="text-center">中國語文( 詞彙練習 )</h2> 
                       <div class="text-center"> <a id="flat-btn" class="flat-button flat-button-2" href="chinese-trial.php?level=<?php echo $_GET['level'];?>"> &larr; 返回</a>  </div>
                    </div>
            </div>
          </div>
		  
        </div>
		
		<div id="content">
			<div class="container ">
            
              
				<?php
                //Where the selection goes
                
                $photoNum   = 1;
                $rowCount   = 3;
             
                while ($fetch_questions = mysql_fetch_assoc($questionChinese)){
                   
                    $missionId                  =   $fetch_questions['mission_id'];
                    $assessmentTitle            =   mysql_real_escape_string($fetch_questions['title']);
                    $questionType               =   mysql_real_escape_string($fetch_questions['question_type']);

                    //$attemptCount               =   mysql_query("SELECT `title` FROM `answered_questions` WHERE `student_name` = '{$student_name}' AND `mission_id` = '$missionId' AND `subject` = 'Chinese'");
                    //$attempt                    =   mysql_num_rows($attemptCount) ;    

                    //Replacing all space with dash
                    $trimmed_title              = preg_replace('/\s+/', ' ', $assessmentTitle);
                    $trimmed_questionType       = preg_replace('/\s+/', ' ', $questionType);
                    if($rowCount  == 3){ echo '<div class="row grid-listings">';}

                    echo 
                    '<div class="span4 filterable assessment-container">
                        <img src="_assets/img/english/vocabulary/vocabulary-icon-'.$photoNum.'.png" alt="Chinese-Vocabulary-Icon"/>
                            <div class="white-bg box-top-fix ">
                            
                            <h3>任務 ： ' .$missionId         .'</h3>
                            <div class="assessment-content-container">
                            <table>
                                <tr class="extended-table-row">
                                    <td colspan="2"><h4>'.$assessmentTitle .'</h4></td>
                                </tr>
                                <tr>
                                    <td align="right">類別：</td>
                                    <td>';
                                    if($questionType == "Fill in The Blanks"){echo "填充題";}elseif ($questionType == "Mutiple Choice") { echo "選擇題";  }
                                    echo '</td>
                                </tr>
                          

                            </table>
                               
                            </div>

                                <div class="aboutsocial">
                                    <a id="flat-btn" class="flat-button flat-btn-round-3" href="chinese-vocabulary-question-trial.php?id='.$missionId.'&assessmenttitle='.$trimmed_title.'&questiontype='.$trimmed_questionType.'&level='.$level.'">做練習 &rarr;</a> 
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