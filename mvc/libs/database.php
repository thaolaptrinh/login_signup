<?php
$url = 'localhost';
$username = 'root';
$password = '';
$conn = mysqli_connect($url, $username, $password, "users", 3307);
if (!$conn) {
    die('Could not Connect My Sql');
}
