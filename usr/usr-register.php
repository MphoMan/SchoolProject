<!--Server Side Scripting To inject Login-->
<?php
  //session_start();
  include('vendor/inc/config.php');
  //include('vendor/inc/checklogin.php');
  //check_login();
  //$aid=$_SESSION['a_id'];
  //Add USer

try{
  $first_nameErr = $last_nameErr = $emailErr = $phoneErr = $passwordErr = $confirm_passwordErr = $locationErr =  "";

  if(isset($_POST['add_user'])){


            $u_fname = $mysqli -> real_escape_string(trim(ucfirst($_POST['u_fname'])));
            $u_lname = $mysqli -> real_escape_string(trim(ucfirst($_POST['u_lname'])));
            $u_phone= $mysqli -> real_escape_string(trim($_POST['u_phone']));
            $u_addr=  $mysqli -> real_escape_string(trim($_POST['u_addr']));
            $u_email= $mysqli -> real_escape_string(trim(strtolower($_POST['u_email'])));
            $u_pwd = $mysqli -> real_escape_string(trim($_POST['u_pwd']));
            $u_cpwd = $mysqli -> real_escape_string(trim($_POST['u_cpwd']));
            $u_category= $mysqli -> real_escape_string($_POST['u_category']);

                       
            // if(check_user($u_email) >0){
            //   function check_user($email){
            //     $check_email = "SELECT COUNT(*) AS num_rows FROM tms_user WHERE u_email = ? ";
            //     $stmt = $mysqli->prepare($check_email);
            //     $stmt -> bind_param("s",$email);

            //     if($stmt -> execute()){
            //       return $stmt-> num_rows;

            //     }



            //   }
            //   $emailErr = "*Email dress is unavalaible";
            // }

          if(empty($u_fname)){
              $first_nameErr = "*First name is required.";
          }
          else if(!preg_match("/^[a-zA-z]*$/",$u_fname)){
              $first_nameErr = "*First name should only be letters/aphabets.";
          }
          else if(empty($u_lname)){
              $last_nameErr = "*Last name is required.";
          }
          else if(!preg_match("/^[a-zA-z]*$/",$u_lname)){
              $last_nameErr = "*Last name should only be letters/aphabets.";
          }
          else if(empty($u_phone)){
            $phoneErr = "*Phone number is required.";
        }
        else if(substr($u_phone, 0, 1)){
            $phoneErr = "*Phone number has to start with zero.";
        }
        else if (!preg_match ("/^[0-9]{10}+$/",$u_phone)){ 
            $phoneErr = "*Invalid phone number.";
        }
        else if(strlen($u_phone) <=9){
            $phoneErr = "*Phone number has to be 10 digits.";
        }
        else if(empty($u_addr)){
          $locationErr = "*Location is required.";
  
      }
        else if(empty($u_email)){
          $emailErr = "*Email address is required.";
      }
      else if(!filter_var($u_email, FILTER_VALIDATE_EMAIL)){
          $emailErr = "*Invalid email dress";
      }
    
      else if(empty($u_pwd)){
        $passwordErr = "*Password is required.";

    }
    else if($u_pwd == "password" || $u_pwd=="PASSWORD" || $u_pwd == "Password"){
        $passwordErr = "*Password can not be password.";
    }
    else if($u_pwd ==123456){
      $passwordErr = "*Password can not be 123456.";
  }
    else if(strlen($u_pwd) <=5){
        $passwordErr = "*Password should be at least 6 characters.";
    }
    else if(empty($u_cpwd)){
        $confirm_passwordErr = "*Confirm password is required.";

    }
    else if( $u_pwd !== $u_cpwd){
        $confirm_passwordErr = "*Confirm password mismatch.";  
    }
          else {
            // $hashed_password = password_hash($u_pwd,PASSWORD_DEFAULT);
            $query="insert into tms_user (u_fname, u_lname, u_phone, u_addr, u_category, u_email, u_pwd) values(?,?,?,?,?,?,?)";
            $stmt = $mysqli->prepare($query);
            $rc=$stmt->bind_param('sssssss', $u_fname,  $u_lname, $u_phone, $u_addr, $u_category, $u_email, $u_pwd);
            $stmt->execute();
                if($stmt)
                {
                    $succ = "Account Created Proceed To Log In";
                }
                else 
                {
                    $err = "Please Try Again Later";
                }

              }
        
    }
  }
  catch (Exception $e){
     echo "Message: ".$e->getMessage();
  }
