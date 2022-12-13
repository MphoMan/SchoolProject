<!--Server Side Scripting Language to inject login code-->
<?php
    session_start();
    include('vendor/inc/config.php');//get configuration file
   
   $mainErr = $emailErr = $passwordErr = "";
    if(isset($_POST['Usr-login']))
    {
      $u_email= $mysqli -> real_escape_string(trim($_POST['u_email']));
      $u_pwd=$mysqli -> real_escape_string(trim($_POST['u_pwd']));//
    
    if(empty($u_email)){
      $emailErr = "*Email address is required.";
    }
    else if(empty($u_pwd)){
      $passwordErr = "*Password is required.";
   }
   else {
    $stmt=$mysqli->prepare("SELECT u_email, u_pwd, u_id FROM tms_user WHERE u_email=? and u_pwd=? ");//sql to log in user
    $stmt->bind_param('ss',$u_email,$u_pwd);//bind fetched parameters
    $stmt->execute();//execute bind
    $stmt -> bind_result($u_email,$u_pwd,$u_id);//bind result
    $rs=$stmt->fetch();
    $_SESSION['u_id']=$u_id;//assaign session to user id
    $_SESSION['login']=$u_email;
    $uip=$_SERVER['REMOTE_ADDR'];
    $ldate=date('d/m/Y h:i:s', time());

    if($rs){
      //get user logs
      $uid=$_SESSION['u_id'];
      $uemail=$_SESSION['login'];
      $ip=$_SERVER['REMOTE_ADDR'];
      $geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip;
      $addrDetailsArr = unserialize(file_get_contents($geopluginURL));
      $city = $addrDetailsArr['geoplugin_city'];
      $country = $addrDetailsArr['geoplugin_countryName'];
      //$log="insert into userLog(u_id, u_email, u_ip, u_city, u_country) values('$u_id','$u_email','$ip','$city','$country')";
     // $mysqli->query($log);
     // if($log)
      {
       header("location:user-dashboard.php");
       }
      }
    else
    {
    #echo "<script>alert('Access Denied Please Check Your Credentials');</script>";
    // $error = "Access Denied Please Check Your Credentials";
      $mainErr = "Email OR/AND Password is Incorrect";
    }

    }
    
    
  }
?>
<!--End Server Side Script Injection-->
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Infinite AutoMotive- Client Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="vendor/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Client Login Panel</div>
      <div class="card-body">
        <!--INJECT SWEET ALERT-->
        <!--Trigger Sweet Alert-->
          <?php if(isset($error)) {?>
          <!--This code for injecting an alert-->
              <script>
                    setTimeout(function () 
                    { 
                      swal("Failed!","<?php echo $error;?>!","error");
                    },
                      100);
              </script>
                  
          <?php } ?>

          <div class="error" style="color:red;" id="firstName_error"><?php echo $mainErr; ?></div>
          <br><br>
        <form method ="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="u_email" id="inputEmail" class="form-control"  value="<?= isset($u_email) ? $u_email : ''; ?>" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
              <div class="error" style="color:red;" id="firstName_error"><?php echo $emailErr; ?></div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="u_pwd" id="inputPassword" class="form-control"  value="<?= isset($u_pwd) ? $u_pwd : ''; ?>">
              <div class="error" style="color:red;" id="firstName_error"><?php echo $passwordErr; ?></div>
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <input type="submit" name="Usr-login" class="btn btn-success btn-block" value="Login">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="usr-register.php">Register an Account</a>
          <a class="d-block small" href="usr-forgot-password.php">Forgot Password?</a>
          <a class="d-block small" href="../index.php">Home</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!--INject Sweet alert js-->
 <script src="vendor/js/swal.js"></script>

</body>

</html>
