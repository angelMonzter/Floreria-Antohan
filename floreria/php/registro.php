<?php

include("conexion.php");
conectar();
// variables
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$genero=$_POST["genero"]; 
$edad=$_POST['edad'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$usuario=$_POST['usuario'];
$contrasena= $_POST['contrasena'];
$contrasena2= $_POST['contrasena2'];
$direccion=$_POST['direccion'];
$llave=$_POST['llave'];

$llave1='Antohan';

$encrip=password_hash($contrasena,PASSWORD_DEFAULT);
if (empty($nombre && $apellido && $edad && $correo && $telefono && $usuario && $contrasena && $direccion && $llave)) {
	?>
	<script type="text/javascript">
		alert("Favor de llenar todos los campos...");
		window.location="../index3.html";
	</script>
	<?php
}else{


	if ($contrasena == $contrasena2 && $llave == $llave1) {
//include 'AES.php';
 //$contra=SED:: encryption($contrasena);

	$consulta=mysql_query("insert into registro ('id_registro', 'nombre', 'apellido', 'genero', 'edad', 'correo', 'telefono', 'usuario', 'contrasena', 'direccion', 'llave') values ('$nombre', '$apellido', '$genero', '$edad', '$correo', '$telefono', '$usuario', 'contrasena', '$direccion','$llave' )", $conex) or die(mysql_error($consulta));


	?>
<body>
		<script type="text/javascript">
		
		alert("Se ha registrado con exito...");
		window.location="../index.html";
		</script>
</body>

	<?php

}else{	
	?>
	<script type="text/javascript">
		alert("Contraseña o llave incorrectas favor de corregir");
		window.location="../index3.html";
	</script>
	<?php
}
}

mysql_close($conex);

?>