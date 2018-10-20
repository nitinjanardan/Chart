<?php include 'header.php' ?>
<html>
	<head>
		<title>Log In</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script src="js/jquery3.2.1.min.js "></script>
		<script src ="js/bootstrap.min.js "></script>
		<script>
			window.setTimeout(function () {
				$(".alert-danger").fadeTo(500, 0).slideUp(500, function () {
					$(this).remove();
				});
			}, 5000);
			window.setTimeout(function () {
				$(".alert-success").fadeTo(500, 0).slideUp(500, function () {
					$(this).remove();
				});
			}, 5000);
		</script>
	</head>
		<?php
			if(isset($_GET['re']))
			{
				$x=$_GET['re'];
			}
			if(isset($_GET['su']))
			{
				$y=$_GET['su'];
			}
		?>

	<body >
		<center><h1><b><u><i>Log In</i></u></b></h1></center>
		<br />
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				<?php
				if (!empty($x))
				{

				echo"<div class='alert alert-danger'> <a href='#' class='close' data-dismiss='alert'>&times;</a>";
				echo"<h4> $x </h4>";
				echo"</div>";
				}
				if (!empty($y))
				{

				echo"<div class='alert alert-success'> <a href='#' class='close' data-dismiss='alert'>&times;</a>";
				echo"<h4> $y </h4>";
				echo"</div>";
				}
				?>
					<div class="well">
						<fieldset>
							<legend><b>Log In</b></legend>
							<form action="database.php" method="POST">
								<div class="col-sm-6">
									<div class="form-group">
										<label>Email:</label>
										<input type="text" name="u_email" class="form-control" placeholder="user@domain.com">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Password:</label>
										<input type="password" name="u_pass" class="form-control" placeholder="**********">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<input type="submit" value="login"  name="login" style="height:40px; width:80px;color:white; background-color:black;" >
										<a href="registration.php" class="col-sm-offset-9"><i><b>create new account ?</b></i></a>
									</div>
								</div>

							</form>
						</fieldset>
					</div>
				</div>
			</div>
		</div>
	</body>
	<?php include 'footer.php'?>
</html>	
