<?php
	include('header.php');

?>
	<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Marketplace</td>
							<td>Concern</td>
							<td>Description</td>
							<td>Resolved</td>
						</tr>
					</thead>
					<?php 
						
						$uname = $_SESSION['name'];
						$sel = "select * from concern where username='$uname'";
						$qry= mysqli_query($con,$sel);
						while($row=mysqli_fetch_array($qry))
						{
							$mp =$row['co_mp'];
							$conc =$row['concern'];
							$desc =$row['description'];
							$status=$row['status'];	
					?>
					<tbody>
						<tr>
							<td><?php echo $mp ?></td>
							<td><?php echo $conc  ?></td>
							<td><?php echo $desc ?></td>
							<td><?php if($status=='yes'){?><a class="btn btn-success"><b style="color:cyan">Yes</b></a>  <?php } else{?><a class="btn btn-danger"><b style="color:cyan">No</a> <?php }?></td>
						</tr>
					</tbody>
						<?php } ?>
				</table>
			</div>
		</div>	
	</div>
	<div class="container">
		<center><a href="concern.php" style="color:red;font-size:25px"><b><u>Create New Concern</u></b></a></center>
	</div>
	<div >
		<br />
	</div>
	</body>
								<!-- foooter starts -->
<?php include('footer.php');