<?php
require_once('phpincludes/session-helper.php');
if(session_status() === PHP_SESSION_NONE){
	session_start();
}

?>

<!DOCTYPE html>
<html>
<footer>
		<ul id="social">
			<li><strong>CONTACT US</strong></li>
			<li><a href="">facebook.com/coffeeboise</a></li>
			<li><a href="">hello@coffeeboise.com</a></li>
			<li><a href="">@coffee_boise</a></li>
			<?php if(isAccessGranted()){ ?>
				<li><a href="logout.php"><strong>LOGOUT</strong></li>
				<li><a href="youRegistered.php"><strong>CART</strong></li>
			<?php } else { ?>
				<li><a href="login.php"><strong>LOGIN</strong></li>
			<?php } ?>
			
		</ul>
	<p id="copy">&copy Sadie Shirts</p>
	</footer>
</html>

