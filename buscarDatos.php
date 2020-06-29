<?php

include('baseDatos.php');

if(isset($_POST["btnBuscar"])){

    $nombre=$_POST["buscarUser"];

    $consulta="SELECT nombre, correo, password FROM usuarios WHERE nombre='$nombre'";

    $operacionEnBaseDeDatos= new BaseDatos();

    $resultado= $operacionEnBaseDeDatos->consultarEnBaseDatos($consulta);

    echo("<br>");
    print_r(json_encode($resultado));
    echo("<br>");




}else{
    echo("Usted no deberia estar aca");

}







?>