<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link href="css/style.css" type="text/css" rel="stylesheet">
		<meta charset="UTF-8">
		<title>Coffee Boise</title>
	</head>
	<body>
		<article id="heading">
			<img src="images/wooden.jpg" alt="Wooden Background" id="Background">
			<img src="images/coffeeLogo.png" alt="CoffeBoise" id="coffeeLogo">
		</article>
		<nav id="homeNav">
			<ul>
				<li><a href="topPicks.php">top picks</a></li>
				<li><a href="allShops.php">all shops</a></li>
				<li><a href="merchandise.php">merchandise</a></li>
				<li><a href="#about">about</a></li>
			</ul>
		</nav>

		<nav id="navCopy">
			<ul>
				<li><a href="topPicks.php">top picks</a></li>
				<li><a href="allShops.php">all shops</a></li>
				<li><a href="merchandise.php">merchandise</a></li>
				<li><a href="#about">about</a></li>
			</ul>
		</nav>

		<article id="topPicks">
			<h1 id="titleText"> Top Picks </h1>
			<section id="storeImage">
				<img src="images/The-District-Street-View.jpg" alt="The District">
			</section>
			<section id="storeDesc">
				<h2 id="titleText"> The District </h2>
				<p id="description">NESTLED ON 10TH STREET IN DOWNTOWN BOISE, THE DISTRICT OFFERS A HIP ATMOSPHERE WITH A GREAT MISSION STATEMENT.</p>
				<a href="topPicks.php#theDistrictPick" id="pageLink">READ MORE ></a>
			</section>
		</article>

		<article id="allShops">
			<h3 id="titleText"><a href="allShops.php">  All Shops </a></h3>
			<p id="description">our expert opinion on boise coffee</p>
			<section id="allShopsImg">
				<figure id="fig1">
					<a href="http://www.districtcoffeehouse.com"> <img src="images/The-District-Street-View.jpg" alt="The District"></a>
				</figure>
				<figure id="fig2">
					<a href="http://www.dawsontaylor.com"> <img src="images/Dawson-Taylor-view2.jpg" alt="Dawson Taylor"></a>
				</figure>
				<figure id="fig3">
					<a href="https://www.facebook.com/hydeperkcoffee/"> <img src="images/Hyde-Perk-view.jpg" alt="Hyde Perk"></a>
				</figure>
				<figure id="fig4">
					<a href="http://www.javabowlofsoul.com"> <img src="images/Java-view.jpg" alt="Java"></a>
				</figure>
				<figure id="fig5">
					<a href="https://dutchbros.com"> <img src="images/Dutch-Bros-view.jpg" alt="Dutch Bros"></a>
				</figure>
			</section>
		</article>

		<article id="merchandise">
			<section id="shopDesc">
				<h2 id="titleText"> Merchandise</h2>
				<a href="merchandise.php" id="pageLink">SHOP OUR STORE></a>
			</section>
			<section id="shopPics">
				<figure id="row1">
					<a href=""> <img src="images/merch/mug1.jpg" alt="mug1"></a>
					<a href=""> <img src="images/merch/shirt1.jpg" alt="mug2"></a>
				</figure>
				<figure id="row2">
					<a href=""> <img src="images/merch/shirt3.jpg" alt="mug1a"></a>
					<a href=""> <img src="images/merch/mug2.jpg" alt="mug2a"></a>
				</figure>
			</section>
			
		</article>

		<article id="about">
			<h1 id="titleText"> About </h1>
			<section id="aboutImage">
				<img src="images/about-pic.jpg" alt="about-pic">
			</section>
			<section id="aboutDesc">
				<p id="description">Hi! I'm Sadie. I'm a <a href="http://www.ssphotographydesign.com" id="pageLink"> designer and photographer</a>, and I just really like coffee. There's something special about sitting on a couch nestled in the corner of a shop with the morning light shining over a good book and your fingers wrapped around a steaming latte. That experience is even better when it's shared with others, which is why I created this website! </p>
			</section>
		</article>
		<aside id="hoverOver">
			<a href="#heading" class="backToTop" id="pageLink">BACK TO TOP</a>
		</aside>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script src="js/stickyHeader.js"></script>
		<?php include("phpincludes/footer.php"); ?>
	</body>
</html>
