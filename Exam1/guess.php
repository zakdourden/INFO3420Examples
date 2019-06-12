<?php
session_start();

$randomNumber = random_int(1, 10);
$user_input = filter_input(INPUT_GET, 'numberGuess', FILTER_VALIDATE_INT);
$_SESSION['user_guess'] = $user_input;
$_SESSION['actual_number'] = $randomNumber;

header('Location: index.php')


?>