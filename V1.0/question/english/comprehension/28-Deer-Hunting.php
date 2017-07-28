<?php 

//Editable content selector

$subject                    = "English";
$level                      = "P.5";
$learning_area              = "Comprehension";
$mission_type               = "Multiple Choice";
$mission_id                 = 28;
$passing_rate               = 0.5;
$passing_rate_in_percentage = $passing_rate*100;
$learning_points            = "10";
$questions                  = mysql_query("SELECT * FROM `questions` WHERE `Mission_id` = '$mission_id' and `learning_area` = '$learning_area'");
$total                      = mysql_num_rows($questions);


?>
                    <div class="span3 left-side-bar-container">
                        <img src="_assets/img/english/comprehension/comprehension-icon-28.png" alt="English-Comprehension-Icon"/><hr/>
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

<p>Ronnie and his dad were going deer hunting. It seemed like a fun opportunity to get out 
and spend time with his dad, but he was a bit worried, too. His dad had trained him how to safely 
use a gun. They shot at targets now and then, and they had taken a gun safety course. Ronnie’s 
dad was very careful to teach him responsibility with the weapon. In fact, his favorite thing to say
was, “Any tool can be dangerous if you don’t know how to use it and don’t properly respect it.”</p>

<p>So they had their camouflage suits on, along with a bright hunter orange vest. They also had boots, hats, and 
gloves to stay warm. Dad had a thermos of coffee to go with some donuts they’d bought that morning, while Ronnie had 
his own smaller thermos of hot chocolate. Despite all that, Ronnie still had some misgivings.</p>
<p>“Why are we going hunting?” Ronnie finally worked up the courage to ask as they turned the truck off onto a 
side road, which headed down toward the farmer’s land where they had permission to hunt.</p>
<p>“To spend time together and see some nature,” Ronnie’s dad answered, “And maybe get a deer.”</p>
<p>Ronnie frowned. It seemed like his dad was giving him the easy answer. “To shoot some nature, you mean? It 
seems kind of mean to kill deer.”</p>
<p>His dad laughed. “If we were just going to hurt animals, that would be mean. We are not going to hurt animals 
and let them suffer. If we do hurt any animals, we will make it end quickly, just like when we go fishing.”</p>
<p>“But they still get hurt and die.”</p>
<p>“Ronnie, there are too many deer. If we didn’t live here, bobcats, wolves, and coyotes would keep the herd’s 
population down. As it is, only people’s cars seem to keep the population down. It is dangerous to have too many of 
them roaming around.”</p>
<p>“So why don’t we just bring back more wolves and stuff?” Ronnie suggested.</p>
<p>“Wolves are more dangerous than deer. The cure would be worse than the problem, even if that idea would
work. However, wolves don’t live well in areas with so many people, and they’d be killing farmers’ cows and stuff. No, 
we’ve made this situation, so we need to responsibly hunt to keep the population down.”</p>
<p>“I guess…”</p>
<p>“We eat the meat, too. It is not wasteful. Cows, pigs, and chickens die every day to give you dinner. This is no 
different, except that we are playing a bigger part in it.”</p>
<p>That quieted Ronnie. He’d never thought about the chickens that it took to make his fried chicken, because they 
were already in food form when he got it. He’d never thought about the cows that made his burgers and steaks or the 
pigs that made his bacon and ham, either. “So it’s not bad?”</p>
<p>“We do our part, we do it responsibly, and we do it as humanely as possible. We make sure we don’t waste, and 
it’s actually a natural part of life here. People have hunted for thousands of years. And, as always, respect your rifle.”</p>
<p>“Got it. Still, I feel a bit bad for the deer.”</p>
<p>“People who accidentally get very hurt because a deer ran in front of their car don’t feel that way. We have to 
keep the deer population down for safety. Not to mention, they might even starve, because there are too many and not 
enough food. It is a necessity, because of how we’ve developed this area.”</p>
<p>“Okay, okay. I’ve got it…” Ronnie gave in, seeing his father’s side.</p>
<p>“But you can still feel a little bad for the deer if you want.” Ronnie’s father added.</p>
<p>Ronnie nodded. In the end, they didn’t see any deer from their blind that day anyway. They spent a long time 
talking quietly, eating donuts, and drinking their hot beverages instead, and that was fine for both of them. </p>
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
                                    echo "<p align='center'><a href='english-comprehension-id-28-Deer-Hunting.php' class='btn blue-btn' name='again'>Try Again</a></p>";
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
                            <a href='english-comprehension-id-28-Deer-Hunting.php' class='btn blue-btn' name='again'>Try Again</a>
                            <a href='english-comprehension.php' class='btn blue-btn' name='next'>Other Missions</a>
                            </div>
                            ";
                            //echo ' </div>';
                            include ('report.php');
                           
                            }
                       ?>

                  

                   </div>
                </div>