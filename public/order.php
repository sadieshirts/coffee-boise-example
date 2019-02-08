<?php session_start(); ?>
<!DOCTYPE html>
<?php 
$thisPage="merchandise";
?>
<html>
	<head>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link href="css/subStyle.css" type="text/css" rel="stylesheet">
		<meta charset="UTF-8">
		<title>Coffee Boise - Order</title>
	</head>
	<body>
		<?php include("phpincludes/subNav.php"); ?>
		<article id="merchandise">
			<h1 id="titleText"> Order </h1>
		</article>
		<?php include("order-display.php");?>
		
		<?php unset($_SESSION['errors']);
		unset ($_SESSION['presets']);
		include("phpincludes/footer.php"); ?>
	</body>
</html>