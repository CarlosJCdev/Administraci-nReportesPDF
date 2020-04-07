<?php
$conexion= mysqli_connect("localhost", "root", "", "bdlogin");
$acentos = $conexion ->query("SET NAMES 'UTF8'");

if((isset($_POST['fecha']) && !empty($_POST['fecha']))
&&(isset($_POST['turno']) && !empty($_POST['fecha']))
&&(isset($_POST['capturista']) && !empty($_POST['capturista']))
&&(isset($_POST['autobus']) && !empty($_POST['autobus']))
&&(isset($_POST['rol']) && !empty($_POST['rol']))
&&(isset($_POST['conductor']) && !empty($_POST['conductor']))
&&(isset($_POST['inversionista']) && !empty($_POST['inversionista']))
&&(isset($_POST['monto']) && !empty($_POST['monto']))){

$fecha = ($_POST['fecha']);
$turno = ($_POST['turno']);
$capturista = ($_POST['capturista']);
$autobus = ($_POST['autobus']);
$rol = ($_POST['rol']);
$conductor = ($_POST['conductor']);
$inversionista = ($_POST['inversionista']);
$monto = ($_POST['monto']);
$insercion = "INSERT INTO facturas (fecha, turno, capturista, autobus, rol, conductor, inversionista, monto) 
VALUES ('$fecha', '$turno', '$capturista', '$autobus', '$rol', '$conductor', '$inversionista', '$monto')";
$consulta= mysqli_query($conexion, $insercion);
if($consulta){
  echo "Envio correcto";
  header("location: formulario.php");
}else{
    echo "Error";
}
}
?>

