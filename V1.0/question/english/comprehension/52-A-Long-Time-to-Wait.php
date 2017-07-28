<?php 

//Editable content selector
$subject                    = "English";
$level                      = "P.5";
$learning_area              = "Comprehension";
$mission_type               = "Multiple Choice";
$mission_id                 = 52;
$passing_rate               = 0.5;
$passing_rate_in_percentage = $passing_rate*100;
$learning_points            = "10";
$questions                  = mysql_query("SELECT * FROM `questions` WHERE `Mission_id` = '$mission_id' and `learning_area` = '$learning_area'");
$total                      = mysql_num_rows($questions);


?>
                    <div class="span3 left-side-bar-container">
                        <img src="_assets/img/english/comprehension/comprehension-icon-52.png" alt="English-Comprehension-Icon"/><hr/>
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

<p>Rob   tapped  his     foot    on  the     ground  impatiently.    His     friend, Steve, was 
supposed    to  meet    him in  five    minutes.    They    were    going   to  meet    and watch   a   movie   
together,   and Rob didn’t  want    to  miss    a   single  minute  of  the show.</p>
<p>Both of   them    really liked   movies  and  tried   to see one almost  every   week,   
but lately  Steve   had been    arriving    later   and later.  If  he  didn’t  show    up soon,     they   
wouldn’t have   time    to  get popcorn and drinks before   the movie   started.    They    might   
even    miss    the previews!   Rob grumbled    about   late    friends under   his breath  while   he  
waited.</p>
<p>To   avoid   looking at  his watch,  he  began   pacing  back    and forth.  When    pacing  
didn’t  calm    him,    he  looked  at  his watch   anyway. There   were    only    three   minutes left    
before   he went in  without     his     friend,     Rob     decided.    Pacing  was    making   him    more    
impatient,  so  he  watched cars    pull    into    the parking lot instead.    He  watched each    one,    trying  to  spot    Steve’s blue    car.</p>
<p>Watching  cars    made    him    more     irritated.  He  wondered    why     Steve   couldn’t    be  on  time.   He  wondered    what   
excuse  Steve   would   have     this    time.  Last     time   Steve   had said    it  was because his dad needed  help    in   the    garage. What    
would   it  be this time?   Did the dog need walking    or  did the cat need    feeding?    Maybe   Steve’s mother  needed  help    with    
the dishes? There   would   be  an  excuse. He  was certain of  that.</p>
<p>Rob  checked his watch   one more    time.   There   was only    one minute  left.   Time    sure    felt    like    it  was moving  slowly. 
How could   five    minutes take    so  long?   It  felt    like    an  eternity,   and his mouth   was getting dry.    He  really  wanted  a   soda    and 
some    hot, buttery    popcorn.</p>
<p>Then,    as  he  was looking at  his watch once  more,   he  heard   a   familiar    voice.  “Rob,   I   made    it!”</p>
<p>Rob  turned  around  and saw his friend  Steve.  He  glanced back    at  his watch.  Steve   was on  time.   “You made   it, and 
you’re on   time,   too!”   Rob said    excitedly.</p>
<p>“Of  course,”    Steve   replied, “I really  wanted  to  see this    movie   and the previews.”</p>
<p>“Well     let’s   go  then.”  Rob     suggested. He   reached     for     his     wallet  then,   so  he  could   buy     a   ticket  from    the     ticket 
booth.  Where   was his wallet? He  looked  around  in  alarm.</p>
<p>“What’s  wrong?” Steve   asked.</p>
<p>“I   don’t   have    my  wallet.”    Rob replied worriedly.</p>
<p>Steve    frowned.    “Go check   in  your    car.”</p>
<p>“I   might   be  late    then.”  Rob answered,   feeling foolish.    Here    he’d    been    standing    around  waiting,    and he  was going   
to  be  the late    one now.    He  ran across  the parking lot.</p>
<p>By   the time    he  got his wallet  from    his car and bought  a   ticket, he’d    already missed  the previews    and he  didn’t  
have     time    to  get     popcorn     or  a   drink.  Steve   shared  his     popcorn,    but     Rob     could   hardly eat  it.    He   felt    guilty during  the 
whole   movie.</p>
<p>When the movie   was over,   he  apologized  to  Steve.  “I’m    sorry,  Steve.”</p>
<p>“Why?”   Steve   looked  puzzled.</p>
<p>“I   was grumbling   about   you being   late,   but then    I was   the one who was late.”</p>
<p>Steve    shrugged.   “Don’t  worry.  It  happens to  all of  us.”</p>
<p>“I   see that    now.    Thanks  for understanding.”</p>
<p>“That’s  what    friends are for.”   Steve   replied.</p>

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
                                    echo "<p align='center'><a href='english-comprehension-id-52-A-long-time-to-wait.php' class='btn blue-btn' name='again'>Try Again</a></p>";
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
                            <a href='english-comprehension-id-52-A-long-time-to-wait.php' class='btn blue-btn' name='again'>Try Again</a>
                            <a href='english-comprehension.php' class='btn blue-btn' name='next'>Other Missions</a>
                            </div>
                            ";
                            //echo ' </div>';
                            include ('report.php');
                           
                            }
                       ?>

                  

                   </div>
                </div>