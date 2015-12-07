<?php
include('conf/config.inc.php');
session_start();
if(isset($_SESSION['usuario']))
{
	if($_POST['txtaccion']=="E")
	{
	$consulta = "UPDATE usuarios SET password = MD5( '{$_POST['txtpassword']}') WHERE usuario = '{$_POST['txtusuario']}'";
	$resultado = mysqli_query($conexion, $consulta);
	}
	else
	{
		$consulta = "DELETE FROM usuarios WHERE usuario = '{$_POST['txtusuario']}'";
		$resultado = mysqli_query($conexion, $consulta);
	}
	if(!$resultado)
	{
		die("Error en la consulta");
	}
	else //SI LA CONSULTA ES CORRECTA
	{
		header('location: listadoUsuarios.php');
	}
}
else
{

		header('location: index.php');
}
	
?>