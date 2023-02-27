<?php 

require 'Modelo.php';

@$Var = new categorias();


    if(isset($_POST['btnreg']))
    {
    if($_POST['btnreg']=="Registrar")
        {

        @$Var->Ins($_POST['txtnomR'],$_POST['txtfecha']);

        echo '<script>alert("¡Registro exitoso!");</script>';
        }               

    else
        {
        	@$id = $_POST['txtidcatR'];

        	@$Var->Mod($_POST['txtnomR'],$_POST['txtfecha'],$id);

            echo '<script>alert("¡Modificacion exitosa!");</script>';
        }
    }
    else if (isset($_GET['id_eliminar'])) 
    {
    	@$id = $_GET['id_eliminar'];

        @$Var->Eli($id);

        echo '<script>alert("¡Eliminacion exitosa!");</script>';

    }
    else if (isset($_GET['id_mod']))
    {
        @$id = $_GET['id_mod'];

        @$cat_mod = $Var->Ejecutar_Instruccion("Select * from categorias where id_categoria = '$id' ");
                    
    }
    else if(isset($_POST['btnbus']))
    {
        $DaB = $_POST['txtnomB'];

        $Var->Bus($DaB);
    }

    @$resu = $Var->Ejecutar_Instruccion("Select * from categorias where Nombre like '%$DaB%' ");

   require 'VistaV.php';
 ?>