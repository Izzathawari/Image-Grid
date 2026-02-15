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
    <link rel="stylesheet" href="assets/css/about.css">
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
      <h2>This is the Target Counters</h2>
      <p>
        These companies has been in my radar since June 2025.
      </p>
      <div class="gallery">
          <a ><img src="assets\img\sunway.jpg" alt="sunway" ></a>
          <div class="description"> <a href="https://www.sunwayconstruction.com.my/" style="text-decoration:none">Sunway Construction Bhd</a></div> 
      </div>

      <div class="gallery">
          <a><img src="assets\img\lfg.jpg" alt="liason" ></a>
          <div class="description"><a href="https://lianson.com/" style="text-decoration:none">Lianson Fleet Bhd</a></div> 
      </div>

      <div class="gallery">
          <a><img src="assets\img\tanco.jpg" alt="tanco"></a>
          <div class="description"><a href="https://tancoholdings.com/" style="text-decoration:none">Tanco Bhd</a></div> 
      </div>

    </main>
    <footer>
        <div class= "description">&copy; Copyrigt Reserved<br>
          SharkFisher
        </div>
          
    </footer>

  
</body>
</html>