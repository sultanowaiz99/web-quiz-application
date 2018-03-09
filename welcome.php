<?php
// Initialize the session
session_start();
require_once 'config.php';
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Select Course</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    h2{
        color: black; font-family: font-family: 'Open Sans Condensed', sans-serif; font-size: 65px; font-weight: normal; line-height: 60px; margin: 10px 0 20px; text-transform: uppercase; text-shadow: 2px 2px 0 #000, margin: 10px 0 24px; text-align: center; 
    }
    .carousel-inner{
max-height: 500px;

    }
  </style>
</head>
<body>
<p style="position:fixed; top: 5px; right:5px "><a href="logout.php" class="btn btn-danger">Sign Out</a></p>

<div class="container">
  <h2 style="font-size: 30px; font-family: 'Righteous', cursive;">Hi <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>, Select Course</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
       <a href="questions.php?course=Maths&n=1" > <img src="Maths.jpg" alt="Maths" style="width:100%;"></a>
      </div>

      <div class="item">
        <a href="questions.php?course=English&n=1" ><img src="English.jpg" alt="English" style="width:100%;"></a>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>
