<?php 
include('init.php');
include('function/user.php');
check_login();

//extracting the questions
    $missionId              = $_GET['id'];
    $getTitle               = $_GET['assessmenttitle'];
    $questionType           = $_GET['questiontype'];
    $trimmedTitle           = preg_replace('/\s+/', '-', $getTitle);
    

    $subject                        = "English";
    $level                          = "P.5";
    $learning_area                  = "Comprehension";
    $mission_type                   = $questionType;
    $passing_rate                   = 0.6;
    $passing_rate_in_percentage     = $passing_rate*100;
    $learning_points                = "50";
    $questions                      = mysql_query("SELECT * FROM `questions` WHERE `Mission_id` = '$missionId' and `learning_area` = '$learning_area'");
    $questionsPassage               = mysql_query("SELECT * FROM `questions` WHERE `Mission_id` = '$missionId' and `learning_area` = '$learning_area'");
    $total                          = mysql_num_rows($questions);
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!-- Bootstrap -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="_assets/css/reveal.css" rel="stylesheet" />
		<link href="_assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="_assets/css/main.css" rel="stylesheet" />
		<link href="_assets/css/animate.css" rel="stylesheet" />
		<link href="_assets/css/font-awesome.css" rel="stylesheet" />
		
		<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css' />
        <?php include('function/QnA.php');?>
        <!--[if gte IE 9]>
        <link type="text/css" rel="stylesheet" href="_assets/css/ie9-gradients.css" />
        <![endif]-->
        
	</head>
	<body>
		<!-- header-->

		<?php include('header.php');?>
		<!-- End header-->
		<!-- Learning Video modeal Box-->


		<div class="container">
			<div class="row">
                
				<div class="span12">
                	<div id="inner_title">
                        <h1>English Comprehension</h1>
                        <span><?php echo 'Mission ' . $missionId .' : '.$getTitle; ?></span>
                        <span class="right-back-btn">
                            <a class=" btn blue-btn-small" href="english-comprehension-new.php">&larr; Back</a> 
                        </span>
                    </div>
				</div>
			</div><!--/row-->
		</div><!--/container-->
		
		<div id="content">
            <div class="container">
                <div class="row">

                <!-- Assessment Content Start -->
                    
                      <div class="span3 left-side-bar-container">
                      <?php
                      $photoNum = $missionId;
                      echo '<img src="_assets/img/english/comprehension/comprehension-icon-'.$photoNum.'.png" alt="English-Comprehension-Icon"/><hr/>';
                      ?>
                        
                    <div class="tabbable"> 
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab">Summary</a></li>
                                <!--<li><a href="#tab2" data-toggle="tab">Video</a></li>-->
                                <!--<li><a href="#tab3" data-toggle="tab">Ask</a></li>-->
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">

                                    <table>
                                    
                                        <tr>
                                            <td class="question-summary-header">Type：</td>
                                            <td><?php echo $mission_type;?></td>
                                        </tr>
                                        <tr>
                                            <td class="question-summary-header">Question No.：</td>
                                            <td> <?php echo $total; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="question-summary-header">Areas：</td>
                                            <td><?php echo $learning_area;?></td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="question-summary-header">LearningPoints：</td>
                                            <td><?php echo $learning_points;?></td>
                                        </tr>
                                        
                                        

                                    </table>
                                 
                                          
                                </div>
                            
                        </div>
                    
                 
                    </div>
                 </div>
              
                
                <div class="span8 question-content-container">
                    <div class="question-content">
                        <h2 align="center"><span class="font-orange"><?php if(isset($_POST['submit'])){echo "<h1>".$_SESSION['student_name']."'s Result"."</h1>" ;}else{echo "Mission " . $missionId. " : ". $getTitle;}?></span></h2><hr/>
                        
                        <?php
                             $passageRow =   mysql_fetch_assoc($questionsPassage);
                             $passage    =   $passageRow['passage'];

                            if(!empty($passage)){echo '<div class="passage">'.$passage.'</div><hr/>';}

                        ?>
                        <!--<p><img src="_assets/img/english/grammar/grammar-id-1-banner.png"></p>
                        <h2><span class="font-orange">Question</span></h2><hr/>-->
                       <!-- Where the questions goes-->

                       <?php
                       //Fecthing the Questions
                        $score = 0;
                        
                        
                        $question_no = 1;

                        echo '<form name ="english_question" method="POST" action="">';

                    
                        while($row = mysql_fetch_assoc($questions)){

                            $question   = $row['questions'];
                            $id         = $row['question_id'];
                            $option1    = $row['selection1'];
                            $option2    = $row['selection2'];
                            $option3    = $row['selection3'];
                            $option4    = $row['selection4'];
                            $title      = $row['title'];
                            $answer     = strtoupper($row["answer"]);

                           
                            echo  "<h5> $question_no . ". $question . "</h5> ";

                            if($mission_type == "Mutiple Choice"){
                                echo 

                                
                                '<ul class="no-bullet">
                                 <li>'     . "<input type=radio  name=\"$id\" value=\"$option1\" selected=\"$option1 \"> $option1"   . "</li>" .
                                 "<li>"    . "<input type=radio  name=\"$id\" value=\"$option2\" selected=\"$option2 \"> $option2"   . "</li>";

                                 if(empty($option3)){
                                    
                                 }else{echo  "<li>"    . "<input type=radio  name=\"$id\" value=\"$option3\" selected=\"$option3 \"> $option3"  . "</li>";}
                                 if(empty($option4)){
                                    
                                 }else{echo  "<li>"    . "<input type=radio  name=\"$id\" value=\"$option4\" selected=\"$option4 \"> $option4"  . "</li>";}
                                 
                                    echo"</ul>";

                            }elseif($mission_type == "Fill in The Blanks"){
                                echo '<input type="text" class="placeholder span4" name='.$id.' placeholder="Answer Here~" value="';
                                if(isset($_POST[$id])){echo $_POST[$id];}

                                echo '">';
                            }

                        
                            if(isset($_POST[$id])){ 
                                
                                $selected  = strtoupper($_POST[$id]); 
                                echo 
                                "<hr/><ul class='no-bullet'>".
                                    "<li><span class=''>Selected Answer："   . $selected . "</span></li>". 
                                    "<li><span class=''>Correct Answer："    . $answer . "</span></li>".
                                "</ul>";
                               
                                if($selected == $answer){

                                echo "<span class='font-green'>Your Answer is Correct!</span>";
                                $score++; 
                                
                                }else{
                                echo "<span class='font-red'>You've chosen a wrong answer!</span>";
                                }
                            }

                            $question_no++; 

                        }
                         
                            
                            if(isset($_POST['submit'])){ 
                                if(empty($_POST[$id])){
                                    echo "<hr/><h4 align='center'>You haven't <span class='error-message'>selected any answer</span> or <span class='error-message'>you haven't answered all questions!</span></h4>";
                                    echo "<p align='center'><a class='btn blue-btn' href='english-comprehension-question.php?id=".$missionId.'&assessmenttitle='.$getTitle.'&questiontype='.$questionType."'>Try Again</a></p>";
                                    exit();
                                }
                               
                            }else{ 
                                echo "<hr/><p align=center>". "<input type='submit' class='btn blue-btn' value='Submit' name='submit'>". "</p>";
                                }
                            echo "</form>";
                           
                            //The Result Report
                            if(isset($_POST['submit'])){
                                $correctly_answered         =  $score;
                                $incorrectly_answered       =  $total - $score;
                            //echo '<div id="myModal-result" class="reveal-modal">';    
                            echo "

                            <hr/><table class='result-table'>
                            <tr>
                                <td class='header'>Scored：</td>
                                <td>$score out of $total</td>
                            </tr>
                            <tr>
                                <td class='header'>Passing Rate：</td>
                                <td>$passing_rate_in_percentage%</td>
                            </tr>
                            <tr>
                                <td class='header'>Pass/Fail：</td>
                                <td>";

                                if($score > $total*$passing_rate){
                                echo "<span class='font-green'>You've passed!</span>".
                                "<tr>
                                    <td class='header'>Earned Learning Points：</td>
                                    <td>$learning_points</td>
                                </tr>";

                            }else{
                                echo "<span class='font-red'>You're failed!</span>
                                <tr>
                                    <td class='header'>Earned Learning Points：</td>
                                    <td><span class='font-red'>You have no points if you fail!</span></td>
                                </tr>";
                            }

                           echo  
                           "<tr>
                                <td class='header'>Correct Answer：</td>
                                <td>$correctly_answered Questions</td>
                            </tr>
                            <tr>
                                <td class='header'>Incorrect Answer：</td>
                                <td>$incorrectly_answered Questions</td>
                            </tr>
                            </table>";

                            echo "
                            <h3 align='center'>Wanna Try Again?</h3>
                            <div align='center'>
                                 <a class='btn blue-btn' href='english-comprehension-question.php?id=".$missionId.'&assessmenttitle='.$getTitle.'&questiontype='.$questionType."'>Try Again</a>
                            <a href='english-vocabulary-new.php' class='btn blue-btn' name='next'>Other Missions</a>
                            </div>
                            ";
                            //echo ' </div>';

                            //The Report
                            include ('report.php');
                            
                            }
                             
                            
                       ?>

                   </div>
                </div>
                <!-- Assessment Content End-->
                
                
            </div><!--/row-->
            </div><!--/container-->
            
            <br>
            
        </div><!--/hero-->
			
		</div><!--/hero-->
		
		<?php include('footer.php');?>
		
		
	   
   
        <script src="_assets/js/jquery-1.4.4.min.js"></script>
        <script src="_assets/js/jquery.reveal.js"></script>
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

        <!-- hide and show Div-->
 


</body>
</html>