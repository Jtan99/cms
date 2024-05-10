<?php
// Include Firebase setup file
require_once "firebase_setup.php";

// Check if the registration form was submitted
if(isset($_POST["register_btn"])) {
    // Retrieve user input from the form
    $fullname = $_POST["full_name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Create a new user account in Firebase Authentication
    try {
        $userRecord = $auth->createUser([
            'email' => $email,
            'phoneNumber' => $phone,
            'password' => $password,
            'displayName' => $fullname,
            'emailVerified' => false // You can set this to true if email verification is required
        ]);

        // Registration successful
        echo "User registered successfully. UID: " . $userRecord->uid;
        // You can redirect the user to a success page or display a success message
    } catch (Exception $e) {
        // Registration failed
        echo "Error creating user: " . $e->getMessage();
        // You can redirect the user back to the registration form with an error message
    }
}
?>
