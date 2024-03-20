<?php 
    session_start();
    // Including the database connection file
    require("db_conn.php");

    // Checking if the email and verification code are set in the GET request
    if(isset($_GET['email']) && isset($_GET['v_code'])){
        // Query to check if the email and verification code exist in the database
        $query = "SELECT * FROM user WHERE email = '$_GET[email]' AND verification_code = '$_GET[v_code]'";
        $result = mysqli_query($conn, $query);
        if($result){
            // If there is a result then the email and verification code exist in the database
            if(mysqli_num_rows($result) == 1){
                $result_fetch = mysqli_fetch_assoc($result);
                if($result_fetch['is_verified'] == 0){
                    $update = "UPDATE user SET is_verified = '1' WHERE email = '$result_fetch[email]'";
                    if(mysqli_query( $conn, $update)) {
                        header("Location: login-v2.php?success=Email verified successfully");
                        exit();
                    }else{
                        header("Location: login-v2.php?error=Email already verified");
                        exit();
                    }
                }else{
                    header("Location: login-v2.php?success=Email already verified");
                    exit();
                }
                
            }

        }else{
            header("Location: login-v2.php?error=Unknown error occured. Try again.");
            exit();
        }
    }
?>