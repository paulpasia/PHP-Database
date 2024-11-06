<?php
session_start();

// Check if session exists
if (isset($_SESSION["username"]) && isset($_SESSION["userID"])) {
    echo "Welcome back, " . htmlspecialchars($_SESSION["username"]) . "!<br>";
    echo "Your User ID is: " . htmlspecialchars($_SESSION["userID"]) . "!<br>";
} else {
    echo "Please log in to continue.";
}

// Check if cookies exist
if (isset($_COOKIE["username"])) {
    echo "<br>Your saved username: " . htmlspecialchars($_COOKIE["username"]);
}
?>