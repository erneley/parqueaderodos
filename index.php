<!DOCTYPE html>
<html >
<?php
include_once("./templates/head.php");

/*

@Id
@GeneratedValue(strategy = GenerationType.IDENTITY)
private Long id;
private String nitcliente;
private String nombre;
private String correo;
private String direccion;
private String telefono;
private String ciudad;



@Entity
public class Vehiculos {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    private String nitcliente;
    private String placa;
    private String fechaentrada;
    private String horaentrada;
    private String horasalida;
    private String ensitio;
    private String valorparqeuo;
*/
?>


<body>
<?php
include_once("./templates/header.php");

?>

    <div class="container" id="central">
     <div id="izq"><h2>los menus</h2>
    
    <a class="btn btn-primary" href="#">Clientes</a> <br><br>
    <a class="btn btn-primary" href="#">Listado Clientes</a><br><br>
    <a class="btn btn-primary" href="#">Vehiculos</a><br><br>
    <a class="btn btn-primary" href="#">Listado vehiculos</a><br><br>
    <a class="btn btn-primary" href="#">Ingreso de vehiculos</a><br><br>
    <a class="btn btn-primary" href="#">Salida vehiculos</a><br>
    <a class="btn btn-primary" href="#">Consulta vehiculos en patio</a><br><br>
    
   

    </div>
     <div id="der">
        <img src="./img/parqueadero.jpg" alt="">
     </div>

    </div>
   
    <footer th:replace="/template  :: footer" ></footer>
</body>
</html>
