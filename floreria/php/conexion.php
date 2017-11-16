<?php

function conectar(){
	global $conex;
	$usr="root";
	$psw="root";
	$serv="localhost";
	$bd="Floreria Antohan";

	$conex=mysql_connect($serv, $usr, $psw) or die(mysql_error());

	mysql_select_db($bd,$conex) or die(mysql_error());

	return $conex;
}

?>