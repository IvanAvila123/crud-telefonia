<?php

require_once("conexion.php");

$con = conectar();
if (!$con) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

$id = $_GET['id'] ?? 'defaultValue';

$idcliente = mysqli_real_escape_string($con, $_POST['idcliente']);
$fiscal = mysqli_real_escape_string($con, $_POST['fiscal']);
$entrega = mysqli_real_escape_string($con, $_POST['entrega']);
$rfc = mysqli_real_escape_string($con, $_POST['rfc']);


$sql = mysqli_prepare($con, "INSERT INTO informacion (idcliente, fiscal, entrega, rfc) VALUES(?, ?, ?, ?)");

mysqli_stmt_bind_param($sql, "ssss", $idcliente, $fiscal, $entrega, $rfc);

// Ejecutar sentencia preparada
if (mysqli_stmt_execute($sql)) {
    header("Location: informacion.php?idcliente=$id");
} else {
    // Mostrar mensaje de error si la consulta falla
    echo "Error al insertar información: " . mysqli_stmt_error($sql);
}

// Cerrar sentencia preparada
mysqli_stmt_close($sql);
mysqli_close($con);
?>
