<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<title>Soal No 7</title> 
<meta name="description" content="Creating a table with Twitter Bootstrap. Learn how to use Twitter Bootstrap toolkit to create Tables with examples.">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet"> 
</head>
<body>
  
<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "arkademy";

$con = new mysqli($server, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT products.id,products.name,categories.name as categori FROM products JOIN categories ON (products.category_id=categories.id)";
$result = $con->query($sql);

?>
<h2>No 7</h2>
<table class="table table-striped">
        <thead>
          <tr>
            <th>id</th>
            <th>Categori Name</th>
            <th>Products</th>
          </tr>
        </thead>
        <?php
         while($row = $result->fetch_assoc()) {
        ?>
        <tbody>
          <tr>
            <td><?=$row["id"]?></td>
            <td><?=$row["categori"]?></td>
            <td><?=$row["name"]?></td>
          </tr>
          <?php
        }
        ?>
        </tbody>
      </table>
</body>
</html>
