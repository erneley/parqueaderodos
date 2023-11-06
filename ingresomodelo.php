<?php


 class ingresoModelo{
public $conexion;

public function __construct(){
$this->conexion = new mysqli('localhost', 'root','','data');
mysqli_set_charset($this->conexion,'utf8');

}

public function getxxClientes(){
    include "conexion.php";
    $cliente=[];
$sql="select  * from cliente";
$registros=mysqli_query($this->conexion,$sql);
while ($row=mysqli_fetch_array($registros)){
    array_push($cliente,$row);
}

return $cliente;
}


public function getingreso(){
    include "conexion.php";
    $cliente=[];
$sql="select  * from ingreso where ensitio=1";
$registros=mysqli_query($this->conexion,$sql);
while ($row=mysqli_fetch_array($registros)){
    array_push($cliente,$row);
}

return $cliente;
}



public function saveingreso($matricula,$observacion){
    //$sql="select  * from vehiculos where matricula='$matricula'";
    //$registros=mysqli_query($this->conexion,$sql);
    //if ($row=mysqli_fetch_array($registros)){
        $hora= date('h:i:s A');
        $fecha = date("m.d.y"); 
        $ensitio=1;
        $sql="insert into ingreso(matricula,fechaingreso,horaingreso,ensitio,observacion) values('$matricula','$fecha','$hora','$ensitio','$observacion')";
        mysqli_query($this->conexion,$sql);
$resultado=['success', 'registro guardado'];

        
   // }
return $resultado;

}

//horasalida='$hora',ensitio=$ensitio,
public function updateingreso($matricula,$observacion){
        $hora= date('h:i:s A');
        $fecha = date("m.d.y"); 
        $ensitio=0;
        $sql="UPDATE ingreso SET fechasalida='$fecha',observacion='$observacion',horasalida='$hora',ensitio=$ensitio WHERE matricula='$matricula' && ensitio=1";
        mysqli_query($this->conexion,$sql);
$resultado=['success', 'registro guardado'];

        
   
return $resultado;

}
     


}

?>