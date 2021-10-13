<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculator2.php" method="post">
        <input type="number" name="number1" placeholder="введите любое число">
        <br>
        <input type="test" name="action">
        <br>
        <input type="number" name="number2" placeholder="введите любое число">
        <br>
        <input type="submit" name="submit" value="=">
    </form>
    <?php 
    if(isset($_POST['submit'])) {
        $sum = '+';
        $minus = "-";
        $multiply = "*";
        $divide = "/";
        $x = [$sum,$minus,$multiply,$divide];
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $action = $_POST['action'];
        if (!in_array($action, $x)) {
            echo "ошибка" . "<br>";
        }
        if ($action == $sum) {
            echo bcadd($number2,$number1);
        }else {
            echo " "; 
        }
        if ($action == $minus) {
            echo bcsub($number2,$number1);
        }else {
            echo " "; 
        }
        if ($action == $multiply) {
            echo bcmul($number2,$number1);
        }else {
            echo " "; 
        }
        if ($action == $divide) {
            echo bcdiv($number2,$number1);
        }else {
            echo " "; 
        }
    

    }
?>
</body>
</html>