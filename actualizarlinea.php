<?php
include("conexion.php");
$con = conectar();

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($id === false) {
    echo "El valor de id no es válido.";
    exit;
}

$sql = "SELECT * FROM lineas WHERE idcliente=?";

$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$query = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_array($query);
    // Aquí puedes usar $row para acceder a los datos
} else {
    echo "No se encontró un registro con ese id.";
}

?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Clientes AT&T</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="vistas/assets/images/favicon.ico">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

        <!-- third party css -->
        <link href="vistas/assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="estilos/estilos.css">
        <!-- third party css end -->

        <!-- App css -->
        <link href="vistas/assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="vistas/assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="vistas/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="">
                <div class="">
                    <!-- Topbar Start -->
                    <div class="">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                </div>
                            </li>
                            <li class="dropdown notification-list topbar-dropdown">
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">

                                    </div>


                                </div>
                            </li>

                            <li class="dropdown notification-list d-none d-sm-inline-block">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                                    <div class="p-2">
                                        <div class="row g-0">
                              
                              
                                        </div>

                                        <div class="row g-0">
                                            

                                        </div> <!-- end row-->
                                    </div>

                                </div>
                            </li>

                            <li class="notification-list">
                                <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                                    <i class="dripicons-gear noti-icon"></i>
                                </a>
                            </li>

                            <li class="dropdown notification-list">
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->

                                    <!-- item-->


                                    <!-- item-->
    
                                    <!-- item-->
                                </div>
                        <button class="button-menu-mobile open-left">
                        </button>
                        <div class="app-search dropdown d-none d-lg-block">
                            <form>
                                <div class="input-group">
                                </div>
                            </form>

                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="#">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Topbar -->
                    
                    <!-- Start Content-->
 
                    <div class="container mt-4 shadow-lg p-3 mb-5 bg-body rounded">
        <h1>Actualizar Linea</h1>
        <form class="row g-3" action="updatelinea.php" method="POST">


        <div class="col-md-6">
      <label for="dn" class="form-label">DN</label>
      <input type="text" class="form-control" name="dn" id="dn" value="<?php echo $row['dn'] ?>">
      </div>

          <div class="col-md-6">
          <label for="fechafin" class="form-label">Fecha Fin</label>
          <input type="text" class="form-control" name="fechafin" id="fechafin" value="<?php echo $row['fechafin'] ?>">
          </div>


          <div class="col-md-6">
          <label for="plan" class="form-label">Plan Tarifario</label>
          <input type="text" class="form-control" name="plan" id="plan" value="<?php echo $row['plan'] ?>">
          </div>

          <div class="col-md-6">
          <label for="equipo" class="form-label">Equipo</label>
          <input type="text" class="form-control" name="equipo" id="equipo" value="<?php echo $row['equipo'] ?>">
          </div>


          <div class="col-12">
          <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
        </form>

    </div>
    <div class="end-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>




  
        <!-- Right Sidebar -->
        <div class="end-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="rightbar-content h-100" data-simplebar="">

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Sientete Comodo </strong> cambia de color el interfaz como deses
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1">

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked="">
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>
       

                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" id="resetBtn">Reiniciar Por Default</button>
                    </div>
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->

        <!-- bundle -->



        </script>
        <script src="vistas/assets/js/paginacion.js"></script>
        <script src="vistas/assets/js/vendor.min.js"></script>
        <script src="vistas/assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="vistas/assets/js/vendor/apexcharts.min.js"></script>
        <script src="vistas/assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="vistas/assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="vistas/assets/js/pages/demo.dashboard.js"></script>
        <!-- end demo js-->

        <!-- buscador-->
        <scrip src="buscador.js"></scrip>
        

    </body>
</html>


