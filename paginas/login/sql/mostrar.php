<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Historietas</title>
</head>

<body>
    <center>
        <tr>Índice de Historietas</tr>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Editorial</th>
                    <th>Personaje</th>
                    <th>Género</th>
                    <th>Autor</th>
                    <th>Año</th>
                    <th>País</th>
                    <th>Imagen</th>
                </tr>
            </thead>
<!--- Títulos --->
            <tbody>
                <?php
                    include("open.php");
                    $consulta = "SELECT * FROM historietas";
                    $resultado = $conexion->query($consulta);
                    while($row = $resultado->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['id_his']; ?></td>
                            <td><?php echo $row['edit_his']; ?></td>
                            <td><?php echo $row['pers_his']; ?></td>
                            <td><?php echo $row['gen_his']; ?></td>
                            <td><?php echo $row['auto_his']; ?></td>
                            <td><?php echo $row['anio_his']; ?></td>
                            <td><?php echo $row['pais_his']; ?></td>
                            <td><img height="50px" src="data:image/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>"></td>
                        </tr>
                    <?php
                    }
                    ?>
            </tbody>
        </table>
    </center>
</body>
</html>