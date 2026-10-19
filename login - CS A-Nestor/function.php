<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    $num1 = (int) $_POST['num1'];
    $num2 = (int) $_POST['num2'];

    switch(($_POST["op"])){
    case 'sum':
        echo  (int) $sum = $num1 + $num2;
        break;
    case 'sub':
        echo (int) $sum = $num1- $num2;
        break;
    case 'mult':
        echo (int) $sum = $num1 * $num2;
        break;
    case 'div':
        echo (int) $sum = $num1 / $num2;
        break;
    case 'all':
        echo "Sum: ";
        echo (int) $sum = $num1 + $num2;
        echo "\t Sub: ";
        echo (int) $sum = $num1 - $num2;
        echo "\t Mult: ";
        echo (int) $sum = $num1 * $num2;
        echo "\t Div: ";
        echo  (int) $sum = $num1 / $num2;
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labwork 10-Nestor</title>
</head>
<body>
    <form method="POST">
        <input type ="text" name="num1">
        <br><br>
        <input type="text" name="num2">
        <br><br>
        <select name="op" id="">
            <option value="sum">add</option>
            <option value="sub">subtract</option>
            <option value="mult">multiply</option>
            <option value="div">divide</option>
            <option value="all">All</option>
        </select>
        <button type ="submit">calculate</button>
    </form>
</body>
</html>