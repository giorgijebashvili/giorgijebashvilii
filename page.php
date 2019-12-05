<?php
echo $_GET["email"];
echo "<br>";
echo md5($_GET["pass"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
    
<p>My php page </p>

<form action="" method="get">
    <input type="text" name="email">
    <br>
    <input type="password" name="pass">
    <br>
    <input type="submit" name="log">
</form>


<?php
echo "hello wordl!!!";
$m= [12,3,45,6];
echo "<hr>";
echo $m[2];
$age = array("peter"=>35, "ben"=>37,"joe"=>43);
echo "<hr>";
echo $age["joe"];
?>

</body>
</html>