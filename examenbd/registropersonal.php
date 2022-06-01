<?php

include('conec.php');

if(isset($_POST['enviar'])){

    $nombre = $_POST ['nombre'];
    $apellido_p =$_POST ['apellido_paterno'];
    $apellido_m= $_POST ['apellido_materno'];
    $numero = $_POST ['numero'];
    $correo = $_POST ['correo'];
    $usuario=$_POST ['usuario'];
    $contraseña = $_POST ['contraseña'];

    $insertarpersonal = "INSERT INTO personales (nombre,apellido_paterno,apellido_materno,numero,correo,usuario,contraseña) VALUES('$nombre','$apellido_p','$apellido_m','$numero','$correo','$usuario','$contraseña');";
    $resultado = mysqli_query($conexion,$insertarpersonal);

    if(!$resultado){
        echo '<script>alert("Los datos no se insertaron")</script>';
    }else{
        echo '<script>alert("Los datos se insertaron")</script>';
    }
}

header('location: personales.php');
?>