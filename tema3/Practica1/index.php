<?php
    //INICIAMOS SESION ANTES QUE NADA
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <?php

    //COMPROBAMOS SI LA SESION ESTÁ INICIADA 
    if (isset($_SESSION['usuario'])) {
        //SI ESTA LA SESION INICIADA PRINTEAMOS EL BOTON DEL PERFIL
        echo '  <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">';
        echo '      <li class="nav-item dropdown">';
        echo '          <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a> ';
        echo '          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> ';
        echo '              <li><a class="dropdown-item" href="controlador.php?accion=cerrarSesion">Cerrar Sesion</a></li>';
        echo '          </ul>';
        echo '      </li>';
        echo '  </ul>';
    } else {
        //SI LA SESION ESTA CERRADA ENTONCES PRINTEAMOS LOS BOTONES DE REGISTRO Y LOGIN
        echo ' <a class="nav-link btn-sm" href="register.php" role="button" aria-expanded="false"><button type="button" class="btn btn-dark">Registrarse</button></a>';
        echo ' <a class="nav-link btn-sm" href="login.php" role="button" aria-expanded="false"><button type="button" class="btn btn-dark">Iniciar Sesion</button></a>';
    }

?>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Panel de control
                            </a>
<?php

    if (isset($_SESSION['usuario'])) {
        echo '<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
        Opciones
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="borrarProyecto.php">Borrar Proyecto</a>
            <a class="nav-link" href="añadirProyecto.php">Añadir Proyecto</a>
        </nav>
    </div>';
    }


?>
                            
                        </div>
                    </div>
<?php

    if (isset($_SESSION['usuario'])) {
        echo '<div class="small">Logeado con:</div>';
        echo $_SESSION["usuario"]["email"];
    }

?>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Panel de control</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Panel de proyectos</li>
                        </ol>
                        
<?php   
            //SACAMOS LA INFORMACION DE EL ARRAY CREADO EN LA SESION DE LOS PROYECTOS
            if (isset($_SESSION['proyectos'])){
                $proyectos = $_SESSION['proyectos'];
            } else {
                $proyectos = array();
            }

            //SI LA SESION DEL USUARIO ESTA ACTIVA ENTONCES PRINTEAMOS EL PANEL DE CONTROL DE PROYECTOS
            if (isset($_SESSION['usuario'])){
                //CREAMOS LA CABECERA DE LA TABLA
               echo '<div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                                Panel de Control de Proyectos
                        </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Departamento</th>
                                            <th>Dia de Inicio</th>
                                            <th>Dia de entrega</th>
                                            <th>Salario</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Departamento</th>
                                            <th>Dia de Inicio</th>
                                            <th>Dia de entrega</th>
                                            <th>Salario</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>';
                                            //PRINTEAMOS LOS PROYECTOS SIEMPRE Y CUANDO LA SESION DEL USUARIO ESTE INICIADA
                                                echo '<td> ' . $proyectos["nombreProyecto"] . ' </td>';       
                                                echo '<td> ' . $proyectos["descripcion"] . ' </td>';   
                                                echo '<td> ' . $proyectos["departamento"] . ' </td>';   
                                                echo '<td> ' . $proyectos["tiempo"] . ' </td>';     
                                                echo '<td> ' . $proyectos["fechaInicio"] . ' </td>';     
                                                echo '<td> ' . $proyectos["salario"] . ' </td>';
            } else { 
                echo ' <p>Inicia Sesion para poder ver los proyectos activos</p>';
            }
?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
