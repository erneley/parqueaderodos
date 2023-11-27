
<script src="jquery-3.5.1.min.js"></script>


<div class="contenedor  bg-dark">
<div class="ladoa">

</div>
   

<div class="ladob">
<h3 class="text-white">Listado de autos parqueados</h3>
<table class="table  bg-white">
<tbody>
<tr>
<td>maticula</td>  
<td>fecha. ingreso</td>
<td>hora de ingreso</td>
<td>Parqueado</td>
<td>Celda</td>

</tr>


<?php
/*header('content-type: application/json; charset=utf-8');*/
require 'conexion.php';

$sql="select  * from ingreso ";
$registros=mysqli_query($cone,$sql);
while ($row=mysqli_fetch_array($registros)){
 
  ?>
 <tr>
  <td><?php echo $row['matricula'] ?></td>
  <td><?php echo $row['fechaingreso'] ?></td>
  <td><?php echo $row['horaingreso'] ?></td>
  <td><?php echo $row['ensitio'] ?></td>
  <td><?php echo $row['celda'] ?></td>
  
  <td>
  
  

</tr>
 
<?php
}




?>

</tbody>


</table>

</div>

</div>


