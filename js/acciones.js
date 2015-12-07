// JavaScript Document
$(document).ready(function(e) {

document.addEventListener("deviceready",function(){
	
	$('.btnmarca').on('tap',function (){
		 $.ajax({
			type: "POST",
			url: "http://192.168.1.160/proyecto_catalogo/buscarmarca.php",
			data: "marca=" + $(this).attr('id'),
			error: function(){alert("error en conexion ");} ,
			success: function(respuesta){
				var producto = JSON.parse(respuesta);
			$('#contenido').empty();
			for(var $x=0;$x < producto.tenis.length;$x++) 
			{			
				$('#contenido').append('<div><div align="center"><table width="150" height="100" border="5" ><tr><th width="150"height="100" bgcolor="#00FF99"><img src="http://192.168.1.160/proyecto_catalogo/recursos/imagenes/fotos/'+ producto.tenis[$x].clave_zapato +'.jpg" width="150" height="100"></th><th width="354" bgcolor="#00FF99"><p>'+ producto.tenis[$x].modelo +' </p><p>'+ producto.tenis[$x].marca +'</p><p>'+ producto.tenis[$x].color_disponible +'</p><p>'+ producto.tenis[$x].precio +'</p><p>'+ producto.tenis[$x].descripcion +'</p><p>'+ producto.tenis[$x].talla_disponible +'</p></th></tr></table></div></div>');}
			$(':mobile-pagecontainer').pagecontainer('change','#pagina1',{transition:'pop'});
			
			}
			
			});//ajax todos
	});
	
	
	
	
	
	
	
	
	
	
	
	
	
	$('#btnlista').on('tap',function(){
	    $.ajax({
			type: "POST",
			url: "http://192.168.1.160/proyecto_catalogo/buscartodo.php",
			data: "",
			error: function (){alert("error en conexion todos");},
			success: function(respuesta){
				alert(respuesta);
				var producto = JSON.parse(respuesta);
				
			$('#contenido').empty();
			for(var $x=0;$x < producto.tenis.length;$x++) 
			{	
				$('#contenido').append('<div><div align="center"><table width="150" height="100" border="5" ><tr><th width="150"height="100" bgcolor="#00FF99"><img src="http://192.168.1.160/proyecto_catalogo/recursos/imagenes/fotos/'+ producto.tenis[$x].clave_zapato +'.jpg" width="150" height="100"></th><th width="354" bgcolor="#00FF99"><p>'+ producto.tenis[$x].modelo +' </p><p>'+ producto.tenis[$x].marca +'</p><p>'+ producto.tenis[$x].color_disponible +'</p><p>'+ producto.tenis[$x].precio +'</p><p>'+ producto.tenis[$x].descripcion +'</p><p>'+ producto.tenis[$x].talla_disponible +'</p></th></tr></table></div></div>');}
			$(':mobile-pagecontainer').pagecontainer('change','#pagina1',{transition:'pop'});
			
			}
			
			});//ajax todos
			});//tap btnListado
}); // dev ready
});//ready doc