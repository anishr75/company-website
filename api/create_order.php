<?php

include "db.php";

$user_id = $_POST['user_id'];
$total = $_POST['total'];

$sql = "INSERT INTO order_details (user_id,total)
VALUES ('$user_id','$total')";

if(mysqli_query($conn,$sql)){

    $order_id = mysqli_insert_id($conn);

    echo json_encode([
        "status" => "success",
        "order_id" => $order_id
    ]);

}else{

    echo json_encode([
        "status" => "error"
    ]);

}

?>