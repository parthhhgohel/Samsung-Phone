<?php
        $login = false;
        $showerror = false;

        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "p2bl";
        
        $con = mysqli_connect($server, $username, $password, $database);
        
        if(!$con){
            echo "failed";
        }
        if(isset($_POST['submit'])){         // if($_SERVER["REQUEST_METHOD"] == "POST"){  }
            $username = $_POST['username'];
            $password = $_POST['password'];
              
                // $sql = "SELECT * FROM `user` WHERE `username`='$username' AND `password` = '$password'";
                $sql = "Select * from user where username='$username' AND password='$password'";
                $result = mysqli_query($con ,$sql);
                $num = mysqli_num_rows($result);

                if($num == 1){
                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    header("location: home.php");
                }
                else{
                    $showerror = "invalid credentials";
                }
            }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <nav>
        <div class="logo">
            <img src="samsung-logo.jpg" alt="">
        </div>
        <div class="nav-links">
            <ul>
                <li><a href="home.php">home</a></li>
                <li><a href="home.php">phones</a></li>
                <li><a href="login.php">login</a></li>
                <li><a href="contact-us">contact us</a></li>
            </ul>
        </div>
    </nav>

    <?php
        if($login){
            echo '<div style="padding: 20px; background-color: #f8d7da: white; overflow: hidden; margin-bottom: 15px;">
            <span style="margin-left: 15px; color: white; font-weight: bold; float: right; font-size: 22px; line-height: 20px; cursor: pointer;" onclick="this.parentElement.style.display="none";">&times;</span> 
            <b>Success!</b>You are logged.
          </div>';
        }
        if($showerror){
            echo '<div style="padding: 20px; background-color: #f8d7da; border: 1px solid #f1aeb5; border-radius: 10px; overflow: hidden; width: 100%; color: black; margin-bottom: 15px;">
            <span style="margin-left: 15px; color: white; font-weight: bold; float: right; font-size: 22px; line-height: 20px; cursor: pointer;" onclick="this.parentElement.style.display=none;">&times;</span> 
            <b>ERROR!</b> Invalid Credentials.
            </div>';
        }
    ?>

    <div class="box-log">
        <div class="container">
            <form id="loginForm" method="post">
                <h2 align="center">Login</h2>
                <!-- <input type="email" id="email" placeholder="Email" required> -->
                <input type="text" id="username" name="username" placeholder="Username" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <button type="submit" name="submit" href="">Login</button>
            </form>
            <p align="center">Don't have an account? <a href="signup.php">Create one</a></p>
        </div>
    </div>

    <div class="verify">
        developed by - gohelll
    </div>
</body>
<script src="script.js"></script>

</html>