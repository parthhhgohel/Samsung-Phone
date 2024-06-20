.php<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fold-5</title>
    <link rel="stylesheet" href="fold-5.css">
</head>
<body>
    <div class="main">
        <nav>
            <div class="logo">
                <a href="home.php"><img src="samsung-logo.jpg" alt=""></a>
            </div>
            <div class="nav-links">
                <ul>
                    <li><a href="home.php">home</a></li>
                    <li><a href="phone.php">phones</a></li>
                    <li><a href="login.php">login</a></li>
                    <li><a href="contact-us.php">contact us</a></li>
                </ul>
                
            </div>
        </nav>

        <div class="information">
            <div class="overlay">
                
            </div>
            <img src="fold-5.jpg" class="mobile">
            <div id="circle">
                <div class="feature one">
                    <img src="camera.png" alt="">
                    <div>
                        <h1>Camera</h1>
                        <p>50MP Main, 12MP Ultra Wide</p>
                    </div>
                </div>
                <div class="feature two">
                    <img src="processor.png" alt="">
                    <div>
                        <h1>Processor</h1>
                        <p>Octacore Snapdragon 8 Gen 2</p>
                    </div>
                </div>
                <div class="feature three">
                    <img src="display.png" alt="">
                    <div>
                        <h1>Display</h1>
                        <p>7'6 QHD+ Foldable Fullscreen</p>
                    </div>
                </div>
                <div class="feature four">
                    <img src="battery.png" alt="">
                    <div>
                        <h1>Battery</h1>
                        <p>4400mAh, 33Hrs standby</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="controls">
            <img src="arrow.png" alt="" id="upBtn">
            <h3>Features</h3>
            <img src="arrow.png" alt="" id="downBtn">
        </div>

        <div class="ph-details">
            <h2>SAMSUNG Galaxy Z Fold 5 (Icy Blue, 256GB)</h2>
            <div class="rate">
                <img src="rate.png" height="25" width="25" alt="">
                <img src="rate.png" height="25" width="25" alt="">
                <img src="rate.png" height="25" width="25" alt="">
                <img src="rate.png" height="25" width="25" alt="">
                <img src="rate.png" height="25" width="25" alt="">
            </div>
            <div class="price">
                <img src="cart.png" width="25" height="25" alt="">
                <p><strike>$1870</strike>&nbsp;&nbsp; $1510</p>
            </div>
            <div class="add-buy">
                <p class="add" onclick="addcart()">Add cart</p>
                <p class="buy">Buy now</p>
            </div>
        </div>

        <div class="verify">
            developed by - Gohelll
        </div>

    </div>

    <footer>
        <div class="about-us">
            <h3>about us</h3>
            <ul>
                <li>
                    <a href="https://www.facebook.com/">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <span> - Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.twitter.com">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <span> - Twitter</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.google.com">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                        <span> - Google</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <span> - Instagram</span>
                    </a>
                </li>
            </ul>
        </div>
    </footer>

    <script>
        var circle = document.getElementById("circle");
        var upBtn = document.getElementById("upBtn");
        var downBtn = document.getElementById("downBtn");


        var rotateValue = circle.style.transform;

        var rotateSum;

        upBtn.onclick = function()
        {
            rotateSum = rotateValue + "rotate(-90deg)";
            circle.style.transform = rotateSum;
            rotateValue = rotateSum;
        }

        downBtn.onclick = function()
        {
            rotateSum = rotateValue + "rotate(90deg)";
            circle.style.transform = rotateSum;
            rotateValue = rotateSum;
        }

        function addcart(){
            alert('Added to Cart Successfully');
        }
    </script>
</body>
</html>