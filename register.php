<?php
include("db_connection.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Login-Registration</title>
</head>
<body>
    <h1>Register Page</h1>
    <form action="register.php" method="post">
        <p>
            <label for="name">Name:</label>
            <input type="text" id="name" name="user_name"/>
        </p>
        <p>     
            <label for="pass">Password:</label>
            <input type="password" id="pass" name="password" ></input>
        </p>

        <p class="button">
				<input href="login.php" type="submit" value="sumbit"></input>
			</p>
        
    </form>
<p class = "button">
    <a href = "login.php"> <button>Login Page</button> </a>
</p>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["user_name"];
    $password = $_POST["password"];

    if (empty($username)){
        echo"Please enter a username";
    }
    elseif(empty($password)){
        echo"Please enter a password";
    }
    else{
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(user_name, password) 
                VALUES ('$username', '$hash')";
        
        try {
            mysqli_query($conn, $sql);
            echo"You have registered";
        }
        catch(mysqli_sql_exception) {
            echo "<br> Username {$username} is already taken" ;
        }

    }

    //Start a session
    if (isset($_POST["sumbit"]))
    {
        if(isset($_POST["username"]) &&
           isset($_POST["password"]))
           {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];


           }
    }
    
}


mysqli_close($conn)


?>