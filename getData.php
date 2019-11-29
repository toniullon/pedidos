<?php
if(!empty($_POST['nombre_usuario'])){
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
    $i=$_POST['nombre_usuario'];
    //get user data from the database
    $hola = $db->query("insert into usuarios (nombre_usuario) value ('$i')");
    $last_id = mysqli_insert_id($db);
	
	$query = $db->query("SELECT * FROM usuarios WHERE id_usuario = '$last_id'");
    if($query->num_rows > 0){
        $userData = $query->fetch_assoc();
        $data['status'] = 'ok';
        $data['result'] = $userData;
    }else{
        $data['status'] = 'err';
        $data['result'] = '';
    }
    
    //returns data as JSON format
    echo json_encode($data);
}
?>