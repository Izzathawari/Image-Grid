<?php
require_once "session.php";
include("db_connection.php");
$error ='';

//Check if Login button is click
if (isset($_POST["login"]) && 
    $_SERVER["REQUEST_METHOD"] == "POST")
    {
        //Get the username and password clean witout whitespace
        $username = trim($_POST["user_name"]);
        $password = trim($_POST["password"]);

        //Check entered username and password
        if (empty($username))
        {
            //add to erro var
            $error .= '<p class = "error">Please Enter Username</p>';
        }

        if (empty($password))
        {
            $error .= '<p class = "error">Please Enter Password</p>';
        }

        if (empty($error))
        {
            if($query = $conn->prepare("SELECT * FROM users WHERE user_name = ?")) {
            $query->bind_param('s', $username);
            $query->execute();
            // to get the data as an associative array.
            $result = $query->get_result();
            $row = $result->fetch_assoc(); // $row is now an array (good!) or null (no user)
            if ($row) {
                if (password_verify($password, $row['password'])) {
                    $_SESSION["userid"] = $row['id'];
                    $_SESSION["user"] = $row;

                    // Redirect the user to welcome page
                    header("location: welcome.php");
                    exit;
                } else {
                    $error .= '<p class="error">The password is not valid.</p>';
                }
            } else {
                $error .= '<p class="error">No User exist with that email address.</p>';
            }
        }
        $query->close();
    }
    // Close connection
    mysqli_close($conn);
        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Login Page</title>
</head>
<body>
    <h1>Login Page</h1>
    <form action="login.php" method="post">
         <p>
            <label for="name">Name:</label>
            <input type="text" id="name" name="user_name"/>
        </p>
        <p>     
            <label for="pass">Password:</label>
            <input type="password" id="pass" name="password" ></input>
        </p>

        <p class="button">
			<input href="login.php" type="submit" value="Login" name="login"></input>
		</p>

        <?php if (!empty($error)): ?>
            <div class="message">
                <?php echo $error; ?>
            </div>
         <?php endif; ?>
    </form>
</body>
</html>

<?php

?>