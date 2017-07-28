<?php include('../init.php'); ?>

<?php

$mission_id = 1;



 $questions = mysql_query("SELECT * FROM `questions` WHERE `mission_id` = '$mission_id'");
 $row = mysql_fetch_assoc($questions);
 $question   = $row['questions'];
 
 $id         = $row["question_id"];
 $option1    = $row["selection1"];
 $option2    = $row["selection2"];
 $option3    = $row["selection3"];
 $answer     = $row["answer"];

$selected   = $_POST[$id];
$id         = $row["question_id"];

 $score = 0;
 $total = mysql_num_rows($questions);

    if(isset($_POST['submit'])){


        if ($selected == $answer) 
        {
        $score++;   
        }
        echo "<p align=center><b>You scored $score out of $total</b></p>";
    }  


?>