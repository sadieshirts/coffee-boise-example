<?php
require_once("Dao.php");
require_once('phpincludes/form-helper.php');
require_once('phpincludes/session-helper.php');

session_start();


$fullName = trim($_POST['fullName']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$password_match = trim($_POST['password_match']);
$errors = array();
$presets = array();

if(strlen($fullName) <= 0 || strlen($fullName) > 50) {
	$errors['fullName'] = "Full name is required.";
 }

 if(strlen($email) <= 0 || strlen($email) > 50) {
 	$errors['email'] = "Email is required.";
 } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
 	$errors['email'] = "Must be a valid email address.";
 }

 if(strlen($password) <= 0) {
    $errors['password'] = "Password is required.";
 } else if($password_match != $password){
 	$errors['password_match'] = "Passwords do not match.";
 }

 $presets['email'] = htmlspecialchars($email);
 $presets['name'] = htmlspecialchars($fullName);

if (empty($errors)) {
	try{
		$dao = new Dao();
		if ($dao->userExists($email)) {
			$errors['message'] = "User already exists.";
			redirectError("registration.php", $errors, $presets);
		} else {
			if($dao->addUser($email, $password, $fullName)){
				header("Location: login.php");
			} else {
				$errors['message'] = "Oh no! Something went wrong.";
				redirectError("registration.php", $errors, $presets);
			}
		}
	}catch (Exception $e) {
		echo $e->getMessage();
		$errors['message'] = "Something went wrong.";
		redirectError("registration.php", $errors, $presets);
	}	
}else{
	
	redirectError("registration.php", $errors, $presets);
}
?>




