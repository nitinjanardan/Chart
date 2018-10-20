<?php
	include('header.php');
?>
			<!-- table starts -->
		<div>
			<br />
			<h1><center> <b style="color:green"><u>Solved Concern</u></b> </center></h1>
		</div>	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered" >
					<thead>
						</tr>
							<td>Concern Id</td>
							<td>Username</td>
							<td>Marketplace</td>
							<td>Concern</td>
							<td>Description</td>
							<!--<td> Comment </td> -->
							<td>Status</td>
						</tr>
					</thead>
						<?php
							$man = $_SESSION['manager'];	
							$sel ="select * from concern where status ='yes' ";
							$qry = mysqli_query($con,$sel);
							while($row=mysqli_fetch_array($qry))
							{
								$cid=$row['co_id'];
								$uname = $row['username'];
								$conc =$row['concern'];
								$mp = $row['co_mp'];
								$desc =$row['description'];
								$stats = $row['status'];
								
						?>
					<tbody>
						<td><?php echo $cid ?> </td>
						<td><?php echo $uname ?> </td>
						<td><?php echo $mp ?> </td>
						<td><?php echo $conc ?> </td>
						<td><?php echo $desc ?> </td>
						<td><a class="btn btn-success" href="database.php?id=<?php echo $cid ?>">Resolved</a> <a class="btn btn-danger" href="database.php?unid=<?php echo $cid?>">UnResolve</a> </td>
						
					</tbody>
							<?php } ?>
				</table>
						
			</div>
		</div>
	</div>	
		<div>
			<center><a href="dash.php"><b style="color:red"><u>Back to Pending List</u></b></a></center>
			
		</div>		
		<div>	
			<br />
		</div>	
		<!-- foooter starts -->
<?php include('footer.php') ?>