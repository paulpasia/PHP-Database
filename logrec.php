<?php
session_start();
require_once('connect.php'); // Include the database connection

// Check if user is logged in
if (!isset($_SESSION["username"])) {
    echo "You are not logged in.";
    exit();
}

// Fetch all login records
$query = "SELECT ID, Email, Username, Password FROM admin"; // Fixed the syntax here
$result = $con->query($query);

// Check if there are any records
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Records</title>
    <style>
        /* Reset some default styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Navbar styling */
        nav {
            background-color: #333;
            color: white;
            padding: 10px 20px;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        nav ul li {
            padding: 10px 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* Page styling */
        body {
            background-color: #f4f4f9;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        h2 {
            margin-top: 20px;
            text-align: center;
        }

        table {
            width: 80%;
            margin: 20px 0;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #333;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Delete button styling */
        .delete-btn {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #c0392b;
        }

        /* Footer styling */
        footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #333;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="logrec.php">Login Records</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="index.php">Logout</a></li>
    </ul>
</nav>

<!-- Page Content -->
<div>
    <?php
    // Check if there are any records
    if ($result->num_rows > 0) {
        echo "<h2>Login Records</h2>";
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . htmlspecialchars($row['ID']) . "</td>
                    <td>" . htmlspecialchars($row['Email']) . "</td>
                    <td>" . htmlspecialchars($row['Username']) . "</td>
                    <td>" . htmlspecialchars($row['Password']) . "</td>
                     <td><form method='POST' action='delete.php'>
                            <input type='hidden' name='ID' value='" . htmlspecialchars($row['ID']) . "'>
                            <button type='submit' class='delete-btn' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</button>
                        </form>
                    </td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No login records found.";
    }
    ?>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Group 3. All rights reserved.</p>
</footer>

</body>
</html>
