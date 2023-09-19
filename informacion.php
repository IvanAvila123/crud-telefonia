<?php
include("conexion.php");
$con = conectar();

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$sql = "SELECT clientes.idcliente,clientes.razonsocial,informacion.idinformacion,informacion.fiscal,informacion.entrega,informacion.rfc FROM clientes LEFT JOIN informacion ON clientes.idcliente = informacion.idcliente WHERE clientes.idcliente='$id' LIMIT 1";
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

                        <li class="side-nav-title side-nav-item">Informacion del cliente</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                <span> Inicio </span>
                            </a>
                            <div class="collapse" id="sidebarDashboards">
                                <ul class="side-nav-second-level">
                                    <li>
                                    <?php
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <a href="nuevalinea.php?id=<?php echo $row['idcliente'] ?>">Lineas</a>
                                    </li>
                                    <li>
                                        <a href="index.php">Clientes</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        

                        <li class="side-nav-item">
                        </li>

                        <li class="side-nav-item">
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
                        <div class="">
                            <form>
                                <div class="">
                                   <h1><?php echo $row['razonsocial'] ?></h1>
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

                <!--comienza contenido -->     
                 <br>             
                <form class="row g-3">
                                
                <div class="col-md-6">
                <label for="fiscal" class="form-label h3">Direccion Fiscal</label>
                <textarea class="form-control"  id="fiscal"><?php echo $row['fiscal'] ?></textarea>
                </div>

                <div class="col-md-6">
                <label for="entrega" class="form-label h3">Direccion De Entrega</label>
                <textarea class="form-control"  id="entrega"><?php echo $row['entrega'] ?></textarea>
                </div>

                <div class="col-md-3">
                <label for="rfc" class="form-label h3">RFC</label>
                <textarea class="form-control"  id="rfc"><?php echo $row['rfc'] ?></textarea>
                </div>
    
                  <br>                  
                <div class="col-12">
                <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#CrearInformacion">Nueva Informacion</button>
                <?php
                if (isset($row) && is_array($row)) {
                echo '<a href="actualizarinformacion.php?id='.$row['idinformacion'].'" class="btn btn-outline-dark">Actualizar Información</a>';
                } else {
                echo 'La variable $row no está definida o no es un array';
                }
                ?>
                </div>
                </form>
                
                <div class="modal fade" id="CrearInformacion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Nueva Informacion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
        
                <form class="row g-3" action="registrar_informacion.php" method="POST">  
                
                <input type="hidden" name="idcliente" value="<?php echo $row['idcliente'] ?>">

                <div class="col-md-6">
                <label for="fiscal" class="form-label">Direccion Fiscal</label>
                <input type="text" name="fiscal" class="form-control" id="fiscal">
                </div>

                <div class="col-md-6">
                <label for="entrega" class="form-label">Direccion De Entrega</label>
                <input type="text" name="entrega" class="form-control" id="entrega">
                </div>

                <div class="col-md-6">
                <label for="rfc" class="form-label">RFC</label>
                <input type="text" name="rfc" class="form-control" id="rfc">
                </div>
                                      
                <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Informacion</button>
      </div>
      </form>
      <?php  } ?> 
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

        <!-- third party js -->
        <script src="vistas/assets/js/vendor/apexcharts.min.js"></script>
        <script src="vistas/assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="vistas/assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="vistas/assets/js/pages/demo.dashboard.js"></script>
        <!-- end demo js-->

        <!-- buscador-->
        <script src="buscador.js"></script>
        

    </body>
</html>