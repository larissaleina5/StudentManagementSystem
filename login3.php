<?php
require_once 'connect.php';
if(isset($_POST['logIn'])) {
    $firstname = $_POST['username'];
    $password= md5($_POST['password']);
    $query = "SELECT * FROM student_registration WHERE firstname = '$firstname' AND password = '$password'";
    $result=mysqli_query($conn,$query);
    $count=mysqli_fetch_array($result);
    if($count > 0){
        if($password == $password){
            header('location:view_courses.php');
        }else{
            echo 'incorrect password';
        }
    }else{
        echo 'user not found';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="log.css">
</head>
<body>
<form action="" method="POST">
    <div class="imgcontainer">
        <img src="icons8-female-user-48.png">
        <a href="student_registration.html"></a>
    </div>
    <div class="container">
        <label><b>firstname</b></label>
        <input type="text" placeholder="Enter Username" name="username" required><br><br>
        <label><b>password</b></label>
        <input type="password" placeholder="Enter password"name="password" required><br><br>
        <button type="submit" name="logIn">Log in</button><br><br>
        <label>
            <input type="checkbox" checked="checked" remember>Remember me</label>
    </div>
    <div class="container" style="background-color: #f1f1f1">
        <buttun type="button" class="cancel btn">Cancel</buttun>
        <span class="password">Forget
      <a href="#">Password?</a></span>
    </div>
</form>
</body>
</html>











