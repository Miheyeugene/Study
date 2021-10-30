<?php 

$name = "somename";
$value = 100;
$expiration = time() + (60*60*24*365);

setcookie($name,$value,$expiration);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 

if(isset($_COOKIE["somename"])) {

$someone = $_COOKIE ["somename"];

echo $someone;

} else {

$someone = "";

}

?>

</body>
</html>