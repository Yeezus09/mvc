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
        <title>Registro de Usuario</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/Logo.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <script>

    function validar()
    {
        var txtUsuario = document.getElementById("txtNUsuario").value;
        var txtCont = document.getElementById("txtContra").value;
        var txtcantidad = document.getElementById("txtcantidadprod").value;

        if (txtUsuario.length > 15) 
        {
            alert("¡Caracteres Exedidos!");
            return false;
        }
        if (txtCont.length > 15) 
        {
            alert("¡Caracteres Exedidos!");
            return false;
        }
        return true;
    }

    function repetidoC(Correo)
    {
        
        $.getJSON("Veri_Correo.php?Correo=" + Correo).done(function(datos)
        {

            if (datos[0][0]>0) 
            {
                alert("¡Correo ya registrado, intente con otro!");
                
            }
        });
        
    }

    </script>
    </head>

    <body>
<?php

        @$ID_USU= $_POST['txtIdUsuario'];
        @$CONTRA= $_POST['txtContra'];
        @$USUARIO= $_POST['txtNUsuario'];
        @$PRIV = $_POST['txtPrivilegio'];


    require 'BD/conexion_bd.php'; 

    $obj = new BD_PDO();

    if (isset($_POST['txtRegistrarU'])) 
    {

        $obj->Ejecutar_Instruccion("Insert into tbl_usuarios (Usuario,Contrasenia,Privilegio) values ('$USUARIO','$CONTRA','$PRIV');");

    }

   
?>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Novedades Ely</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="InicioSesion/cerrar_sesion.php#!">Volver</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <header>
            <div class="masthead">

    <form style="text-align: center;" action="Registro.php" method="post" id="frminsertar" name="frminsertar" onsubmit="return validar();">

            <input class=" " type="text" name="txtIdUsuario" id="txtIdUsuario" value="<?php echo @$buscar_mod[0][0]; ?>" hidden>
            
            <h4 style="color: white;">DATOS DE USUARIO</h4>

        <p style="color: white;">Usuario:</p> 

                <input class=" " onblur="javascript: repetido(this.value);"  style="padding-top: 5px;padding-bottom: 5px;padding-right: 10px;padding-left: 10px;width: 200px;"  type="text" name="txtNUsuario" placeholder="Ingrese un Usuario" required value="<?php echo @$buscar_mod[0][1]; ?>">

                <br>
                <br>

        <p style="color: white;">Contraseña:</p> 
    <!--CONTRASEÑA-->  

                <input class="" style="padding-top: 5px;padding-bottom: 5px;padding-right: 10px;padding-left: 10px;width: 200px;"  type="password" name="txtContra" id="txtContra" placeholder="Contraseña" autocomplete="off" required  value="<?php echo @$buscar_mod[0][2]; ?>" >

                <br>
                <br>

        <p style="color: white;">Privilegio:</p> 
    <!--PRIVILEGIO-->
                <select  style="width: 200px;height: 34px" name="txtPrivilegio" id="txtPrivilegio" value="<?php echo @$buscar_mod[0][3]; ?>" required>
                    <option value="">Privilegio...</option>
                    <option value="VISITANTE">VISITANTE</option>
                    <option value="ADMIN">ADMIN</option>
                </select>                
                <br>
               <br>

                <input class="btn btn-success" type="submit" name="txtRegistrarU" id="txtRegistrarU" value="Registrar" > 
    </div>
    </div>   
    </form>
        </header>
    </body>
</html>
