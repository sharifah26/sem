<html>
<head>
<style>
table,td{
cellpadding: 10;
border: 1px solid black;
}
</style>
</head>
<body>
<?php 
$q=mysqli_query($conn,"select * from booking ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any Notice found !!!</h2>";
}
else
{
?>
<h2 style="color:Black">List All Income Report</h2>

<table class="table table-bordered">
	<Tr class="success">
	    <th>ID</th>
		<th>Name</th>
		<th>Price</th>
	</Tr>

<?php 

$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['driver']."</td>";
echo "<td>".$row['payment']."</td>";

?>
<?php 
echo "</Tr>";
$i++;
}?>
</table>
<?php }?>