<?php 
include('init.php');
include('function/user.php');

//extracting the questions

    $missionId                      = $_GET['id'];
    $getTitle                       = $_GET['assessmenttitle'];
    $questionType                   = $_GET['questiontype'];
    $level                          = $_GET['level'];
    $trimmedTitle                   = preg_replace('/\s+/', '-', $getTitle);
    $subject                        = "Chinese";
    $learning_area                  = "Comprehension";
    $mission_type                   = $questionType;
    $passing_rate                   = 0.6;
    $passing_rate_in_percentage     = $passing_rate*100;
    $learning_points                = "100";
    $questions                      = mysql_query("SELECT * FROM `questions_chinese`         WHERE `Mission_id` = '$missionId' and `learning_area` = '$learning_area' AND `level` = '$level'");
    $questionsPassage               = mysql_query("SELECT `passage` FROM `questions_chinese` WHERE `Mission_id` = '$missionId' and `learning_area` = '$learning_area' AND `level` = '$level'");
    $total                          = mysql_num_rows($questions); 
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<?php include('meta-tag.php');?>
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
    <div id="wrapper">
		<!-- header-->
		<?php include('header.php');?>
		<!-- End header-->
        <div class="center-wrapper">
		<!-- Learning Video modeal Box-->


		<div class="container">
			<div class="row-fluid">
                
				<div class="span12">
                	<div id="inner_title">
                        <h2 class="text-center">中國語文 - 閱讀理解 : <?php echo $getTitle;?></h2>
                       
                        <div class="text-center">
                            <a id ="flat-btn" class="flat-button flat-button-2" href="chinese-comprehension-trial.php?level=<?php echo $_GET['level'];?>">&larr; 返回</a> 
                        </div>
                    </div>
				</div>
			</div><!--/row-->
		</div><!--/container-->
		
		<div id="content">
            <div class="container center">
                <div class="row-fluid">

                <!-- Assessment Content Start -->
                    
                      <div class="span4 left-side-bar-container">
                      <?php
                      $photoNum = $missionId;
                      echo '<img src="_assets/img/english/vocabulary/vocabulary-icon-'.$photoNum.'.png" alt="English-Vocabulary-Icon"/><hr/>';
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
                                            <td class="question-summary-header">問題類別：</td>
                                            <td><?php if($mission_type == "Fill in The Blanks"){echo "填充練習";}elseif($mission_type == "Mutiple Choice"){echo "選擇題";}?></td>
                                        </tr>
                                        <tr>
                                            <td class="question-summary-header">問題數量：</td>
                                            <td> <?php echo $total; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="question-summary-header">練習類別：</td>
                                            <td><?php if($learning_area == "Vocabulary"){echo "詞彙練習";}elseif($learning_area == "Comprehension"){echo "閱讀理解";}?></td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="question-summary-header">學習點：</td>
                                            <td><?php echo $learning_points;?></td>
                                        </tr>
                                        
                                        

                                    </table>
                                 
                                          
                                </div>
                            
                        </div>
                    
                 
                    </div>
                 </div>
              
                
                <div class="span8 question-content-container">
                    <div class="question-content">
                        <h2 align="center"><span class="font-orange"><?php if(isset($_POST['submit'])){echo "<h1>你既成績"."</h1>" ;}else{echo "Mission " . $missionId. " : ". $getTitle;}?></span></h2><hr/>
                        
                    <?php 
                     //Extracting the Passage
                    $passageRow =   mysql_fetch_assoc($questionsPassage);
                    $passage    =   $passageRow['passage'];

                     if(!empty($passage)){echo '<div class="passage">'.$passage.'</div><hr/>';}

                    ?>
                        <!--<p><img src="_assets/img/english/grammar/grammar-id-1-banner.png"></p>
                        <h2><span class="font-orange">Question</span></h2><hr/>-->
                       <!-- Where the questions goes-->

                       <?php

                        $score = 0;
                        $question_no  = 1;

                        echo '<form name ="english_question" method="POST" action="">';

                    
                        while($row = mysql_fetch_assoc($questions)){

                            $question   = $row['questions'];
                            $passage    = $row['passage'];
                            $id         = $row['question_id'];
                            $option1    = $row['selection1'];
                            $option2    = $row['selection2'];
                            $option3    = $row['selection3'];
                            $option4    = $row['selection4'];
                            $title      = $row['title'];
                            $answer     = strtoupper($row["answer"]);

                           
                            echo  "<div class='question-title-chinese'> $question_no . ". $question . "</div> ";

                            if($mission_type == "Mutiple Choice"){
                                echo 
                                '<ul class="no-bullet">
                                 <li>'     . "<input type=radio  name=\"$id\" value=\"$option1\" > $option1"   . "</li>" .
                                 "<li>"    . "<input type=radio  name=\"$id\" value=\"$option2\" > $option2"   . "</li>";

                                 if(empty($option3)){
                                    
                                 }else{echo  "<li>"    . "<input type=radio  name=\"$id\" value=\"$option3\"> $option3"  . "</li>";}
                                 if(empty($option4)){
                                    
                                 }else{echo  "<li>"    . "<input type=radio  name=\"$id\" value=\"$option4\"> $option4"  . "</li>";}
                                 
                                    echo"</ul>";

                            }elseif($mission_type == "Fill in The Blanks"){
                                echo '<input type="text" class="placeholder span4" name='.$id.' placeholder="答呢到" value="';
                                if(isset($_POST[$id])){echo $_POST[$id];}

                                echo '">';
                            }

                        
                            include('question/result-message-box.php'); 

                            $question_no++; 

                        }
                         
                            
                            if(isset($_POST['submit'])){ 
                                if(empty($_POST[$id])){
                                    echo "<hr/><h4 align='center'>你都未答悶曬問題，好難比分你姐～</h4>";
                                    echo "<p align='center'><a class='btn blue-btn' href='chinese-vocabulary-question.php?id=".$missionId.'&assessmenttitle='.$getTitle.'&questiontype='.$questionType."'>答多次先</a></p>";
                                    exit();
                                }
                               
                            }else{ 
                                echo "<hr/><p align=center>". "<input type='submit' class='btn blue-btn' value='答問題～' name='submit'>". "</p>";
                                }
                            echo "</form>";
                           
                            //The Result Report Table
                            if(isset($_POST['submit'])){
                                $correctly_answered         =  $score;
                                $incorrectly_answered       =  $total - $score;
                            //echo '<div id="myModal-result" class="reveal-modal">';    
                            echo "
                            <table class='result-table'>
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
                                echo "<span class='font-green'>合格!叻叻!</span>".
                                "<tr>
                                    <td class='header'>獲得學習點：</td>
                                    <td><a href='registration.php'>註冊左</a>先拎到學習點換禮物架～</td>
                                </tr>";

                            }else{
                                echo "<span class='font-red'>你唔合格!</span>
                                <tr>
                                    <td class='header'>獲得學習點：</td>
                                    <td><a href='registration.php'>註冊左</a>先拎到學習點換禮物架～</td>
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
                    
                        
                            echo "
                            <h3 align='center'>想換禮物?</h3>
                            <div align='center'>
                                 <a class='btn red-btn' href='chinese-vocabulary-question-trial.php?id=".$missionId.'&assessmenttitle='.$getTitle.'&questiontype='.$questionType."'>註冊賬戶</a>
                            <a href='chinese-vocabulary-trial.php' class='btn blue-btn' name='next'>其他任務</a>
                            </div></div>
                            ";


                            //echo ' </div>';

                            //The Report
                            //include ('report.php');
                            
                            //End of Result Report Table
                            }
                             
                            
                       ?>

                   </div>
                </div>
                <!-- Assessment Content End-->
                
                
            </div>
            </div>
            
        </div>
			
		</div>
		</div>
		<?php include('footer.php');?>
        <script src="_assets/js/jquery-1.4.4.min.js"></script>
        <script src="_assets/js/jquery.reveal.js"></script>
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="_assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="_assets/js/filter.js"></script>
        
        <!-- Latest Tweets -->
        <script type="text/javascript" src="_assets/js/twitter.js"></script>
    

        <!-- hide and show Div-->
 


</body>
</html>