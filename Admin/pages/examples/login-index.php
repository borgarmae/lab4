<?php
// Starting the session
session_start();

// Including the database connection file
include "db_conn.php";

// Checking if both uname and password are set in the POST request
if (isset($_POST['email']) && isset($_POST['password'])) {

    // Function to sanitize the data received from the form
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Sanitizing email and password
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    $user_data = 'email=' . $email;

    // Checking if email is empty
    if (empty($email)) {
        header("Location: login-v2.php?error=Email is required");
        exit();
        // Checking if pass is empty
    } else if (empty($password)) {
        header("Location: login-v2.php?error=Password is required&$user_data");
        exit();
    } else {

        // Hashing the password
        $password = validate($_POST['password']);
        // Prepare the SQL statement
        $stmt = $conn->prepare("SELECT * FROM user WHERE email=? AND is_verified='1'");
        // Bind parameters
        $stmt->bind_param("s", $email); // 's' specifies the variable type => 'string'

        // Execute the statement
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        // If there is a result then the user exists
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            // Checking if the password is correct
            if (password_verify($password, $row['password'])) {
                echo "Logged in!";
                // Storing the user data in the session
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['middle_name'] = $row['middle_name'];
                $_SESSION['last_name'] = $row['last_name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['user_id'] = $row['user_id'];

                $query = "UPDATE user SET status = 'online' WHERE email = '$email'";
                mysqli_query($conn, $query);

                $user_id = $row['user_id'];
                $stmt = $conn->prepare("SELECT * FROM user_profile WHERE user_id=?");
                $stmt->bind_param("i", $user_id);
                $stmt->execute();
                $result = $stmt->get_result();

                if (mysqli_num_rows($result) === 1) {
                    $row_profile = mysqli_fetch_assoc($result);

                    $_SESSION['phone_number'] = $row_profile['phone_number'];
                    $_SESSION['birth_month'] = $row_profile['birth_month'];
                    $_SESSION['birth_day'] = $row_profile['birth_day'];
                    $_SESSION['birth_year'] = $row_profile['birth_year'];
                    $_SESSION['gender'] = $row_profile['gender'];
                    $_SESSION['address'] = $row_profile['address'];
                    $_SESSION['barangay'] = $row_profile['barangay'];
                    $_SESSION['city'] = $row_profile['city'];
                    $_SESSION['province'] = $row_profile['province'];
                    $_SESSION['region'] = $row_profile['region'];
                    $_SESSION['zip_code'] = $row_profile['zip_code'];

                    
                }

                header("Location:profile.php");
                exit();
            } else {
                header("Location: login-v2.php?error=Incorrect email or password&$user_data");
                exit();
            }
        } else {
            header("Location: login-v2.php?error=Your account isn't verified yet&$user_data");
            exit();
        }
    }
} else {
    header("Location: login-v2.php");
    exit();
}
