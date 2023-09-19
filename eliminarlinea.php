<?php
include("conexion.php");
$con=conectar();

if (isset($_GET['id'])) {
  $id = mysqli_real_escape_string($con, $_GET['id']);

  $sql = "DELETE FROM lineas WHERE idcliente = ?";
  $stmt = mysqli_prepare($con, $sql);
  mysqli_stmt_bind_param($stmt, "s", $id);

  if (mysqli_stmt_execute($stmt)) {
    header("Location: nuevalinea.php");
    exit;
  } else {
    echo "Error al borrar el registro";
  }
} else {
  header("Location: nuevalinea.php");
  exit;
}
?>
