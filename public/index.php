<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/style.css">
  <title> Priyanshu Maurya</title>
</head>

<body>
<h1> Welcome to my guessing game</h1>

<?php
$correctnumber=60; 

if (isset($_GET['guess']) )
{
  if (is_numeric($_GET['guess'])===FALSE)
 {
echo "Your guess is not a number";
}
else if ($_GET['guess']<$correctnumber)
 {
echo "Your guess is too low";
}
else if ($_GET['guess']>$correctnumber)
 {
echo "Your guess is too high";
}
else if ($_GET['guess']==$correctnumber)
 {
echo "Congratulations - You are right";
}
}
else
{
echo "Missing guess parameter <br> Your guess is too short";
}
?>

<div class="game-instruction">

<h1 class="heading">Auto Grader Guessing Game instruction </h1> 
<h3>How to use Guessing Game here is brief difinition</h3>

  <div class="container">
  <p><b>1.</b>Install xamp on your system <a href="https://www.apachefriends.org/" target="blank" >click here</a></p>
  <p><b>2.</b>You need to create tunel using NGROK for that  <a href="https://ngrok.com/" target="_blank">install ngrok</a> on your system </p>
  <p><b>3.</b>Then type this command in cmd (change directory  where you have installed ngrok) ngrok http 80</p>
  <p><b>4.</b>Then after that copy that address who end with io </p>
  <p><b>5.</b>Then concatenate this address before local host address ie. guess.php</p>
  <p><b>6.</b>Changes in PHP file</p>
  <p><b>7.</b>Change the correct number and replace with number specified by your autograder </p>
  <p><b>8.</b>Which you can see when you open tool in autograder</p>
  <p>$correctnumber=60;
  </div>

</div>
</body>
</html>