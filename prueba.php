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
    $i=$_POST['id_usuario'];
    //get user data from the database
    $query = $db->query("insert into usuarios where id_usuario = '$i'");
   
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

<div class="row">
                <div class=" col-xs-6 col-md-3">
                    <div class="card" style="width: 18rem;">
                    <a href="#" class="thumbnail">

                        <img class="card-img-top" data-toggle="modal" data-target="#productouno" src="img/celular1.jpg" alt=""/>
                    </a>
                    <div class="card-body">

                        <a class="card-text" href="http://www.abc.com.py/">Samsung I9000 Galaxy S Sim Free Mobile Phone. </a>
                    </div>
                </div>
            </div>

            <div class=" col-xs-6 col-md-3">
                <div class="card" style="width: 18rem;">
                    
                
                    <a href="#" class="thumbnail">

                        <img class="card-img-top" data-toggle="modal" data-target="#productodos"  src="img/celular33.jpg" alt=""/>
                    </a>
                    <div class="card-body">

                        <a class="card-text" href="http://www.abc.com.py/">Samsung Galaxy S3 Mini GT-i8190 GSM Unlocked Android Smartphone White.</a>
                    </div>
                </div>
</div>
           <div class=" col-xs-6 col-md-3">
               <div class="card" style="width: 18rem;">
                    <a href="#" class="thumbnail">

                        <img class="card-img-top" data-toggle="modal" data-target="#productocuatro" src="img/celular5.jpg" alt=""/>
                    </a>
                    <div class="card-body">

                        <p class="card-text" href="http://www.abc.com.py/">El Samsung Galaxy Note 4 es la cuarta generación del phablet de Samsung.</p>
                    </div>
                </div>
</div>
            <div class=" col-xs-6 col-md-3">
                <div class="card" style="width: 18rem;">
                    <a href="#" class="thumbnail">

                        <img class="card-img-top" src="img/celular8.jpg" alt=""/>
                    </a>
                    <div class="card-body">

                        <p class="card-text">El Samsung Galaxy S8 es el nuevo flagship de Samsung que apuesta fuerte en un frente sin bordes de pantalla.</p>
                    </div>
                </div>
                
</div> </div>
            <div class="row">
                <div class=" col-xs-6 col-md-3">
                    <div class="card" style="width: 18rem;">
                    <a href="#" class="thumbnail">

                        <img class="card-img-top" src="img/celular2.jpg" alt=""/>
                    </a>
                    <div class="card-body">

                        <a class="card-text" href="http://www.abc.com.py/">El Galaxy Note 8 tiene un procesador Exynos 8895 o Qualcomm 835. </a>
                    </div>
                </div>
            </div>

            <div class=" col-xs-6 col-md-3">
                <div class="card" style="width: 18rem;">
                    
                
                    <a href="#" class="thumbnail">

                        <img class="card-img-top" src="img/celular6.jpg" alt=""/>
                    </a>
                    <div class="card-body">

                        <a class="card-text" href="http://www.abc.com.py/">La impresionante cámara dual del Galaxy A40 cuenta con una cámara de 16 MP (F1.7).</a>
                    </div>
                </div>
</div>
           <div class=" col-xs-6 col-md-3">
               <div class="card" style="width: 18rem;">
                    <a href="#" class="thumbnail">

                        <img class="card-img-top" src="img/celularj77.jpg" alt=""/>
                    </a>
                    <div class="card-body">

                        <p class="card-text" href="http://www.abc.com.py/">Samsung Galaxy J7 2016, con todo.</p>
                    </div>
                </div>
</div>
            <div class=" col-xs-6 col-md-3">
                <div class="card" style="width: 18rem;">
                    <a href="#" class="thumbnail">

                        <img class="card-img-top" src="img/celulargran.jpg" alt=""/>
                    </a>
                    <div class="card-body">

                        <p class="card-text">Samsung Galaxy Grand Prime Normal.</p>
                    </div>
                </div>
                
