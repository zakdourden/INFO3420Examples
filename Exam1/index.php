<?php
session_start();
$user_guess = '';
$actual_number = '';
$result = '';

if(isset($_SESSION['user_guess']) && isset($_SESSION['actual_number']))
{
    $user_guess = 'Your guess was ' . $_SESSION['user_guess'] . '<br>';
    $actual_number = 'The actual number was ' . $_SESSION['actual_number'] . '<br>';

    if($_SESSION['user_guess'] == $_SESSION['actual_number'])
    {
        $result = "<div id='result'>Way to go, you guessed it!</div>";
    }
    else
    {
        $result = "<div id='result'>Good try, do you want to try again?</div>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>NumberGuess</title>
</head>
<body>
    <h1>Guess a Number between 1 and 10</h1>
    <div id="page_content">
        <p><?=$user_guess?></p>
        <p><?=$actual_number?></p>
        <p><?=$result?></p>
        <form action="guess.php" method="GET">
            <input type="text" name="numberGuess">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>