<?php
include('conf/config.inc.php');
session_start();
$vars="";
if(!isset($_SESSION['usuario']))
{
	header('Location: index.php');
}
else //si existe la variable de session
{
if(!isset($_GET['modelo']))
{
	header('Location: listadoCalzado.php');
}
else //siexiste la variable GET usuarios
{
$consulta="SELECT * FROM zapatos WHERE modelo='{$_GET['modelo']}'";
$resultado=mysqli_query($conexion,$consulta);
if(!$resultado)
{
	die("error en la consulta");
}
else //no hay error en resultado
{
	if(mysqli_num_rows($resultado)==0)
	{
		header('Location: listadoCalzado.php');
	}
	else //si si hay filas en resultado
	{
		$fila=mysqli_fetch_array($resultado);
		$vars['actual']=$_SESSION['usuario'];
		$vars['accion']='B';
		
		$vars['modelo']=$fila['modelo'];
		$vars['marca']=$fila['marca'];
		$vars['color_dispo']=$fila['color_disponible'];
		$vars['precio']=$fila['precio'];
		$vars['descripcion']=$fila['descripcion'];
		$vars['tallas_dispo']=$fila['talla_disponible'];
		
		$vars['titulo']="Borrar Calzado";
		$vars['editable']='readonly';	
		$vars['btnGuardar']='hidden=""';	
		echo $tpl->cargar('plt_editarborrarCalzado.html',$vars);
	}
}
}
}
?>