<?php

include("conexion.php");
$con = conectar();

$fiscal = $_POST['fiscal'];
$entrega = $_POST['entrega'];
$rfc = $_POST['rfc'];
$idinformacion = $_POST['idinformacion'];

$sql = "UPDATE informacion SET fiscal='$fiscal', entrega='$entrega', rfc='$rfc' WHERE idinformacion='$idinformacion'";
$query = mysqli_query($con, $sql);

if (!$query) {
    echo "Error en la consulta SQL: " . mysqli_error($con);
    exit();
}

if (mysqli_affected_rows($con) > 0) {
    header("Location: informacion.php");
} else {
    echo "No se actualizaron filas en la tabla.";
}

?>