<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "arifpharmacy";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}


$drugid = $_POST['drug_id'];
$drugname = $_POST['drug_name'];
$drugcategory = $_POST['drug_category'];
$drugcompany = $_POST['drug_company'];
$drugdesp = $_POST['drug_desp'];
$drugcost = $_POST['drug_cost'];

$sql = "INSERT INTO tb_drug( drug_id,drug_name,drug_category,drug_company,drug_desp,drug_cost) VALUES($drugid, '$drugname','$drugcategory','$drugcompany','$drugdesp',$drugcost )";
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