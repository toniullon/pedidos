$( document ).ready(function() {
    var hoy = new Date().toJSON().slice(0, 10);
    console.log(hoy);
    $("#fecha_pedido").val(hoy);
	$("#fecha_pedido1").val(hoy);



	 // capturamos la url
    var loc = document.location.href;
	
    // si existe el interrogante
    if(loc.indexOf('?')>0)
    {
        // cogemos la parte de la url que hay despues del interrogante
        var getString = loc.split('=')[1];
		
       $('#id_usuario').val(getString);
    } 
	$('#registrar').modal('toggle');
});
function parametro(){
	
		 // capturamos la url
    var loc = document.location.href;
	
    // si existe el interrogante
    if(loc.indexOf('?')>0)
    {
        // cogemos la parte de la url que hay despues del interrogante
        var getString = loc.split('=')[1];
		//alert(getString);
       $('#id_usuario').val(getString);
    } 
	
}



function usuariocargar(){
	//para cargar el usuario
	//alert("pedidos");
	var nombre_usuario = $('#nombre_usuario').val();
	//alert(nombre_usuario);
        $.ajax({
            type:'POST',
            url:'getData.php',
            dataType: "JSON",
            data:{nombre_usuario:nombre_usuario},
            success:function(data){
                if(data.status == 'ok'){
                    $('#id_usuario').val(data.result.id_usuario);
                    $('#nombre_usuario').val(data.result.nombre_usuario);
                  //  $('#userPhone').text(data.result.phone);
                  //  $('#userCreated').text(data.result.created);
                  //  $('.user-content').slideDown();
			//	alert(data.result.id_usuario);
			//	alert(data.result.nombre_usuario);
					alert("encontro");
                }else{
                 //   $('.user-content').slideUp();
                    alert("User not found...");
                } 
            }

    

});
}
function fecha(){
var hoy = new Date()
console.log(hoy);
    $("#fecha_pedido").val(hoy);
	//alert(hoy);
}
	function buscar(){
		//alert("gg");
		var id_usuario = $("#id_usuario").val();
		    $.ajax({
       url: 'buscar.php',
         type: 'POST',
       dataType: 'html', 
        data: {id_usuario:id_usuario},
           
        })
		.done(function(respuesta){
			$("#datos").html(respuesta);
		})
       .fail(function(){
		   console.log("error");
	   })
		
		
    }
	function ver(){
		var d = $("#id_usuario").val();
		location.href = "registrar.html?num="+d;
	}
	function pro(){
	var d = $("#id_usuario").val();
		location.href = "productos.html?num="+d;
	}
function ace(){
	var d = $("#id_usuario").val();
		location.href = "accesorios.html?num="+d;
	}
	function sam(){
	var d = $("#id_usuario").val();
		location.href = "samsung.html?num="+d;
	}
	
	function LG(){
	var d = $("#id_usuario").val();
		location.href = "LG.html?num="+d;
	}
	
	
	
	function ho(){
	//para cargar el usuario
	
	var id_pedido = $('#id_pedido').val();
	//alert(id_pedido);
        $.ajax({
            type:'POST',
            url:'eliminar.php',
            dataType: 'html',
            data:{id_pedido:id_pedido},
                })
		.done(function(respuesta){
			buscar();
		})
       .fail(function(){
		   console.log("error");
	    console.log("error");
	   })
		
		
    }
	
	function revisar(){
		//alert("producto");
		var num1 = $('#id_usuario').val();
			var num2 = 1;
	
			if(num1 == num2)
			{
			//	alert("yes");
				$("#agregarfin").css("display", "none");
				 //agregarfin.disabled = true;
				
			}else
			//	alert("nou");
			
				$("#agregarfin").css("display", "block");
	buscar();
				
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	