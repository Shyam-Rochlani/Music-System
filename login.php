 <!--/*******************************session start*********************/-->
<?php

require_once("includes/db.php"); 
//echo "connected";
if(isset($_POST["login"])){
  echo "hello";
	$email = $_POST['email'];
	$password = $_POST['password'];
    $query = "SELECT * from user WHERE email ='$email'";
    $result = mysqli_query($connection, $query);
    if($row = mysqli_fetch_assoc($result)){
    $email = $row['email'];
    $password = $row['user_password'];
//    $user_designation = $row['user_designation'];
        //echo "email is ".$email;
        //echo $password;
       
    }
     $count = mysqli_num_rows($result);
    if($count == 1){
        if(isset($result)){
        session_start();
        $_SESSION['id'] = $row['user_id'];
       // echo $_SESSION['id'];
    if($_SESSION['id'] == 1){
        header("Location: home-admin.php");
    }else{
        header("Location: home-login.php");
        }
        
    }    
}else{
        header("Location: login.php");
    }
    
}
?>

<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>

<body>
    <section>
        <div class="content">
            <p class="login-text">Login</p>
            <form method="POST">
                <label>E-mail</label>
                <input type="text" class="form-control" name="email" id="name">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password"><br>
                <a href="home-login.php" type="submit" class="btn btn-primary" name="login">LOGIN</a><br>
                <p class="more">Don't have an account? <a href="">SignUp</a></p>
                <p class="less"><a href="">Forgot Password?</a></p>
            </form>
        </div>
        <div class="imageBox">
            <div class="box">
                <p class="wish">THE MUSIC PLAYER</p>
            </div>
        </div>

    </section>
 
    <script src="scripts/jquery-3.3.1.min.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.min.js">
</script>

</body>

</html>
