<?php
include('conf/config.inc.php');
session_start();
if(isset($_SESSION['usuario']))
{
	if($_POST['txtaccion']=="E")
	{
		$consulta = "UPDATE zapatos SET marca = '{$_POST['txtmarca']}', color_disponible = '{$_POST['txtcolodispo']}', precio = '{$_POST['txtprecio']}', descripcion = '{$_POST['txtdescripcion']}', talla_disponible = '{$_POST['txttallasdispo']}' WHERE modelo = '{$_POST['txtmodelo']}'";
		
	$resultado = mysqli_query($conexion, $consulta);
	
	if(!$resultado)
	   {
		  die("Error en la consulta GUARDAR");
	   }
	      else //SI LA CONSULTA ES CORRECTA
	   {
		  header('location: listadoCalzado.php');
	   }
	   
	   
	}
	else
	{
		$consulta = "DELETE FROM zapatos WHERE modelo = '{$_POST['txtmodelo']}'";
		$resultado = mysqli_query($conexion, $consulta);
	}
	if(!$resultado)
	   {
		  die("Error en la consulta BORRAR");
	   }
	      else //SI LA CONSULTA ES CORRECTA
	   {
		  header('location: listadoCalzado.php');
	   }
}
else
{

		header('location: index.php');
}
	
?>