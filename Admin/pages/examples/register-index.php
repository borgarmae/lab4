<?php
// Start the session
session_start();

// Include the database connection file
include "db_conn.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email, $v_code)
{
    require("PHPMailer/PHPMailer.php");
    require("PHPMailer/SMTP.php");
    require("PHPMailer/Exception.php");

    $mail = new PHPMailer(true);
    try {
        //Server settings

        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'welcome311329@gmail.com';                     //SMTP username
        $mail->Password   = 'agur eehw yygh vgyg';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('welcome311329@gmail.com', 'Verification');
        $mail->addAddress($email);     //Add a recipient



        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Verify Email';
        $mail->Body    = "Thank you for your registration! 
            Please click the verify link to verify your account.
            <a href = 'http://localhost/lab4/Admin/pages/examples/verify.php?email=$email&v_code=$v_code'>Verify</a>";


        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
// Check if all the required fields are set
if (
    isset($_POST['first_name']) && isset($_POST['middle_name']) && isset($_POST['last_name']) && isset($_POST['uname'])
    && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['cpassword'])
) {

    // Define a function to sanitize the input data
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Sanitize the input data
    $first_name = validate($_POST['first_name']);
    $middle_name = validate($_POST['middle_name']);
    $last_name = validate($_POST['last_name']);
    $uname = validate($_POST['uname']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $cpassword = validate($_POST['cpassword']);

    // Combine the input data into a string for later use
    $user_data = 'uname=' . $uname . '&first_name=' . $first_name . '&middle_name=' . $middle_name . '&last_name=' .
        $last_name . '&email=' . $email;

    // Check if any of the required fields are empty
    if (empty($first_name)) {
        header("Location: register-v2.php?error=First name is required&$user_data");
        exit();
    } else if (empty($last_name)) {
        header("Location: register-v2.php?error=Last name is required&$user_data");
        exit();
    } else if (empty($uname)) {
        header("Location: register-v2.php?error=User name is required&$user_data");
        exit();
    } else if (empty($email)) {
        header("Location: register-v2.php?error=Email is required&$user_data");
        exit();
    } else if (empty($password)) {
        header("Location: register-v2.php?error=Password is required&$user_data");
        exit();
    } else if (empty($cpassword)) {
        header("Location: register-v2.php?error=Re-enter your password&$user_data");
        exit();
    } else if ($password !== $cpassword) {
        header("Location: register-v2.php?error=The password does not match&$user_data");
        exit();
    } else {
        // Hash the password
        $password = password_hash($password, PASSWORD_DEFAULT);
        $v_code = bin2hex(random_bytes(32));


        // Check if the user name already exists in the database
        $sql = "SELECT * FROM user WHERE user_name='$uname'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: register-v2.php?error=The user name is already taken&$user_data");
        } else {
            // Insert the user data into the database
            $sql2 = "INSERT INTO user (user_name, email, password, first_name, middle_name, last_name, verification_code, is_verified, status) 
            VALUES('$uname', '$email', '$password', '$first_name', '$middle_name', '$last_name', '$v_code', '0', 'offline')";
            $result2 = mysqli_query($conn, $sql2);

            // Get the user id of the inserted user
            $user_id = mysqli_insert_id($conn);

            // Insert data into user_profile with the user id
            $sql3 = "INSERT INTO user_profile (user_id) VALUES('$user_id')";
            $result3 = mysqli_query($conn, $sql3);

            if ($result2) {
                // Send a verification email to the user
                if (sendMail($email, $v_code)) {
                    header("Location: register-v2.php?success=Account has been created. Please check your email for verification.");
                    exit();
                }
            } else {
                header("Location: register-v2.php?error=Unknown error occured. Try again.");
                exit();
            }
        }
    }
} else {
    header("Location: register-v2.php");
    exit();
}
