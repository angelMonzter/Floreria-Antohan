<?php

include("conexion.php");
conectar();
// variables
$nombre= $_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$pedido=$_POST['pedido'];
$costo=$_POST['costo'];



//$encrip=password_hash($contrasena,PASSWORD_DEFAULT);
if (empty($nombre && $correo && $telefono && $direccion && $pedido && $costo)) {
	?>
	<script type="text/javascript">
		alert("Favor de llenar todos los campos...");
		window.location="../index2.html";
	</script>
	<?php
}else{



//include 'AES.php';
 //$contra=SED:: encryption($contrasena);

	$consulta=mysql_query("INSERT INTO `pedido` (`id_pedido`, `nombre`, `correo`, `telefono`, `direccion`, `pedido`, `costo`) VALUES ('', '$nombre', ' $correo', '$telefono', '$direccion', '$pedido', '$costo')",$conex) or die ("Error");
	


	?>
<body>
		<script type="text/javascript">
		
		alert("Se ha registrado con exito...");
		window.location="../index.html";
		</script>
</body>

	<?php

}

mysql_close($conex);

?>