

<?php
$url_base="http://localhost/app/";

?>

<?php
   include("../../bd.php");
   if(isset($_GET['txtID'])){
    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
    $sentencia=$conexion->prepare("SELECT * FROM raza WHERE id_raza=:id_raza");
    $sentencia->bindParam(":id_raza",$txtID);
    $sentencia->execute();
    $registro=$sentencia->fetch(PDO::FETCH_LAZY);
    $nomraza=$registro["nomraza"];
    $estado=$registro["estado"];
    $id_type=$registro["id_type"];



   }

   if($_POST){
    print_r($_POST);
    $txtID=(isset($_POST['txtID']))?$_GET['txtID']:"";
    $nomraza=(isset($_POST['nomraza']))?$_POST['nomraza']:"";
    $estado=(isset($_POST["estado"])?$_POST["estado"]:"");
    $id_type=(isset($_POST["id_type"])?$_POST["id_type"]:"");
  
    $sentencia=$conexion->prepare("UPDATE  raza  SET  nomraza=:nomraza, id_type=:id_type
    where id_raza=:id_raza") ;
  
    $sentencia->bindParam(":id_raza",$txtID);
    $sentencia->bindParam(":nomraza",$nomraza);
    
    $sentencia->bindParam(":id_type",$id_type);

      
    $sentencia->execute();
    header("Location:index.php");




  
   

  }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>DOGTORAS| DOGTORAS CLINICA VETERINARIA<</title>
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="../../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
    <!-- Bootstrap DatePicker Css -->
    <link href="../../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
    <!-- Google Font - Iconos -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="../../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="../../assets/plugins/node-waves/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="../../assets/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../assets/css/themes/all-themes.css" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/lll.png" />
       


</head>

<body class="theme-red">
   
    <!-- #END# Page Loader -->

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- LUPA -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons"></i>
        </div>
        <input type="text" placeholder="Buscar...">
        <div class="close-search">
            <i class="material-icons">X</i>
        </div>
    </div>
    <!-- //LUPA -->

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../panel-admin/administrador"> VETDOG - DASHBOARD </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                  
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->

    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../../assets/img/mujerico.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo ucfirst($_SESSION['nombre']); ?></div>
                    <div class="email"><?php echo ucfirst($_SESSION['correo']); ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="../config/configuracion"><i class="material-icons">brightness_low</i>Mi Cuenta</a></li>
                            <li role="separator" class="divider"></li>
                            <li role="separator" class="divider"></li>

                            <li><a href="../pages-logout"><i class="material-icons">input</i>Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->


            <div class="menu">
                <ul class="list">
                    <li class="header">MENÚ DE NAVEGACIÓN</li>
                    <li>
                        <a href="../panel-admin/administrador">
                            <i class="material-icons">home</i>
                            <span>INICIO</span>
                        </a>
                    </li>
<!--======================================================================================================-->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">inbox</i>
                            <span>Usuarios</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo $url_base; ?>secciones/usuarios/crear.php">Registrar</a>
                            </li>
                            <li>
                                <a href="<?php echo $url_base; ?>secciones/usuarios">Listar / Modificar</a>
                            </li>
                        </ul>
                    </li>
<!--======================================================================================================-->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">low_priority</i>
                            <span>CATEGORÍAS</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../categorias/nuevo">Registrar</a>
                            </li>
                            <li>
                                <a href="../../folder/categorias">Listar / Modificar</a>
                            </li>
                        </ul>
                    </li>
<!--======================================================================================================-->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">supervisor_account</i>
                            <span>CLIENTES</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo $url_base; ?>secciones/cliente/crear.php">Registrar</a>
                            </li>
                            <li>
                                <a href="<?php echo $url_base; ?>secciones/cliente/">Listar / Modificar</a>
                            </li>
                        </ul>
                    </li>
<!--======================================================================================================-->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">business</i>
                            <span>PROVEEDORES</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../proveedores/nuevo">Registrar</a>
                            </li>
                            <li>
                                <a href="../../folder/proveedores">Listar / Modificar</a>
                            </li>
                        </ul>
                    </li>
<!--======================================================================================================-->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person_pin</i>
                            <span>VETERINARIOS</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo $url_base; ?>secciones/veterinario/crear.php">Registrar</a>
                            </li>
                            <li>
                                <a href="<?php echo $url_base; ?>secciones/veterinario">Listar / Modificar</a>
                            </li>
                        </ul>
                    </li>
<!--======================================================================================================-->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">flutter_dash</i>
                            <span>MASCOTAS</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="<?php echo $url_base; ?>secciones/mascota/crear.php">Registrar</a>
                            </li>
                            <li>
                                <a href="<?php echo $url_base; ?>secciones/mascota">Listar / Modificar</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo $url_base; ?>secciones/tipo">Tipos</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo $url_base; ?>secciones/raza">Razas</a>
                            </li>
                        </ul>
</li>
<!--======================================================================================================-->
                    <li >
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">calendar_today</i>
                            <span>CITAS</span>
                        </a>
                        <ul class="ml-menu">
                            <li >
                                <a href="<?php echo $url_base; ?>secciones/citas/crear.php">Registrar</a>
                            </li>
                            <li >
                                <a href="<?php echo $url_base; ?>secciones/citas">Listar / Modificar</a>
                            </li>

                            <li >
                                <a href="<?php echo $url_base; ?>secciones/servicios">Servicio</a>
                            </li>
                        </ul>
    </li>
    <!--======================================================================================================-->
    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">shopping_basket</i>
                            <span>COMPRA</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../compra/nuevo">Registrar</a>
                            </li>
                            <li>
                                <a href="../../folder/compra">Listar / Modificar</a>
                            </li>

                            <li>
                                <a href="../compra/compras_fecha">Consultar por fecha</a>
                            </li>


                        </ul>
    </li>
<!--======================================================================================================-->
<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">monetization_on</i>
                            <span>VENTA</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../venta/nuevo">Registrar</a>
                            </li>
                            <li>
                                <a href="../../folder/venta">Listar / Modificar</a>
                            </li>

                             <li>
                                <a href="../venta/venta_fecha">Consultar por fecha</a>
                            </li>
                        </ul>
    </li>
    <!--======================================================================================================-->
        <aside id="rightsidebar" class="right-sidebar">
        </aside>
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                MODIFICAR RAZA
                                <small>Modificar cualquier raza...</small>
                            </h2>
                        </div>

                    <div class="body">
                    <?php         
function connect(){
return new mysqli("localhost","root","","vetedog");
}
$con = connect();
$txtID = $_GET['txtID'];
$sql = "SELECT raza.nomraza, raza.id_raza, pet_type.id_type, pet_type.tipo, raza.estado FROM raza INNER JOIN pet_type ON raza.id_type = pet_type.id_type WHERE id_raza= '$txtID'";
$query  =$con->query($sql);
$data =  array();
if($query){
  while($r = $query->fetch_object()){
    $data[] = $r;
  }
}

?> 


<?php if(count($data)>0):?>
    <?php foreach($data as $d):?>

                    <form action="" method="post" enctype="multipart/form-data">
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <label class="control-label">ID de la raza</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <input type="text"
            value="<?php echo $txtID;?>"
            class="form-control" readonly name="txtID" id="txtID" aria-describedby="helpId" placeholder="ID">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <label class="control-label">Nombre de la raza</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <input type="text"
         value="<?php echo $nomraza;?>"
           class="form-control" name="nomraza" id="nombre" aria-describedby="helpId" placeholder="Nombre de la raza">
                                        </div>
                                    </div>
                                </div>


                              



                                    <div class="col-sm-4">
                                    <label class="control-label">Tipo de la mascota</label>
                                    <select class="form-control show-tick" value="<?php echo $d->id_type; ?>"  name="id_type">
                                        <option value="<?php echo $d->id_type; ?>"><?php echo $d->tipo; ?></option>
<?php 
 $dbhost = 'localhost';
 $dbname = 'vetedog';  
 $dbuser = 'root';                  
 $dbpass = '';                  
 
 try{
  
  $dbcon = new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
  $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
 }catch(PDOException $ex){
  
  die($ex->getMessage());
 }
 $stmt = $dbcon->prepare('SELECT * FROM pet_type');
        $stmt->execute();
        
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            ?>
            <option value="<?php echo $id_type; ?>"><?php echo $tipo; ?></option>
            <?php
        }
        ?>


                           
                             
