<?php

include("baseDatos.php");

if(isset($_POST["btnEliminar"])){

    $nombre=$_POST["eliminarUser"];

    $consulta="DELETE FROM usuarios WHERE nombre='$nombre'";

    $operacionEnBaseDeDatos= new BaseDatos();

    $resultado=$operacionEnBaseDeDatos->alterarBaseDatos($consulta);

    echo("<br>");
    echo("Los datos se han eliminado con exito");


}else{
    echo("Usted no deberia estar aca");
}








?>