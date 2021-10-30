<?php 
    $connection = mysqli_connect('localhost', 'root', '', 'challenge');
    if(!$connection){
        die("connect ot database is failed");
    }

?>
 
 <?php
    if(isset($_POST['idapp'])){

        $approved = $_POST['approved'];
        $userid = mysqli_real_escape_string($connection, $_POST["idapp"]);
        $query = "UPDATE articles SET ";
        $query .= "approved = '$approved' ";
        $query .= "WHERE id = $userid ";
    
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("QUERY FAILED" . mysqli_error($connection));
        } else {
            header("Location: article_approve.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php
$query = "SELECT * FROM articles ORDER BY id DESC";
$result = mysqli_query($connection, $query);
if($result){
    echo "<table><tr><th>id</th><th>name</th><th>mail</th><th>text</th><th>approve</th><th></th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["mail"] . "</td>";
            echo "<td>" . $row["text"] . "</td>";
            echo "<td>" . $row["approved"] . "</td>";
            echo "<td><form action='article_approve.php' method='post'>
                        <select name='approved' class='form-control'>
                        <option>approved</option>
                        <option>declined</option>
                        </select>
                        <input type='hidden' name='idapp' value='" . $row["id"] . "' />
                        <input class='btn btn-primary' type='submit' value='Public'>
                   </form></td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
</div>
</body>
</html>