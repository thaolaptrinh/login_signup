<?php
extract($_POST);
include '../libs/database.php';


if (isset($_POST['save'])) {

    $user_name = $_POST['username'];
    $fullname = $_POST['fullname'];
    $passwd = $_POST['password'];
    $repasswd = $_POST['repassword'];

    $query = "Insert Into signup Values ('$fullname','$user_name','$passwd','$repasswd')";
    $sql = mysqli_query($conn, $query);
}
