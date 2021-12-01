<?php 
include('check.php');
include('session.php'); 

$result=sqlsrv_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=sqlsrv_fetch_array($result);

 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper"> 
    <center><h3>Welcome: <?php echo $row['name']; ?> </h3></center>
	 <div class="reminder">
    <p><a href="logout.php">Log out</a></p>
  </div>
</div>

</body>
</html>