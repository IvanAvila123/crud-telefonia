<?php

include("conexion.php");
$con = conectar();

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
if($id === null){
    $id = 'defaultValue';
}

                            

$idcliente = mysqli_real_escape_string($con, $_POST['idcliente']);
$dn = mysqli_real_escape_string($con, $_POST['dn']);
$fechafin = filter_input(INPUT_POST, 'fechafin', FILTER_SANITIZE_STRING);
if($fechafin === null){
    $fechafin = 'defaultValue';
}
$plan = mysqli_real_escape_string($con, $_POST['plan']);
$equipo = mysqli_real_escape_string($con, $_POST['equipo']);
 
$sql = mysqli_prepare($con, "INSERT INTO lineas (idcliente, dn, fechafin, plan, equipo) VALUES (?, ?, ?, ?, ?)");

mysqli_stmt_bind_param($sql, "sssss", $idcliente, $dn, $fechafin, $plan, $equipo);

// Ejecutar sentencia preparada
if (mysqli_stmt_execute($sql)) {
    Header("Location: nuevalinea.php?idcliente=$id");
} else {
    // Mostrar mensaje de error si la consulta falla
    echo "Error al insertar información: " . mysqli_stmt_error($sql);
}

// Cerrar sentencia preparada
mysqli_stmt_close($sql);
mysqli_close($con);

?>