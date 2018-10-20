<?php
	include ('database.php');
	
	
	// checking  session 
	if(!isset($_SESSION['login']))
	{
		header('location:index.php');
	}
		// fetching data from marketplace table	
	$cname = $_SESSION['cname'];	
	$name = $_SESSION['name'];
	$qry = "select marketPlace,orders  from mp where userid='$name'";
	$as = mysqli_query($con,$qry);
	
		// fetching data from state table bargraph
		
	$qry1 = "select *  from state where userid='$name'";
	$stm = mysqli_query($con,$qry1);

		// fetching data from sales table line chart
	$sel = "select * from sales where userid='$name'";
	$myqry = mysqli_query($con,$sel);
?>
	<!-- header starts -->
<!DOCTYPE html>	
<html>
  <head>
    <title>Selvitate - Yours Sales Engine!</title>
    	<link rel="icon" href="http://selvitate.com/images/logo1.jpg" type="image/jpg" sizes="16x16">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="Selvitate Technology Private Limited" />
      <meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

					<!--for Pie chart -->

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart()
	  {
        var data = google.visualization.arrayToDataTable([
                ['marketPlace', 'orders'],

                <?php
                while($row= mysqli_fetch_array($as))
                    {
                      echo "['".$row["marketPlace"]."',".$row["orders"]."],";
                    }?>
                   ]);


        var options = {
          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
		}

    </script>
					<!-- for Barchart -->

	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart()
	  {
        var data = google.visualization.arrayToDataTable([
                ['states', 'orders'],

                <?php
                while($row= mysqli_fetch_array($stm))
                    {
                      echo "['".$row["states"]."',".$row["orders"]."],";
                    }?>
                   ]);


        var options = {
          title: ''
        };

        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));

        chart.draw(data, options);
		}
		</script>

				<!-- for line Chart -->

		<script type="text/javascript">
		google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart()
	  {
        var data = google.visualization.arrayToDataTable([
                ['dates', 'amount'],

                <?php
                while($row= mysqli_fetch_array($myqry))
                    {
                      echo "['".$row["dates"]."',".$row["amount"]."],";
                    }?>
                   ]);


        var options = {
          title: ''
        };

        var chart = new google.visualization.LineChart(document.getElementById('linechart'));

        chart.draw(data, options);
		}
</script>

  </head>
  
 <script type="text/javascript" ></script>

	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<h1><a href="graph.php">Selvitate</a></h1>
				<nav role="navigation" >
						<ul>
                            <li><a href="ticket.php">Tickets</a></li>
							<li><a href="graph.php">Report</a></li>
                            <li class="cta"><b style="font-size:25px"><?php echo $cname ?></b></li>
                            <li class="cta"><a href="logut.php">Logout</a></li>
                        </ul>
				</nav>
			</div>
		</div>
	</header>
			<!-- Header Ends -->
	<div>
		<br />
	</div>
	<body >
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-md-6">
			<center><h3><b><u>Market Place</u></b></h3></center>
            <div id="piechart"></div>
        </div>
        <div class="col-12 col-md-6">
			<center><h3><b><u>States</u></b></h3></center>
	         <div id="columnchart_values"></div>
        </div>
      </div>
	  <div>
		<br />
	  </div>
      <div class="row">
        <div class="col-12 col-md-12">
			 <center><h3><b><u>Sales</u></b></h3></center>		
	         <div id="linechart" width="100%"></div>
        </div>
      </div>
    </div>
	<div>
		<br /><br />
	  </div>
	 <div style=" border-style: solid;border-color:black">
		
		<br />
		<h1><center><b><u>Transaction Details</u></b></center></h1>	
	<div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
  			<table class="table table-bordered" >
    			<thead>
    					<th colspan="2"><center><b>Bank Transfer</b></center></th>
    				<tr>
    					<td>Transfer Date</td>
    					<td>Amount</td>
    				</tr>
    			</thead>
    			<tbody>
    				<?php
					$name = $_SESSION['name'];
    					$sel = "select * from banktransfer where userid='$name'";
    						$conn = mysqli_query($con,$sel);
    						while($row = mysqli_fetch_array($conn))
    							{
    								$tdate = $row['t_date'];
    								$amt= $row['amount'];
    				?>
    					<tr>
    					<td><?php echo $tdate ?></td>
    					<td><?php echo $amt ?></td>
    					</tr>
    							<?php } ?>
    			 </tbody>
  		  </table>
      </div>
      <div class="col-12 col-md-6">
  			<table class="table table-bordered">
  			<thead>
					<th colspan="2"><center><b>Transaction Backup</b></center></th>
  				<tr>
  					<td>Transactions</td>
  					<td>Amount</td>
  				</tr>
  			</thead>
  			<tbody>
  				<?php
  					$sel1 = "select * from transaction where userid='$name'";
  					$con1 = mysqli_query($con,$sel1);
  						while($row1 = mysqli_fetch_array($con1))
  							{
  								$tdate = $row1['transaction'];
  								$amt= $row1['amount'];
  				?>
  					<tr>
  					<td><?php echo $tdate ?></td>
  					<td><?php echo $amt ?></td>
  					</tr>
  							<?php } ?>
  			</tbody>
  		</table>
	   </div>
   </div>
  </div>
	</div>	
	<div>
		<br />
	</div>
 </body>	
			<!-- Footer Start -->
<footer id="fh5co-footer" role="contentinfo">

		<div class="container">
			<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Services</h3>
				<ul class="float">
					<li><a href="#">Ecommerce product photography</a></li>
					<li><a href="#">Product Catalog Management Service</a></li>
					<li><a href="#">Marketplace Solution</a></li>
					</ul>
			</div>
			<div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Products</h3>
				<ul class="float">
					<li><a href="#">Multichannel</a></li>
					<li><a href="#">Inventory</a></li>
					<li><a href="#">Warehouse</a></li>
					<li><a href="#">Shipping</a></li>
				</ul>
				<ul class="float">
					<li><a href="#">Dashboard & Reports</a></li>
					<li><a href="#">Plans</a></li>
					<li><a href="#">Analytics</a></li>
					<li><a href="Terms_Of_Service.html">Terms of Service</a></li>
				</ul>

			</div>
			<div class="col-md-2 row-md-push-2 row-sm-12 col-sm-push-0 row-xs-12 row-xs-push-0">
			<aside id="black-studio-tinymce-4" class="widget widget_black_studio_tinymce">
				<h3>Follow Us</h3>
				<ul class="fh5co-social">
					<li><a href="https://twitter.com/selvitate"><i class="icon-twitter"></i></a></li>
					<li><a href="https://www.facebook.com/selvitate"><i class="icon-facebook"></i></a></li>
					<li><a href="https://plus.google.com/u/0/114242811671979900662"><i class="icon-google-plus"></i></a></li>
					<li><a href="https://www.instagram.com/selvitate/"><i class="icon-instagram"></i></a></li>
					<li><a href="https://www.linkedin.com/in/selvitate-technologies-071382146"><i class="icon-linkedin"></i></a></li>
				</ul>
			</aside>
			</div>

			<div class="col-md-12 fh5co-copyright text-center">
				<p>&copy; 2017-2025 Selvitate Technology Private Limited. All Rights Reserved. </p>
			</div>
		</div>
	</footer>
	</div>
<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>
