<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arkademy";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT products.id,products.name,categories.name FROM products JOIN categories ON (products.category_id=categories.id)";
$result = $conn->query($sql);

