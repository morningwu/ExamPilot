<?php 

//Editable content selector

$subject                    = "English";
$level                      = "P.5";
$learning_area              = "Comprehension";
$mission_type               = "Multiple Choice";
$mission_id                 = 29;
$passing_rate               = 0.5;
$passing_rate_in_percentage = $passing_rate*100;
$learning_points            = "10";
$questions                  = mysql_query("SELECT * FROM `questions` WHERE `Mission_id` = '$mission_id' and `learning_area` = '$learning_area'");
$total                      = mysql_num_rows($questions);


?>
                    <div class="span3 left-side-bar-container">
                        <img src="_assets/img/english/comprehension/comprehension-icon-29.png" alt="English-Comprehension-Icon"/><hr/>
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

<p>Duncan was getting ready to make another wand. His master, Meerfus, was letting him try more and more often 
these days. Duncan had been working with the famous, wand-making, magician for more than three years now, and he 
was getting to an age where he needed to be able to make some of his own wands. It was part of the learning process.</p>
<p>Sadly, Duncan didn’t always succeed when he tried to make wands. Meerfus claimed it was all in his intent. That 
is, what was he thinking when he was trying to make the wand? Apparently, he had to focus completely on the goal at 
hand, and could not allow himself distractions. Distractions made for poor wands, and he was still not able to focus all of 
his thoughts on the task of making wands. He always had things he was wondering about or things that diverted his 
attention.</p>
<p>For example, when he was making a wand that was supposed to shoo bugs out of a house, he was also thinking 
about the dairy man who was delivering milk down the road at that moment. So, instead of just shooing away bugs, the 
wand switched bugs with little puddles of milk. This was a pretty silly result for a wand to have, and one that smelled 
after a few days.</p>
<p>Another time, Duncan’s wand to sweep the floors ended up making dust clouds that spun like mini tornadoes. 
The dust devils raged around the house, all because he’d been staring out the window at a swirl of leaves that had been 
caught up in winds against the house. He realized he really needed to focus, or Meerfus was bound to get upset. The 
mini tornadoes had really messed up Meerfus’ scrolls and papers, and it had taken nearly a week to sort them back out.</p>
<p>Meerfus decided that Duncan needed to work without distraction, so they’d built a curtain that surrounded his 
whole work table until he figured out how to ignore things around him. The white sheet hung on all four sides of him as 
he worked now. Meerfus always said it was not the materials that Duncan chose that caused problems, because Duncan 
chose those well. So, if it was entirely the fault of his focus, he really had no excuses now, did he?</p>
<p>Duncan looked at the materials on his worktable. He was making a fire-starting wand. The ingredients for this 
particular wand were warm coals, a long splinter of dried pine, bits of tinder, and flecks of flint and steel for creating 
sparks. Duncan wore gloves and handled the coals with care, because they were hot enough to burn. He laid out the 
ingredients carefully, cleared his mind, and spoke the words that came to mind, words that helped focus his natural 
magic into the wand he was making: “Fireus Startus Easicus.”</p>
<p>The wand picked up a glowing red aspect, as if he’d just blown on the coals to heat them up. The length of the 
wand glittered dangerously with flint and steel chips. It seemed as if he’d succeeded, so he took the gloves off and went 
out to his waiting master with his new wand in hand.</p>
<p>Meerfus grinned and nodded toward the fireplace, where a few logs sat ready to 
be lit. All other flammable materials had been moved back from the fireplace at least 
three or four steps. Duncan shook his wrist and pointed the wand at the fireplace. There 
was no huge explosion, there was no blast of smoke and ash, and there were no strange 
side effects; just a simple, warm fire started around the logs, burning cheerfully.</p>
<p>“Excellent work, Duncan!” Meerfus clapped happily. “You shall have to sell that 
wand and keep the money for it – minus the cost of materials, which was next to 
nothing.</p>
<p>Duncan grinned sheepishly. He didn’t know what to say, but it seemed sad to sell the wand. “Can I keep it? It is 
my first successful wand, after all.”</p>
<p>Meerfus nodded. “That is fine, perhaps better than selling it. Make another tomorrow and sell that one instead.”</p>




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
                                    echo "<p align='center'><a href='english-comprehension-id-29-About-Duncan.php' class='btn blue-btn' name='again'>Try Again</a></p>";
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
                            <a href='english-comprehension-id-29-About-Duncan.php' class='btn blue-btn' name='again'>Try Again</a>
                            <a href='english-comprehension.php' class='btn blue-btn' name='next'>Other Missions</a>
                            </div>
                            ";
                            //echo ' </div>';
                            include ('report.php');
                           
                            }
                       ?>

                  

                   </div>
                </div>