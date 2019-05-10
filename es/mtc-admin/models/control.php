<?php
	if ($_POST['usuario_txt']!="" && $_POST['contrasenia_txt']!="") {
		//inicio la sesion
		session_start();
		include("conexion.php");
		$consulta = "SELECT * FROM tusuario WHERE usuario = '".$_POST['usuario_txt']."' AND contrasenia = '".$_POST['contrasenia_txt']."'";
		$ejecutar_consulta = $conexion->query($consulta);
		$num_regs = $ejecutar_consulta->num_rows;
		$tipousuario = $ejecutar_consulta->fetch_assoc();
		if($num_regs==0){
		header("Location: ../index.php?error=si");
		}
		else{
			//declaro mis variables de sesion
		$_SESSION["autentificado"] = true;
		$_SESSION["usuario"] =$_POST['usuario_txt'];
		switch ($tipousuario["tipousuario"]) {
			case 'administrador':
				header("Location: ../administrador/views/index.php");
				break;
			case 'agente':
				header("Location: ../agente/views/index.php");
				break;
		}
		}
	}
	else{
		header("Location: ../index.php?error=si");
	}
?>