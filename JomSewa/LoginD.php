<?php 
	extract($_POST);
	if(isset($save))
	{
		if($e=="" || $p=="")
		{
			$err="<font color='red'>You need to fill in every field.</font>";	
		}
		else
		{
			$pass=md5($p);	

			$sql=mysqli_query($conn,"select * from driver where DriverEmail='$e' and DriverPass='$pass'");

			$r=mysqli_num_rows($sql);

			if($r==true)
			{
				$_SESSION['driver']=$e;
				header('location:driver');
			}
			else
			{
				$err="<font color='red'>Invalid login details!</font>";

			}
		}
	}
?>

<h3><b>Login Form</b></h3><br>
<form method="post">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	<div class="row">
		<div class="col-sm-4">Enter Your Email Address:</div>
		<div class="col-sm-5">
		<input type="email" name="e" class="form-control"/></div>
	</div>
	<div class="row">
		<div class="col-sm-4">Enter Your Password:</div>
		<div class="col-sm-5">
		<input type="password" name="p" class="form-control"/></div>
	</div>
	<br>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<input type="submit" value="Login" name="save" class="btn btn-success"/>
		</div>
	</div>
</form>	