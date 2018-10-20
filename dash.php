<?php
	include('header.php');
?>
			<!-- table starts -->
	<div>
		<br />
		<h1><center> <b style="color:red"><u>Pending Concern</u></b> </center></h1>
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
								$clid = $_SESSION['clid'];
							$sel = "select * from concern where status='no'";
							$qry=mysqli_query($con,$sel);
							
							while($rows=mysqli_fetch_array($qry))
							{
								$uname=$rows['username'];
								$comp = $rows['co_mp'];
								$conc = $rows['concern'];
								$desc = $rows['description'];	
								$coid = $rows['co_id'];
						?>
					<tbody>
						<td><?php echo 	$coid ?></td>
						<td><?php echo $uname ?></td>
						<td><?php echo $comp ?></td>
						<td><?php echo $conc ?></td>
						<td><?php echo $desc ?></td>
						<!--<td><input type ="text" name="te"  placeholder="please fill these field" required>-->
						</td>
						<td><a class="btn btn-success" href="database.php?id=<?php echo $coid ?>">Resolve</a></td>
					</tbody>
							<?php } ?>
				</table>	
			</div>
		</div>
	</div>	
	<div>
		<center><a href="resolve.php"><b style="color:green"><u>Back to Resolved List</u></b></a></center>
	</div>		
	<div>	
		<br />
	</div>	
					<!-- foooter starts -->
	<?php include('footer.php');