<?php
    require_once ('conexion.php');

$con = conectar();

$sql = "SELECT *  FROM clientes";
$query = mysqli_query($con, $sql);
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
    
                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="vistas/assets/images/logo.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="vistas/assets/images/logo_sm.png" alt="" height="16">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="vistas/assets/images/logo-dark.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="vistas/assets/images/logo_sm_dark.png" alt="" height="16">
                    </span>
                </a>
    
                <div class="h-100" id="leftside-menu-container" data-simplebar="">

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                <span> Inicio </span>
                            </a>
                            <div class="collapse" id="sidebarDashboards">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="index.php">Clientes</a>
                                    </li>
                                    <li>
                                        
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-title side-nav-item"></li>

                        <li class="side-nav-item">
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-chat.html" class="side-nav-link">
                                <i class=""></i>
                            
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="side-nav-second-level">
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <div class="collapse" id="sidebarEmail">
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <div class="collapse" id="sidebarProjects">
                            </div>
                        </li>


                        <li class="side-nav-item">
                            <a href="#" class="side-nav-link">
                                <i class=""></i>
                                
                            </a>
                        </li>

                            <div class="collapse" id="#">
                                        <div class="collapse" id="#">
                            </div>
                        </li>


                        <li class="side-nav-item">

                            </div>
                        </li>

                                    <li class="side-nav-item">
                                        </a>
                                        <div class="collapse" id="sidebarThirdLevel">
                                            <ul class="side-nav-third-level">
                                                <li>
                                    
                                                </li>
                                                <li class="side-nav-item">
                                                    <div class="collapse" id="sidebarFourthLevel">
                                                        <ul class="side-nav-forth-level">

                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    <!-- Help Box -->
                    <div class="help-box text-white text-center">
                    </div>
                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                            <li class="dropdown notification-list d-lg-none">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-search noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                    <form class="p-3">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    </form>
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
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        
                                    </span>
                                    <span>
                                        <span class="account-user-name"></span>
                                        <span class="account-position"></span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Bienvenido !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>Mi Cuenta</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lock-outline me-1"></i>
                                        <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Cerrar Seccion</span>
                                    </a>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search dropdown d-none d-lg-block">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control dropdown-toggle light-table-filter" placeholder="Buscar" data-table="table_id">
                                    <span class="mdi mdi-magnify search-icon"></span>
                                    <button class="input-group-text btn-primary" type="submit">Buscar</button>
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


<!-- Button trigger modal -->
<button id="btnCrear" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Crear
  </button>
  <br>
  <br>
  <?php
if (isset($_GET["mensaje"]) && $_GET["mensaje"] == "exito") {
    echo '<div class="alert alert-success" role="alert" id="success-message">El cliente ha sido registrado con éxito</div>';
} elseif (isset($_GET["mensaje"]) && $_GET["mensaje"] == "error") {
    echo '<div class="alert alert-warning" role="alert" id="warning-message">El cliente ya existe en la base de datos</div>';
}
?>

<script>
  $(document).ready(function(){
    setTimeout(function() {
      $("#success-message").fadeOut();
      $("#warning-message").fadeOut();
    }, 3000); // Desaparece después de 3 segundos (3000 milisegundos)
    
    $("#success-message").fadeIn();
    $("#warning-message").fadeIn();
  });
</script>
        <table id="tbldatos" class="table-responsive table-hover table_id table-responsive">
            <thead class="encabezado-tabla">
                <tr class="text-center table-responsive">
                    <th>Razon Social</th>
                    <th>Cuenta Azul</th>
                    <th>Cuenta Naranja</th>
                    <th>ID Del Cliente</th>
                    <th>Telefono De Contacto</th>
                    <th>Representante Legal</th>
                    <th>correo</th>
                    <th>Ejecutivo</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <tr class="text-center informacion">
                    <td><?php echo $row['razonsocial'] ?></td>
                    <td><?php echo $row['azul'] ?></td>
                    <td><?php echo $row['naranja'] ?></td>
                    <td><?php echo $row['idcliente'] ?></td>
                    <td><?php echo $row['telefonocontacto'] ?></td>
                    <td><?php echo $row['representante'] ?></td>
                    <td><?php echo $row['correo'] ?></td>
                    <td><?php echo $row['ejecutivo'] ?></td>
                    <td><a href="informacion.php?id=<?php echo $row['idcliente'] ?>" class="btn btn-outline-dark">Ver</a></td>
                    <td><a href="actualizar.php?id=<?php echo $row['idcliente'] ?>" class="btn btn-outline-info bi bi-archive"></td>
                    <td><a href="eliminar.php?id=<?php echo $row['idcliente'] ?>" class="btn btn-outline-danger bi bi-trash"></td>

                </tr>
            <?php } ?>
        </table>
    </div>

    <div id="paginador" class=""></div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="registrar.php" method="POST">

                        <input type="text" class="form-control mb-4" name="razonsocial" placeholder="Razon Social">
                        <input type="text" class="form-control mb-4" name="azul" placeholder="Cuenta Azul">
                        <input type="text" class="form-control mb-4" name="naranja" placeholder="Cuenta Naranja">
                        <input type="text" class="form-control mb-4" name="idcliente" placeholder="Id Del Cliente">
                        <input type="text" class="form-control mb-4" name="telefonocontacto" placeholder="Telefono De Contacto">
                        <input type="text" class="form-control mb-4" name="representante" placeholder="Representante legal">
                        <input type="text" class="form-control mb-4" name="correo" placeholder="Correo Electronico">
                        <input type="text" class="form-control mb-4" name="ejecutivo" placeholder="Ejecutivo">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cliente</button>
                </div>
                </form>

            </div>
        </div>
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
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
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
       

                    <!-- Width -->
                    <h5 class="mt-4">Width</h5>
                    <hr class="mt-1">
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked="">
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>
        

                    <!-- Left Sidebar-->
                    <h5 class="mt-4">Left Sidebar</h5>
                    <hr class="mt-1">
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                        <label class="form-check-label" for="default-check">Default</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked="">
                        <label class="form-check-label" for="light-check">Light</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                        <label class="form-check-label" for="dark-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked="">
                        <label class="form-check-label" for="fixed-check">Fixed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                        <label class="form-check-label" for="condensed-check">Condensed</label>
                    </div>

                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                    </div>
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->

        <!-- bundle -->


              
        <script src="vistas/assets/js/paginacion.js"></script>
        <script src="vistas/assets/js/vendor.min.js"></script>
        <script src="vistas/assets/js/app.min.js"></script>
        <script src="vistas/assets/js/buscador.js"></script>

        <!-- third party js -->
        <script src="vistas/assets/js/vendor/apexcharts.min.js"></script>
        <script src="vistas/assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="vistas/assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="vistas/assets/js/pages/demo.dashboard.js"></script>
        <!-- end demo js-->

        <!-- buscador-->
          
        

    </body>
</html>