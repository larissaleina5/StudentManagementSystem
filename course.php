<?php
require_once 'connect.php';
if (isset($_POST['submit'])) {

    $course_id = $_POST['course_id'];
    $course_name = $_POST['course_name'];
    $date_created=$_POST['date_created'];
}
$query = "SELECT FROM course_table WHERE $course_id = '$course_id' AND course_name = '$course_name'";