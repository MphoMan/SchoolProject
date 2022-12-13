<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "registration";

$con = mysqli_connect($host, $username, $password, $database);
  if(!$con){
  	die("Database connection error: ".mysqli_connect_error());
  }

try{

 $first_nameErr = $last_nameErr = $emailErr = $phoneErr = $passwordErr = $confirm_passwordErr = $locationErr = $favourateErr = ""; 
  if(isset($_POST['register'])){

    $first_name = mysqli_real_escape_string($con,trim(ucfirst($_POST['firstName'])));
    $last_name = mysqli_real_escape_string($con,trim(ucfirst($_POST['lastName'])));
    $email = mysqli_real_escape_string($con,trim(strtolower($_POST['email'])));
    $phone = mysqli_real_escape_string($con,trim($_POST['phone']));
    $password = mysqli_real_escape_string($con,trim($_POST['password']));
    $favourate = mysqli_real_escape_string($con,trim($_POST['favourate']));

    $check_email = " SELECT * FROM users WHERE email='$email' ";
    $result= mysqli_query($con,$check_email);

    if(mysqli_num_rows($result)!==0){
        $row = mysqli_fetch_assoc($result);
        $emailErr ="*Email is unavailable";
    }
    else if(empty($_POST['firstName'])){
        $first_nameErr = "*First name is required.";
    }
    else if(!preg_match("/^[a-zA-z]*$/",$_POST['firstName'])){
        $first_nameErr = "*First name should only be letters/aphabets.";
    }
    else if(empty($_POST['lastName'])){
        $last_nameErr = "*Last name is required.";
    }
    else if(!preg_match("/^[a-zA-z]*$/",$_POST['lastName'])){
        $last_nameErr = "*Last name should only be letters/aphabets.";
    }
    else if(empty($_POST['email'])){
        $emailErr = "*Email address is required.";
    }
    else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $emailErr = "Invalid email dress";
    }
    else if(empty($_POST['phone'])){
        $phoneErr = "*Phone number is required.";
    }
    else if(substr($_POST['phone'], 0, 1)){
        $phoneErr = "*Phone number has to start with zero.";
    }
    else if (!preg_match ("/^[0-9]{10}+$/",$_POST['phone'])){ 
        $phoneErr = "*Invalid phone number.";
    }
    else if(strlen($_POST['phone']) <=9){
        $phoneErr = "*Phone number has to be 10 digits.";

    }
    else if(empty($_POST['password'])){
        $passwordErr = "*Password is required.";

    }
    else if($_POST['password'] == "password" || $_POST['password']=="PASSWORD"){
        $passwordErr = "*Password can not be password.";
    }
    else if(strlen($_POST['password']) <=5){
        $passwordErr = "*Password should be at least 6 characters.";
    }
    else if(empty($_POST['confirmPassword'])){
        $confirm_passwordErr = "*Confirm password is required.";

    }
    else if( $_POST['password'] !== $_POST['confirmPassword']){
        $confirm_passwordErr = "*Confirm password mismatch.";  
    }
    else if(empty($_POST['location'])){
        $locationErr = "*Location is required.";

    }
    else if(empty($_POST['favourate'])){
        $favourateErr = "*this field is required.";
    }
    else if(!preg_match("/^[a-zA-z]*$/",$_POST['favourate'])){
        $favourateErr = "*Fish type should only be letters/aphabets.";
    }
    else {
    $password = password_hash($password,PASSWORD_DEFAULT);
    $location = $_POST['location'];

    $sql = "INSERT INTO users (first_name,last_name,email,phone_number,passwrd,area,series_or_movie) 
    VALUES ('$first_name','$last_name','$email','$phone','$password','$location', '$favourate');";
    $query = mysqli_query($con, $sql);

        if($query) {
        echo "<script>alert('Application has registered successfully.');</script>";
        header("location:sign-in.php");

        }
        else {
            echo "<script>alert('Something went wrong.');</script>";
        exit();
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
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>

	<!-- <link rel="shortcut icon" href="../assets/img/logo/icon-shortcut1.jpg"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   
    <!-- AOS (Animate On Scroll) -->
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="../build/css/styles.css">
    <!-- <script defer src="../javascript/sign-up.js"></script> -->

</head>
<body>
  <div class="sign-in-container">
        <img class="sign-in-banner" src="../assets/img/images/sign-in-up/car-image.webp" alt="image auto" width="100%" height="50%"> 
        <!-- Image Part -->


        <main class="sign-in-content"> <!-- Part of the Form -->
            
            <a class="close" id="close" href="../index.php"><i class="fa fa-close"></i></a>

          <img src="../assets/img/logo/carlogo.jpeg" alt="INFINITE AUTOMOTIVE">
            <h1>Registration</h1>                                 
            <form class="sign-up-form" id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
             <!-- Registration Form -->
                <div class="sign-up-fields"> <!-- Fields -->
                    <div class="sign-up-field">
                        <h3 class="input-heading">First name</h3>
                        <input type="text" name="firstName" placeholder="John" id="firstName" value="<?= isset($_POST['firstName']) ? $_POST['firstName'] : ''; ?>">
                        <div class="error" id="firstName_error"><?php echo $first_nameErr; ?></div>
                    </div>
                    
                    <div class="sign-up-field birthdate-field">
                        <h3 class="input- heading">Last name</h3>
                        <input type="text" name="lastName" placeholder="Doe" id="lastName" value="<?= isset($_POST['lastName']) ? $_POST['lastName'] : ''; ?>">
                        <div class="error" id="firstName_error"><?php echo $last_nameErr; ?></div>
                    </div>
                    <div class="sign-up-field">
                        <h3 class="input-heading">Email</h3>
                        <input type="email" name="email" placeholder="example@gmail.com" id="email" value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                        <div class="error" id="email_error"><?php echo $emailErr; ?></div>
                    </div>
                    <div class="sign-up-field">
                        <h3 class="input-heading">Cell phone number</h3>
                        <input type="tel" name="phone" placeholder="0700000000" maxlength="10" id="phone" value="<?= isset($_POST['phone']) ? $_POST['phone'] : ''; ?>">
                        <div class="error" id="phone_error"><?php echo $phoneErr; ?></div>
                    </div>
                    <div class="sign-up-field">
                        <h3 class="input-heading">Password</h3>
                        <input type="password" name="password" placeholder="Enter your password" id="password1" value="<?= isset($_POST['password']) ? $_POST['password'] : ''; ?>">
                        <div class="error" id="password1_error"><?php echo $passwordErr; ?></div>
                    </div>
                    <div class="sign-up-field">
                        <h3 class="input-heading">Confirm Password</h3>
                        <input type="password" name="confirmPassword" placeholder="Repeat your password" id="Confirm_password" value="<?= isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : ''; ?>">
                        <div class="error" id="password_error"><?php echo $confirm_passwordErr; ?></div>
                    </div>
                    <div class="sign-up-field">
                        <h3 class="input-heading">Your Province</h3>
                         <select name="location" id="select" value="<?= isset($_POST['location']) ? $_POST['location'] : ''; ?>">
                            <option value="" selected disabled>Which provence are you in?</option>
                            <option value="Eastern Cape">Eastern Cape</option>
                            <option value="Free State">Free State</option>
                            <option value="Gauteng">Gauteng</option>
                            <option value="KwaZulu-Natal">KwaZulu-Natal</option>
                            <option value="Limpopo">Limpopo</option>
                            <option value="Mpumalanga">Mpumalanga</option>
                            <option value="Northern Cape">Northern Cape</option>
                            <option value="Western Cape">Western Cape</option>
                            <option value="North West">North West</option>
                        </select>
                        <div class="error" id="select_error"><?php echo $locationErr; ?></div>
                    </div>
                    <div class="sign-up-field">
                        <h3 class="input-heading">What's your favourate tv series/movie?</h3>
                        <input type="text" name="favourate" placeholder="E.g power" value="<?= isset($_POST['favourate']) ? $_POST['favourate'] : ''; ?>">
                        <div class="error" id="password_error"><?php echo $favourateErr; ?></div>
                    </div>
                </div>
                <div class="sign-in-up"> <!-- Buttons -->
                    <input type="submit" value="sign up" name="register">
                    <div class="register-section"> <!-- Log in -->
                        <a class="btn-register" href="./sign-in.php">Log in</a>
                        <p>Do you already have an account?</p>
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
        </main>
    </div>
</form>
</body>
</html>