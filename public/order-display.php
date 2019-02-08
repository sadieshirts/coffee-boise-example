<?php
	require_once("Dao.php");
	require_once('phpincludes/form-helper.php');
	require_once('phpincludes/session-helper.php');

	$dao = new Dao();
	$productName = 	$_SESSION['productOrder']['product_name'];
	$productDescription = $_SESSION['productOrder']['product_desc'];
	$price = $_SESSION['productOrder']['price'];
	$productImg = $_SESSION['productOrder']['product_img'];
	$displayQuantity = $_SESSION['productOrder']['display_quantity'];
	$displaySize= $_SESSION['productOrder']['display_size'];

	if($displaySize == "0"){
		$sizeID = "hiddenSize";
	}else{
		$sizeID = "showSize";
	}
	?>

<!DOCTYPE html>
	<section id="orderForm">
		<figure id="orderImage">
			<img src=<?= $productImg ?> alt="mug1">
		</figure>
		<section id="productDesc">

			<h2 id="titleText"> <?= $productName ?> </h2>
			<p id="description">$<?= $price ?> </p>
			<p id="description"> <?= $productDescription ?></p>

				<form class="orderForm" method = "POST" action="order-handler.php">
				
					<p>
						<label for="orderNum">Quantity:</label>

						<input name="orderNum" type="number" id="orderNum" placeholder="quantity" min="0" max="10"<?php if(isset($_SESSION['presets']['orderNum'])) { ?> value="<?= $_SESSION['presets']['orderNum']?>"
								<?php } ?> >
						<?php if(isset($_SESSION['errors']['orderNum'])) { ?>
							<span id="orderNumError" class="error"><?= $_SESSION['errors']['orderNum'] ?></span>
						<?php } ?>

						<label for="size" id=<?= $sizeID ?> >SIZE:</label>
						<select name="size" id=<?= $sizeID ?> >
							<option value="">Size</option>
							<option value="S">S</option>
							<option value="M">M</option>
							<option value="L">L</option>
						</select>
						<?php if(isset($_SESSION['errors']['size'])) { ?>
							<span id="size" class="error"><?= $_SESSION['errors']['size'] ?></span>
						<?php } ?>
					</p>

					<input id="button" type="submit" name="submit" value="ADD TO CART">

				</form>
			</section>
		</section>

<html>