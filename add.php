<?php

	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$database = new Connection();
		$db = $database->open();
		try{
			// declaración preparada para prevenir la inyección de sql
			$stmt = $db->prepare("INSERT INTO facturas (fecha, turno, capturista, autobus, rol, conductor, inversionista, monto) 
			VALUES (:fecha, :turno, :capturista, :autobus, :rol, :conductor, :inversionista, :monto)");
			//  declaración preparada para el resultado o un error
			$_SESSION['message'] = ( $stmt->execute(array(':fecha' => $_POST['fecha'] ,
			 ':turno' => $_POST['turno'] , ':capturista' => $_POST['capturista'] ,
			  ':autobus' => $_POST['autobus'] , ':rol' => $_POST['rol'] , 
			  ':conductor' => $_POST['conductor'] , ':inversionista' => $_POST['inversionista'] ,
			   ':monto' => $_POST['monto'])) ) ? 'Miembro agregado correctamente' : 'Error al agregar registro';	
	    
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//cierro la conexión
		$database->close();
	}

	else{
		$_SESSION['message'] = 'Comienza desde el inicio';
	}

	header('location: formulario.php');
	
?>
