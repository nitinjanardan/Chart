<?php
	include('database.php');
	$cname = $_SESSION['cname'];

?>
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
	<link rel="stylesheet" href="css/style.css">
	</script>
	
  </head>
  <body >

 
 <script type="text/javascript" ></script>

	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<h1><a href="graph.php">Selvitate</a></h1>
				<nav role="navigation" >
						<ul>
                            <!--<li><a href="ticket.php">Tickets</a></li>-->
							<li><a href="resolve.php">Resolved List</a></li>
                            <li class="cta"><b style="font-size:25px"><?php echo $cname ?></b></li>
                            <li class="cta"><a href="logut.php">Logout</a></li>
                        </ul>
				</nav>
			</div>
		</div>
	</header>
					<!-- header ends  -->
	</body>
</html>	
