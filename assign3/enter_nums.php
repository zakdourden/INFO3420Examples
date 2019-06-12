<?php
    session_start();
    if(!isset($_SESSION['username']) || !isset($_SESSION['logged_in'])){
        header('Location: index.php?errors=You must log in to play the game');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php include('header.php'); ?>
    <h3>Please enter 5 numbers!</h3>
    <div id="data_entry">
        <form action="questions.php" method="post">
            Number 1: <input type="text" name="one" placeholder="Enter first number" size="10"><br/>
            Number 2: <input type="text" name="two" placeholder="Enter second number" size="10"><br/>
            Number 3: <input type="text" name="three" placeholder="Enter third number" size="10"><br/>
            Number 4: <input type="text" name="four" placeholder="Enter fourth number" size="10"><br/>
            Number 5: <input type="text" name="five" placeholder="Enter fifth number" size="10"><br/>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>