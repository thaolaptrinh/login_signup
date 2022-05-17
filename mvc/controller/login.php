<?php

include '../libs/database.php';

// if (isset($_POST['login'])) {

//     $user_name = $_POST['username'];
//     $passwd = $_POST['password'];
// }


$user_name = $_POST['username'];
$passwd = $_POST['password'];




$query = "SELECT * FROM signup WHERE username  = '$user_name' AND password = '$passwd'";

$sql = mysqli_query($conn, $query);




if ($sql->num_rows > 0) {
    require_once('../dashboard/dashboard.php');
} else {
    die('Login error!');
}
