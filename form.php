<?php

$conectar= mysqli_connect('localhost','valca','','prueba');
if(!$conectar){
    echo "No se pudo conectar";
}


if(isset($_POST['Registrar'])){
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $psw=$_POST['psw'];

    $consulta = "INSERT INTO datos VALUES ('$uname','$email','$psw')";

    $resultado = mysqli_query($consulta);

    if ($resultado) {
        
        echo "¡Te has inscrito correctamente!<br><a href='Form.html'>Volver</a>";
        
    } else {
        
    echo "¡Ups ha ocurrido un error!";
        
    }
}


mysqli_close($conectar);

?>