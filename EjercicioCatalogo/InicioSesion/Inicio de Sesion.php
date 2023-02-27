<?php 
session_start(); 
error_reporting(1);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Proyecto-Novedades Ely</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/Logo.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body >
    <?php 

        require '../BD/conexion_bd.php';

        $obj = new BD_PDO();


        if (isset($_POST['btnIniciar'])) 
        {
            $u = $_POST['txtUsuario'];
            $c = $_POST['txtContra'];
            $usuario = $obj->Ejecutar_Instruccion("Select * from tbl_usuarios where Usuario='$u' and Contrasenia='$c'");
            $Us = $obj->Ejecutar_Instruccion("Select Usuario from tbl_usuarios where Usuario='$u'");
            $Contra = $obj->Ejecutar_Instruccion("Select Contrasenia from tbl_usuarios where Contrasenia='$c'");
            if ($usuario[0][0]>0) 
            {
                echo '<script>alert("¡BIENVENIDO!");</script>';

                $_SESSION['Id_Usuario'] = $usuario[0][0];
                $_SESSION['Nombre'] = $usuario[0][1];
                $_SESSION['Apellido_P'] = $usuario[0][2];
                $_SESSION['Apellido_M'] = $usuario[0][3];
                $_SESSION['Genero'] = $usuario[0][4];
                $_SESSION['Correo'] = $usuario[0][5];
                $_SESSION['Usuario'] = $usuario[0][6];
                $_SESSION['Contrasenia'] = $usuario[0][7];
                $_SESSION['Privilegio'] = $usuario[0][8];

                header("Location: ../Controlador.php");
            }
            if ($c != $Contra and $u = $Us) 
            {
                echo '<script>alert("¡Contraseña incorrecta!");</script>';
            }
            else
            {
                echo '<script>alert("¡Usuario no registrado!");</script>';
            }
        }

     ?>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Examen DAPPS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../Registro.php#!">¡REGISTRATE!</a></li>
                        <li class="nav-item"><a class="nav-link" href="../ControladorV.php#!">Volver</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header - set the background image for the header in the line below-->
        <header class="masthead">
            <div >

                <div class="AC">

                    <form style="text-align: center;" action="Inicio de Sesion.php" method="post">

                        <br>
                        <br>
                        <br>
                        <h3 style="color:white; margin-left: 15px;" >Inicio de Sesion</h3>
                        <br>
                        <br>
                        <label style="color:white;text-align: left">Ingrese su Usuario:</label>
                        <br>

                            <input class="form-control-right " type="text" name="txtUsuario" id="txtUsuario" placeholder="Usuario" style="padding-top: 5px;padding-bottom: 5px;padding-right: 10px;padding-left: 10px;width: 274px;" autocomplete="off" required><br><br>

                        <label  style="color:white;text-align: left">Ingrese su contraseña:</label>
                            <br>
                            <input class="form-control-right " type="password" name="txtContra" id="txtContra" placeholder="Contraseña" style="padding-top: 5px;padding-bottom: 5px;padding-right: 10px;padding-left: 10px;width: 274px;" autocomplete="off" required><br><br>

                            <input class="form-control-right btn btn-success" type="submit" name="btnIniciar" id="btnIniciar" value="Ingresar">
                           
                    </form>
                </div>

            </div>  
        </header>
    </body>
</html>
