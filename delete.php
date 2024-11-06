<?php
session_start();
require_once('connect.php'); // Include the database connection

// Check if user is logged in
if (!isset($_SESSION["username"])) {
    echo "You are not logged in.";
    exit();
}

// Check if the ID is provided
if (isset($_POST['ID'])) {
    $id = (int)$_POST['ID']; // Cast the ID to an integer to prevent SQL injection

    // Prepare the delete query
    $query = "DELETE FROM admin WHERE ID = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $id); // Bind the ID parameter to the query

    // Execute the query and check if it was successful
    if ($stmt->execute()) {
        // Redirect back to the login records page after successful deletion
        header("Location: logrec.php");
        exit();
    } else {
        echo "Error deleting record: " . $stmt->error;
    }
} else {
    echo "No ID provided for deletion.";
}
?>
