<?php
include("conexion.php");
conectar();

$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$rango=$_POST['rango'];
$fecha=$_POST['fecha'];
$nombredestino=$_POST['nombredestino'];
$empresa=$_POST['empresa'];
$provincia=$_POST['provincia'];
$direccion=$_POST['direccion'];
$codigopostal=$_POST['codigopostal'];


if (empty($nombre && $telefono && $correo && $rango && $fecha && $nombredestino && $empresa && $provincia && $direccion && $codigopostal)) {
	
	?>
	<script type="text/javascript">
		alert("Favor de llenar todos los campos...");
		window.location="../index-web-pedido.html";
	</script>
	<?php
}else{

	$insert=mysql_query("INSERT INTO pedidoweb (`id_pedidoweb`, `nombre`, `telefono`, `correo`, `rango`, `fecha`, `nombredestino`, `empresa`, `provincia`, `direccion`, `codigopostal`) VALUES(NULL, '$nombre', '$telefono', '$correo', '$rango', '$fecha','$nombredestino', '$empresa', '$provincia', '$direccion', '$codigopostal')", $conex) or die(mysql_error($insert));
	?>
<body>
		<script type="text/javascript">
		
		alert("Su pedido ah sido enviado...");
		window.location="../index-web.html";
		</script>
</body>

	<?php
}
?>
