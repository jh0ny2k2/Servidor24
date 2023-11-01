<?php
    //INICIAMOS SESION ANTES QUE NADA
    session_start();

    //INCLUIMOS EL ARCHIVO LIB.PHP
    include_once "./lib.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content ">
                    <div class="container">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>

<?php

    if (isset($_SESSION['usuario'])) {
        //SI ESTA LA SESION INICIADA PRINTEAMOS EL BOTON DEL PERFIL
        echo '<div class="header-button">
                <button type="button" class="btn btn-primary "data-bs-toggle="modal" data-bs-target="#addProducto">Nuevo</button>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"> ' . $_SESSION["usuario"]["nombre"] .'</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">' . $_SESSION["usuario"]["nombre"] .'</a>
                                                    </h5>
                                                    <span class="email">' . $_SESSION["usuario"]["email"] .'</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">   
                                                    <i class="zmdi zmdi-account-box"></i>Perfil
                                                </a>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="proyectos.php">   
                                                    <i class="zmdi zmdi-attachment-alt"></i>Ver mis proyectos
                                                </a>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="controlador.php?accion=cerrarSesion">   
                                                    <i class="zmdi zmdi-power"></i>Cerrar Sesion
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
    } else {
        //SI LA SESION ESTA CERRADA ENTONCES PRINTEAMOS LOS BOTONES DE REGISTRO Y LOGIN
        echo ' <a href="login.php" role="button"><button type="button" class="btn btn-primary">Iniciar Sesion</button></a>';
        echo ' <a href="register.php" role="button"><button type="button" class="btn btn-primary">Registrarse</button></a>';
    }

?>
                            
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Perfil</h2>
                            </div>
<?php

                            echo '<div class="content">
                                <a class="js-acc-btn" href="#"> ' . $_SESSION["usuario"]["email"] . '</a>
                            </div>';
?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- MODALES -->
    <div class="modal" tabindex="-1" id="addProducto" aria-labelledby="addProducto">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Añadir Proyecto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="controlador.php" method="POST" id="nuevoProducto">
                        <div class="mb-3 row">
                            <label for="nombre" class="col-sm-2 col-form-label">Nombre del proyecto</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" id="nombre" name="nombre" placeholder="nombre" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="descripcion" class="col-sm-2 col-form-label">Descripcion del proyecto</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" id="descripcion" name="descripcion" placeholder="descripcion" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="departamento" class="col-sm-2 col-form-label">Departamento</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" id="departamento" name="departamento" placeholder="Departamento" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="departamento" class="col-sm-2 col-form-label">Fecha Inicio</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" id="departamento" name="departamento" placeholder="Departamento" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="departamento" class="col-sm-2 col-form-label">Fecha fin</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" id="departamento" name="departamento" placeholder="Departamento" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="estado">
                                    <option selected value="noIniciado">No iniciado</option>
                                    <option value="activo">Activo</option>
                                    <option value="parado">Parado</option>
                                </select>
                            </div>
			            </div>
                        <div class="mb-3 row">
                            <label for="salario" class="col-sm-2 col-form-label">Salario</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" id="salario" name="salario" placeholder="salario" required>
                            </div>
                        </div>
                    </form>  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" name="registroProyecto">Añadir Proyecto</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
