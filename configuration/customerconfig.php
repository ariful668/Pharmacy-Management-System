<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "arifpharmacy";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}


$customerid = $_POST['customer_id'];
$customername = $_POST['customer_name'];
$customercontact = $_POST['customer_phone_no'];
$customeraddress = $_POST['customer_address'];

$sql = "INSERT INTO tb_customer( customer_id,customer_name,customer_phone_no,customer_address) VALUES($customerid, '$customername',$customercontact,'$customeraddress' )";
// $dept, $subject, $contact, $email
if ($conn->query($sql) === TRUE) {
    echo "Your Information Saved successfully";
} else {
    if ($id == "" || $name == "" ||  $contact == "" || $address == "") {
         echo "Please input your values! ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>