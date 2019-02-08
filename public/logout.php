<?php
session_start();
require_once('phpincludes/session-helper.php');

logoutUser();

header("Location: index.php")

?>
