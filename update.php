<?php

include("conexion.php");
$con=conectar();

$razonsocial=$_POST['razonsocial'];
$azul=$_POST['azul'];
$naranja=$_POST['naranja'];
$idcliente=$_POST['idcliente'];
$telefonocontacto=$_POST['telefonocontacto'];
$representante=$_POST['representante'];
$correo=$_POST['correo'];
$ejecutivo=$_POST['ejecutivo'];

$sql="UPDATE clientes SET  razonsocial='$razonsocial',azul='$azul',naranja='$naranja',telefonocontacto='$telefonocontacto',representante='$representante',correo='$correo',ejecutivo='$ejecutivo' WHERE idcliente='$idcliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>