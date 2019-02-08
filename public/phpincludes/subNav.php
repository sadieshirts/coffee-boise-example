<!DOCTYPE html>
	<nav id="subNav">
		<a href="index.php"><img src="images/coffeeLogoNav.png" alt="CoffeBoise" id="navLogo"></a>
		<ul>
			<li>
				<a <?php if ($thisPage=="topPicks") 
				echo "id=\"currentpage\""; ?>
				href="topPicks.php">top picks</a></li>
			<li>
				<a <?php if ($thisPage=="allShops") 
				echo "id=\"currentpage\""; ?>
				href="allShops.php">all shops</a></li>
			<li>
				<a <?php if ($thisPage=="merchandise") 
				echo "id=\"currentpage\""; ?>
				href="merchandise.php">merchandise</a></li>
			<li><a href="index.php#about">about</a></li>
		</ul>
	</nav>
<html>