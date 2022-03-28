<?php
	
	$f = $_POST['fname'];
	$t = $_POST['tname'];
	$b = $_POST['bname'];
	$p = $_POST['pname'];
	$e = $_POST['ename'];
						
?>

<html>
<head>
<title>test</title>
<link rel="stylesheet" href="style.css" type="text/css"/>  
</head>
	<body>
			<div class="dv">
			<h1>ID CARD</h1>
			<img src="WordPress website design and develpoment.jpg" class="im" />
			<h2><?php echo $f ?></h2>
			<h3><?php echo $t ?></h3>
			<h4>Blood Goup : <?php echo $b ?> </h4>
			<h4>Phone Number : <?php echo $p ?></h4>
			<h4>Email Address : <?php echo $e ?></h4>
			<img src="n.jpg" class="logo" width="60px" />
			
			
			</div>
	</body>
<html>