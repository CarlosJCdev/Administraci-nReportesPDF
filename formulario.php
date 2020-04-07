<!DOCTYPE html>
<html lang="en">
<head>
	<!-- LINK TO STYLE AND CONTROL FILES ALSO JAVASCRIPT, PHP, BOOTSTRAP, JQUERY TO COMPLEMENT THE PROYECT -->
	<meta charset="UTF-8">
	<title>Autobuses</title>
	<meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/ventanaModal.css">
	<script src="js/push.min.js"></script>
	<script src="js/validaciones.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="js/sections.js"></script>
	<script src="js/main2.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/custom.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/font-awesome.css">
	<link rel="shortcut icon" href="css/autobus.png" />
	<link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="alertifyjs/themes/default.css">
	<script src="js/fecha.js"></script>
	<script src="jquery-3.2.1.min.js"></script>
	<script src="alertifyjs/alertify.js"></script>
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/bootstrap-theme.css" rel="stylesheet">
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<!-------------------------------------------------------------------------------------- -->
</head>
<!--#####################################################################-->
<body>
<!--Funcion para mostrar alerta, solo los jueves y viernes--> 
		<script type="text/javascript">
		function test(){
		var J = new Date();
		var V = new Date();
		if(J.getDay()==4){
		alertify.confirm('Sistema Autotransportes', 'Importante: Hoy es Jueves captura cuentas' , function () {
		alertify.success('Enterado')}
		,function () { alertify.error('Ha candelado la notificación') });
		}if(V.getDay()==5){
		alertify.confirm('Sistema Autotransportes', 'Importante: Hoy es Viernes captura cuentas' , function () {
		alertify.success('Enterado')}
		,function () { alertify.error('Ha candelado la notificación') });
		}
		}
		test();
		</script>
<!--Fin de la funcion para mostrar alerta, solo los jueves y viernes--> 
<!--#####################################################################-->
<!--#####################################################################-->
<!--Cabezera de la pagina con los enlaces a recargar pagina, agregar registros y cerrar sesión--> 
	<header>
		<div class="navegacion">
		<div class="boton-menu">
			<a href="#"><span class="icon icon-menu"></span></a>
		</div>
		<nav>
			<ul class="menu">
				<li><a href="formulario.php">Inicio</a></li>
				<li><a href="logout.php">Cerrar Sesión</a></li>
				<li class="conect"><a><?php $mysqli = new mysqli("localhost", "root", "", "bdlogin");
				if($mysqli->connect_errno){
						die('No conectado:'. $mysqli->connect_errno);
				}else{
					print("Conectado al sistema");
				}
				$mysqli->close();
				?></a></li>
			</ul>
		</nav>
		</div>
	</header>
<!--Fin de la cabezera de la pagina con los enlaces a recargar pagina, agregar registros y cerrar sesión--> 
<!--#####################################################################-->
&nbsp;
<!--#####################################################################-->
<!--Seccion del panel accordion del formulario-->
	<button class="accordion" id="capital" >Formulario Semanal</button>
	<div class="panel">
		<form method="POST" action="add.php" autocomplete="off">
			<div class="signup">	
				<div class="input_group">
				<input class="fecha" style="text-align: center;"placeholder="Fecha" name="fecha" id="fecha" readonly>
				<input class="turno" style="text-align: center;"placeholder="Turno" name="turno" id="turno" require>
				</div>
				<div class="input_group">
				<input class="capturista" style="text-align: center;" placeholder="Capturista" name="capturista" id="capturista" require>
				<input class="autobus" style="text-align: center;" placeholder="Autobus" name="autobus" id="autobus" require>
				</div>
				<div class="input_group">
				<input class="rol" style="text-align: center;" name="rol" placeholder="Rol" id="rol" require>
				<input class="conductor" style="text-align: center;" name="conductor" placeholder="Conductor" id="conductor" require>
				</div>
				<div class="input_group">
				<input class="inversionista" style="text-align: center;" name="inversionista" placeholder="Dueño" id="inversionista" require>
				<input class="monto" style="text-align: center;" name="monto" id="monto" placeholder="Monto" require>
				</div>
				<div class="input_btn">
				<button type="submit" name="add" class="btn btn-primary" onclick="valida_envio()"><span class="fa fa-save"></span> Guardar</a>
				</div>
			</div> 
		</form>
    </div>     
<!--Fin del panel accordion del formulario-->
<!--#####################################################################-->
<!--Seccion del panel accordion de la tabla con registros-->
	<button class="accordion">Facturación</button>
	&nbsp;
	<div class="panel1" id="tabla">
	<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<a class="btn btn-primary" type="submit" href="pdf.php" target="_blank"><span class="fa fa-plus"></span> Generar PDF</a>
            <?php 
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-dismissible alert-success" style="margin-top:20px;">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php
                    unset($_SESSION['message']);
                }
            ?>
			<table class="table table-bordered table-striped" style="margin-top:20px;">
				<thead>
					<th>id</th>
					<th>fecha</th>
					<th>turno</th>
					<th>capturista</th>
					<th>autobus</th>
					<th>rol</th>
					<th>conductor</th>
					<th>inversionista</th>
					<th>monto</th>
					<th>acciones</th>
				</thead>
				<tbody>
					<?php
						// incluyo la conexión
						include_once('connection.php');
						$database = new Connection();
    					$db = $database->open();
						try{	
						    $sql = 'SELECT * FROM facturas';
						    foreach ($db->query($sql) as $row) {
						    	?>
						    	<tr>
						    		<td><?php echo $row['id']; ?></td>
						    		<td><?php echo $row['fecha']; ?></td>
						    		<td><?php echo $row['turno']; ?></td>
									<td><?php echo $row['capturista']; ?></td>
									<td><?php echo $row['autobus']; ?></td>
									<td><?php echo $row['rol']; ?></td>
									<td><?php echo $row['conductor']; ?></td>
									<td><?php echo $row['inversionista']; ?></td>
									<td><?php echo $row['monto']; ?></td>
						    		<td>
						    			<a href="#edit_<?php echo $row['id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fa fa-edit"></span> Editar</a>
						    			<a href="#delete_<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="fa fa-trash"></span> Eliminar</a>
						    		</td>
						    		<?php include('edit_delete_modal.php'); ?>
						    	</tr>
						    	<?php 
						    }
						}
						catch(PDOException $e){
							echo "Problema con la conexión: " . $e->getMessage();
						}
						//cerrar conexión
						$database->close();
					?>
				</tbody>
			</table>
			</div>
	</div>
</div>
	</div>
<!--Fin de la seccion del panel accordion de la tabla con registros-->
<!--#####################################################################-->
   &nbsp;		
<!--#####################################################################-->
<!--Logíca de la estrucutra de gestión de los paneles accordion-->
	<script id="desplegable">
		var acc = document.getElementsByClassName("accordion");
		var i;
		for (i = 0; i < acc.length; i++) {
			acc[i].addEventListener("click", function () {
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.maxHeight) {
					panel.style.maxHeight = null;
				} else {
					panel.style.maxHeight = panel.scrollHeight + "px";
				}
			});
		}
	</script>
<!--Fin de la logíca de la estrucutra de gestión de los paneles accordion-->
<!--#####################################################################-->
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/custom.js"></script>
</body>
</html>