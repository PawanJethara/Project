<?php
if(isset($_post['username']) || isset($_post['password']) || isset($_post['error']) || isset($_post['success']) ||isset($_post['submit']) ){
$uname= $_POST['username'];
$pass= $_POST['password'];
$submit= $_POST['submit'];
$error="";
$success="";

if(isset($_POST['submit'])){
    if($uname == "admin"){
        if($pass == "password"){
            $error = "";
            $success = "Welcome Admin";
        }
        else{
            $error = "Invalid Password";
            $success = "";
        }
    }
}
}
    ?>

<html>  
  <head>  
    <title>My Login Page</title>  
    <link rel="stylesheet" type="text/css" href="login.css">
</head>  
  <body>  
    <div class="container">  
        <h2>Login Page</h2><br><br> 
        <p class="error"><?php $error=""; echo $error=""; ?></p> <p class="success"><?php $success=""; echo $success=""; ?></p>  
        <form method="post">  
            <div class="form-group"> <label for="username">Username</label> <input type="text" name="username" value="" placeholder="Enter username "> </div>  
            <div class="form-group"> <label for="password">Password</label> <input type="password" name="password" value="" placeholder="Enter password"> </div> 
             <input type="submit" name="submit" value="login">
        </form>  
    </div>  
</body>  
</html>

