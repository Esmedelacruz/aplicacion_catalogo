<?php
include ('conf/config.inc.php');
session_start();
if(isset($_SESSION['usuario']))
{
	if(!isset($_POST['txtmodelo']))
{
$vars['mensaje']= "llena los campos para agregar el calzado";
$vars['usuario']= $_SESSION['usuario'];
echo $tpl->cargar('plt_altaCalzado.html',$vars);
}
else
{
	if($_POST['txtmodelo']=="" or $_POST['txtmarca']=="" or $_POST['txtcolordispo']=="" or $_POST['txtprecio']=="" or $_POST['txtdescripcion']=="" or $_POST['txttallasdispo']=="" )
{
	$vars['usuario']= $_SESSION['usuario'];
	$vars['mensaje']= "Error, debes llenar todos los campos";
	echo $tpl->cargar('plt_altaCalzado.html',$vars);
}
else //si vienen llenas las variables POST
{
    $consultaAlta= "INSERT INTO zapatos(modelo,marca,color_disponible,precio,descripcion,talla_disponible) VALUES ('{$_POST['txtmodelo']}','{$_POST['txtmarca']}', '{$_POST['txtcolordispo']}', '{$_POST['txtprecio']}','{$_POST['txtdescripcion']}','{$_POST['txttallasdispo']}')" ; //Se realiza la consulta para agregar la informacion a la Base de Datos dentro de la tabla amigos
	$resultado= mysqli_query($conexion,$consultaAlta);
	if(!$resultado)
	{
		die("Error en la insercion de calzado");
	}
	else //si existe resultado de la consulta
	{
				  $consultaImagen= "SELECT MAX(clave_zapato) AS ultimo FROM zapatos"; //Realizamos la consulta para asignarle una "clave" a ala imagen seleccionada, se le asigna el ultimo numero" 
				  $resultado= mysqli_query($conexion, $consultaImagen);
				  $fila= mysqli_fetch_array($resultado);
				  $nombre_tmp=$_FILES["imagen"]["tmp_name"];
				  $nombre=$_FILES["imagen"]["name"];
				  move_uploaded_file($nombre_tmp,"recursos/imagenes/fotos/".$fila['ultimo'].strrchr($nombre,"."));
				  $vars['usuario']=$_SESSION['usuario'];
				  $vars['mensaje']="se agrego '{$_POST ['txtmodelo']}'";
				  echo $tpl->cargar('plt_altaCalzado.html',$vars);
			  }
		}
	}
}
else 
{
header('Location: index.php');
}

?>