<?php
session_start();
include "db_conn.php";

$user_name= $_SESSION['user_name']; 
$query = "UPDATE user SET status = 'offline' WHERE user_name = '$user_name'";
mysqli_query($conn, $query);
mysqli_close($conn);

session_unset();
session_destroy();

header("Location: login-index.php");
?>