<!DOCTYPE html>
<html lang="en">

  <head>
  <?php
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysqli_connect($host,$username,$password)
          or die("Unable to connect");
        echo "";
      $selected = mysqli_select_db($connector,"arifpharmacy")
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysqli_query($connector,"SELECT * FROM tb_drug ");
      ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pharmacy Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">
<style>
.p {
    background: #f5f3f3;
    z-index: 9999;
    height: 460px;
    width: 400px;
    position: absolute;
    margin-top: -114px;
    border: 10px solid grey;
    padding: 10px;
    border-radius: 30px;
    margin-left: 315px;
}
</style>
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

  <body>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Pharmacy Management System</div>
    <!-- <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Ariful Islam</div> -->

    <!-- Navigation -->
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

    <div class="container" id="div-id-name">
		<div class="bg-faded p-4 my-4">
			<!-- <div class="col-sm-12 col-sm-offset-3 col-md-10 col-md-offset-2 main Myback"> -->
        <div class="panel panel-primary Myback">
            <div class="panel-heading panel-head"><h2><center>Drug Table</center></h2></div>
			</br>
			</br>
            <div class="panel-body">
                
                <div class="top-buffer"></div>
                <table class="table table-bordered table-striped" border="1">
                    <thead>
                        <tr>
                            <th>Drug ID</th>
                            <th>Drug Name</th>
                            <th>Drug Category</th>
                            <th>Drug Company</th>
                            <th>Drug Desp:</th>
							<th>Drug Cost</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
          while( $row = mysqli_fetch_array( $result ) ){
            echo
            "<tr>
              <td id='a".$row['drug_id']."'>{$row['drug_id']}</td>
              <td id='b".$row['drug_id']."'>{$row['drug_name']}</td>
              <td id='c".$row['drug_id']."'>{$row['drug_category']}</td>
              <td id='d".$row['drug_id']."'>{$row['drug_company']}</td>
			  <td id='e".$row['drug_id']."'>{$row['drug_desp']}</td> 
			  <td id='f".$row['drug_id']."'>{$row['drug_cost']}</td> 
            </tr>\n";	
		  }
        ?>
                        
                    </tbody>
                </table>
				<br/>
				<br/>
				<br/>
				<center><h2>Developed by @Ariful Islam</h2></center>
				<br/>
				<center><a href="#" id="print" onclick="javascript:printlayer('div-id-name')">Print</a></center>
            </div>
        </div>
        </div>
      </div>

    </div>
    <!-- /.container -->

    <footer class="bg-faded text-center py-5">
      <div class="container">
        <p class="m-0">Created by &copy; Ariful Islam | 16203087</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>

</html>
