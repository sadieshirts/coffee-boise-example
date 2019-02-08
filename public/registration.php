<?php session_start(); ?>
<!DOCTYPE html>
<?php $thisPage="merchandise";?>
<html>
	<head>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link href="css/subStyle.css" type="text/css" rel="stylesheet">
		<meta charset="UTF-8">
		<title>Coffee Boise - Registration</title>
	</head>
	<body>
		<?php include("phpincludes/subNav.php"); ?>
		<article id="merchandise">
			<h1 id="titleText"> Registration </h1>
		</article>

		<form class="loginForm" method = "POST" action="registration-handler.php">
				
				<section class="loginValues">
					<section id="fields">
					<p>
						<label for="fullName">Your Name:</label>
						<input type="text" id="fullName" name="fullName" maxlength="50" <?php if(isset($_SESSION['presets']['fullName'])) { ?> value="<?= $_SESSION['presets']['fullName']?>"
						<?php } ?> >
						<?php if(isset($_SESSION['errors']['fullName'])) { ?>
	        				<span id="fullNameError" class="error"><?= $_SESSION['errors']['fullName'] ?></span>
						<?php } ?>
					</p>
					<p>
						<label for="email">Email:</label>
						<input type="email" id="email" name="email" maxlength="50" <?php if(isset($_SESSION['presets']['email'])) { ?> value="<?= $_SESSION['presets']['email']?>" 
						<?php } ?> >
						<?php if(isset($_SESSION['errors']['email'])) { ?>
						        <span id ="emailError" class="error"><?= $_SESSION['errors']['email'] ?></span>
						<?php } ?>
					</p>
					<p>
						<label for="password">Password:</label>
						<input type="password" id="password" name="password">
						<?php if(isset($_SESSION['errors']['password'])) { ?>
						        <span id="passwordError" class="error"><?= $_SESSION['errors']['password'] ?></span>
						<?php } ?>
					</p>
					<p>
						<label for="password_match">Password again:</label>
						<input type="password" id="password_match" name="password_match">
						<?php if(isset($_SESSION['errors']['password_match'] )) { ?>
						        <span id="passwordMatchError" class="error"><?= $_SESSION['errors']['password_match'] ?></span>
						<?php } ?>
					</section>

					<section>
						<section id="productDesc">
							<input id="button" type="submit" name="submit" value="REGISTER">
							<?php if(isset($_SESSION['errors']['message'])) { ?>
							<span id="matchError" class="error"><?= $_SESSION['errors']['message'] ?></span>
							<?php } ?>
						</section>
					</section>
					</p>

		</section>	
		</form>
		<?php unset($_SESSION['errors']);
		unset ($_SESSION['presets']);
		include("phpincludes/footer.php"); ?>
	</body>
</html>