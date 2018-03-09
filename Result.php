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
  <title>Result Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="./odometer-theme-slot-machine.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="./odometer.min.js"></script>
  <style>
#counter
{
  width: 100px;
	height: 100px;
	border-radius: 50px;
  margin:15px;
}
.count
{
  line-height: 100px;
  color:white;
  margin-left:30px;
  
  font-size:50px;
}
</style>

</head>
<body>

<body>
<p style="position:fixed; top: 5px; right:5px "><a href="logout.php" class="btn btn-danger">Sign Out</a></p>

<div class="jumbotron text-center">
  <h1>Result Page</h1>
</div>
<div style="text-align: center;">
  <h2 style="font-size: 30px; font-family: 'Righteous', cursive; text-align:center;"><b>Your Score is </b></h2>  
  <div id="counter"style=" padding-left:42%;"><span class="count odometer"><?php echo ($_SESSION["score"]*10). '%' ; ?></span></div>

<?php unset($_SESSION["score"]); ?>

  <a href="welcome.php" class="btn btn-info btn-lg">
    <span class="glyphicon glyphicon-repeat"></span> Re-Take
  </a>

</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js">
</script>
    <script type="text/javascript">
 $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>


</body>
</html>

