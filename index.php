<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Reset some default styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Styling the main container */
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: gray;
        }

        main {
            background-color: bisque;
            border-radius: 8px;
            padding: 30px;
            max-width: 400px;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 15px;
            font-weight: bold;
            font-size: 14px;
            color: #333;
        }

        input[type="email"],
        input[type="text"],
        input[type="password"] {
            margin-top: 8px;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }

        input[type="email"]:focus,
        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        button[type="submit"] {
            margin-top: 20px;
            padding: 10px;
            font-size: 16px;
            background-color: #007bff;
            border: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <main>
        <h2>Login</h2>
        <form action="handle.php" method="POST">
            <label for="Email">Email?</label>
            <input required id="Email" type="email" name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

            <label for="Username">Username?</label>
            <input required id="Username" type="text" name="Username" placeholder="Username..." pattern="[A-Za-z\s]+" title="Username should contain letters only.">

            <label for="Password">Password</label>
            <input required id="Password" type="password" name="Password" placeholder="Password">

            <button type="submit" name="submit">Submit</button>
        </form>
    </main>
</body>
</html>