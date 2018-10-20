<?php
	// session start
	session_start();
	
	//connection class
	$con = mysqli_connect("localhost","root","","graph1");
		
		// login code
	if(isset($_POST['login']))
	{
		$email = $_POST['email'];
		$pass = md5($_POST['pass']);
			$sel = "select * from user where username='$email' AND password='$pass'";
			$qry = mysqli_query($con,$sel);
			$row = mysqli_fetch_array($qry);
			$vemail = $row['username'];
			$vpass = $row['password'];
			$vname = $row['cname'];
			$role = $row['role'];
			$cl_id = $row['cid'];
			$man = $row['manager'];
		
			// session variable starts
			
			$_SESSION['cname'] = $vname;
			$_SESSION['name'] = $vemail;
			$_SESSION['clid'] = $cl_id;
			$_SESSION['login']=true;
			$_SESSION['manager'] = $man ; 				
				// session varaible ends
			if($vemail == $email && $vpass == $pass)
			{
				if($role =='manager')
				{
					
					
					header('location:dash.php');
				}
				else
				{
					header('location:graph.php');
				}
			}	
			else
			{	
				$_SESSION['err'] = "Wrong Password";	
				header('location:index.php');
			}
			
	}
		// inserting concern message to database 
	elseif(isset($_POST['send']))
	{
		$marketplace=$_POST['mp'];
		$conc = $_POST['conc'];
		$desc = $_POST['desc'];
		$name=$_SESSION['name'];
		$sel = "insert into concern (username,co_mp,concern,description,status) VALUES ('$name','$marketplace','$conc','$desc','no')";
		$qry = mysqli_query($con,$sel);
		header('location:ticket.php');
	}
		//data.php or resolve.php
		// fetching data from url and updating to yes 
	elseif(isset(($_GET['id'])))
	{
		$cid = $_GET['id'];
		$sel = "Update concern set status='yes'	where co_id='$cid'";	
		$qry = mysqli_query($con,$sel);
		header('location:resolve.php');
	}
		// resolve.php
		//fetching data from url and updatin to no 
	elseif(isset(($_GET['unid'])))
	{
		$cid = $_GET['unid'];
		$sel = "Update concern set status='no'	where co_id='$cid'";	
		$qry = mysqli_query($con,$sel);
		header('location:dash.php');
	}
?>