</select>
                                </div>
                            </div>

                                <div class="container-fluid" align="center">
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <a type="button" href="index.php" class="btn bg-red"><i class="material-icons">cancel</i> LIMPIAR </a>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        

                                         <button class="btn bg-green" name="update">ACTUALIZAR<i class="material-icons">save</i></button>
                                    </div>
                                    
                                </div>
                        </form>
                 </div>
   
                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
  
  <?php else:?>  
    <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
        No hay datos
      </span>
  <?php endif; ?>  
            <!-- #END# Input -->


    <!-- Jquery Core Js -->
    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="../../assets/plugins/bootstrap/js/bootstrap.js"></script>
    <!-- Select Plugin Js -->
    <script src="../../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="../../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="../../assets/plugins/node-waves/waves.js"></script>
    <!-- Autosize Plugin Js -->
    <script src="../../assets/plugins/autosize/autosize.js"></script>
    <!-- Moment Plugin Js -->
    <script src="../../assets/plugins/momentjs/moment.js"></script>
    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    
    <!-- Bootstrap Datepicker Plugin Js -->
   
    <!-- Custom Js -->
    <script src="../../assets/js/admin.js"></script>
    <script src="../../assets/js/pages/forms/basic-form-elements.js"></script>
    <!-- Demo Js -->

    <script src="../../assets/js/demo.js"></script>


    












