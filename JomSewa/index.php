<?php 
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>Online Car Rental System</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
			<nav class="navbar navbar-default navbar-fixed-top" style="background:#000">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><strong>Customer & Announcements</strong></a></li>
      
	  
	  <li><a href="index.php?option=SignUpDriver"><span class="glyphicon glyphicon-user"></span> Sign up As Driver</a></li>
   
   
	
	<li><a href="index.php?option=LoginDriver"><span class="glyphicon glyphicon-log-in"></span>Login As Driver</a></li>
	
	</ul>


<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up As Customer</a></li>
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login As Customer</a></li>
      <li><a href="admin/login.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
    </ul>



</div>
</nav>	

<div class="container-fluid">
	<!-- slider -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/car.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/car.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
	
	 <div class="item">
      <img src="images/car.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slider end-->
</div>


<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="SignUpDriver")
			{
			include('registrationD.php');
			}
			else if($opt=="LoginDriver")
			{
			include('LoginD.php');
			}
			
			else if($opt=="New_user")
			{
			include('registration.php');
			}
			
			
			else if($opt=="login")
			{
			include('login.php');
			}
		}
		else
		{
		echo "<h2></h2>
		Cheap Student Cab. One Way: UMP ↔ Anywhere in Pekan RM10, UMP ↔ 
		Anywhere in Gambang RM40, UMP ↔ Anywhere in Bandar Kuantan RM35. 
		Round Trip: UMP ↔ Anywhere in Pekan RM15, UMP ↔ Anywhere in Gambang RM60,
		UMP ↔ Anywhere in Bandar Kuantan RM50. 
		Pick Up service also available. Kindly whatsapp 010-7078251 
";
		}
		?>
		
		
		
		
		</div>
	<!-- container -->
		
		<div class="col-sm-4">
			<div class="panel panel-default">
  <div class="panel-heading">Latest news</div>
  <div class="panel-body">
    this is the best website
	you can search anything here

  </div>
</div>
		
		</div>
	</div>

</div>



<br/>
<br/>
<br/>
<br/>

<!-- footer-->

			<nav class="navbar navbar-default navbar-bottom" style="background:black">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="http://www.phptpoint.com/"> Developed by  Kelas Web</a></li>
      
	</ul>




</div>
</nav>
<!-- footer-->

	</body>
</html>