<!DOCTYPE html>
<html lang="en">

  <head>

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
			<hr class="divider">
			<h2 class="text-center text-lg text-uppercase my-0">Stock
				<strong>Form</strong>
			</h2>
			<hr class="divider">
			<form action="configuration/stockconfig.php" method="post">
				<center>
					<div class="row">
					<div class="form-group col-lg-12">
						<label class="text-heading">Stock ID</label>
						<input type="text" class="form-control" name="stock_id">
					</div>
					<div class="form-group col-lg-12">
						<label class="text-heading">Stock Status</label>
						<input type="text" class="form-control" name="stock_status">
					</div>					
					<div class="clearfix"></div>           
					<div class="form-group col-lg-12">
						<button type="submit" class="btn btn-secondary">Submit</button>
					</div>
					</div>
				</center>
			</form>
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
