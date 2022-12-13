<?php 
// session_start();
// if(isset($_SESSION['first_name'])){
//     header("location:cars.php");
// }

// connecting db
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
        $mainErr = $emailErr = $passwordErr = $confirm_passwordErr = $favourateErr = ""; 

    if($_SERVER["REQUEST_METHOD"] == "POST"){

            if(empty($_POST['email'])){
                $emailErr = "*Email address is required.";
            }
            else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $emailErr = "Invalid email dress";
            }
            else if(empty($_POST['favourate'])){
                $favourateErr = "*Series/movies field is required.";
            }
            else if(!preg_match("/^[a-zA-z]*$/",$_POST['favourate'])){
                $favourateErr = "*Fish type should only be letters/aphabets.";
            }
            else if(empty($_POST['password'])){
                $passwordErr = "*Password is required.";

            }
            else if(strlen($_POST['password']) <=5){
                $passwordErr = "*Password should be at least 6 characters.";
            }
            else if($_POST['password'] == "password" || $_POST['password']=="PASSWORD"){
                $passwordErr = "*Password can not be password.";
            }
            else if(empty($_POST['confirmPassword'])){
                $confirm_passwordErr = "*Confirm password is required.";
            }
            else if( $_POST['password'] !== $_POST['confirmPassword']){
                $confirm_passwordErr = "*Confirm password mismatch.";  
            }
            else {
                $hashed_password = password_hash($password,PASSWORD_DEFAULT);
                $email = mysqli_real_escape_string($con,trim($_POST['email']));
                $password = mysqli_real_escape_string($con,trim($_POST['password']));
                $favourate = mysqli_real_escape_string($con,trim($_POST['favourate']));
                $sql = " UPDATE users SET passwrd ='$hashed_password' WHERE email = '$email' AND series_or_movie= '$favourate' ";
                $query = mysqli_query($con, $sql);

                if($query){
                   
                    ?>
                    <script>
                    alert("Your Password was reset successfully.");
                    </script>'
                    <?php
                     
                }
                else {
                    ?>
                    <script>
                    alert("Something went wrong.");
                    </script>
                    <?php
                    $mainErr = "*Email OR Series/movies";
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

</head>
<body>
    <div class="sign-in-container">

        <img class="sign-in-banner" src="../assets/img/images/sign-in-up/car-image.webp" alt="image auto" width="100%" height="50%"> <!-- Image Part -->

        <div class="sign-in-content"> <!-- Part of the Form -->

            <a class="close" id="close" href="../index.php"><i class="fa fa-close"></i></a>

          <img src="../assets/img/logo/carlogo.jpeg" alt="INFINITE AUTOMOTIVE">
            <h1>Reset Password</h1>
            <div class="error"><?php echo $mainErr; ?></div>
            <!-- Displaying an error when the password or email is incorect -->

            <form id="form" class="sign-in-form" method="POST" action=""> <!-- Login Form -->
                  
                <div class="sign-in-fields"> <!-- Fields -->
                    <div class="sign-up-field">
                        <h3 for="email">Email</h3>
                        <input type="email" id="email" name="email" placeholder="Enter your email" class="input_border" value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                        <!-- Display error message when the email field is empty -->
                        <div class="error" id="email_error"><?php echo $emailErr; ?></div>
                    </div>
                    <div class="sign-up-field">
                        <h3 class="input-heading">What's your favourate tv series/movie?</h3>
                        <input type="text" name="favourate" placeholder="E.g power" value="<?= isset($_POST['favourate']) ? $_POST['favourate'] : ''; ?>">
                        <div class="error"><?php echo $favourateErr; ?></div>
                    </div>
                    
                    <div class="sign-up-field">
                        <h3 for="password">New Password</h3>
                        <input type="password" id="password1" name="password" placeholder="Enter your new password" class="input_border" value="<?= isset($_POST['password']) ? $_POST['password'] : ''; ?>">
                        <!-- Display error message when the password field is empty -->
                        <div class="error" id="password1_error"><?php echo $passwordErr; ?></div>
                    </div>

                    <div class="sign-up-field">
                        <h3 class="input-heading">Confirm Password</h3>
                        <input type="password" name="confirmPassword" placeholder="Repeat your password" id="Confirm_password" value="<?= isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : ''; ?>">
                        <div class="error" id="password_error"><?php echo $confirm_passwordErr; ?></div>
                    </div>
                    
                      </div>
                        <div class="sign-in-btns"> <!-- Buttons -->
                         <div class="sign-in-up">
                        <input type="submit" value="Reset Now">   
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