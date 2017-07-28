<?php
if(isset($_POST[$id])){ 

  $selected  = strtoupper($_POST[$id]); 

  if($selected == $answer){

  echo 
      "<hr/><div class='result-box-success'>
      <ul class='no-bullet'>
          <li><span class=''>Selected Answer：". $selected . "</span></li>
          <li><span class=''>Correct Answer：". $answer .   "</span></li>
          <li><span class=''><strong>Your Answer is Correct!</strong></span></li>
      </ul>
      </div>";
      $score++;
  }else{
   echo 
      "<hr/><div class='result-box-error'>
      <ul class='no-bullet'>
          <li><span class=''>Selected Answer：". $selected . "</span></li>
          <li><span class=''>Correct Answer：". $answer .   "</span></li>
          <li><span class=''><strong>You've chosen a wrong answer!</strong></span></li>
      </ul>
      </div>";
  }

                                 

  }


?>

