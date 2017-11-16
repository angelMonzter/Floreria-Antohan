<?php 
//Proceso de conexión con la base de datos
include("conexion.php");
$link=conectar();

//Inicio de variables de sesión
if (!isset($_SESSION)) {
  session_start();
}

//Recibir los datos ingresados en el formulario
$nombre= $_POST['usuario'];
$password= $_POST['contrasena'];
//include 'AES.php';

//$contra=SED::encryption($password);

$consulta=mysql_query("SELECT nombre, contrasena FROM registro WHERE nombre = '".$nombre."'");
$fila = mysql_fetch_row($consulta);
$contrabd=$fila[1];
echo $contrabd;

if(!$contrabd ){

	?>

	<script type="text/javascript">
		alert("Datos no validos, Favor de verificar los datos...");
		window.location="../index.html";
	</script>
	<?php	
}
else{
	$_SESSION['nombre'] = $fila['nombre'];

	header("Location: ../index2.html"); 

}
?>


