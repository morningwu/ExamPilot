<?php 

//Editable content selector

$subject                    = "English";
$level                      = "P.5";
$learning_area              = "Comprehension";
$mission_type               = "Multiple Choice";
$mission_id                 = 67;
$passing_rate               = 0.5;
$passing_rate_in_percentage = $passing_rate*100;
$learning_points            = "10";
$questions                  = mysql_query("SELECT * FROM `questions` WHERE `Mission_id` = '$mission_id' and `learning_area` = '$learning_area'");
$total                      = mysql_num_rows($questions);


?>
                    <div class="span3 left-side-bar-container">
                         <img src="_assets/img/english/comprehension/comprehension-icon-67.png" alt="English-Comprehension-Icon"/><hr/>
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

<p>Bob loved buying new sneakers. It was his birthday, and his 
mother had brought him to the shoe store. Once they were there, she 
knew better than to bother him. She’d set a price limit and let him go for 
it. </p>

<p>Bob looked at the shoes on the rack. New shoes were just about 
the best thing ever. Having the worker grab the right size for you from 
the mysterious room in the back was about as good as it got. His eyes grew wide as the worker 
handed him the orange box containing the shoes he’d chosen.</p>
<p>There were dozens of shoes on the wall, but he’d chosen his favorite. Bob sat down 
quietly on the wooden bench and opened the box. He gently lifted the tissue paper aside and 
drew the two shoes from the box. He smiled and sniffed the shoes. Like a new car, new shoes 
had a smell. The new fabric, rubber, and leather smelled wonderful. </p>
<p>He put them on quickly, so he could feel how they felt on his feet. Once they were on, 
he bounced up and down a couple times and rolled from heel to toe. Oh, the fit! They fit like a 
glove. They’d be tight at first, but they’d stretch to fit his foot perfectly after a few weeks of 
wearing them. He watched his feet in the mirror as he walked back and forth. </p>
<p>“Are those the ones you like, dear?” Bob’s mother asked. </p>
<p>“I think they just might be the ones.” He replied.</p>
<p>“Do they fit right in the toes?” She inquired. </p>
<p>“They certainly do!” Bob was excited. These were the best shoes ever. He couldn’t 
contain himself. “I’m wearing them out of the store.” </p>
<p>While his mother paid for them, Bob strutted back and forth admiring his shoes in front 
of the mirror. On the way out of the store and out of the mall, Bob felt like he was floating on 
air. Just as they were about to leave the mall, an old man stepped on the toes of his brand new 
shoes, leaving a black mark on the front. </p>
<p>“Hey!” Bob shouted angrily.</p>
<p>“Oh, sorry there, young man.” The old man said.</p>
<p>Look what you did to my shoes, you old geezer! Watch where you’re going.”</p>
<p>“I’m sorry. I don’t see so well anymore.”</p>
<p>“Bob!” His mother hissed at him. Her cheeks were red and she 
seemed more embarrassed than angry. “I’m very sorry. I don’t know 
what has gotten into him.” She glared at him. “Apologize to the man.” </p>
<p>“But, mom! He stepped on my shoes.” </p>
<p>“You won’t have any shoes to be stepped upon if you don’t 
apologize.” </p>
<p>Bob took a breath. As he looked into the old man’s cloudy eyes, he realized that the 
man didn’t see very well. The old guy probably had stepped on his foot by accident. He 
glanced at his shoe. The scuff would come out. It wasn’t that big of a deal. “I’m sorry, sir.”</p>
<p>The old man shook his head. “No worries. It was my mistake. I need to watch where I 
put my feet, too.” The old man smiled and walked away then.</p>
<p>Bob frowned as he saw the old man’s shoes. They were really worn out. Suddenly, his 
new shoes didn’t seem so necessary. His old ones weren’t that dirty or worn out. “Mom, do I 
really need new shoes?” He wondered aloud.</p>
<p>Bob’s mother steered him out across the parking lot, leaving the mall behind. “Not 
really, but what else would you get for your birthday? You love shoes.” </p>
<p>“I just feel bad. Did you see that old man’s shoes?” </p>
<p>“Maybe he likes something else as much as you like shoes, so he doesn’t mind if his 
shoes are not as new and nice as yours. Did you notice that he had a nice wristwatch?” Mother 
asked, but Bob shook his head. “To each his own: respect each person’s right to have an 
opinion.” </p>
<p>Bob thought for a moment as they were getting into their car. “So everyone likes 
something different, and that’s okay?” </p>
<p>“Yes, and don’t forget to respect your elders.” Mother reminded him.</p>
<p>Bob smiled. “I won’t. Not again.”</p>

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
                                    echo "<p align='center'><a href='english-comprehension-id-67-The-New-Shoes.php' class='btn blue-btn' name='again'>Try Again</a></p>";
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
                            <a href='english-comprehension-id-67-The-New-Shoes.php' class='btn blue-btn' name='again'>Try Again</a>
                            <a href='english-comprehension.php' class='btn blue-btn' name='next'>Other Missions</a>
                            </div>
                            ";
                            //echo ' </div>';
                            include ('report.php');
                           
                            }
                       ?>

                  

                   </div>
                </div>