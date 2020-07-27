<?php 
extract($_POST);
if(isset($update))
{

//services
$ser=implode(",",$ser);

$query="update driver set DriverName='$n',DriverGender='$gen',DriverServices='$ser' where DriverEmail='".$_SESSION['driver']."'";

//$query="insert into user values('','$n','$e','$pass','$mob','$gen','$hob','$imageName','$dob',now())";
mysqli_query($conn,$query);



$err="<font color='blue'>Profile updated successfully !!</font>";


}


//select old data
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from driver where DriverEmail='".$_SESSION['driver']."'");
$res=mysqli_fetch_assoc($sql);

?>
<h2 align="center">Update Your Profile</h2>

		<form method="post">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Your name</td>
					<Td><input class="form-control" value="<?php echo $res['DriverName'];?>"  type="text" name="n"/></td>
				</tr>
				<tr>
					<td>Enter Your email </td>
					<Td><input class="form-control" type="email" readonly="true" value="<?php echo $res['DriverEmail'];?>"  name="e"/></td>
				</tr>
				
				<tr>
					<td>Select Your Gender</td>
					<Td>
				Male<input type="radio" <?php if($res['DriverGender']=="m"){echo "checked";} ?> name="gen" value="m"/>
				Female<input type="radio" <?php if($res['DriverGender']=="f"){echo "checked";} ?> name="gen" value="f"/>	
					</td>
				</tr>
				
				<tr>
					<td>Choose Your services</td>
					<Td>
					<?php 
					$arrr=explode(",",$res['DriverServices']);
					?>
					
					
					Food services<input value="Food services" <?php if(in_array("foodservices",$arrr)){echo "checked";} ?> type="checkbox" name="ser[]"/>
					Hailing<input value="Hailing" <?php if(in_array("hailing",$arrr)){echo "checked";} ?> type="checkbox" name="ser[]"/>
					</td>
				</tr>
				
			
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-default" value="Update My Profile" name="update"/>
<input type="reset" class="btn btn-default" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
	