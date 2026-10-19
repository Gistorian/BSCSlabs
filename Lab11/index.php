<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab10</title>
</head>
<body>
    <center>
        <p style = "font-size:large">
<?php 
//echo str_replace(" ","",$blabla);
//explode ("/",$blabla);
//implode ("/",$blabla);
//var_dump($blabla");
//str_word_count($blabla);
//ucwords();
//str_ends_with($blabal,""); boolean
//str_shuffle($blabla);
//str_split($blabla,2);
//trim(); pwede left or right / end or beginning
echo $test = "     JANE_DOE@ComputerScience2026!!!     ";?>
<br><br>
<?php
echo trim( str_replace("@","_", str_replace("!!!","", str_replace("JANE_DOE", "jane.doe", str_replace("ComputerScience","cs",$test)))));

?>
</p>
    </center>
</body>
</html>