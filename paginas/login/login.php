<?php require 'controlador.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloLogin.css">
    <title>Hash</title>
</head>

<header>
    <img class="logo" src="https://statist-threaders.000webhostapp.com/proyectos/ProyectoASubir/img/DrKoharu.jpg"
        alt="Logo de la página">
    <h1 class="page-title">Fire Cherry</h1>
    <ul class="menu">
        <li><a href="index.html">Inicio</a></li>
        <li><a href="categorias.html">Categorias</a></li>
        <li><a href="fallo.html">Sobre nosotros</a></li>
        <li><a href="ayuda.html">Ayuda</a></li>
    </ul>

    <button class="cart-button">Carrito de Compras</button>

    <div class="login-section">
        <button class="login-button">Iniciar Sesión</button>
    </div>
</header>



<body>
    <section class="inise">
        <form action="iniciarsesion.php" method="POST" autocomplete="off">
            <h1 class="registro">Iniciar Sesion</h1>
            
            <label for="Usuario"><h2>Usuario:</h2></label>
            <input type="text" name="Usuario" id="Usuario" required>
            
            <label for="Clave"><h2>Password</h2></label>
            <input type="password" name="Clave" id="Clave">

            <ul class="menu">
                <li><button type="submit" name="registro" value="Iniciar Sesion">Continuar</button></li>               
                <li><button type="submit" name="registro">Crear Cuenta</button></li>
            </ul>
        </form>
    <p>Al continuar, aceptas las Condiciones de uso y el Aviso
        de privacidad de Fire Cherry.</p>
    <p>Click aqui para ver nuestra <a href="">politica de privacidad</a>.</p>
    <p>• <a href="">¿Necesitas ayuda?</a></p>
    </section>
</body>



<footer>
    <div class="redes-sociales">
        <h3>Síguenos en redes sociales</h3>
        <ul>
            <li><a href="#" target="_blank"><img
                        src="https://statist-threaders.000webhostapp.com/proyectos/ProyectoASubir/img/Redes/FB.png"
                        alt="Facebook"></a></li>
            <li><a href="#" target="_blank"><img
                        src="https://statist-threaders.000webhostapp.com/proyectos/ProyectoASubir/img/Redes/X.png"
                        alt="Twitter"></a></li>
            <li><a href="#" target="_blank"><img
                        src="https://statist-threaders.000webhostapp.com/proyectos/ProyectoASubir/img/Redes/Ins.png"
                        alt="Instagram"></a></li>
            <li><a href="#" target="_blank"><img
                        src="https://statist-threaders.000webhostapp.com/proyectos/ProyectoASubir/img/Redes/Linkedin.png"
                        alt="LinkedIn"></a></li>
            <li><a href="#" target="_blank"><img
                        src="https://statist-threaders.000webhostapp.com/proyectos/ProyectoASubir/img/Redes/Reddit.png"
                        alt="LinkedIn"></a></li>
            <li><a href="#" target="_blank"><img
                        src="https://statist-threaders.000webhostapp.com/proyectos/ProyectoASubir/img/Redes/Pin.png"
                        alt="LinkedIn"></a></li>
        </ul>
    </div>
    <div class="contacto">
        <h3>Contacto</h3>
        <p>Si tienes alguna pregunta, no dudes en contactarnos:</p>
        <p>Email: Correo-ejemplo@outlook.com</p>
    </div>
</footer>

</html>