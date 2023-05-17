<?PHP
$servername="localhost";
$database="database";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password,$database);
if($conn->connect_error) {
    die("connection failed:".mysqli_connect_error());
    }
echo "connected successfully";
