<?php
    // start the session
    session_start();

    // Check if the user is not logged in, then redirect the user to login page
    if (!isset($_SESSION["userid"]) ) {
        header("location: login.php");
        exit;
    }
    // Enter Welcome page from login page

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/test.css">
    <title>Welcome Page</title>
</head>

<div class="container">
    <div id ="div1">Div 1</div>
    <div id ="div2">Div 2</div>
    <div id ="div3">Div 3</div>
</div>
