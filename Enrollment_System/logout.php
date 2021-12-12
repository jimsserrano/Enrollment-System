<?php
	ob_start();
	session_start();
	ob_end_clean();

	if (isset($_SESSION['or_number'])) {
		$session_user = $_SESSION['or_number'];
	}else{
		ob_start();
		header('location: login.php');
		ob_clean_end();
	}
	session_destroy();
	header('location: login.php');

?>