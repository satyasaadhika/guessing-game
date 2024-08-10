<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/style.css">
  <title>56d7e76b Priyanshu Maurya</title>
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
</div>
  
</body>
</html>
