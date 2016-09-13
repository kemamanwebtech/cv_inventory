<?php
	//destroy session for this user. This will force re-login
	session_start();
	session_destroy();
	
	//point back to root page
	header('Location: index.html'); 

?>

