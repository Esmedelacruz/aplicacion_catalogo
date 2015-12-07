<?php
include ('conf/config.inc.php');
session_start();
$vars="";
if(!isset($_POST['txtusuario']))
{
	$vars['mensaje']="Bienvenid@, escribe tus datos";
	echo $tpl->cargar('plt_inicio.html', $vars); 
}
else //si existe el POST de txtnombre
{
	if($_POST['txtusuario']=="" or $_POST['txtpassword']=="")
	{
		$vars['mensaje']="Error, debes llenar todos los campos";
		echo $tpl->cargar('plt_inicio.html', $vars);
	}
	else //si xtxtusuario y txtpassword no estan vacios
	{
		$consulta="SELECT usuario FROM usuarios WHERE usuario='{$_POST['txtusuario']}' AND password=MD5('{$_POST['txtpassword']}')";
		$resultado=mysqli_query($conexion,$consulta);
		if(!$resultado)
		{
			die("Error en la consulta");
		}
		else //si regreso un resultado lleno o vacio
		{
			if(mysqli_num_rows($resultado)>0)
			{ 
				$_SESSION['usuario']=$_POST['txtusuario'];
				header('Location: principal.php');
			}
			else //si el resultado est vacio no tiene fila
			{
				$vars['mensaje']="Error en usuario y/o password";
				echo $tpl->cargar('plt_inicio.html', $vars);
			}
		}
	}
}
?>