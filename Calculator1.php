<?php 

    if(isset($_POST['submit'])) {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $action = $_POST['action'];
        $sum = "+";
        $minus = "-";
        $multiply = "*";
        $divide = "/";
        if($action == $sum) {
            echo $number1 + $number2 . "<br>";
        }
        if($action == $minus) {
            echo $number1 - $number2 . "<br>";
        }
        if($action == $multiply) {
            echo $number1 * $number2 . "<br>";
        }
        if($action == $divide) {
            echo $number1 / $number2 . "<br>";
        }
        
    

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculator1.php" method="post">
        <input type="number" name="number1" placeholder="введите любое число">
        <br>
        <input type="test" name="action">
        <br>
        <input type="number" name="number2" placeholder="введите любое число">
        <br>
        <input type="submit" name="submit" value="=">
    </form>
</body>
</html>