<?php 

//Editable content selector

$subject                    = "English";
$level                      = "P.5";
$learning_area              = "Comprehension";
$mission_type               = "Multiple Choice";
$mission_id                 = 37;
$passing_rate               = 0.5;
$passing_rate_in_percentage = $passing_rate*100;
$learning_points            = "10";
$questions                  = mysql_query("SELECT * FROM `questions` WHERE `Mission_id` = '$mission_id' and `learning_area` = '$learning_area'");
$total                      = mysql_num_rows($questions);


?>
                    <div class="span3 left-side-bar-container">
                        <img src="_assets/img/english/comprehension/comprehension-icon-37.png" alt="English-Comprehension-Icon"/><hr/>
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
                        <h2 align="center"><span class="font-orange"><?php if(isset($_POST['submit'])){echo "<h1>".$_SESSION['student_name']."'s Result"."</h1>" ;}else{echo $assessment_title;}?></span></h2><hr/>
                        
                        <!-- Where the Passaage goes-->
                        <div class="passage">

<p>Many people think that we are the only creatures that look to the stars and see 
pictures, but there are others that look up and see things. Where we see the Big Dipper
in the sky at night, the gorillas and monkeys see the Great Banana. Here is why…</p>
<p>Once upon a time, a great banana tree grew in the jungle. It was taller than all the 
others around it. The King of the Gorillas waited patiently beneath the tree for the first 
bananas to ripen, so he could shake them down. He was as strong as he was patient, but 
there was another one who also knew of the tree.</p>
<p>The King of the Monkeys was sneaky and fast. He also loved bananas very much.
He waited nearby the great banana tree. He watched the Gorilla King and laughed. He 
knew that he could climb quickly and steal the banana before the Gorilla could shake it 
down. So, the Monkey King waited, too.</p>
<p>When the first giant banana had finally ripened, the Monkey King snuck up the 
back of the tree and took it. The Gorilla King smelled something suspicious, because he 
never trusted monkeys. He glanced up and saw the Monkey King stealing his banana!
With great anger, he shook the tree, and the Monkey King fell from the tree, still holding 
the banana.</p>
<p>Upon the ground, the two kings struggled to have the 
banana. They could not share, and they could not give up. 
Finally, as the two squeezed and fought for the banana, it 
shot out of their hands with great force. The banana sailed 
high into the sky and became caught in the stars.</p>
<p>Sadly, the great banana tree had been destroyed in 
their fight, and the two kings had become enemies. The 
Great Banana still hangs in the sky to remind them of their 
selfishness. The banana had been big enough to share, but 
they had chosen not to.</p>

<hr/>

                            </div>
                       <!-- Where the questions goes-->

                       <?php

                        $score = 0;
                        
                        
                        $question_no = 1;

                        echo '<form name ="english_question" method=post action="">';

                    
                        while($row = mysql_fetch_assoc($questions)){

                            $question   = $row['questions'];
                            $id         = $row["question_id"];
                            $option1    = $row["selection1"];
                            $option2    = $row["selection2"];
                            $option3    = $row["selection3"];
                            $option4    = $row["selection4"];
                            $answer     = strtoupper($row["answer"]);


                            echo  "<h5> $question_no . ". "$question" . "</h5> ";
                            echo '<ul class="no-bullet"><li>'. "<input type=radio     name=\"$id\" value=\"$option1\"> $option1 " . "</li>" .
                                 "<li>"    . "<input type=radio     name=\"$id\" value=\"$option2\"> $option2"  . "</li>" .
                                 "<li>"    . "<input type=radio     name=\"$id\" value=\"$option3\"> $option3"  . "</li>" .
                                 "<li>"    . "<input type=radio     name=\"$id\" value=\"$option4\"> $option4"  . "</li></ul>";
                               
                             

                            if(isset($_POST[$id])){ 
                                
                                $selected  = strtoupper($_POST[$id]); 
                                //echo "<p><strong>Selected Answer：" . $selected . "</strong></p>"; 
                                echo "<p><strong>"."Correct Answer：" . $answer . "</strong></p>";


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
                                if(isset($_POST[$id]) == false){
                                    echo "<hr/><h4 align='center'>You haven't <span class='error-message'>selected any answer</span> or <span class='error-message'>you haven't answered all questions!</span></h4>";
                                    echo "<p align='center'><a href='english-comprehension-id-37-The-Great-Banana.php' class='btn blue-btn' name='again'>Try Again</a></p>";
                                    exit();
                                }
                               
                            }else{ 
                                echo "<hr/><p align=center>". "<input type='submit' class='btn blue-btn' value='Submit' name='submit'>". "</p>";
                                }
                            echo "</form>";
                           
                            //The Result Report
                            if(isset($_POST['submit'])){
                                $correctly_answered =  $score;
                                $incorrectly_answered = $total - $score;
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
                           "</td>
                            </tr>
                           
                            <tr>
                                <td class='header'>Correctly Answered：</td>
                                <td>$correctly_answered Questions</td>
                            </tr>
                            <tr>
                                <td class='header'>Incorrectly Answered：</td>
                                <td>$incorrectly_answered Questions</td>
                            </tr>
                            </table>";

                            echo "
                            <h3 align='center'>Wanna Try Again?</h3>
                            <div align='center'>
                            <a href='english-comprehension-id-37-The-Great-Banana.php' class='btn blue-btn' name='again'>Try Again</a>
                            <a href='english-comprehension.php' class='btn blue-btn' name='next'>Other Missions</a>
                            </div>
                            ";
                            //echo ' </div>';
                            include ('report.php');
                           
                            }
                       ?>

                  

                   </div>
                </div>