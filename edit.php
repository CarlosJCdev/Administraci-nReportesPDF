<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			$fecha = $_POST['fecha'];
			$turno = $_POST['turno'];
			$capturista = $_POST['capturista'];
			$autobus = $_POST['autobus'];
			$rol = $_POST['rol'];
			$conductor = $_POST['conductor'];
			$inversionista = $_POST['inversionista'];
			$monto = $_POST['monto'];

			$sql = "UPDATE facturas SET fecha = '$fecha', turno = '$turno', capturista = '$capturista', autobus = '$autobus', 
			rol = '$rol', conductor = '$conductor', inversionista = '$inversionista', monto = '$monto' WHERE id = '$id'";
			// declaración if-else en la ejecución de nuestra consulta
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Los datos se actualizaron' : 'Ocurrio un error. No se pudo actualizar';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//cerrar conexión 
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Primero debe llenar el el formulario';
	}

	header('location: formulario.php');

?>