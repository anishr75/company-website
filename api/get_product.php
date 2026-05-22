<?php

include "db.php";

$slug = $_GET['slug'];

$sql = "SELECT * FROM products WHERE slug='$slug'";
$result = mysqli_query($conn,$sql);

$product = mysqli_fetch_assoc($result);

header('Content-Type: application/json');
echo json_encode($product);

?>