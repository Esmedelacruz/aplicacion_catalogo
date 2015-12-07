<?php
include('conf/config.inc.php');
$consulta="SELECT * FROM zapatos WHERE marca = '{$_POST['marca']}' ";
$resultado=mysqli_query($conexion, $consulta);
if (!$resultado)
{
	die("Error en la consulta");
}
else
{
	$enviar = '{"tenis" : [';
	$i = false;
	
	while ($fila_zapato = mysqli_fetch_array($resultado))
	{
		if($i)
		{
			$enviar.=',';
		}
		$enviar .='{"clave_zapato":"'.$fila_zapato["clave_zapato"] .'","modelo":"'.$fila_zapato["modelo"] .'", "marca":"'.$fila_zapato["marca"].'","color_disponible":"'.$fila_zapato["color_disponible"] .'","precio":"'.$fila_zapato["precio"].'","descripcion":"'.$fila_zapato["descripcion"].'","talla_disponible":"'.$fila_zapato["talla_disponible"].'"}';
		
		$i=true;
	}
	}
	$enviar .=']}';
	echo $enviar;
?>