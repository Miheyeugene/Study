<?php 
if (isset($_POST['submit'])) {

    $forbidden = array('Dasha', 'Eugene');
    $minimum = 5;
    $maximum = 10;
    $name = $_POST['name'];
    $password = $_POST['password'];
    if (strlen($name) < $minimum) {
        echo "your name have to be longer than five!";
    }
    if (strlen($name) > $maximum) {
        echo "your name have to be shorter than ten!";
    }
    if (!in_array($name, $forbidden)){
        echo "Sorry! You can not allowed";
    } else {
        echo "Welcome!";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="33.php" method="post">
<input type="text" placeholder="Your name" name="name">
<input type="password" placeholder="your password" name="password">
<br>
<input type="submit" name="submit">


</form>

</body>
</html>