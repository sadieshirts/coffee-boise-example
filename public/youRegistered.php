<?php
require_once("Dao.php");
require_once('phpincludes/form-helper.php');
require_once('phpincludes/session-helper.php');
session_start();

$dao = new Dao();
if(!isAccessGranted()) {
	$errors['message'] = "You must login first.";
	redirectError("login.php", $errors);
}

$user = $_SESSION['username'];
$user_id = $_SESSION['user_id'];

$items = $dao->getAllCart($user_id);
// $products = $dao->getAllProducts();

?>

<!DOCTYPE html>
<?php $thisPage="merchandise";?>
<html>
	<head>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link href="css/subStyle.css" type="text/css" rel="stylesheet">
		<meta charset="UTF-8">
		<title>Coffee Boise - Shopping Cart</title>
	</head>

	<body>
	<?php include("phpincludes/subNav.php"); ?>
	
	<article id="merchandise">
		<h1 id="titleText"> <?= $user ?>'s shopping cart</h1>
	</article>

	<?php if(isset($_SESSION['order_success'])) { ?>
		<span id="order_success" class="order_success"><?= $_SESSION['order_success'] ?></span>
	<?php } ?>

	<?php
			// creates merchandise page from database
		if($items){
			unset($_SESSION['order_success']);
			foreach ($items as $item) {

				$product_id = $item['product_id'];
				$product = $dao->getProduct($product_id);
				$name = $product['product_name'];
				$img = $product['product_img'];
				$price = $product['price']; 
				$quantity = $item['quantity'];
				$size = NULL;

				if($item['size'] != NULL){
					$size = $item['size'];
				} ?>

				<figure id="cart">
					<section id="cartImage">
						<img class="cartImg" id= <?= $product_id ?> src= <?= $img ?> >
					</section>
					<section id="merchDesc">	
						<p class="merchCaption" id= <?= $product_id ?>> <?= $name ?> </p>
						<p class="merchCaption" id="price">COST: $<?= $price ?> x <?= $quantity ?></p>
						<?php if ($size != NULL){ ?>
							<p class="merchCaption" id="price">SIZE: <?= $size ?></p>
						<?php } ?>
					</section>
					
				</figure>

			<?php } ?>
				<form class="orderForm" id="purchaseForm" method = "POST" action="cart-handler.php">
					<input id="button" type="submit" name="submit" value="PURCHASE">
				</form>
			<?php } ?>


	<?php 
	unset($_SESSION['order_success']);
	include("phpincludes/footer.php"); ?>
	</body>
</html>