</div>   </div>
 <div class="row">
                <div class=" col-xs-6 col-md-3">
                    <div class="card" style="width: 18rem;">
                    <a href="#" class="thumbnail">

                        <img class="card-img-top" src="img/celulara3.jpg" alt=""/>
                    </a>
                    <div class="card-body">

                        <a class="card-text" href="http://www.abc.com.py/">Samsung Galaxy A3 2016 Bagus Harga Nego Normal Masih Segel Bagus No Minus. </a>
                    </div>
                </div>
            </div>

            <div class=" col-xs-6 col-md-3">
                <div class="card" style="width: 18rem;">
                    
                
                    <a href="#" class="thumbnail">

                        <img class="card-img-top" src="img/celular7.jpg" alt=""/>
                    </a>
                    <div class="card-body">

                        <a class="card-text" href="http://www.abc.com.py/">La impresionante cámara dual del Galaxy A40 cuenta con una cámara de 16 MP (F1.7).</a>
                    </div>
                </div>
</div>
           <div class=" col-xs-6 col-md-3">
               <div class="card" style="width: 18rem;">
                    <a href="#" class="thumbnail">

                        <img class="card-img-top" src="img/celular55.jpg" alt=""/>
                    </a>
                    <div class="card-body">

                        <p class="card-text" href="http://www.abc.com.py/">Samsung galaxy S5 Normal - Dario - ID 304305.</p>
                    </div>
                </div>
</div>
            <div class=" col-xs-6 col-md-3">
                <div class="card" style="width: 18rem;">
                    <a href="#" class="thumbnail">

                        <img class="card-img-top" src="img/celular22.jpg" alt=""/>
                    </a>
                    <div class="card-body">

                        <p class="card-text">Samsung Galaxy S2 II GT-I9100P - 16GB -Noble Black (Unlocked) Smartphone Grade A 8806071739281.</p>
                    </div>
                </div>
                
</div>
</div>
 
 <div class="row">
                <div class=" col-xs-6 col-md-3">
                    <div class="card" style="width: 18rem;">
                    <a href="#" class="thumbnail">

                        <img class="card-img-top" src="img/lg1.jpg" alt=""/>
                    </a>
                    <div class="card-body">

                        <a class="card-text" href="http://www.abc.com.py/">Celular LG G7 Fit Negro. </a>
                    </div>
                </div>
            </div>

            <div class=" col-xs-6 col-md-3">
                <div class="card" style="width: 18rem;">
                    
                
                    <a href="#" class="thumbnail">

                        <img class="card-img-top" src="img/lg2.jpg" alt=""/>
                    </a>
                    <div class="card-body">

                        <a class="card-text" href="http://www.abc.com.py/">LG LMG810RA Producto de Soporte.</a>
                    </div>
                </div>
</div>
           <div class=" col-xs-6 col-md-3">
               <div class="card" style="width: 18rem;">
                    <a href="#" class="thumbnail">

                        <img class="card-img-top" src="img/lg3.jpg" alt=""/>
                    </a>
                    <div class="card-body">

                        <p class="card-text" href="http://www.abc.com.py/">LG LTE M400MT STYLUS 3 .</p>
                    </div>
                </div>
</div>
            <div class=" col-xs-6 col-md-3">
                <div class="card" style="width: 18rem;">
                    <a href="#" class="thumbnail">

                        <img class="card-img-top" src="img/lg4.jpg" alt=""/>
                    </a>
                    <div class="card-body">

                        <p class="card-text">Pantalla de alta definición en tu X Max.</p>
                    </div>
                </div>
                
</div> </div>
            <div class="row">
                <div class=" col-xs-6 col-md-3">
                    <div class="card" style="width: 18rem;">
                    <a href="#" class="thumbnail">

                        <img class="card-img-top" src="img/lg5.jpg" alt=""/>
                    </a>
                    <div class="card-body">

                        <a class="card-text" href="http://www.abc.com.py/">Smartphone LG G6 | Resistente al Agua. </a>
                    </div>
                </div>
            </div>

            <div class=" col-xs-6 col-md-3">
                <div class="card" style="width: 18rem;">
                    
                
                    <a href="#" class="thumbnail">

                        <img class="card-img-top" src="img/lg6.jpg" alt=""/>
                    </a>
                    <div class="card-body">

                        <a class="card-text" href="http://www.abc.com.py/">Conoce el nuevo LG Q60 con triple cámara e inteligencia artificial.</a>
                    </div>
                </div>
