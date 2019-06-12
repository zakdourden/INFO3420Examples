<?php
session_start();
$logged_in = FALSE;
if(isset($_SESSION['username']) && isset($_SESSION['logged_in']))
{
    $logged_in = TRUE;
}
$errors = filter_input(INPUT_GET, 'errors');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Memero</title>
</head>
<body>
    <?php include('header.php'); ?>
    <h3>Test your memory and math mind with Memero</h3>
    <?php if(!$logged_in)
    {?>
        <div id="data_entry">
            <form action="login.php" method="post">
                Username: <input type="text" name="username" placeholder="Username" size="10">
                Password: <input type="password" name="password" placeholder="Password" size="10">
                <input type="checkbox" name="stay_logged_in" id="">Stay logged in?
                <input type="submit" value="Submit">
                <div class="errors"><?=$errors?></div>
            </form>
        </div>
    <?php }
    else
    { ?>
        <a href="enter_nums.php">Click to begin</a><br/>
        <a href="logout.php">Click to logout</a>
    <?php } ?>
</body>
</html>