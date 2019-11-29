<!doctype html>
<html>
<head>
<form action="prueba.php" method="post">
<input name="filtra" class="form-control" placeholder="BUSQUEDA POR SEGUN EXTRACTO" type="text" size="30" >
    <input type="submit" name="search" value="Buscar" />
    <p>&nbsp;</p>
</form>
 
 
 
 
<?php
 
$conexion = mysqli_connect("localhost", "root","", "eso");
 
 
if (isset($_POST['search'])) {
 
    $query_search = "SELECT id_exp, modificacion, numero, extracto, creacion, actual, codestado,unidad,condicion, causante, detalle FROM expgesdocu WHERE extracto LIKE '$_REQUEST[filtra]%' ";
 
 
    $search = $conexion->query($query_search);
 
 
    if ($search->num_rows >0) {
        echo '<table border="2"  class="table table-striped table-bordered">';
        echo '<tr>';
        echo '<td width=22% bgcolor=#000000 ="white" align="center" ><font color =FFFFFF font size=4><strong>Expediente</strong></font></td>';
        echo '<td width=22% bgcolor=#000000 ="white" align="center" ><font color =FFFFFF><strong>Extracto</strong></td>';
		 echo '<td width=22% bgcolor=#000000 ="white" align="center" ><font color =FFFFFF><strong></strong></td>';
		 echo '<td width=22% bgcolor=#000000 ="white" align="center" ><font color =FFFFFF><strong></strong></td>';
 
 
        echo '</tr>';
        while ($row_searched = $search->fetch_assoc()) {
            echo '<tr>';
            echo '<td >'.$row_searched['numero'].'</td>';
            echo '<td>'.$row_searched['extracto'].'</td>';
 
			echo '<td>';
            echo '</tr>';
        }
        echo '</table><br/>';
    }
    else {
        echo '<div class="info">No hay resultados para los criterios de búsqueda.</div>';
    }
}
?>
</body>
</html>