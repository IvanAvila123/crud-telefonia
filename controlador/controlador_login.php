<?php

if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["username"])and !empty($_POST["password"])) {
        $usuario=$_POST["username"];
        $password=$_POST["password"];
        $sql=$con->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$password'");
        if ($datos=$sql->fetch_object()) {
            header("Location:inicio.php");
        } else {
            echo "<div>Acceso denegado</div>";
        }
        
    } else {
        echo "Campos vacios";
    }
    
}



?>
