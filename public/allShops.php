<?php session_start(); ?>
<!DOCTYPE html>
<?php $thisPage="allShops";?>
<html>
	<head>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link href="css/subStyle.css" type="text/css" rel="stylesheet">
		<meta charset="UTF-8">
		<title>Coffee Boise - All Shops</title>
	</head>
	<body>
		<?php include("phpincludes/subNav.php"); ?>
		<article id="allShops">
			<h1 id="titleText"> All Shops </h1>
		</article>

		<article id="allShopsGrid">
			<section id="shopPics">
				<figure id="grid">
					<a href="http://www.districtcoffeehouse.com"> <img src="images/The-District-Street-View.jpg" alt="TheDistrict"></a>
					<figcaption class="merchCaption" id="name">The District</figcaption>
					<figcaption id="price">10th and Bannock</figcaption>
				</figure>
				<figure id="grid">
					<a href="http://www.dawsontaylor.com"> <img src="images/Dawson-Taylor-view2.jpg" alt="Dawson Taylor"></a>
					<figcaption class="merchCaption" id="name">Dawson Taylor</figcaption>
					<figcaption id="price">8th Street</figcaption>
				</figure>
				<figure id="grid">
					<a href="https://www.facebook.com/hydeperkcoffee/"> <img src="images/Hyde-Perk-view.jpg" alt="Hyde Perk"></a>
					<figcaption class="merchCaption" id="name">Hyde Perk</figcaption>
					<figcaption id="price">13th St., North End</figcaption>
				</figure>
				<figure id="grid">
					<a href="http://www.javabowlofsoul.com"> <img src="images/Java-view.jpg" alt="Java"></a>
					<figcaption class="merchCaption" id="name">Java</figcaption>
					<figcaption id="price">13th St., North End</figcaption>
				</figure>
				<figure id="grid">
					<a href="https://dutchbros.com"> <img src="images/Dutch-Bros-view.jpg" alt="Dutch Bros"></a>
					<figcaption class="merchCaption" id="name">Dutch Bros.</figcaption>
					<figcaption id="price">8th St., City Center Plaza</figcaption>
				</figure>
			</section>
			
		</article>
		
		<?php include("phpincludes/footer.php"); ?>
	</body>
</html>