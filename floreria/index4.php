<?php
$conexion=mysqli_connect('localhost', 'root', '', 'floreria' );
?>

<!doctype html>
<html class="no-js" lang="es">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Floreria Antohan</title>
	<link rel="stylesheet" href="css/foundation.min.css">
	<link href='css/foundation-icons.css' rel='stylesheet' type='text/css'>
	<script>window.$ = window.jQuery = require('js/jquery.js');</script>
	<script src="js/jquery.flipster.min.js"></script>
	<link rel="stylesheet" href="css/estilos3.css">
	<link rel="icon" href="img/rosa_icono.ico">
	<link href="https://fonts.googleapis.com/css?family=Racing+Sans+One" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
</head>
<body>
<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-2195009-2', 'auto');
      ga('send', 'pageview');

      ga('create', 'UA-2195009-27', 'auto', {name: "foundation"});
      ga('foundation.send', 'pageview');
</script>

<!--barra de navegacion-->
<div class="top-bar" id="top-bar">
	<div class="row">
		<div class="top-bar-left">
			<ul class="dropdown menu" id="ya" data-dropdown-menu>
				<li class="menu-text" id="logo"><img src="img/logo.jpg" alt=""></li>
			</ul>
		</div>
		<div id="link-sesion" class="top-bar-right">
			<p><a href="index2.html" class="rosa Racing">Atras</a></p>
		</div>
	</div>
</div>
<!--barra de navegacion-->

<div class="row">

	<h5>Empleados</h5>
	<br>
	<table>
	  <thead>
	    <tr>
	      <th width="200">Nombre</th>
	      <th width="150">Apellido</th>
	      <th width="90">Edad</th>
	      <th width="150">Correo</th>
	      <th width="150">Telefono</th>
	      <th width="150">Direccion</th>
	      <td width="50">Eliminar</td>
	    </tr>
	  </thead>

<?php
	$sql="SELECT nombre, apellido, edad, correo, telefono, direccion from registro";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
?>
	  <tbody>
	      <td><?php echo $mostrar['nombre']?></td>
	      <td><?php echo $mostrar['apellido']?></td>
	      <td><?php echo $mostrar['edad']?></td>
	      <td><?php echo $mostrar['correo']?></td>
	      <td><?php echo $mostrar['telefono']?></td>
	      <td><?php echo $mostrar['direccion']?></td>
	  </tbody>
	  <?php
	  }
	  ?>
	</table>
</div>

<div class="row">
	<h5>Cambiar llave</h5>
		  <div class="small-2 large-4 columns">
			<label for="">Nueva llave:
				<input type="text" placeholder="nueva llave">
			</label>
		  </div>
		  <div class="small-4 large-4 columns">
			<label for="">Confirmar llave: 
				<input type="text" placeholder="confirmar llave">
			</label>
		  </div>
		  <div class="small-6 large-4 columns">
			<label for="">Correo administrativo: 
				<input type="text" placeholder="correo administrativo">
			</label>
		  </div>
	  </div>

<div class="row column">
	<hr>
	<ul class="menu rosa" id="footer">
		<li class="Racing">Floreria Antohan</li>
		<li class="float-right Racing">Copyright 2017 MonzterSoftware</li>
	</ul>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>
