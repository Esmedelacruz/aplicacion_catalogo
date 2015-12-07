<?php
include ('conf/config.inc.php');
session_start();
if(isset($_SESSION['usuario']))
{
	if(!isset($_POST['txtusuario']))
{
$vars['mensaje']= "llena los campos para agregar al usuario";
$vars['usuario']= $_SESSION['usuario'];
echo $tpl->cargar('plt_altaUsuario.html',$vars);
}
else
{
	if($_POST['txtusuario']=="" or $_POST['txtpassword']=="")
{
	$vars['usuario']= $_SESSION['usuario'];
	$vars['mensaje']= "Error, debes llenar todos los campos";
	echo $tpl->cargar('plt_altaUsuario.html',$vars);
}
else //si vienen llenas las variables POST
{
	$consulta= "SELECT usuario FROM usuarios WHERE usuario='{$_POST['txtusuario']}'";
	$resultado= mysqli_query($conexion,$consulta);
	if(!$resultado)
	{
		die("error en la consulta");
	}
	else //si existe resultado de la consulta
	{
		if (mysqli_num_rows($resultado)>0)
		{
			$vars['usuario']=$_SESSION['usuario'];
			$vars['mensaje']="Error, ese usuario ya existe";
			echo $tpl->cargar('plt_altaUsuario.html',$vars);

		}
		else //si $resultado viene vacio
		{
		      mysqli_free_result($resultado);
			  $consultaAlta= "INSERT INTO usuarios(usuario,password) VALUES ('{$_POST['txtusuario']}', MD5('{$_POST['txtpassword']}'))";
			  $resultado= mysqli_query($conexion, $consultaAlta);
			  if(!$resultado)
			  {
				  die("error en la insercion de usuario");
			  }
			  else
			  {
				  $vars['usuario']=$_SESSION['usuario'];
				  $vars['mensaje']="se agrego '{$_POST ['txtusuario']}'";
				  echo $tpl->cargar('plt_altaUsuario.html',$vars);
			  }
		}
	}
}
}
}
else 
{
header('Location: index.php');
}
?>