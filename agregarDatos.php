<?php

include('baseDatos.php');

//Validar que se hizo clic en el boton de enviar datos
if(isset($_POST["btnEnviar"])){
    
    //recibir los datos a enviar
    $nombre=$_POST["nombreUsuario"];
    $email=$_POST["correoUsuario"];
    $password=$_POST["contraseña"];
   
    //1. crear un objeto del tipo BaseDatos (debemos cerar una variable)
    $operacionEnBaseDeDatos= new BaseDatos();
   
    //2. Creemos una consulta para agregar datos
    $consulta="INSERT INTO `usuarios`(nombre, correo, password) VALUES ('$nombre','$email','$password')";

    
    
    //3. utilizar el metodo alterarBaseDatos para poder ejecutar la consulta para ello utilizamos el objeto del paso 1 
    $resultado=$operacionEnBaseDeDatos->alterarBaseDatos($consulta);

    //4. verificar que si se escribieron los datos
    if($resultado){
        echo("<br>");
        echo("Se han agregado con exito los datos a la base de datos");
        echo("<br>");
    }else{
        die("error en la transacción");

    }




}else{
    echo("pilas no ha presioando el boton, no deberia estar aca");
}





?>