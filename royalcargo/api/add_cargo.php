<?php
include("../config/db.php");

$order_id = $_POST['order_id'] ?? '';
$customer = $_POST['customer'] ?? '';
$date = $_POST['date'] ?? '';
$price = $_POST['price'] ?? '';
$status = $_POST['status'] ?? '';

echo "DATA RECEIVED:<br>";
echo $order_id . "<br>";
echo $customer . "<br>";
echo $date . "<br>";
echo $price . "<br>";
echo $status . "<br>";

$sql = "INSERT INTO cargo 
(order_id, customer, date, price, status)
VALUES 
('$order_id', '$customer', '$date', '$price', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "SQL ERROR: " . $conn->error;
}
?>