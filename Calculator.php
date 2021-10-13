<?php 

    if(isset($_POST['result'])) {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $action = $_POST['action'];
        $result = $_POST['result'];
     if (strlen($number1)($action)($number2)) {
        echo $result;
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
    <form action="calculator.php">
        <input type="number" name="number1" placeholder="введите любое число">
        <br>
        <input name="action" type="test">
        <br>
        <input type="number" name="number2" placeholder="введите любое число">
        <br>
        <input type="submit" name="result" value="=">
    </form>
</body>
</html>