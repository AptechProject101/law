<?php
include('../Admin/connection.php');

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $sql=mysqli_query($con,"select * from user where user_email='$email' and user_password='$pass'");
    $row=mysqli_num_rows($sql);
    $data=mysqli_fetch_assoc($sql);
    $name = $data['user_name'];
    $_SESSION['name'] = $name;
    if($row > 0){
        echo "<script>alert('login Successful'); window.location.href='index.php'</script>";
    }
    else{
        echo "<script>alert('Login Failed'); window.location.href='log.php'</script>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>
    <form method="POST">
        <div class="form">
            <div class="title">Welcome</div>
            <div class="subtitle">Sign In if already have an account</div>
            <div class="input-container ic2">
                <input id="lastname" name="email" class="input" type="email" placeholder=" " />
                <div class="cut"></div>
                <label for="lastname" class="placeholder">Email</label>
            </div>
            <div class="input-container ic2">
                <input id="email" name="pass" class="input" type="password" placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="email" class="placeholder">Password</>
            </div>
            <button type="submit" class="submit" name="submit">Sign Up</button>
            <a href="register.php" style="text-decoration:none; color:white;"><div class="subtitle">Sign Up</div></a>
        </div>
    </form>
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
</body>
</html>