<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Grayscale - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />   
    </head>
    <body id="page-top" style="background-color: black">
        <header class="masthead">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Examen DAPPS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="InicioSesion/Inicio de Sesion.php#!">Iniciar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">

                <form action="ControladorV.php" id="frmbuscar" name="frmbuscar" method="POST">
        <!--BUSCAR-->
                        <div class="Alinear_Cen cont " style="width: 400px;height: 260px;margin-left: 0px;padding-top: 5px;border-bottom-width: 5px;margin-top: 80px;">

                            <h3 class="mx-auto my-0 text-uppercase" style="color:white">Buscar</h3>
                            <br>
                            <div>
                            <input class="form-control-right " type="txtnomB" name="txtnomB" placeholder="Buscar" style="padding-top: 5px;padding-bottom: 5px;padding-left: 10px;padding-right: 10px;width: 230px;border-left-width: 1px;border-top-width: 1px;border-right-width: 1px;border-bottom-width: 1px;">

                            <input type="submit"  id="btnbus" name="btnbus" value="Buscar" style="margin-right: 0px;width: 109px;">
                            </div>
                
                            <br>
                            <table class="table table-hover text-center" style="color: white;width: 600px;text-align: center;">
                                <tr>
                                    <td>Id</td>
                                    <td>Nombre</td>
                                    <td>Fecha</td>
                                </tr>
                            <?php foreach ($resu as $row) {?>
                                <tr>
                                    <td><?php echo $row[0]; ?></td>
                                    <td><?php echo $row[1]; ?></td>
                                    <td><?php echo $row[2]; ?></td>
                                </tr>
                            <?php } ?>
                            </table>
                            <br><br>
                        </div>
                </form>                        
                    </div>
                </div>
            </div>         
        </header>
    </body>
</html>
