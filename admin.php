<?php
require_once 'connect.php';
if(isset($_POST['submit'])) {

    $admin_id = $_POST['admin_id'];
    $admin_name = $_POST['admin_name'];
    $admin_password = $_POST['admin_password'];
}
$query = "SELECT FROM admin_table WHERE $admin_id = '$admin_id' AND admin_name = '$admin_name'";