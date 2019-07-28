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
      $result = mysqli_query($connector,"SELECT * FROM tb_stock");
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
    height: 282px;
    width: 400px;
    position: absolute;
    margin-top: -114px;
    border: 10px solid grey;
    padding: 10px;
    border-radius: 30px;
    margin-left: 315px;
}
</style>
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

    <div class="container">
		<div class="bg-faded p-4 my-4">
			<!-- <div class="col-sm-12 col-sm-offset-3 col-md-10 col-md-offset-2 main Myback"> -->
        <div class="panel panel-primary Myback">
            <div class="panel-heading panel-head"><h2><center>Stock Table</center></h2></div>
			</br>
			</br>
            <div class="panel-body">
                
                <div class="top-buffer"></div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Stock ID</th>
                            <th>Stock Status</th>
							<th>Action Perform</th>	
                        </tr>
                    </thead>
                    <tbody>
						<?php
          while( $row = mysqli_fetch_array( $result ) ){
            echo
            "<tr>
              <td id='a".$row['stock_id']."'>{$row['stock_id']}</td>
              <td id='b".$row['stock_id']."'>{$row['stock_status']}</td>
              <td>
				<form action='' method='GET'>
					<input type='submit' name=".$row['stock_id']." value='Edit'> | 
					<input type='submit' name='delete".$row['stock_id']."' value='Delete' onClick=\"return confirm('Are you sure you want to delete?')\"> | 
					<input type='submit' name='print".$row['stock_id']."' value='Print'>
				</form>
			</td>
            </tr>\n";
			// UPDATE CODE STARTS FROM HERE
				if(isset($_GET[$row['stock_id']])){
					echo"<form action='' method='POST'><div class='p' id='close'>";// CLASS P IS USED TO DECORATION AND ID CLOSE IS USED TO CLOSE THE POPUP PAGE
					echo"Update Information</br></br>";
					echo "Stock Id: <input type='text'  name='stock_id' value=".$row['stock_id'].">";
					echo "</br></br>";
					echo "Stock Status: <input type='text' name='stock_status' value=".$row['stock_status'].">";
					echo "</br></br>";
	
					echo"<input type='submit' name = 'submit' value='Update'>";
					echo"<input type='submit' name = 'cancle' value='Cancle'>";
					echo "</div></form>";

					if(isset($_POST['submit'])){
						$id = $_POST["stock_id"];
						$name = $_POST["stock_status"];

						$ssql = "UPDATE tb_stock SET stock_id='$id', stock_status='$name'
						WHERE stock_id=".$row['stock_id']."";
						
						if ($connector->query($ssql) === TRUE) {
						echo "<script type='text/javascript'>alert('Submitted successfully!')</script>";
						} else {
						echo "Upadate Unsucessful". $connector->error;
						}

					}
					if(isset($_POST['cancle'])){
						echo "<script>document.getElementById('close').style.display='none'</script>";
					}
				}
				// DELETE CODE STARTS FORM HERE
				if(isset($_GET['delete'.$row['stock_id']])){
					$delete = "DELETE FROM tb_stock WHERE stock_id=".$row['stock_id']."";
					if ($connector->query($delete) === TRUE) {
					echo "<script type='text/javascript'>alert('Deleted successfully!')</script>";
					echo "<meta http-equiv='refresh' content='0'>"; // THIS IS FOR AUTO REFRESH CURRENT PAGE
					} else {
					echo "Delete Unsucessful". $connector->error;
					}
				}
			// PDF STARTS FROM HERE
				if(isset($_GET['print'.$row['stock_id']])){

					echo "<script>
					var mywindow = window.open('', 'PRINT', 'height=400,width=600');
					mywindow.document.write('<html><head><title>' + document.title  + '</title>');
					mywindow.document.write('</head><body >');
					mywindow.document.write('<h1>' + 'Manager Information'  + '</h1>');
					mywindow.document.write('<p>' + 'ID STATUS'  + '</p>');
					mywindow.document.write(document.getElementById('a".$row['stock_id']."').innerHTML);
					mywindow.document.write('  |  ');
					mywindow.document.write(document.getElementById('b".$row['stock_id']."').innerHTML);
					mywindow.document.write('</body></html>');
					mywindow.document.close(); // necessary for IE >= 10
					mywindow.focus(); // necessary for IE >= 10*/

					mywindow.print();
					mywindow.close();
					history.back(); // IT WILL TAKE YOU BAKE PAGE
					</script>";
          }
		  }
        ?>
                        
                    </tbody>
                </table>
				<center><a href="stockprint.php"><button class="btn btn-default">Print Information</button></a></center>
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
