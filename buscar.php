<?php  

// Dirección o IP del servidor MySQL
    $host = "localhost";
 
    // Puerto del servidor MySQL
    $puerto = "3306";
 
   // Nombre de usuario del servidor MySQL
   $usuario = "root";
 
    // Contraseña del usuario
   $contrasena = "";
 
   // Nombre de la base de datos
   $baseDeDatos ="pedidos";
 
   // Nombre de la tabla a trabajar
    $tabla = "pedidos";
 
    function Conectarse()
   {
     global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;
 
     if (!($link = mysqli_connect($host.":".$puerto, $usuario, $contrasena))) 
     { 
      //  echo "Error conectando a la base de datos.<br>"; 
       exit(); 
            }
     else
      {
       //echo "Listo, estamos conectados.<br>";
      }
     if (!mysqli_select_db($link, $baseDeDatos)) 
      { 
       // echo "Error seleccionando la base de datos.<br>"; 
        exit(); 
      }
     else
      {
     //  echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
     }
   return $link; 
    } 
 
    $mysqli = Conectarse();
	
	 $u=$_POST['id_usuario'];
	 
	
		$query01 = "select id_pedido AS pedido, nombre_producto AS nombre, cantidad_pedido AS cantidad, fecha_pedido as fecha, nombre_usuario AS cliente, total_pedido as total from pedidos p left join usuarios m on p.id_usuario=m.id_usuario left join productos c on p.id_producto=c.id_producto where p.id_usuario= '$u' ";
	
	$resultado = $mysqli->query($query01);
	if ($resultado->num_rows > 0){
		$salida="<table class='table table-condensed'>
						<thead>
						<tr>
						<td>N° pedido</td>
						<td>Producto</td>
						<td>Cantidad</td>
						<td>Fecha</td>
						<td>Cliente</td>
						<td>Total</td>
						<td>Editar</td>
						</tr>
						</thead>
						<tbody>";
						
		while($fila = $resultado->fetch_array()){
			$salida.="<tr>
			<td>".$fila['pedido']."</td>
			<td>".$fila['nombre']."</td>
			<td>".$fila['cantidad']."</td>
			<td>".$fila['fecha']."</td>
			<td>".$fila['cliente']."</td>
			<td>".$fila['total']."</td>
			<td><input type='submit' value='Eliminar' id='boton1' onclick = 'funcion(".$fila['pedido'].");'></td>
			</tr>";
		}
		$salida.="</tbody></table>";
	} else {
		$salida.="no hay datos......";
	}
	echo $salida;
	
	
	$mysqli->close();
	

  function acciondos($a){
    echo "<script>alert(".$a.")</script>";
  }
	
	
	
?>
<script>
  function funcion(a){
	  var d = a;
		$("#id_pedido").val(a);
	ho();
   
  }
</script>