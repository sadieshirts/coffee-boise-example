<?php
require_once("Dao.php");
require_once('phpincludes/form-helper.php');
require_once('phpincludes/session-helper.php');

session_start();
$dao = new Dao();
$productOrder = array();

$product_id = trim($_POST['product_id']);

$productOrder = $dao->getProduct($product_id);

$_SESSION['productOrder'] = $productOrder;

header("Location: order.php");