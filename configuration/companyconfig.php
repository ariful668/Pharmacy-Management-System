<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "arifpharmacy";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}


$companyid = $_POST['company_invoice_id'];
$companyname = $_POST['company_name'];
$companycontact = $_POST['company_phone_no'];
$companyaddress = $_POST['company_address'];

$sql = "INSERT INTO tb_company( company_invoice_id,company_name,company_phone_no,company_address) VALUES($companyid, '$companyname',$companycontact,'$companyaddress' )";
// $dept, $subject, $contact, $email
if ($conn->query($sql) === TRUE) {
    echo "Your Information Saved successfully";
} else {
    if ($companyid == "" || $companyname == "" ||  $companycontact == "" || $companyaddress == "") {
         echo "Please input your values! ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>