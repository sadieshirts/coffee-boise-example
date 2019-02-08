<?php
	require_once("Dao.php");
	session_start();
	$dao = new Dao();
	$products = $dao->getAllProducts();
	?>
<!DOCTYPE html>
<?php $thisPage="merchandise";?>
<html>
	<head>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link href="css/subStyle.css" type="text/css" rel="stylesheet">
		<meta charset="UTF-8">
		<title>Coffee Boise - Merchandise</title>
	</head>
	<body>
		<?php include("phpincludes/subNav.php"); ?>
		<article id="merchandise">
			<h1 id="titleText"> Merchandise </h1>
		</article>

		<article id="merchandise">
			<section id="shopPics">

				<?php
				// creates merchandise page from database
				foreach ($products as $product) {
					$product_id = $product['product_id'];
					$name = $product['product_name'];
					$img = $product['product_img'];
					$price = $product['price']; ?>

					<figure id="grid">
						<form action="merch-handler.php" method="POST">
							<input type="image" name="product_id" src= <?= $img ?> value=<?= $product_id ?> class = "imgForm" id= <?= $product_id ?>/>
						</form>

						<figcaption class="merchCaption" id= <?= $product_id ?>> <?= $name ?> </figcaption>
						<figcaption id="price">$<?= $price ?></figcaption>
					</figure>
					
				<?php }
				?>
			</section>
			
		</article>
		
		<?php include("phpincludes/footer.php"); ?>
	</body>
</html>