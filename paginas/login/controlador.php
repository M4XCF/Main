<?php
    /*--- Conexion a la base de datos ---*/
    $conn = new mysqli('localhost', 'id21129834_mcf', 'M24x09M03123!', 'id21129834_publicaciones');

    /**--- Proceso de encriptación ---*/ 
    if (isset($_POST['registro'])) {
        if (!empty(trim($_POST['Clave'])) && !empty(trim($_POST['Usuario']))) {
            $Clave = $_POST['Clave'];
            $Usuario = $_POST['Usuario'];

            $enc_Clave = password_hash($Clave, PASSWORD_DEFAULT);

            $conn->query("INSERT INTO usuario (Usuario, Clave) VALUES ('$Clave','$enc_Clave')");

            if ($conn->affected_rows != 1) {
                $registro_error = "Hubo un error";
            } else {
                $registro_error = "Usuario registrado correctamente";
            }
        }
    }
?>
