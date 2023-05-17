<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .navbar{
            background-color:black;
            height:60px;
        }
        .navbar ul{
            margin:0;
            padding:0;
            list-style: none;
            display:flex;
            align-items: center;
        }
        .navbar li{
            flex:1;
            text-align: center;
        }
        .navbar li>a{
           display:block;
            color:gold;
            text-decoration:none;
            padding:0 50px;
            line-height: 30px;
        }
        .dropdown{
            display:none;
            position:absolute;
            background-color:black;
            width:100%;
            top:80%;
        }
        .navbar li:hover.dropdown{
           display: block;
        }
        .dropdown li{
            text-align:center;
            border-bottom: 20px black;
        }
        .dropdown li:horizontal{
            text-align:center;
            border-top:  10px navajowhite;
        }
        h2spam{
            color: black;
        }
        img{
            border-image-width: 800px;
            border-bottom: 50px;
            border-image:60px;
            height:400px;
            width: 1300px;
        }
        body{
            background-color:navajowhite;
        }
    </style>
</head>
<body>
<h2>WELCOME TO STUDENT MANAGEMENT SYSTEM</h2>
<nav class="navbar">
    <ul>
        <li><a href="#">HOME</a></li>
            <li><a href="login3.php">login</a></li>
            <li><a href="template.php">Dashboard</a></li>
        <li><a href="StudentRegistration.html">StudentRegistration</a></li>
            <li><a href="view_courses.html">Student Attendance</a></li>
            <li><a href="Payment.html">Payment</a></li>
            </ul>
        <ul class="dropdown">
    </ul>
    </nav>w
<img src="5637.jpg">
<div class="footer">
    <center><h1 style="color: white;">Contact us to get further information about our institution lets clear the way for you
    <img src="images%20(2).jpg"></h1></center>
<p><b>We will be glad to receive you in our institution
    for further information contact us</b></p>
</div>
</body>
</html>