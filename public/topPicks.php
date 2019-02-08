<?php session_start(); ?>
<!DOCTYPE html>
<?php $thisPage="topPicks";?>
<html>
	<head>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link href="css/subStyle.css" type="text/css" rel="stylesheet">
		<meta charset="UTF-8">
		<title>Coffee Boise - Top Picks</title>
	</head>
	<body>
		<?php include("phpincludes/subNav.php"); ?>
		<section id="theDistrictPick">
			<article id="topPicks">
				<h1 id="titleText"> Top Picks </h1>
				<section id="storeImage">
					<img src="images/The-District-Street-View.jpg" alt="The District">
				</section>
				<h2 id="titleText"> The District </h2>
			</article>

			<article id="bodyText">
				<?php include("phpincludes/districtBlog.php"); ?>
			</article>
		</section>

		<article id="topPicks">
			<section id="storeImage">
				<img src="images/Hyde-Perk-view.jpg" alt="Hyde Perk">
			</section>
				<h2 id="titleText"> Hyde Perk </h2>
		</article>

		<article id="bodyText">
			<?php include("phpincludes/hydePerkBlog.php"); ?>
		</article>
		
		<?php include("phpincludes/footer.php"); ?>
	</body>
</html>