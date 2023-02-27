<?php 

require 'Modelo.php';

@$Var = new categorias();


    if(isset($_POST['btnreg']))
    {
    if($_POST['btnreg']=="Registrar")
        {

        @$Var->Ins($_POST['txtnomR'],$_POST['txtfecha']);

        }               

    else
        {
        	@$id = $_POST['txtidcatR'];

        	@$Var->Mod($_POST['txtnomR'],$_POST['txtfecha'],$id);
        }
    }
    else if (isset($_GET['id_eliminar'])) 
    {
    	@$id = $_GET['id_eliminar'];

        @$Var->Eli($id);
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

   require 'Vista.php';
 ?>    
