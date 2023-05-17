<?php
require_once 'connect.php';
global $conn;
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $residence = $_POST['residence'];
    $Date_of_Birth = $_POST['Dob'];
    $phoneNumber = $_POST['phoneNumber'];
    $speciality = $_POST['speciality'];
    $password = md5($_POST['password']);
    $sql = "INSERT INTO student_registration VALUES ('','$firstname','$lastname','$gender','$email','$residence','$Date_of_Birth ','$phoneNumber','$speciality','$password')";
    $result=mysqli_query($conn,$sql);

    if($result){
        echo "record successful entered";
    }else{
        echo "error:".$sql."<br>".mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>STUDENT MANAGEMENT SYSTEM</title>
</head>
<body>
<h2>WELCOME TO REGISTRATION PAGE</h2><b></b>
<form id="registration" class="form" action="" method="post">
    firstname
    <input type="text" name="firstname" placeholder="Enter your firstname" required><br><br>
    lastname
    <input type="text" name="lastname" placeholder="Enter your Lastname" required><br><br>
    <input type="radio"  name="gender"  value="male"  checked>Male<br>
    <input type="radio" name="gender" value="Female" checked>Female<br><br>
    email
    <input type="email" name="email" placeholder="Enter your Email"  required><br><br>
    residence
    <input type="text" name="residence" placeholder="Enter your place of Residence" required ><br><br>
    Date_of_Birth
    <input type="data" name="Dob" placeholder="date/month/year" required><br><br>
    phoneNumber
    <input type="PhoneNumber" name="phoneNumber" placeholder="Enter your PhoneNumber" required><br><br>
    speciality
    <input type="text" name="speciality" placeholder="Enter your speciality"><br><br>
    password
    <input type="password" name="password" placeholder="Enter your password"><br><br>
    <input type="submit" name="submit">
</form>
</body>
</html>