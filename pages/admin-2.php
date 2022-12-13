<?php
require ('database.php');
//require ('auth_session.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site where you can sell your car or buy the car you are looking for.">
    <meta name="keywords" content="auto, cars, buy, buy, sale, sell, dealership, 0km, new">
    <title> INFINITE AUTOMOTIVE - Sign In </title>
    <link rel="shortcut icon" href="../assets/img/logo/icon-shortcut1.jpg">
   
    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="sign-in-container">
        <img class="sign-in-banner" src="../assets/img/images/sign-in-up/car-image.webp" alt="image auto" width="100%" height="50%"> <!-- Image Part -->


        <div class="sign-in-content"> <!-- Part of the Form -->
            <a href="../index.php"><img src="../assets/img/logo/carlogo.jpeg" alt="INFINITE AUTOMOTIVE"></a>
            <h1>Admin Log in</h1>

            <form class="sign-in-form" method="post"> <!-- Login Form -->
                <div class="sign-in-fields"> <!-- Fields -->
                    <div class="sign-up-field">
                        <h3>Email</h3>
                        <input type="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="sign-up-field">
                        <h3>Password</h3>
                        <input type="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <a href="#">Did you forget your password?</a>
                </div>
                <div class="sign-in-btns"> <!-- Buttons -->
                    <div class="remember-me">
                        <input type="checkbox" id="remember" value="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <div class="sign-in-up">
                        <input type="submit" value="Log in">
                        <div class="register-section"> <!-- Register -->
                            <a class="btn-register" href="./sign-up.php">Register</a>
                            <p>Do not you have an account yet?</p>
                    </div>
                    </div>
                </div>
            </form>
            <?php
            if(isset($_POST["submit"])){
                $email = $_POST["email"];
                $password = $_POST["password"];
                $sql = "select * from admin where email='$email' AND password='$password'";
                $result = mysqli_query($con,$sql);
                $row = mysqli_fetch_assoc($result);
                if($row==1){
                    header("Location:Buy.php");
                }
            }
            else{
                echo "<h3>Invalid login details</h3>";
            }
            ?>
            <footer class="sign-in-footer footer-sign-in">
                <hr>
                <div class="footer-bar"> <!-- Bar Footer -->
            <h3>DESIGNED FOR LIVING ENGINEERED TO LAST</h3>
            <div class="social-media"> <!-- Networks Footer -->
                <ul>
                    <li> <!-- Instagram -->
                        <a class="social-media-item" href="#" target="_blank"><img src="../assets/img/icons/instagram.png" alt="instagram" width="20" height="20"></a>
                    </li>
                    <li> <!-- Facebook -->
                        <a class="social-media-item" href="#" target="_blank"><img src="../assets/img/icons/facebook.png" alt="facebook" width="20" height="20"></a>
                    </li>
                    <li> <!-- Whatsapp -->
                        <a class="social-media-item" href="#" target="_blank"><img src="../assets/img/icons/whatsapp.png" alt="whatsapp" width="20" height="20"></a>
                    </li>
                </ul>
            </div>
            </footer>
        </div>
    </div>
</body>
</html>