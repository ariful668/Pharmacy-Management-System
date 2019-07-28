<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "arifpharmacy";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}


$stocktid = $_POST['stock_id'];
$stockstatus = $_POST['stock_status'];

$sql = "INSERT INTO tb_stock( stock_id,stock_status) VALUES($stocktid, '$stockstatus')";
// $dept, $subject, $contact, $email
if ($conn->query($sql) === TRUE) {
    echo "Your Information Saved successfully";
} else {
    if ($id == "" || $name == ""  ) {
         echo "Please input your values! ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>