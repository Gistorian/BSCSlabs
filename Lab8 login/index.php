<?php
session_start();
$defaultUsername = "admin123";
$defaultPassword = "password123";

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username === $defaultUsername && $password === $defaultPassword) {
        $_SESSION["username"] = $username;

        header("Location: dashboard.php");
            exit();
    } else {
        $message = "Invalid credentials";
        }
        
        
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Login System</h3>
    <form method="POST">
        <label for="username">
            Username:
            <input type="text" name="username" placeholder="Username"><br>
        </label>
            
        <label for="password">
            Enter Password:
            <input type="password" name="password" placeholder="Password"><br>
        </label>
        <button type="submit">Submit</button>
    </form>

    <p style="color: red;">
        <?php echo $message; ?>
    </p>
</body>
</html>