<?php 
include('init.php');
include('function/user.php');
include('student-info-learning-points.php');
check_login();

//extracting the questions

    $missionId                      = $_GET['id'];
    $getTitle                       = $_GET['assessmenttitle'];
    $questionType                   = $_GET['questiontype'];
    $trimmedTitle                   = preg_replace('/\s+/', '-', $getTitle);
    $subject                        = "Math";
    $level                          = "P.5";
    $learning_area                  = "Calculation";
    $mission_type                   = $questionType;
    $passing_rate                   = 0.6;
    $passing_rate_in_percentage     = $passing_rate*100;
    $learning_points                = "100";
    $questions                      = mysql_query("SELECT * FROM `questions_maths` WHERE `Mission_id` = '$missionId' and `learning_area` = '$learning_area'");
    $questionsPassage               = mysql_query("SELECT `passage` FROM `questions_maths` WHERE `Mission_id` = '$missionId' and `learning_area` = '$learning_area'");    
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
                        <h1>四則運算</h1>
                        <span><?php echo '任務 ' . $missionId .' : '.$getTitle; ?></span>
                        <span class="right-back-btn">
                            <a class=" btn blue-btn-small" href="math-calculation.php">&larr; 返回</a> 
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
                      echo '<img src="_assets/img/english/grammar/grammar-icon-'.$photoNum.'.png" alt="Maths-Calculation-Icon"/><hr/>';
                      ?>
                        
                    <div class="tabbable"> 
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab">練習簡介</a></li>
                                <!--<li><a href="#tab2" data-toggle="tab">Video</a></li>-->
                                <!--<li><a href="#tab3" data-toggle="tab">Ask</a></li>-->
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">

                                    <table>
                                    
                                        <tr>
                                            <td class="question-summary-header">Type：</td>
                                            <td><?php if($mission_type == "Mutiple Choice"){echo "選擇題";}elseif($mission_type == "Fill in The Blanks"){echo "填充題";}?></td>
                                        </tr>
                                        <tr>
                                            <td class="question-summary-header">Question No.：</td>
                                            <td> <?php echo $total; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="question-summary-header">Areas：</td>
                                            <td><?php if($learning_area == "Calculation"){echo "四則運算";}?></td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="question-summary-header">LearningPoints：</td>
                                            <td><?php echo '<span class="font-red">'. $learning_points . '</span>';?></td>
                                        </tr>
                                        
                                        

                                    </table>
                                 
                                          
                                </div>
                                <!--<div class="tab-pane" id="tab2">
                                    <h5>Learning Video</h5>
                                     
                                     <p>this is a Learning Video About Vocabulary</p><br/><br/>
                                     <p><a data-toggle="modal" href="#myModal" class="blue-btn ie8-btn-fix">Learning Video</a></p>
                                </div>-->
                               <!-- <div class="tab-pane" id="tab3">
                                    

                                        <p align="center"><a href="#" class="btn">Ask a Mentor</a></p>
                                </div>-->
                            
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

                       <?php

                        $score = 0;
                        $question_no = 1;

                        echo '<form name ="maths_question" method="POST" action="">';

                    
                        while($row = mysql_fetch_assoc($questions)){

                            $question   = $row['questions'];
                            $id         = $row['question_id'];
                            $option1    = $row['selection1'];
                            $option2    = $row['selection2'];
                            $option3    = $row['selection3'];
                            $option4    = $row['selection4'];
                            $title      = $row['title'];
                            $answer     = strtoupper($row["answer"]);


                           if(!isset($_POST['submit'])){
                             echo  "<div class='question-title-chinese'> $question_no . ". $question . "</div> ";

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
                                echo '<input type="text" class="placeholder span4" name='.$id.' placeholder="答呢到~" value="';
                                if(isset($_POST[$id])){echo $_POST[$id];}

                                echo '">';
                            }
                            echo "<input type='submit' class='btn blue-btn' value='答問題' name='submit'>";
                        }else{

                             include('question/result-message-box.php');

                             $correctly_answered         =  $score;
                                $incorrectly_answered       =  $total - $score;
                            //echo '<div id="myModal-result" class="reveal-modal">';    
                            echo "

                            <hr/><table class='result-table'>
                            <tr>
                                <td class='header'>得分：</td>
                                <td>$score out of $total</td>
                            </tr>
                            <tr>
                                <td class='header'>合格率：</td>
                                <td>$passing_rate_in_percentage%</td>
                            </tr>
                            <tr>
                                <td class='header'>合格?：</td>
                                <td>";

                                if($score > $total*$passing_rate){
                                echo "<span class='font-green'>合格！咁叻既你！</span>".
                                "<tr>
                                    <td class='header'>學習點：</td>
                                    <td>$learning_points</td>
                                </tr>";

                            }else{
                                echo "<span class='font-red'>唔合格！玩多次啦！</span>
                                <tr>
                                    <td class='header'>學習點：</td>
                                    <td><span class='font-red'>你都唔合格！點比你阿！</span></td>
                                </tr>";
                            }

                           echo  
                           "<tr>
                                <td class='header'>正確答案：</td>
                                <td>$correctly_answered Questions</td>
                            </tr>
                            <tr>
                                <td class='header'>錯誤答案：</td>
                                <td>$incorrectly_answered Questions</td>
                            </tr>
                            </table>";

                            //Learning Points Scale
                            echo "
                            <h3 align='center'>".$studentName."的學習點 : <span class='font-orange'>".$extractedLearningPoints."</span> </h3>
                            <table class='result-table'>
                            <tr>
                                <td align='center'>".$gift1Pic."</td>
                                <td align='center'>".$gift2Pic."</td>
                                <td align='center'>".$gift3Pic."</td>
                            </tr>
                            <tr>
                                <td align='center'><strong>".$gift1."</strong></td>
                                <td align='center'><strong>".$gift2."</strong></td>
                                <td align='center'><strong>".$gift3."</strong></td>
                            </tr>";

                            //Calculating the percentage
                            $giftOneFlaot           = $extractedLearningPoints/$giftOneLearningPoints;
                            $giftTwoFlaot           = $extractedLearningPoints/$giftTwoLearningPoints;
                            $giftThreeFlaot         = $extractedLearningPoints/$giftThreeLearningPoints;
                            $giftOnePercentage      = round($giftOneFlaot * 100)   . '%';
                            $giftTwoPercentage      = round($giftTwoFlaot * 100)   . '%';
                            $giftThreePercentage    = round($giftThreeFlaot * 100) . '%';
                            
                            echo"<tr>
                                <td align='center'><span class='font-red'>".$giftOneLearningPoints."點</span></td>
                                <td align='center'><span class='font-red'>".$giftTwoLearningPoints."點</span></td>
                                <td align='center'><span class='font-red'>".$giftThreeLearningPoints."點</span></td>
                            </tr>
                            <tr>
                                <td align='center'>".$giftOnePercentage."</td>
                                <td align='center'>".$giftTwoPercentage."</td>
                                <td align='center'>".$giftThreePercentage."</td>
                            </tr>
                            <tr>
                                <td align='center'>
                                    <div class='progress progress-bar-container progress-success progress-striped'>
                                        <div class='bar' style='width:".$giftOnePercentage."'></div>
                                    </div>
                                </td>
                                <td align='center'>
                                    <div class='progress progress-bar-container progress-success progress-striped'>
                                        <div class='bar' style='width:".$giftTwoPercentage."'></div>
                                    </div>
                                </td>
                                <td align='center'>
                                    <div class='progress progress-bar-container progress-success progress-striped'>
                                        <div class='bar' style='width:".$giftThreePercentage."'></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align='center'>仲有<span class='font-orange'>".$giftOnediff."</span>點就換到啦!</td>
                                <td align='center'>仲有<span class='font-orange'>".$giftTwodiff."</span>點就換到啦!</td>
                                <td align='center'>仲有<span class='font-orange'>".$giftThreediff."</span>點就換到啦!</td>
                            </tr>
                            </table>";

                            echo "
                            <h3 align='center'>Wanna Try Again?</h3>
                            <div align='center'>
                                <a class='btn blue-btn' href='math-calculation-question.php?id=".$missionId.'&assessmenttitle='.$getTitle.'&questiontype='.$questionType."'>再玩多次</a>
                            <a href='math-calculation.php' class='btn blue-btn' name='next'>其他練習</a>
                            </div>
                            ";
                            //echo ' </div>';

                            //The Report
                           //include ('report.php');
                        }
                           
                            
                            $question_no++;
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