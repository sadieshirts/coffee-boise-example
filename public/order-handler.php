<?php
require_once("Dao.php");
require_once('phpincludes/form-helper.php');
require_once('phpincludes/session-helper.php');
session_start();

$orderNum = trim($_POST['orderNum']); //retrieve quantity
$size = trim($_POST['size']); //retrieve size

$errors = array();
$presets = array();
$displaySize= $_SESSION['productOrder']['display_size'];
$dao = new Dao();

if($orderNum > 10) {
	$errors['orderNum'] = "Amount in cart exceeds store limits.";
 }if($orderNum <= 0) {
 	$errors['orderNum'] = "Please select an amount.";
 }if ($displaySize != "0"){
 	if ($size == ''){
 		$errors['size'] = "Please select a size.";
 	}
 }

$presets['orderNum'] = htmlspecialchars($orderNum);

if (empty($errors)) {
	$product_id = $_SESSION['productOrder']['product_id'];
	//if logged in, store product in shopping cart
	//if not logged in, store product in session until you can store in shopping cart

	if(isAccessGranted()){
		$user_id = $_SESSION['user_id'];
		//store product in shopping cart
		$dao->addToCart($user_id, $product_id, $orderNum, $size);
		redirectSuccess("youRegistered.php");
	} else {
		header('Location: login.php');
	}

}else{
	redirectError("order.php", $errors, $presets);
}
?>




