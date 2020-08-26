<?php

	$servername = "Localhost";
	$userame = "root";
	$password = "";
	$database = "formulario";

//crear la conexion

	$conn = mysqli_connect($servername,$userame,$password,$database);
//verificar conexion 
	if (!$conn) {
		die("Connection failed".mysqli_connect_error());
	}

//variables de los campos de formulario
	$nombre = $_POST['nombre1'];
	$email = $_POST['email1'];
	$Asunto = $_POST['Asunto1'];
	$mensaje = $_POST['mensaje1'];

//insertar valores a la tabla 
	$sql ="INSERT INTO datosweb ( nombre_usuario, correo, Asunto, mensaje) VALUES ('$nombre','$email','$Asunto','$mensaje')";

	if (mysqli_query($conn, $sql)) {
		echo "Nuevo registro agregado";
	}
	else{
		echo "Error al insertar".$conn;
	}
	mysqli_close($conn);
?>