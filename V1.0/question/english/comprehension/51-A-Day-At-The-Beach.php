<?php 

//Editable content selector
$subject                    = "English";
$level                      = "P.5";
$learning_area              = "Comprehension";
$mission_type               = "Multiple Choice";
$mission_id                 = 51;
$passing_rate               = 0.5;
$passing_rate_in_percentage = $passing_rate*100;
$learning_points            = "10";
$questions                  = mysql_query("SELECT * FROM `questions` WHERE `Mission_id` = '$mission_id' and `learning_area` = '$learning_area'");
$total                      = mysql_num_rows($questions);


?>
                    <div class="span3 left-side-bar-container">
                        <img src="_assets/img/english/comprehension/comprehension-icon-51.png" alt="English-Comprehension-Icon"/><hr/>
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

<p>It was early summer, and the weather was really hot. Tyler’s mom had told him that on
Saturday they would be going to the beach. Tyler was 
excited. He couldn’t wait to practice his swimming
skills he learned at the local pool during the spring.
Dad had to work, so he was not going to be able to go
along.</p>
<p>The drive to the beach was only an hour, but to 
Tyler it seemed forever. Mom said they would spend 
the day swimming, and the big treat of eating dinner 
in a restaurant would end their busy day.</p>

<p>They finally arrived at the beach. Tyler helped 
his mom unload the beach blankets, his sand toys, and 
some snacks. “The waves look really high!” Tyler said to his Mom. Mom found a good spot on 
the sand that was close to the water and put the blankets down and set up some chairs. Sitting 
close by them was a boy about Tyler’s age. He came over and said his name was Gary and
asked Tyler if he wanted to build a sand castle with him. “Sure,” said Tyler. His mom began 
talking to Tyler’s mom about school, work, and things moms usually talk about.</p>
<p>The boys built a great sand castle. They decided to head for the water. “Be careful,”
shouted Gary’s mother. “We will,” Gary shouted back. The boys were running in and out of 
the water and jumping through the waves laughing. They were having a great time. Suddenly, 
they ran to jump in a big wave, but Tyler couldn’t find Gary. Tyler looked around and finally 
saw him waving his hands yelling for help. Tyler sprang into action and remembered the 
lifesaving skills he learned during his swimming class at the local pool. I’ve got to get to Gary,
thought Tyler. </p>
<p>Tyler swam to where Gary was and put his arm around him and told him to hold
on tight. Just then the lifeguard spotted them. He rushed to the water and took over. He was 
able to get Gary from Tyler and bring him safely back to shore. Gary’s Mom was so scared, but 
she realized if it hadn’t been for Tyler’s quick action, Gary may have drowned.</p>
<p>Gary and his mom thanked Tyler for his fast thinking and great swimming skills. That
night Gary’s mom invited Tyler and his mom to go to dinner with them. “It’s my thank you
treat,” said Gary’s mom. Not only did the boys become friends, but their moms did as well!</p>
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
                                    echo "<p align='center'><a href='english-comprehension-id-51-A-Day-At-The-Beach.php' class='btn blue-btn' name='again'>Try Again</a></p>";
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
                            <a href='english-comprehension-id-51-A-Day-At-The-Beach.php' class='btn blue-btn' name='again'>Try Again</a>
                            <a href='english-comprehension.php' class='btn blue-btn' name='next'>Other Missions</a>
                            </div>
                            ";
                            //echo ' </div>';
                            include ('report.php');
                           
                            }
                       ?>

                  

                   </div>
                </div>