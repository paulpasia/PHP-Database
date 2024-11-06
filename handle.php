<?php
session_start();
require_once('connect.php'); // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate user inputs
    $Email = filter_var(trim($_POST["Email"]), FILTER_SANITIZE_EMAIL);
    $Username = htmlspecialchars(trim($_POST["Username"]), ENT_QUOTES, 'UTF-8'); 
    $Password = htmlspecialchars(trim($_POST["Password"]), ENT_QUOTES, 'UTF-8'); 

    // Check if the fields are filled
    if (empty($Email) || empty($Username) || empty($Password)) {
        echo "All fields are required.";
        exit();
    }

    // Validate username (only letters and spaces allowed)
    if (!preg_match("/^[a-zA-Z\s]+$/", $Username)) {
        echo "<script>alert('Username should contain letters only.');</script>";
        exit();
    }

    // Hash the password before storing it
    $hashed_Password = password_hash($Password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $query = "INSERT INTO admin (Email, Username, Password) VALUES (?, ?, ?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param("sss", $Email, $Username, $hashed_Password);

    if ($stmt->execute()) {
        // Store user information in session
        $_SESSION["Email"] = $Email;
        $_SESSION["Username"] = $Username;
        $_SESSION["Password"] = $Password; // You can store the hashed password as well

        // Set cookies to remember the username for 30 days
        setcookie("Username", $Username, time() + (86400 * 30), "/"); 

        // Redirect to login record page
        header("Location: logrec.php");
        exit();
    } else {
        echo "Error inserting user: " . $stmt->error;
        exit();
    }
}
?>
