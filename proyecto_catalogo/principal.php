<?php
include ('conf/config.inc.php');
session_start();
if(isset($_SESSION['usuario']))
{
	$vars['usuario']=$_SESSION['usuario'];
	echo $tpl->cargar('plt_menu.html',$vars);
}
else //no existe la varible de sesion usuario
{
	header('Location:index.php');
}
?>