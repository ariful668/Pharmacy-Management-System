<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "arifpharmacy";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}


$managerid = $_POST['manager_id'];
$managername = $_POST['manager_name'];
$managercontact = $_POST['manager_phone_no'];
$manageraddress = $_POST['manager_address'];

$sql = "INSERT INTO tb_manager( manager_id,manager_name,manager_phone_no,manager_address) VALUES($managerid, '$managername',$managercontact,'$manageraddress' )";
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