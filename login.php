<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet"> 
    <title>login</title>
</head>
<body>
    <div class="container">
    <div class="login">
            <img class="logo" src="img/AT&T_logo_2016.svg.png" alt="logo">
        <div class="login-content">
            <form action="" method="post">
                <h1 class="title">Bienvenido</h1>
                <?php
                include("conexion.php");
                include("controlador/controlador_login.php");
                ?>
                <div class="input-username">
                    <h1 class="usuario">Usuario</h1>
                    <i class="fa-solid fa-user"></i>
                    <input type="text" class="input-login" name="username" placeholder="Usuario" required autofocus>

                </div>
                <div class="input-password">
                    <h1 class="contraseña">Contraseña</h1>
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" class="input-login" name="password" placeholder="Contraseña" required>

                </div>

                <div class="view">
                    <div onclick="vista()" id='verpassword' ></div>

                </div>
                <button name="btningresar" type="submit" class="input-submit">Iniciar Seccion</button>
                </form>

                

    </div>
</div>

    
</body>
</html>