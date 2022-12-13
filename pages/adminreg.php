<?php
require ('database.php');
//require ('auth_session.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin register</title>
</head>
<body>
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="email" name="email" placeholder="email"><br><br>
    <input type="password" name="password" placeholder="password"><br><br>

    <input type="submit" value="Register">

    <?php
    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $username=$_POST["username"];
        $email=$_POST["email"];
        $password=$_POST["password"];

        $sql = "insert into admin(user_id,name,username,email,password) values('$name','$username','$email','$password')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h3>Added successfully<h3>";
            header("Location:admin.php");
        }
        else{
            echo "registration failed";
        }
    }
    ?>

</body>
</html>