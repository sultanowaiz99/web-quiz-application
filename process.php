<?php	include('config.php');?>
<?php session_start();?>
<?php
 $next = $_SESSION['number'] + 1;
 $number = $_SESSION['number'];    
if((!isset($_SESSION['score'])) || (!isset($_SESSION['rowcount'])) || (!isset($_SESSION['number']))){
    $_SESSION['score'] = 0;
    $_SESSION['rowcount'] = 0;
    $_SESSION['number'] = 1;
}

if(isset($_GET['course'])){ 
    $course = $_GET['course'];
} 

if ($course == "Sign"){
    $tbl_name="questions_sign";
}
else if ($course == "Rules"){
        $tbl_name="questions_symbol";
}	

//Check to See if Score is Set
    if(!isset($_SESSION['$score'])){
        $_SESSION['$score'] = 0;
    }

    // if(isset($_POST['submit'])){
    //     echo 'Ive been submitted';
    //     $next = $number + 1;
    //     header("Location: questions.php?n=2");
    // }

    if (isset($_POST['submit'])) {
        if(isset($_POST['answerSelected']))
        {
         if($actualAnswer == $_POST['answerSelected']){
            echo "Your answer is correct";
            $score += 1;    
           }  //  Displaying Selected Value
        }
        
        $number += 1;
         if ($course == "Sign"){
            header("Location: questions.php?course=Sign&n=".$next);
        }
        else if ($course == "Rules"){
            header("Location: questions.php?course=Rules&n=".$next);
        
        }	
    }    
    ?>
