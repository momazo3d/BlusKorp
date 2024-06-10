<?php

//verificar si el form se envio
if (isset($_POST['username']) && isset($_POST['password'])) {

    //obtencion de datos
    $Username = $_POST['username'];
    $password = $_POST['password'];

    $archivo = fopen('usuarios.txt', 'a');

    //si el archivo se habre correctamente
    if($archivo){
        
        //escribir los datos en el archivo, separado por comas
        fwrite($archivo, "$Username,$password\n");

        //cerrar archivo
        fclose($archivo);

        echo '<p>¡Datos guardados correctamente!<p>';

       }   else {
        echo '<p>Error al guardar los datos.<p>';
       }

    }

    $registroExitoso = true;

    if($registroExitoso){
        header('Location: index3.html');
        exit();
    }
    
    

?>