<?php  
      $username = "root";
      $password = "";
      $host = "localhost";

      $cn = mysqli_connect($host,$username,$password)
          or die("Unable to connect");
        echo "";
      $selected = mysqli_select_db($cn,"arifpharmacy")
        or die("Unable to connect"); 
if(isset($_POST['save']))  
{  
$name=$_POST['customer_name'];  
$address=$_POST['customer_address'];
$phone=$_POST['customer_phone_no'];
  
mysqli_query($cn,"insert into tb_customer(customer_name,customer_address,customer_phone_no) VALUES ('$name','$address','$phone')");  
$id=mysqli_insert_id($cn);  
for($i = 0; $i<count($_POST['drug_name']); $i++)  
{  
mysqli_query($cn,"INSERT INTO tb_drug  
SET   
drug_id = '{$id}',  
drug_name = '{$_POST['drug_name'][$i]}',  
drug_category = '{$_POST['drug_category'][$i]}',   
drug_qty = '{$_POST['drug_qty'][$i]}',  
drug_cost = '{$_POST['drug_cost'][$i]}'
discount = '{$_POST['discount'][$i]}'
amount = '{$_POST['amount'][$i]}'");   
}  
}   
?>  
<!DOCTYPE html>
<html>
<head>
<title>Pharmacy Management System</title>

<script type="text/javascript">
function printlayer(layer)
{
	var generator=window.open(",'name,");
	var layetext= document.getElementById(layer);
	generator.document.write(layetext.innerHTML.replace("Print Me"));
	
	generator.document.close();
	generator.print();
	generator.close();
}
</script>
</head>
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="vendor/jquery/jquery-migrate-1.4.1.min.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="js/jquery-1.3.2.min.js"></script>
	<link href="css/business-casual.css" rel="stylesheet">
	<body>
	
<div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Pharmacy Management System</div>	
<nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item  px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home   
              </a>
            </li>
            <li class="nav-item px-lg-4 active">
              <ul class="navigation">
					<a class="main" href="insert.php">Insert</a>
						<li class="n1"><a href="manager_insert.php">Manager</a></li>
						<li class="n2"><a href="Customer_insert.php">Customer</a></li>
						<li class="n3"><a href="company_insert.php">Company</a></li>
						<li class="n4"><a href="drug_insert.php">Drug</a></li>
						<li class="n5"><a href="payment_insert.php">Payment</a></li>
						<li class="n6"><a href="stock_insert.php">Stock</a></li>
				</ul>
            </li>
                        <li class="nav-item px-lg-4">
              <ul class="navigation">
					<a class="main" href="#">View</a>
						<li class="n1"><a href="manager_view.php">Manager</a></li>
						<li class="n2"><a href="Customer_view.php">Customer</a></li>
						<li class="n3"><a href="company_view.php">Company</a></li>
						<li class="n4"><a href="drug_view.php">Drug</a></li>
						<li class="n5"><a href="payment_view.php">Payment</a></li>
						<li class="n6"><a href="stock_view.php">Stock</a></li>
				</ul>
            </li>
            <li class="nav-item px-lg-4">
              <ul class="navigation">
					<a class="main" href="#">Search</a>
						<li class="n1"><a href="manager_search.php">Manager</a></li>
						<li class="n2"><a href="Customer_search.php">Customer</a></li>
						<li class="n3"><a href="company_search.php">Company</a></li>
						<li class="n4"><a href="drug_search.php">Drug</a></li>
						<li class="n5"><a href="payment_search.php">Payment</a></li>
						<li class="n6"><a href="stock_search.php">Stock</a></li>
				</ul>
            </li>
			<li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="invoice.php">Report</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
<div class="container" id="div-id-name" style="background-color: skyblue;margin-top: 30px;margin-bottom: 30px;">
<div>	
<div>
		<br/><br/><br/>
		<div class="box-body">
		<div class="form-group" >
			<center>Invoice</center>
			</div>
			<hr/>
			<div class="form-group" >
			<h4 class="text-weight:bold;colour:red;">Recepant Name</h4>
		
			<br>
			Adnan Habib
			</div>
		<div class="form-group">
			Uttara,Dhaka-1230
				
		<div class="form-group">
			Phone: 01773611681
				
		</div>		
		</div>		
		</div>
		</div>
<div style="float:right;">
		
		<div class="box-body" >
		<div class="form-group">
			<h4>Company Name</h4>
			</div>
			<hr>
			<div class="form-group">
			Arif Pharmacy
			</div>
		<div class="form-group" >
			Sector-10,uttara Model Town</br>
			Dhaka-1230
				
		<div class="form-group" >
			Phone: 01773611681
				
		</div>		
		</div>		
		</div>
		</div>	
</div>		
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
<center>
<table class="table table-bordered table-hover " border="1">
			<thead>
				<th>Drug Id</th>
				<th>Drug Name</th>
				<th>Drug Category</th>
				<th>Drug Qty</th>
				<th>Price</th>
				<th>Discount</th>
				<th>Amount</th>
			</thead>
			
			<tbody class="detail">
				<tr>
					<td>11</td>
					<td>Napa Extra</td>
					<td>Tablet</td>
					<td>100</td>
					<td>2</td>
					<td>10</td>
					<td>190</td>
				</tr>
				<tr>
					<td>22</td>
					<td>Sinamin</td>
					<td>Tablet</td>
					<td>20</td>
					<td>2</td>
					<td>5</td>
					<td>35</td>
				</tr>
			</tbody>
			<tfoot>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>Total=225</td>
			</tfoot>

			
</table>
</center>
<br/><br/>
<div style="float:right;">
Signature
<hr/>
Arif Hasan
</div>
<br/>
<br/><br/><br/><br/>
<center><a href="#" id="print" onclick="javascript:printlayer('div-id-name')">Print</a></center>

</div>
<footer class="bg-faded text-center py-5">
      <div class="container">
        <p class="m-0">Created by &copy; Ariful Islam | 16203087</p>
      </div>
    </footer>
</tbody>

</html>
<style>
.form-control{
	width:100%
}
</style>