</div>
           <div class=" col-xs-6 col-md-3">
               <div class="card" style="width: 18rem;">
                    <a href="#" class="thumbnail">

                        <img class="card-img-top" src="img/lg7.jpg" alt=""/>
                    </a>
                    <div class="card-body">

                        <p class="card-text" href="http://www.abc.com.py/">Smartphone LG K11| LG.</p>
                    </div>
                </div>
</div>
            <div class=" col-xs-6 col-md-3">
                <div class="card" style="width: 18rem;">
                    <a href="#" class="thumbnail">

                        <img class="card-img-top" src="img/lg8.jpg" alt=""/>
                    </a>
                    <div class="card-body">

                        <p class="card-text">Smartphone LG K11, 5.3", Android 7.1, LTE, Dual SIM.</p>
                    </div>
                </div>
                
</div>    <center><p class="derid"> <a class="scroll" href="menu.html"><h1>atras</h1></a></p></center>  </div>
 </CENTER>

<!-- Modal -->
<div class="modal fade" id="productouno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Samsung I9000 Galaxy S Sim Free Mobile Phone.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="card-img-top" data-toggle="modal" data-target="#productouno" src="img/celular1.jpg" alt=""/>
		
		<input id="cantidad_pedido" name="cantidad_pedido" type="number" value="1">
		<input id="precio_pedido" name="precio_pedido" type="number" value="500000" style="display:none">
		<input id="fecha_pedido" name="fecha_pedido" type="date">
		<input id="estado_pedido" name="estado_pedido" type="text" value="PENDIENTE" style="display:none">
		<input id="id_producto" name="id_producto" type="text" value="1" style="display:none">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="agregar" name="agregar" onclick="agregar()">agregar al carrito</button>
      </div>
    </div>
  </div>
</div>
 
 <div class="modal fade" id="productodos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Samsung I9000 Galaxy S Sim Free Mobile Phone.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="card-img-top" src="img/celular33.jpg" alt=""/>
		
		<input id="cantidad_pedido1" name="cantidad_pedidos1" type="number" value="1">
		<input id="fecha_pedido1" name="fecha_pedido1" type="date">
		<input id="estado_pedido1" name="estado_pedido1" type="text" value="PENDIENTE" style="display:none">
		<input id="id_producto1" name="id_producto1" type="text" value="3" style="display:none">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="agregar1" name="agregar1" onclick="hola()">agregar al carrito</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="productocuatro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">El Samsung Galaxy Note 4 es la cuarta generación del phablet de Samsung.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="card-img-top" src="img/celular5.jpg" alt=""/>
		
		<input id="cantidad_pedido2" name="cantidad_pedido2" type="number" value="1">
		<input id="fecha_pedido2" name="fecha_pedido2" type="date">
		<input id="estado_pedido2" name="estado_pedido2" type="text" value="PENDIENTE" style="display:none">
		<input id="id_producto2" name="id_producto2" type="text" value="5" style="display:none">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="agrega()">agregar al carrito</button>
      </div>
    </div>
  </div>
</div>
  <div id="productodos" style="position:fixed; top:80%; margin-right:550px; display:none">
         <a style="color: #CD5C5C" ng-href="" ng-if="publicCtrl.loadPage == 1" ng-click="publicCtrl.openCartDialog(publicCtrl.routeStatus)" class="lw-shopping-cart-btn btn btn-default pull-right ng-binding ng-scope" ng-bind-html="publicCtrl.cart_string" ><i class="glyphicon glyphicon-shopping-cart"></i>PRODUCTO CARGADO EN EL CARRITO</a>

</div>
?>