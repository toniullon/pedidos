
 function agregar(){
		var id_usuario = $("#id_usuario").val();
        var fecha_pedido = $("#fecha_pedido").val();
		var total = $("#precio_pedido").val();
		 var cantidad_pedido = $("#cantidad_pedido").val();
        var estado_pedido = $("#estado_pedido").val();
		 var id_producto = $("#id_producto").val();
		 var total_pedido = cantidad_pedido * total;
		
        $.post("pedidos.php",{ fecha_pedido : fecha_pedido, estado_pedido : estado_pedido , id_producto : id_producto , cantidad_pedido : cantidad_pedido, total_pedido : total_pedido, id_usuario:id_usuario },function(respuesta){
            if (respuesta == true) {
              /*$
			  $("#productouno").remove();
			  */
			  $('.fade').remove();

$('body').removeClass('modal-open');
  $("#productodos").show("slow");
  $("#productodos").hide(3000);
            }
            else{
                 alert("no se pudo agregar");
            }
        });
    }
	function menu(){


 var loc = document.location.href;
	
    // si existe el interrogante
    if(loc.indexOf('?')>0)
    {
        // cogemos la parte de la url que hay despues del interrogante
        var getString = loc.split('=')[1];
		//alert(getString);
      location.href = "menu.html?num="+getString;
    } 
	
	
		
	}
	
	function comparar(){
		//alert("producto");
		var num1 = $('#id_usuario').val();
			var num2 = 1;
	
			if(num1 == num2)
			{
				car();
				
			}else
				agregar();
	
				
	}
	function comparar1(){
	//	alert("producto");
		var num1 = $('#id_usuario').val();
			var num2 = 1;
	
			if(num1 == num2)
			{
				car();
				
			}else
				hola();
	
				
	}
	function comparar2(){
		//alert("producto");
		var num1 = $('#id_usuario').val();
			var num2 = 1;
	
			if(num1 == num2)
			{
				car();
				
			}else
				agrega();
	
				
	}
	
	function car(){
	//para cargar el usuario
	//alert("sefuti");
	var nombre_usuario = $('#nombre_usuario').val();
	
        $.ajax({
            type:'POST',
            url:'getData.php',
            dataType: "JSON",
            data:{nombre_usuario:nombre_usuario},
            success:function(data){
                if(data.status == 'ok'){
                    $('#id_usuario').val(data.result.id_usuario);
                    $('#nombre_usuario').val(data.result.nombre_usuario);
                 
				
					//alert("encontro");
					var d = $("#id_usuario").val();
					window.history.pushState(data, "Titulo", "productos.html?num="+d);
					
					
                }else{
                 //   $('.user-content').slideUp();
                    alert("error...");
                } 
		}
});
}
	
	
function agrega(){
		
		var id_usuario = $("#id_usuario").val();
        var fecha_pedido = $("#fecha_pedido2").val();
		 var cantidad_pedido = $("#cantidad_pedido2").val();
        var estado_pedido = $("#estado_pedido2").val();
		 var id_producto = $("#id_producto2").val();
		 var total = $("#precio_pedido2").val();
		  var total_pedido = cantidad_pedido * total;
        $.post("pedidos.php",{ fecha_pedido : fecha_pedido, estado_pedido : estado_pedido , id_producto : id_producto , cantidad_pedido : cantidad_pedido, total_pedido : total_pedido, id_usuario:id_usuario },function(respuesta){
            if (respuesta == true) {
              /*$
			  $("#productouno").remove();
			  */
			  $('.fade').remove();

$('body').removeClass('modal-open');
  $("#productodos").show("slow");
  $("#productodos").hide(3000);
  
            }
            else{
                alert("no se pudo agregar");
            }
        });
}

function hola(){
		var id_usuario = $("#id_usuario").val();
        var fecha_pedido = $("#fecha_pedido1").val();
		 var cantidad_pedido = $("#cantidad_pedido1").val();
        var estado_pedido = $("#estado_pedido1").val();
		 var id_producto = $("#id_producto1").val();
		 var total = $("#precio_pedido1").val();
		  var total_pedido = cantidad_pedido * total;
		
        $.post("pedidos.php",{  fecha_pedido : fecha_pedido, estado_pedido : estado_pedido , id_producto : id_producto , cantidad_pedido : cantidad_pedido, total_pedido : total_pedido, id_usuario:id_usuario },function(respuesta){
            if (respuesta == true) {
			//	alert("se agrego con exito");
              /*$
			  $("#productouno").remove();
			  */
			  $('.fade').remove();

$('body').removeClass('modal-open');
  $("#productodos").show("slow");
  $("#productodos").hide(3000);
  
            }
            else{
                 alert("no se pudo agregar");
            }
        });
    
	}