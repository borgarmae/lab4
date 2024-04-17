<?php
// Start the session
session_start();


// Include the database connection file
include "db_conn.php";

if (
    isset($_POST['phone_number']) &&
    isset($_POST['gender']) &&
    isset($_POST['birth_year']) &&
    isset($_POST['birth_month']) &&
    isset($_POST['birth_day']) &&
    isset($_POST['address']) &&
    isset($_POST['barangay']) &&
    isset($_POST['city']) &&
    isset($_POST['province']) &&
    isset($_POST['region']) &&
    isset($_POST['zip_code'])

) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Sanitize the input data
    $phone_number = validate($_POST['phone_number']);
    $gender = validate($_POST['gender']);
    $birth_year = validate($_POST['birth_year']);
    $birth_month = validate($_POST['birth_month']);
    $birth_day = validate($_POST['birth_day']);
    $address = validate($_POST['address']);
    $barangay = validate($_POST['barangay']);
    $city = validate($_POST['city']);
    $province = validate($_POST['province']);
    $region = validate($_POST['region']);
    $zip_code = validate($_POST['zip_code']);

    // Check if phone number already exists in the database

    $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : $_SESSION['user_id'];
    // Prepare an SQL query to insert the data

    $query = "SELECT user_id FROM user_profile WHERE user_id = ?";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 0) {
            header("Location: profile.php?error=Error updating details");
            exit();
        } else {
            if ($conn) {
                // Prepare and bind the parameters
                $stmt = $conn->prepare('UPDATE user_profile SET phone_number = ?, gender = ?, birth_year = ?, birth_month = ?, birth_day = ?, address = ?, barangay = ?, city = ?, province = ?, region = ?, zip_code = ? WHERE user_id = ?');

                $stmt->bind_param('ssisisssssii', $phone_number, $gender, $birth_year, $birth_month, $birth_day, $address, $barangay, $city, $province, $region, $zip_code, $user_id);


                // Execute the query
                if ($stmt->execute()) {
                    $stmt = $conn->prepare("SELECT * FROM user_profile WHERE user_id=?");
                    $stmt->bind_param("i", $user_id);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if (mysqli_num_rows($result) === 1) {
                        $row_profile = mysqli_fetch_assoc($result);

                        $_SESSION['profile_picture'] = $row_profile['profile_picture'];
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

                        $_SESSION['success_message'] = 'Details updated successfully!';
                        header("Location: profile.php");
                        exit();
                    }
                } else {
                    $_SESSION['error_message'] = 'Error updating details :[';
                    header("Location: profile.php");
                    exit();
                }

                // Close the statement
                $stmt->close();


                // Close the connection
                $conn->close();
            }
        }
    }
    // Check if the connection was successful

} else {
    header("Location: profile.php");
    exit();
}
