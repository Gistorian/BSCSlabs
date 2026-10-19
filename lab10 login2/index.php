<?php
session_start();

include 'db.php';

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    }

    if(empty($username)){
        $errors[]= "Username is required";
    } else if (strlen($username) < 5) {
        $errors[] = "Username must be at least 5 characters long";
    }

    $passwordPattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
    
    if($password !== $confirmPassword) {
        $errors[] = "Passwords do not match";
        }
    if(!preg_match($passwordPattern, $password)) {
        $errors[] = "Password must include at least one uppercase letter, one lowercase letter, one number, and one special character.";
    } 
    
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if(empty($errors)){
        $sql="INSERT INTO `user` (`username`, `password`) VALUES ('$username', '$password')";
        $result = $conn->query($sql);
        
        if($result){
            echo "registered successfully";
            header("Location: index.php");
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
<form method="POST">
        <label for="username">
            Username:
            <input type="text" name="username" placeholder="Username"><br>
        </label>
            
        <label for="password">
            Enter Password:
            <input type="password" name="password" placeholder="Password"><br>
        </label>

        <label for="confirmPassword">
            Confirm Password:
            <input type="password" name="confirmPassword" placeholder="Confirm Password"><br>
        </label>

        <button type="submit">Submit</button>
    </form>
<p style="color: red;">
    <?php
    if(!empty($errors)) {
        foreach($errors as $error) {
            echo $error . "<br>";
        }
    }    
    ?>
</body>
</html>