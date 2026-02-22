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
<body>
    <h1> 
        <span>UniKL JUP</span>
    </h1>
        <nav class= "navbar">
          <ul class = "navmenu-item">  
              <li><a href = "academics.php" >Academics</a>
                <ul class="dropdown">
                  <li><a href="#">Electrical</a></li>
                  <li><a href="#">Mechanical</a></li>
                </ul>
              </li>
              <li ><a href="about.php">Target Counters</a></li>
              <li ><a href="contacts.php" >Contacts</a></li>
              <li ><a href="welcome.php" >Welcome</a></li>
              <li id = "test"><a href="test.php" >Test Page</a></li>
          </ul>
        </nav>
    <main>
        <div class="wrapper">
            <div id ="div1"><img src="assets/img/photo1.avif" alt="image 1" class="gallery_img"></div>
            <div id ="div2"><img src="assets/img/photo2.avif" alt="image 2" class="gallery_img"></div>
            <div id ="div3"><img src="assets/img/photo3.avif" alt="image 3" class="gallery_img"></div>
            <div id ="div4"><img src="assets/img/photo4.avif" alt="image 4" class="gallery_img"></div>
            <div id ="div5"><img src="assets/img/photo5.avif" alt="image 5" class="gallery_img"></div>
            <div id ="div6"><img src="assets/img/photo6.avif" alt="image 6" class="gallery_img"></div>
        </div>

    </main>
    <footer>
        <div class= "description">&copy; Copyrigt Reserved<br>
                SharkFisher
        </div>
    </footer>

</body>

