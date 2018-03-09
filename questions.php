<!DOCTYPE html>
<html>
<html lang="en">
<head>
  <title>Questions Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>

<style>
#quiz{
    padding-top: 5%;
    horizontal-align: center;
}
 /* new */
 .element-animation1 {
    animation: animationFrames ease .8s;
    animation-iteration-count: 1;
    transform-origin: 50% 50%;
    -webkit-animation: animationFrames ease .8s;
    -webkit-animation-iteration-count: 1;
    -webkit-transform-origin: 50% 50%;
    -ms-animation: animationFrames ease .8s;
    -ms-animation-iteration-count: 1;
    -ms-transform-origin: 50% 50%
}
.element-animation2 {
    animation: animationFrames ease 1s;
    animation-iteration-count: 1;
    transform-origin: 50% 50%;
    -webkit-animation: animationFrames ease 1s;
    -webkit-animation-iteration-count: 1;
    -webkit-transform-origin: 50% 50%;
    -ms-animation: animationFrames ease 1s;
    -ms-animation-iteration-count: 1;
    -ms-transform-origin: 50% 50%
}
.element-animation3 {
    animation: animationFrames ease 1.2s;
    animation-iteration-count: 1;
    transform-origin: 50% 50%;
    -webkit-animation: animationFrames ease 1.2s;
    -webkit-animation-iteration-count: 1;
    -webkit-transform-origin: 50% 50%;
    -ms-animation: animationFrames ease 1.2s;
    -ms-animation-iteration-count: 1;
    -ms-transform-origin: 50% 50%
}
.element-animation4 {
    animation: animationFrames ease 1.4s;
    animation-iteration-count: 1;
    transform-origin: 50% 50%;
    -webkit-animation: animationFrames ease 1.4s;
    -webkit-animation-iteration-count: 1;
    -webkit-transform-origin: 50% 50%;
    -ms-animation: animationFrames ease 1.4s;
    -ms-animation-iteration-count: 1;
    -ms-transform-origin: 50% 50%
}
/*  new */
.options{
    width: 100%;
}

.question{
    background: #75ba48;
    padding-top: 10px;
    padding: 20px;
    color: #fff;
    border-bottom-right-radius: 55px;
    border-top-left-radius: 55px;
    vertical-align: center;
}


#qid{
    margin-right: 22px;
    background-color: #ffffff;
    color: #aaaaaa;
}
@keyframes animationFrames {
    0% {
        opacity: 0;
        transform: translate(-1500px,0px)
    }

    60% {
        opacity: 1;
        transform: translate(30px,0px)
    }

    80% {
        transform: translate(-10px,0px)
    }

    100% {
        opacity: 1;
        transform: translate(0px,0px)
    }
}

@-webkit-keyframes animationFrames {
    0% {
        opacity: 0;
        -webkit-transform: translate(-1500px,0px)
    }
    60% {
        opacity: 1;
        -webkit-transform: translate(30px,0px)
    }

    80% {
        -webkit-transform: translate(-10px,0px)
    }

    100% {
        opacity: 1;
        -webkit-transform: translate(0px,0px)
    }
}

@-ms-keyframes animationFrames {
    0% {
        opacity: 0;
        -ms-transform: translate(-1500px,0px)
    }

    60% {
        opacity: 1;
        -ms-transform: translate(30px,0px)
    }
    80% {
        -ms-transform: translate(-10px,0px)
    }

    100% {
        opacity: 1;
        -ms-transform: translate(0px,0px)
    }
}
</style><?php
    include('config.php');	
    session_start();
    ob_start();

    $selectedAnswer = "";
    $actualAnswer = "";
    $course = "";
    $tbl_name = "";
    $number = (int) $_GET['n'];
    
    if((!isset($_SESSION['score'])) || (!isset($_SESSION['rowcount'])) || (!isset($_SESSION['number']))){
        $_SESSION['score'] = 0;
        $_SESSION['rowcount'] = 0;
        $_SESSION['number'] = 1;
    }

	if(isset($_GET['course'])){ 
        $course = $_GET['course'];
    } 

    if ($course == "Maths"){
        $tbl_name="questions_maths";
    }
    else if ($course == "English"){
        $tbl_name="questions_english";
    }	
    $query2 = "Select * FROM $tbl_name";
    $run2 = mysqli_query($link, $query2);
    $rowcount= mysqli_num_rows($run2);
    $query = "Select * FROM $tbl_name where id = $number";
    $run = mysqli_query($link, $query);
    while($result = mysqli_fetch_array($run)){
        ?>
<body>
<p style="position:fixed; top: 5px; right:5px "><a href="logout.php" class="btn btn-danger">Sign Out</a></p>
    <form method="post" action="">  
    <div id="quiz">
    <div class="progress" >
        <div class="progress-bar progress-bar-striped active" role="progressbar" style="width: <?php echo $number*10 ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><?php echo $number*10 ?>%</div>
    </div>
        <div class="question">
        <h1 id="question"><span class="label label-warning" id="qid"><?php echo $number ?></span><?= $result['question']; ?>
        </h1>
        </div>
        <?php $actualAnswer = $result['answer'];?>
        <div class="btn-group options" data-toggle="buttons">
            <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
            <input class="form-check-input" type="radio" id="f-option" name="answerSelected" value="option1"><?php echo $result['option1']; ?>
            </label>
            <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
            <input class="form-check-input" type="radio" id="f-option" name="answerSelected" value="option2"><?php echo $result['option2']; ?>
            </label>
            <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
            <input class="form-check-input" type="radio" id="f-option" name="answerSelected" value="option3"><?php echo $result['option3']; ?>
            </label>
            <label class="element-animation4 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
            <input class="form-check-input" type="radio" id="f-option" name="answerSelected" value="option4"><?php echo $result['option4']; ?>
            </label>
            </div>
        <br><br>
        <input class="btn btn-warning btn-block" type="submit" name="submit" value="Next">
    </div>
    </form>
</body>
</html>
<?php
    if (isset($_POST['submit'])) 
    {
        if(isset($_POST['answerSelected']))
        {
            if($actualAnswer == $_POST['answerSelected'])
            {
                echo "Actual Answer ".$actualAnswer;
                $_SESSION['score'] += 1;    
            }  //  Displaying Selected Value
        }
        $next = $number + 1;
        $number += 1; 
            if($next > $rowcount){
                if ($course == "Maths"){
                    $myname = $_SESSION['username'];
                    $myscore = $_SESSION['score'];
                    $sql = "UPDATE users SET maths_score=$myscore WHERE username='$myname'";
                    $link->query($sql);
                    header("Location: Result.php");
                    // unset($_SESSION["score"]);
                }
                else if ($course == "English"){
                    $myname = $_SESSION['username'];
                    $myscore = $_SESSION['score'];
                    $sql = "UPDATE users SET english_score=$myscore WHERE username='$myname'";
                    $link->query($sql);
                    header("Location: Result.php");
                    // unset($_SESSION["score"]);
                }	
            }
            else{
                if ($course == "Maths"){
                header("Location: questions.php?course=Maths&n=".$next);
                }
                else if ($course == "English"){
                header("Location: questions.php?course=English&n=".$next);
                }	
            }    
    } 
}        

?>