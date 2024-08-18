<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/style.css">
    <!-- Priyanshu Maurya 56d7e76b -->
    <title>Guessing Game</title>
</head>
<body>
    <?php
        $correct_guess = 28;
        $guess_class = "wrong";
        $feedback = "";
        if (!isset($_GET['guess'])) {
            $feedback = "Missing guess parameter";
        } else if (!is_numeric($_GET['guess'])) {
            $feedback = "Your guess is not a number";
        } else if ($_GET['guess'] < $correct_guess) {
            $feedback = "Your guess is too low";
        } else if ($_GET['guess'] > $correct_guess) {
            $feedback = "Your guess is too high";
        } else {
            $feedback = "Congratulations - You are right";
            $guess_class = "correct";
            $guessed = true;
        }
    ?>
    <h1> Welcome to my guessing game</h1>
    <p class="<?php echo $guess_class; ?>"><?php echo $feedback; ?></p>
    <div class="game-instruction">

        <h1 class="heading">Auto Grader Guessing Game instruction </h1>
        <h3>Instructions to play the Guessing Game</h3>

        <div class="container">
            <ol>
                <li>Make sure the URL in the address bar has the query parameter <code>guess</code>. Alternatively, click <a href="/?guess=1">here</a>.</li>
                <li>If it says "Your guess is too low" on the screen, update the your-guess-number in address URL with a larger number and enter</li>
                <li>If it says "Your guess is too high" on the screen, update the your-guess-number in address URL with a larger number and enter</li>
                <li>If it says "Missing guess parameter" on the screen, add a guess query parameter to the URL in address bar as in step 1</li>
                <li>Repeat until you see the text "Congratulations - You are right". When you do, congratulations you have made the guess</li>
            </ol>
        </div>
    </div>
</body>

</html>