<?php 
session_start();
if(isset($_SESSION['first_name'])){
    header("location:cars.php");
}

$host = "localhost";
$username = "root";
$password = "";
$database = "registration";

$con = mysqli_connect($host, $username, $password, $database);
  if(!$con){
  	die("Database connection error: ".mysqli_connect_error());
  }

try {
        //Error variables declaration 
        $mainErr =  $emailErr = $passwordErr = ""; 

        // temporarily variable declaration
         $email = $password = "";

         if($_SERVER["REQUEST_METHOD"] == "POST"){

            if(empty($_POST['email'])){
                $emailErr = "*Email address is required.";
            }
            else if(empty($_POST['password'])){
                $passwordErr = "*Password is required.";

            }
            else {
                $email = mysqli_real_escape_string($con,trim($_POST['email']));
                $password = mysqli_real_escape_string($con,trim($_POST['password']));
                $sql = " SELECT * FROM users WHERE email = '$email' ";
                $query = mysqli_query($con, $sql);
                
                if(mysqli_num_rows($query) >0){
                    while($row = mysqli_fetch_assoc($query)){
                        if(password_verify($password,$row['passwrd'])){
                            echo '<script>alert("You logged in");</script>';
                            $_SESSION['first_name'] = $row['first_name'];
                            header("location:cars.php");
    
                        }
                        else {
                            $mainErr = "Email address OR Password is incorrect.";
                        }
                    }      
                    
                }
               else {
                    $mainErr = "Email address OR Password is incorrect.";
               }

            }
         }

} 
catch (Exception $e){
    echo "Message: ".$e->getMessage();
}

 mysqli_close($con);
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
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="../build/css/styles.css">
    <!-- <script defer src="../javascript/sign-in.js"></script> -->
</head>
<body>
    <div class="sign-in-container">

        

        <img class="sign-in-banner" src="../assets/img/images/sign-in-up/car-image.webp" alt="image auto" width="100%" height="50%"> <!-- Image Part -->

        <div class="sign-in-content"> <!-- Part of the Form -->

            <a class="close" id="close" href="../index.php"><i class="fa fa-close"></i></a>

          <img src="../assets/img/logo/carlogo.jpeg" alt="INFINITE AUTOMOTIVE">
            <h1>Log in</h1>

            <!-- Displaying an error when the password or email is incorect -->
            <div class="error" id="error"><?php echo $mainErr; ?></div>

            <form id="form" class="sign-in-form" method="POST" action="./sign-in.php"> <!-- Login Form -->
                  
                <div class="sign-in-fields"> <!-- Fields -->
                    <div class="sign-up-field">
                        <h3 for="email">Email</h3>
                        <input type="email" id="email" name="email" placeholder="Enter your email" class="input_border" value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                    </div>
                    <!-- Display error message when the email field is empty -->
                    <div class="error" id="email_error"><?php echo $emailErr; ?></div>
                    <div class="sign-up-field">
                        <h3 for="password">Password</h3>
                        <input type="password" id="password1" name="password" placeholder="Enter your password" class="input_border" value="<?= isset($_POST['password']) ? $_POST['password'] : ''; ?>">
                        <!-- Display error message when the password field is empty -->
                    <div class="error" id="password1_error"><?php echo $passwordErr; ?></div>
                    </div>
                    
                    <a href="reset.php">Did you forget your password?</a>
                </div>
                <div class="sign-in-btns"> <!-- Buttons -->
                    <div class="remember-me">
                        <input type="checkbox" id="remember" value="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <div class="sign-in-up">
                        <input type="submit" value="Log in">

                        <div class="register-section"> <!-- Register -->
                            <a class="btn-register" href="./registration_form.php">Register</a>
                            <p>Do not you have an account yet?</p>
                    </div>
                    </div>
                </div>
            </form>

            <footer class="sign-in-footer footer-sign-in">
                <hr>
                <div class="footer-bar"> <!-- Bar Footer -->
            <h3>DESIGNED FOR LIVING ENGINEERED TO LAST</h3>
            <div class="social-media"> <!-- Networks Footer -->
                <ul>
                    <li> <!-- Instagram -->
                        <a class="social-media-item" href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li> <!-- Facebook -->
                        <a class="social-media-item" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li> <!-- Whatsapp -->
                        <a class="social-media-item" href="#" target="_blank"><i class="fa fa-whatsapp"></i></a>
                    </li>
                </ul>
            </div>
        </div>
            </footer>
        </div>
    </div>
</body>
</html>