<?php

// Start the session
session_start();  

// Include the database connection file
include "db_conn.php";

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM user WHERE user_id = $user_id";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);


?>