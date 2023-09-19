<?php

include("conexion.php");
$con=conectar();

$dn=$_POST['dn'];
$fechafin=$_POST['fechafin'];
$plan=$_POST['plan'];
$equipo=$_POST['equipo'];

$sql="UPDATE lineas SET dn='$dn', fechafin='$fechafin', plan='$plan', equipo='$equipo' WHERE dn='$dn'";
$query=mysqli_query($con,$sql);

if (!$query) {
    echo "Error en la consulta SQL: " . mysqli_error($con);
    exit();
}

if (mysqli_affected_rows($con) > 0) {
    Header("Location: lineas.php");
} else {
    echo "No se actualizaron filas en la tabla.";
}
?>