<?php 
$connection = mysqli_connect('localhost', 'root', '', 'challenge');
if(!$connection){
    die("connect ot database is failed");
}
    ?>
    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-sm-3">
        <form action="article.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" placeholder="Your name">
                </div>
                <div class="form-group">
                    <label for="mail">Mail</label>
                    <input name="mail" type="text" class="form-control" placeholder="Your mail">
                </div>
                <div class="form-group">
                    <label for="tel_number">Telephone Number</label>
                    <input name="tel_number" type="text" class="form-control" placeholder="+375555555555">
                </div>
                <div class="form-group">
                    <label for="article">Article</label>
                    <textarea rows="10" cols="45" name="article" class="form-control" placeholder="Your article"></textarea>
                </div>
                <br>
                <input class="btn btn-primary" type="submit" name="submit" value="SEND">
            </form>
            <br>
<?php 
   if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $telnumber = $_POST['tel_number'];
    $article = $_POST['article'];

    $query = "INSERT INTO articles(name, mail, tel_number, text)";
    $query .= "VALUES ('$name', '$mail', '$telnumber', '$article')";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query FAILED' . mysqli_error());
    } 
}
?>
<br>

        </div>
    </div>

    
	<div class="container">
		<div class="col-sm-3">
<?php 
		$query = "SELECT * FROM articles WHERE approved = 'approved' ORDER BY id DESC";

        $result = mysqli_query($connection, $query);
    
        if(!$result) {
            die('Query FAILED' . mysqli_error());
        }
    
        while($row = mysqli_fetch_assoc($result)) {
    
            echo $row['text']. "<br>". $row['name']. "<br>". "<br>";
    
        }
    
?>

		</div>
	</div>
    
</body>
</html>