?>
<!--End Server Side Scriptiong-->
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Tranport Management System, Saccos, Matwana Culture">
  <meta name="author" content="MartDevelopers ">

  <title>Transport Managemennt System Client- Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="vendor/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
<?php if(isset($succ)) {?>
                        <!--This code for injecting an alert-->
        <script>
                    setTimeout(function () 
                    { 
                        swal("Success!","<?php echo $succ;?>!","success");
                    },
                        100);
        </script>

        <?php } ?>
        <?php if(isset($err)) {?>
        <!--This code for injecting an alert-->
        <script>
                    setTimeout(function () 
                    { 
                        swal("Failed!","<?php echo $err;?>!","Failed");
                    },
                        100);
        </script>

        <?php } ?>
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Create An Account With Us</div>
      <div class="card-body">
        <!--Start Form-->
        <form method = "post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4">
                <div class="form-label-group">
                <input type="text" id="exampleInputEmail1" style="text-transform: capitalize;" name="u_fname" value="<?= isset($u_fname) ? $u_fname : ''; ?>">
                  <label for="firstName">First name</label>
                  <div class="error" style="color:red;" id="firstName_error"><?php echo $first_nameErr; ?></div> 
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                <input type="text" class="form-control" id="exampleInputEmail1" style="text-transform:capitalize;" name="u_lname" value="<?= isset($u_lname) ? $u_lname : ''; ?>">
                  <label for="lastName">Last name</label>
                  <div class="error" style="color:red;" id="firstName_error"><?php echo $last_nameErr; ?></div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-label-group">
                <input type="tel" class="form-control" id="exampleInputEmail1" name="u_phone" value="<?= isset($u_phone) ? $u_phone : ''; ?>" maxlength="10">
                  <label for="lastName">Contact</label>
                  <div class="error" style="color:red;" id="firstName_error"><?php echo $phoneErr; ?></div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
            <input type="text" class="form-control" id="exampleInputEmail1" style="text-transform: capitalize;" name="u_addr" value="<?= isset($u_addr) ? $u_addr : ''; ?>">
              <label for="inputEmail">Address</label>
              <div class="error" style="color:red;" id="firstName_error"><?php echo $locationErr; ?></div>
            </div>
          </div>
          <div class="form-group" style ="display:none">
            <div class="form-label-group">
            <input type="text" class="form-control" id="exampleInputEmail1" value="User" name="u_category">
              <label for="inputEmail">User Category</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
            <input type="email" class="form-control" style="text-transform: lowercase;" name="u_email" value="<?= isset($u_email) ? $u_email : ''; ?>">
              <label for="inputEmail">Email address</label>
              <div class="error" style="color:red;" id="firstName_error"><?php echo $emailErr; ?></div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                <input type="password" class="form-control" name="u_pwd" id="exampleInputPassword1" value="<?= isset($u_pwd) ? $u_pwd : ''; ?>">
                  <label for="inputPassword">Password</label>
                  <div class="error" style="color:red;" id="firstName_error"><?php echo $passwordErr; ?></div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                <input type="password" class="form-control" name="u_cpwd" id="exampleInputPassword2"  value="<?= isset($u_cpwd) ? $u_cpwd : ''; ?>">
                  <label for="inputPassword">Confirm Password</label>
                  <div class="error" style="color:red;" id="firstName_error"><?php echo $confirm_passwordErr; ?></div>
                </div>
              </div>
            </div>
          </div>


          <button type="submit" name="add_user" class="btn btn-success">Create Account</button>
        </form>
        <!--End FOrm-->
        <div class="text-center">
          <a class="d-block small mt-3" href="index.php">Login Page</a>
          <a class="d-block small" href="usr-forgot-pwd.php">Forgot Password?</a>
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
