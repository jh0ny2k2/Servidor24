<?php
    //INICIALIZAMOS LA SESION
    session_start();

    //INCLUIMOS EL FICJERO LIB.PHP
    include_once("lib.php");
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
                        <a class="logo" href="index.html">
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
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
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
                            <a href="index.html"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                
                                    
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Registrarse</a>
                                </li>
                            </ul>
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
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
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
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Panel de Control</h2>
<?php
                                //HACEMOS QUE EL BOTON PARA AÑADIR PRESTAMO QUE SOLO LO VEAN SI HAN INICIADO
                                if (isset($_SESSION['usuario'])) {
                                    echo '  <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#addProducto">
                                                <i class="zmdi zmdi-plus"></i>Añadir Prestamo
                                            </button>';
                                }
?>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
<?php
//$total = contarLibros();
//echo '                                          <h2> ' . $total . '</h2>';
?>
                                                <span>Libros Totales</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>388,688</h2>
                                                <span>Prestamos Totales</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,086</h2>
                                                <span>Prestamos en curso</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>$1,060,386</h2>
                                                <span>Prestamos Terminados</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Buscar Proyectos</h2>

                                <form class="form-header m-b-25" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Busca prestamos por estado o por dni" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ISBN</th>
                                                <th>DNI</th>
                                                <th>FECHA_INICIO</th>
                                                <th>FECHA_FIN</th>
                                                <th>ESTADO</th>
                                                <th>OPCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
<?php
$prestamos = sacarPrestamos();
foreach ($prestamos as $valor){
    echo '                                  <tr>';
    echo '                                      <td> ' . $valor["isbn"] . '</td>';
    echo '                                      <td> ' . $valor["dni"] . '</td>';
    echo '                                      <td> ' . $valor["fechaInicio"] . '</td>';
    echo '                                      <td> ' . $valor["fechaFin"] . '</td>';
    echo '                                      <td> ' . $valor["estado"] . '</td>';
    echo '                                      <td><a href="./controlador.php?accion=borrarPrestamo&id='.$valor["id"].'"><button type="button" class="btn btn-danger"><i class="zmdi zmdi-close"></i></button></a>';
    echo '                                      <a href="./controlador.php?accion=editarPrestamo&id='.$valor["id"].'"><button type="button" class="btn btn-success "><i class="zmdi zmdi-edit"></i></button></a></td>';
    echo '                                  </tr>';
}
?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Prestamos en curso</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ISBN</th>
                                                <th>DNI</th>
                                                <th>FECHA_INICIO</th>
                                                <th>FECHA_FIN</th>
                                                <th>ESTADO</th>
                                                <th>OPCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
<?php
//$prestamos = sacarPrestamos();
foreach ($prestamos as $valor){
    echo '                                  <tr>';
    echo '                                      <td> ' . $valor["isbn"] . '</td>';
    echo '                                      <td> ' . $valor["dni"] . '</td>';
    echo '                                      <td> ' . $valor["fechaInicio"] . '</td>';
    echo '                                      <td> ' . $valor["fechaFin"] . '</td>';
    echo '                                      <td> ' . $valor["estado"] . '</td>';
    echo '                                      <td><a href="./controlador.php?accion=borrarPrestamo&id='.$valor["id"].'"><button type="button" class="btn btn-danger"><i class="zmdi zmdi-close"></i></button></a>';
    echo '                                      <a href="./controlador.php?accion=editarPrestamo&id='.$valor["id"].'"><button type="button" class="btn btn-success "><i class="zmdi zmdi-edit"></i></button></a></td>';
    echo '                                  </tr>';
}
?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="title-1 m-b-25">Top Usuarios</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td>United States</td>
                                                        <td class="text-right">$119,366.96</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                    <h5 class="modal-title">Añadir Prestamo</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="controlador.php" method="POST" id="nuevoProducto">
                        <div class="mb-3 row">
                            <label for="isbn" class="col-5 col-form-label">ISBN del libro</label>
                            <div class="col-6">
                            <input type="text" class="form-control-plaintext" id="isbn" name="isbn" placeholder="ISBN" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="descripcion" class="col-5 col-form-label">Dni del usuario</label>
                            <div class="col-6">
                            <input type="text" class="form-control-plaintext" id="dni" name="dni" placeholder="DNI" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="salario" class="col-5 col-form-label">Fecha Inicio</label>
                            <div class="col-6">
                            <input type="date" class="form-control-plaintext" id="salario" name="fechaInicio" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="salario" class="col-5 col-form-label">Fecha Final</label>
                            <div class="col-6">
                            <input type="date" class="form-control-plaintext" id="salario" name="fechaFin" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="estado" class="col-5 col-form-label">Estado</label>
                            <div class="col-6">
                                <select class="form-select" aria-label="Default select example" name="estado">
                                    <option selected value="activo">Activo</option>
                                </select>
                            </div>
			            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary" name="registroPrestamo">Añadir Prestamo</button>
                </div>
                    </form>  
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