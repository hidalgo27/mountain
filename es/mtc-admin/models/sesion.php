<?php session_start();
	if (!$_SESSION["autentificado"]) {
		header("Location: ../../models/salir.php");
	}
?>