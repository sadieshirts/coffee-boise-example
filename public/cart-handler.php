<?php
require_once("Dao.php");
require_once('phpincludes/form-helper.php');
require_once('phpincludes/session-helper.php');
session_start();

$user = $_SESSION['user_id'];
$dao = new Dao();

$dao->removeFromCart($user); //removal is equivalent to purchasing as of right now

$_SESSION['order_success'] = "Your order is complete!";

redirectSuccess("youRegistered.php");