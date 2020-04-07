<?php

	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$sql = "DELETE FROM facturas WHERE id = '".$_GET['id']."'";
			// declaración if-else en la ejecución de nuestra consulta
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Registro eliminado correctamente' : 'Ocurrió un error al eliminar registro';
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//cerrar conexión
		$database->close();

	}
	else{
		$_SESSION['message'] = 'Seleccione registro para eliminar';
	}

	header('location: formulario.php');

?>