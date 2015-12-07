<?php
include('conf/config.inc.php'); //Se agrega el archivo config en la carpeta conf
session_start(); //iniciamos la sesion
$vars="";
if(isset($_SESSION['usuario']))//Se verifica si la sesion existe
{
	$vars['actual']=$_SESSION['usuario'];
	echo $tpl->cargar_parte('plt_listadoCalzado.html','encabezado',$vars); //Cargamos la plantilla de listado de amigos
	$consulta="SELECT * FROM zapatos"; //Realizamos una consulta para seleccionar todos los datos de la tabla amigos
	$resultado= mysqli_query($conexion,$consulta);
	if(!$resultado)//Si NO hay resultado, madamos un mensaje de error
	{
		die("error en la consulta");
	}
	else //si hay resultado, entonces. Mostramos los datos de los amigos existentes
	{
		for ($i=1;$i<=mysqli_num_rows($resultado);$i++)
		{
			$fila=mysqli_fetch_array($resultado);
			$vars['clave']=$fila['clave_zapato'];
			$vars['modelo']=$fila['modelo'];
			$vars['marca']=$fila['marca'];
			$vars['precio']=$fila['precio'];
			echo $tpl->cargar_parte('plt_listadoCalzado.html','fila',$vars);
		}
		$vars="";
		echo $tpl->cargar_parte('plt_listadoCalzado.html','pie',$vars);
		}
	}

else //si no existe la sesion entonces, lo mandamos a la página principal 
{
 header('Location: index.php');
}
?>