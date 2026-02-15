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
    <link rel="stylesheet" href="assets/css/home_style.css">
    <title>Welcome Page</title>
</head>
<body>
    <!-- Navbar -->
    
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
              <li ><a href="about.php">About</a></li>
              <li ><a href="contacts.php" >Contacts</a></li>
              <li ><a href="welcome.php" >Welcome</a></li>
          </ul>
    </nav>
    <main>
      <h2>This is the Contacts Page</h2>
      <p>Lorem Ipsum is simply dummy text of the printing 
        and typesetting industry. Lorem Ipsum has been the 
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
    </main>
    

    <footer>
        <div class= "description">&copy; Copyrigt Reserved<br>
          SharkFisher
        </div>
          
    </footer>
  
</body>
</html>