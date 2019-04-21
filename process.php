<?php
	$pageurl = urlencode("http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]); 
	
		$number = $_POST['number'];
		$code = $_POST['code'];
		$code = explode('+', $code);
		header('location:https://api.whatsapp.com/send?phone='.$code[1].$number);
		exit();
	
?>