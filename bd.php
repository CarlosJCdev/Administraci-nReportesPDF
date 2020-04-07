<?php

$USUARIO=$_POST["USUARIO"];
$PASS=$_POST["PASS"];

$conexion=mysqli_connect("localhost", "root", "", "bdlogin");
$consulta="SELECT* FROM usuarios WHERE USUARIO='$USUARIO' and PASS='$PASS'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){
    header("location: formulario.php");
} else{
    echo"Usuario no valido";
}
mysqli_free_results($resultado);
mysqli_close($conexion);

?>
