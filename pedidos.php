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
 
    $link = Conectarse();
 
   $f=$_POST['fecha_pedido'];
   $u=$_POST['id_usuario'];
   $e=$_POST['estado_pedido'];
   $c=$_POST['cantidad_pedido'];
   $ip=$_POST['id_producto'];
   $t=$_POST['total_pedido'];
   
   $insert="insert into $tabla(fecha_pedido,estado_pedido,cantidad_pedido,id_producto,total_pedido,id_usuario) values('$f','$e','$c','$ip','$t','$u')";
   $gg=mysqli_query($link,$insert);
   if($gg){
	 
	    echo true;
   }else{
	   
	   echo false;
   }
   
   
   /*<?php foreach ($link->query('SELECT * from registros') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['id'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['nombre'] ?></td>
    <td><?php echo $row['apellido'] ?></td>
 </tr>
<?php
   
   /*
   $query = "SELECT nombre FROM $tabla where nombre='".$_POST['usu']."' and password='".$_POST['pass']."';";
 
    $result = mysqli_query($link, $query); 
	if(mysqli_num_rows($result)	> 0){
		
		echo true;
	}else{
		
		echo false;
	}
   
   */
   ?>
   