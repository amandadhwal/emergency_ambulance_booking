<?php
session_start();

include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $adminuser=$_POST['username'];
    $password=md5($_POST['password']);

    $query=mysqli_query($con,"select ID from tbladmin where  UserName='$adminuser' && Password='$password' ");

    $ret=mysqli_fetch_array($query);
    
    if($ret>0){
      $_SESSION['eahpaid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
    echo "<script>alert('Invalid Details.');</script>";
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="admin_signup.css">
</head>
<body>
    <div class="signup-container">
        <div class="signup-form">
            <h2>Login</h2>
            <form action="admin_signup.php" method="POST" name="login">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn-submit"  name="login">Sign In</button>
            </form>
            <p><a href="../index.php">Home</a></p>
        </div>
    </div>

</body>
</html>
