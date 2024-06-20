
<?php  
        $showalert = false;
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
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
              
            if(($password == $cpassword) && ($username !=null) && ($email !=null) && ($cpassword != null) && ($password !=null)){
                $sql = "INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES (NULL, '$username', '$email', '$password');";

                $result = mysqli_query($con ,$sql);
                if($result){
                    // echo "record failed";
                    $showalert = true;
                }
            }
            else{
                $showerror = "Please Enter Same Password";
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="signup.css">
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
                <li><a href="contact-us.php">contact us</a></li>
            </ul>
        </div>
    </nav>

    <?php
        if($showalert){
            echo '<div style="padding: 20px; background-color: #d1e7dd; border: 1px solid #a3cfbb; border-radius: 10px; overflow: hidden; width: 100%; color: black; margin-bottom: 15px;">
            <span style="margin-left: 15px; color: white; font-weight: bold; float: right; font-size: 22px; line-height: 20px; cursor: pointer;" onclick="document.getElementById("alert").style.display = "none";">&times;</span> 
            <b>Success!</b> You can login.
            </div>';
        }
        if($showerror){
            echo '<div style="padding: 20px; background-color: #d1e7dd; border: 1px solid #a3cfbb; border-radius: 10px; overflow: hidden; width: 100%; color: black; margin-bottom: 15px;">
            <span style="margin-left: 15px; color: white; font-weight: bold; float: right; font-size: 22px; line-height: 20px; cursor: pointer;" onclick="document.getElementById("alert").style.display = "none";">&times;</span> 
            '.$showerror.'
            </div>';
        }
    ?>

    <div class="box-log">
        <div class="container">
            <form action="" id="signupform" method="post">
                <h2 align="center">sign up</h2>
                <input type="text" id="username" name="username" placeholder="Username" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
                <?php 
                    // if($password != $cpassword){
                    //     echo "<p style='color:red;'>password must be same</p>";
                    // }
                ?>
                <button type="submit" name="submit" href="login.html">Sign up</button>
            </form>
        </div>
    </div>

   
    <div class="verify">
        developed by - gohelll
    </div>
</body>

</html>