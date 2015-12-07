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
if(!isset($_GET['usuario']))
{
	header('Location: listadoUsuarios.php');
}
else //siexiste la variable GET usuarios
{
$consulta="SELECT * FROM usuarios WHERE usuario='{$_GET['usuario']}'";
$resultado=mysqli_query($conexion,$consulta);
if(!$resultado)
{
	die("error en la consulta");
}
else //no hay error en resultado
{
	if(mysqli_num_rows($resultado)==0)
	{
		header('Location: listadoUsuarios.php');
	}
	else //si si hay filas en resultado
	{
		$fila=mysqli_fetch_array($resultado);
		$vars['actual']=$_SESSION['usuario'];
		$vars['accion']='E';
		$vars['usuario']=$fila['usuario'];
		$vars['password']=$fila['password'];
		$vars['titulo']="Editar Usuario";
		$vars['editable']="";	
		$vars['btnBorrar']='hidden=""';	
		echo $tpl->cargar('plt_editarborrarUsuario.html',$vars);
	}
}
}
}
?>