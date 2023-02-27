
# Modelo MVC

MVC es una propuesta de arquitectura del software utilizada para separar el código por sus distintas responsabilidades, manteniendo distintas capas que se encargan de hacer una tarea muy concreta, lo que ofrece beneficios diversos.

# Modelo
Es la capa donde se trabaja con los datos, por tanto contendrá mecanismos para acceder a la información y también para actualizar su estado.

# Vista

Las vistas, como su nombre nos hace entender, contienen el código de nuestra aplicación que va a producir la visualización de las interfaces de usuario, o sea, el código que nos permitirá renderizar los estados de nuestra aplicación en HTML. 

# Controlador

Contiene el código necesario para responder a las acciones que se solicitan en la aplicación, como visualizar un elemento, realizar una compra, una búsqueda de información, etc.
## Vista
# Ejemplo de Vista
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
<script>
    function Eliminar(id)
    {
        if(confirm("Â¿Confirmar Eliminacion?"))
        {
            window.location = "Controlador.php?id_eliminar=" + id;
            
        }
    }
    function Modificar(id)
    {
        window.location = "Controlador.php?id_mod=" + id;
    }
</script>

    </head>
    <body id="page-top" style="background-color: black">
        <header class="masthead">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Examen DAPPS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            </div>
        </nav>
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">

                <form action="Controlador.php" id="frmregistrar" name="frmregistrar" method="POST">
        <!--REGISTRAR-->
                        <div class="Alinear_Cen cont" style="width: 400px;height: 260px;margin-left: 150px;padding-top: 5px;border-bottom-width: 5px;margin-top: 80px;">
                            <h3 class="mx-auto my-0 text-uppercase" style="color:white">Registrar</h3>
                            <br>
                            <input class="form-control-right " type="txtidcatR" name="txtidcatR" placeholder="Id Categoria" style="padding-top: 5px;padding-bottom: 5px;padding-left: 10px;padding-right: 10px;width: 230px;border-left-width: 1px;border-top-width: 1px;border-right-width: 1px;border-bottom-width: 1px;" 
                            value="<?php echo @$cat_mod[0][0]; ?>" hidden><br><br>

                            <input class="form-control-right " type="txtnomR" name="txtnomR" placeholder="Nombre" required 
                            style="padding-top: 5px;padding-bottom: 5px;padding-left: 10px;padding-right: 10px;width: 230px;border-left-width: 1px;border-top-width: 1px;border-right-width: 1px;border-bottom-width: 1px;"
                            value="<?php echo @$cat_mod[0][1];?>"><br><br>

                            <h2 class="mx-auto my-0 text-uppercase" style="color:white">Fecha:</h2>
                            <input type="date" id="txtfecha" name="txtfecha" class="separacion"
                            style="width: 230px;height: 34px;border-left-width: 1px;border-top-width: 1px;border-right-width: 1px;border-bottom-width: 1px;"
                            value="<?php echo @$cat_mod[0][2];?>">
                            <br>
                            <br>
                            <input type="submit" id="btnreg" name="btnreg" style="margin-right: 0px;width: 109px;"
                            value="<?php 
                            if(isset($_GET['id_mod']))
                            {
                                echo 'Modificar';
                            }
                            else
                            {
                                echo 'Registrar';
                            } 
                            ?>">
                </form>

                <form action="Controlador.php" id="frmbuscar" name="frmbuscar" method="POST">
        <!--BUSCAR-->
                        <div class="Alinear_Cen cont " style="width: 400px;height: 260px;margin-left: 0px;padding-top: 5px;border-bottom-width: 5px;margin-top: 80px;">

                            <h3 class="mx-auto my-0 text-uppercase" style="color:white">Buscar</h3>
                            <br>
                            <div>
                                
                            <input class="form-control-right " type="txtnomB" name="txtnomB" placeholder="Buscar" style="padding-top: 5px;padding-bottom: 5px;padding-left: 10px;padding-right: 10px;width: 230px;border-left-width: 1px;border-top-width: 1px;border-right-width: 1px;border-bottom-width: 1px;">

                            <input type="submit"  id="btnbus" name="btnbus" value="Buscar" style="margin-right: 0px;width: 109px;">
                            </div>
                
                            <br>
                            <table class="table table-hover text-center" style="color: white;width: 600px">
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
                                    <td><input type="button" class="btn btn-danger" name="btnEliminar" id="btnEliminar" value="Eliminar" onclick="javascript: Eliminar('<?php echo $row[0]; ?>')"></td>
                                    <td><input type="button" class="btn btn-warning" name="btnMod" id="btnMod" value="Modificar" onclick="javascript: Modificar('<?php echo $row[0]; ?>')"></td>
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





## Modelo
# Ejemplo de Modelo
<?php 
require 'BD/conexion_bd.php';

class categorias extends BD_PDO
{
	function Ins ($nombre,$fecha)
	{
		$this -> Ejecutar_Instruccion ("Insert into categorias (Nombre,Fecha) values ('$nombre','$fecha')");
	}
	function Mod ($nombre,$fecha,$id)
	{
		$this -> Ejecutar_Instruccion("Update categorias set Nombre = '$nombre', Fecha = '$fecha' where id_categoria = '$id'");
	}
	function Bus($DaB)
	{
		$this -> Ejecutar_Instruccion("Select * from categorias where Nombre like '%$DaB%'");
	}
	function Eli($id)
	{
		$this -> Ejecutar_Instruccion("Delete from categorias where id_categoria = '$id'");
	}
}

?>
## Controlador<?php 
# Ejemplo de Controlador

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

## Conexion a BD
<?php 

require 'config.php';

class BD_PDO
{
	//public $tot_reg;
	//public $ultimo_id;

	public function getConection ()	
	{
		try 
		{
			$conexion = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME.";",DB_USER,DB_PASS);			       	
		}
		catch(PDOException $e)
		{
	        echo "Failed to get DB handle: " . $e->getMessage();
	        exit;    
	    }
	    return $conexion;
	}

	public function Ejecutar_Instruccion($consulta_sql)
	{
		# code...
		$conexion = $this->getConection();
        $rows = array();        
		$query=$conexion->prepare($consulta_sql);
		if(!$query)
		{
         	return "Error al mostrar";
        }
		else
		{			
        	$query->execute();   
           	//$this->tot_reg = $query->rowCount();     	
        	while ($result = $query->fetch())
			{
            	$rows[] = $result;
          	}			
            return $rows;
        }
	}
}

## Conexion
<?php 

define('DB_SERVER', 'localhost');
define('DB_NAME', 'bdexamen');
define('DB_USER', 'root');
define('DB_PASS', '');

 ?>