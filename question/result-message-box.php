<?php
if(isset($_POST[$id])){ 

  $selected  = strtoupper($_POST[$id]); 

  if($selected == $answer){

  echo 
      "<hr/><div class='result-box-success'>
      <ul class='no-bullet'>
          <li><span class=''>選擇答案：". $selected . "</span></li>
          <li><span class=''>正確答案：". $answer .   "</span></li>
          <li><span class=''><strong>答啱啦！叻叻！</strong></span></li>
      </ul>
      </div>";
      $score++;
  }else{
   echo 
      "<hr/><div class='result-box-error'>
      <ul class='no-bullet'>
          <li><span class=''>選擇答案：". $selected . "</span></li>
          <li><span class=''>正確答案：". $answer .   "</span></li>
          <li><span class=''><strong>答錯左啦！</strong></span></li>
      </ul>
      </div>";
  }

                                 

  }

?>