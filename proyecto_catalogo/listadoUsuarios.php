<?php
include('conf/config.inc.php');
session_start();
$vars="";
if(isset($_SESSION['usuario']))
{
	$vars['actual']=$_SESSION['usuario'];
	echo $tpl->cargar_parte('plt_listadoUsuarios.html','encabezado',$vars);
	$consulta="SELECT usuario FROM usuarios WHERE usuario <> '{$_SESSION['usuario']}'";
	$resultado= mysqli_query($conexion,$consulta);
	if(!$resultado)
	{
		die("error en la consulta");
	}
	else //si hay resultado
	{
		for ($i=1;$i<=mysqli_num_rows($resultado);$i++)
		{
			$fila=mysqli_fetch_array($resultado);
			$vars['usuario']=$fila['usuario'];
			echo $tpl->cargar_parte('plt_listadoUsuarios.html','fila',$vars);
		}
		$vars="";
		echo $tpl->cargar_parte('plt_listadoUsuarios.html','pie',$vars);
		}
	}

else //si no existe sesion usuario
{
 header('Location: index.php');
}
?>