<?php
include("../config/db.php");

$order_id = $_POST['order_id'];
$customer_name = $_POST['customer_name'];
$packed = $_POST['packed'];
$invoiced = $_POST['invoiced'];
$status = $_POST['status'];
$order_total = $_POST['order_total'];
$created_at = $_POST['created_at'];

$sql = "INSERT INTO orders 
(order_id, customer_name, packed, invoiced, status, order_total, created_at)
VALUES 
('$order_id', '$customer_name', '$packed', '$invoiced', '$status', '$order_total', '$created_at')";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "error";
}
?>