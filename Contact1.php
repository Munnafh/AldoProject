<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/cubeportfolio.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

</head>
<body>



<div class="container">
		<div class="row">
							<div class="col-lg-6">
							<img src='img/logo.jpg' alt='' width='100' height='100' />
<center>




<?php


//$con=mysqli_connect('182.50.133.82:3306','jct','jct@123');

$con=mysqli_connect('127.0.0.1','root','root');

if(!$con)
{
	echo 'Not Connect to the Server';
}


if(!mysqli_select_db($con,'jctechnology'))
{

	 echo 'DataBase Not Connected';
 }

$Name=$_POST['Name'];
 
 $Email=$_POST['Email'];
 
$Commend=$_POST['Commend'];
 
 
 
 $sql="INSERT INTO contact(Name,Email,Commend) VALUES ('$Name','$Email','$Commend')";
 
if(!mysqli_query($con,$sql))
	 
	 {
		 echo 'Not Inserted';
	 }
	 else
		  {
		 echo'<h3>Thank You For Contact Us. We Will Back To You Soon...</h3>';
	 }
	 
header("refresh:3 url=contact2.html");
 


?>
	
</center>	
</div>
</div>
</div>


<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>