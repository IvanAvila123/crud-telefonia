<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<?php
include("conexion.php");
$con = conectar();

$razonsocial = $_POST['razonsocial'];
$azul = $_POST['azul'];
$naranja = $_POST['naranja'];
$idcliente = $_POST['idcliente'];
$telefonocontacto = $_POST['telefonocontacto'];
$representante = $_POST['representante'];
$correo = $_POST['correo'];
$ejecutivo = $_POST['ejecutivo'];

$check_query = "SELECT * FROM clientes WHERE idcliente = '$idcliente'";
$check_result = mysqli_query($con, $check_query);

if (mysqli_num_rows($check_result) == 0) {
    $sql = "INSERT INTO clientes VALUES('$razonsocial','$azul','$naranja','$idcliente','$telefonocontacto','$representante','$correo','$ejecutivo')";
    $query = mysqli_query($con, $sql);

    if ($query) {
        Header("Location: index.php?mensaje=exito");
    } else {
        echo '<div class="alert alert-danger" role="alert">Error al registrar el cliente</div>';
    }
} else {
    Header("Location: index.php?mensaje=error");
}
?>
