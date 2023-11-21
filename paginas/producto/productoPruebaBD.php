<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloProducto.css">
    <title>Proyecto</title>
</head>

<body>
    <header>
        <img class="logo" src="https://statist-threaders.000webhostapp.com/proyectos/Proyecto/img/DrKoharu.jpg" alt="Logo de la página">
        <h1 class="page-title">Fire Cherry</h1>
        <ul class="menu">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="categorias.html">Categorias</a></li>
            <li><a href="fallo.html">Sobre nosotros</a></li>
            <li><a href="ayuda.html">Ayuda</a></li>
        </ul>

        <button class="cart-button">Carrito de Compras</button>

        <div class="login-section">
            <button class="login-button"><a href="login.php">Iniciar Sesión</a></button>
        </div>
    </header>


    <div class="producto">
        <img src="https://statist-threaders.000webhostapp.com/proyectos/Proyecto/img/Display/Nonomi.jpg" alt="Nombre del Producto">
<!--    <td><img height="50px" src="data:image/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>"></td>-->
        <div class="informacion">
            <h2>Blue Archive Plushie Nonomi</h2>
            <p>De "Blue Archive", nuevos peluches pronto!</p>
            <p>© NEXON Korea Corp. & NEXON Games Co., Ltd. All Rights Reserved.</p>
            <br>
            <p class="precio">$30.99</p>
            <div class="cantidad">
                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" value="1" min="1">
            </div>
            <br>
            <button>Añadir al carrito</button>
            <button>Añadir a lista de deseados</button>


            <table class="info-table">
            <?php
                    include("open.php");
                    $consulta = "SELECT * FROM Articulos";
                    $resultado = $conexion->query($consulta);
                    while($row = $resultado->fetch_assoc()) {
                ?>
                <tr>
                    <th>Nombre</th>
        
                    <td><?php echo $row['Nombre']; ?></td>
                </tr>
                <tr>
                    <th>Fecha de lanzamiento</th>
                    
                    <td><?php echo $row['Lanzamiento']; ?></td>
                </tr>
                <tr>
                    <th>Fecha de Anunciamiento</th>
                   
                    <td><?php echo $row['Anunciamiento']; ?></td>
                </tr>
                <tr>
                    <th>Fabricante</th>
                   
                    <td><?php echo $row['Fabricante']; ?></td>
                </tr>
                <tr>
                    <th>Serie</th>
                  
                    <td><?php echo $row['Serie']; ?></td>
                </tr>
                <tr>
                    <th>Tipo de Producto</th>
                  
                    <td><?php echo $row['Tipo']; ?></td>
                </tr>
                <tr>
                    <th>Especificaciones</th>
                    
                    <td><?php echo $row['Especificaciones']; ?></td>
                </tr>
                <?php
                    }
                    ?>
            </table>

        </div>

        
    </div>


    <footer>
        <div class="redes-sociales">
            <h3>Síguenos en redes sociales</h3>
            <ul>
                <li><a href="#" target="_blank"><img src="https://statist-threaders.000webhostapp.com/proyectos/Proyecto/img/Redes/FB.png" alt="Facebook"></a></li>
                <li><a href="#" target="_blank"><img src="https://statist-threaders.000webhostapp.com/proyectos/Proyecto/img/Redes/X.png" alt="Twitter"></a></li>
                <li><a href="#" target="_blank"><img src="https://statist-threaders.000webhostapp.com/proyectos/Proyecto/img/Redes/Ins.png" alt="Instagram"></a></li>
                <li><a href="#" target="_blank"><img src="https://statist-threaders.000webhostapp.com/proyectos/Proyecto/img/Redes/Linkedin.png" alt="LinkedIn"></a></li>
                <li><a href="#" target="_blank"><img src="https://statist-threaders.000webhostapp.com/proyectos/Proyecto/img/Redes/Reddit.png" alt="LinkedIn"></a></li>
                <li><a href="#" target="_blank"><img src="https://statist-threaders.000webhostapp.com/proyectos/Proyecto/img/Redes/Pin.png" alt="LinkedIn"></a></li>
            </ul>
        </div>
        <div class="contacto">
            <h3>Contacto</h3>
            <p>Si tienes alguna pregunta, no dudes en contactarnos:</p>
            <p>Email: Correo-ejemplo@outlook.com</p>
        </div>
    </footer>

</body>

</html>