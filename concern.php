<?php include('header.php') ?>
	<body>
		<form action="" method="POST">				
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class ="form-group">
							<label>MarketPlace :</label>
							<input type="text" name="mp" placeholder ="amazon/flipkart" />
						</div>
					</div>		
					<div class="col-md-6">
						<div class ="form-group">
							<label>Concern :</label>
							<input type="text" name="conc" placeholder ="listing" />
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label>Description: </label>
							<textarea class="form-control" rows="4" name="desc" ></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
						</div>
					</div>	
				</div>
			</div>
			<div>
				<center><input type="submit" name="send" value="submit" /></center>
			</div>			
		</form>				
		<div>
			<br />
		</div>
	</body>	
					<!-- foooter starts -->
<?php include('footer.php') ?>	