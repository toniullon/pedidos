<?php
if(!empty($_POST['id_pedido'])){
    $data = array();
    
    //database details
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'pedidos';
    
    //create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    if($db->connect_error){
        die("Unable to connect database: " . $db->connect_error);
    }
    $i=$_POST['id_pedido'];
    //get user data from the database
    $hola = $db->query("delete from pedidos where id_pedido = ('$i')");
   $gg=mysqli_query($link,$hola);
   if($gg){
	 
	    echo true;
   }else{
	   
	   echo false;
   }
}
?>