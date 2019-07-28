<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "arifpharmacy";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}


$paymentid = $_POST['payment_id'];
$paymentname = $_POST['payment_name'];

$sql = "INSERT INTO tb_payment( payment_id,payment_name) VALUES($paymentid, '$paymentname')";
// $dept, $subject, $contact, $email
if ($conn->query($sql) === TRUE) {
    echo "Your Information Saved successfully";
} else {
    if ($id == "" || $name == "" ) {
         echo "Please input your values! ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>