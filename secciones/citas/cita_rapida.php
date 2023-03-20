

<?php

$url_base="http://localhost/app/";


?>
<?php
include("../../bd.php");
if($_POST){

    $id_vet=(isset($_POST["id_vet"])?$_POST["id_vet"]:"");
    $descripcion=(isset($_POST["descripcion"])?$_POST["descripcion"]:"");
    $id_servi=(isset($_POST["id_servi"])?$_POST["id_servi"]:"");
    $nommas=(isset($_POST["nommas"])?$_POST["nommas"]:"");
    $dueno=(isset($_POST["dueno"])?$_POST["dueno"]:"");
    $id_type=(isset($_POST["id_type"])?$_POST["id_type"]:"");
    $fechainicio=(isset($_POST["fechainicio"])?$_POST["fechainicio"]:"");
    $precio=(isset($_POST["precio"])?$_POST["precio"]:"");
    $estado=(isset($_POST["estado"])?$_POST["estado"]:"");
    
  

$sentencia=$conexion->prepare("INSERT INTO `citas` (`id_cita`, `id_vet`, `descripcion`, `id_type`, `id_servi`, `nommas`, `dueno`, `fechainicio`, `precio`, `estado`) 
VALUES (NULL, :id_vet, :descripcion, :id_type, :id_servi, :nommas, :dueno, :fechainicio, :precio, :estado)");

  
  
    $sentencia->bindParam(":id_vet",$id_vet);
    $sentencia->bindParam(":descripcion",$descripcion);
    $sentencia->bindParam(":id_type",$id_type);
    $sentencia->bindParam(":id_servi",$id_servi);
    $sentencia->bindParam(":nommas",$nommas);
    $sentencia->bindParam(":dueno",$dueno);
    $sentencia->bindParam(":fechainicio",$fechainicio);
    $sentencia->bindParam(":precio",$precio);
    $sentencia->bindParam(":estado",$estado);

  
  
    $sentencia->execute();
    header("Location:index.php");
 


   



  



}




?>
<br/>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Vetdog V.1 | Vetdog - Vetdog Admin Template</title>
    <!-- Google Font - Iconos -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="../../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
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
     <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Cargando...</p>
        </div>
    </div>
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
                            <li>
                                <a href="../citas/nuevo">Registrar</a>
                            </li>
                            <li>
                                <a href="../../folder/citas">Listar / Modificar</a>
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
<!--============================CONTENIDO DE LA PÁGINA ==========================================================-->
<section class="content">
        <div class="container-fluid">
            <div class="alert alert-info">
  <strong>Estimado usuario!</strong>    Los campos remarcados con <span class="text-danger">*</span> son necesarios.
</div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                REGISTRO DE CITAS RÁPIDAS
                                <small>Registra citas rapidas...</small>
                            </h2>


                        </div>
<!--==================================================================================================================================================-->
                        <div class="body">
                    <form method="POST"  autocomplete="off" enctype="multipart/form-data">
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <label class="control-label">Nombre de la cita<span class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="descripcion" class="form-control" placeholder="Nombre de la cita..." />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <label class="control-label">Veterinario<span class="text-danger">*</span></label>
                                    <select class="form-control show-tick" required name="id_vet"  id="vete">
                                        <option value="">-- Seleccione un veterinario --</option>
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
 $stmt = $dbcon->prepare('SELECT * FROM veterinarios');
        $stmt->execute();
        
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            ?>
            <option value="<?php echo $id; ?>"><?php echo $nombre; ?>&nbsp;<?php echo $apellido; ?></option>
            <?php
        }
        ?>
?>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <label class="control-label">Tipo de mascota<span class="text-danger">*</span></label>
                                    <select class="form-control show-tick" required name="id_type" id="tipomas">
                                        <option value="">-- Seleccione el tipo de mascota --</option>
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
?> 
                                    </select>
                                </div>

                                
                            </div>
<!--==================================================================================================================================================-->
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <label class="control-label">Servicio<span class="text-danger">*</span></label>
                                    <select class="form-control show-tick" required name="id_servi" id="servicio">
                                        <option value="">-- Seleccione el servicio --</option>
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
 $stmt = $dbcon->prepare('SELECT * FROM servicios');
        $stmt->execute();
        
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            ?>
            <option value="<?php echo $id_servi; ?>"><?php echo $nomservi; ?></option>
            <?php
        }
        ?>
?>
                                    </select>
                                </div>

                                 <div class="col-sm-4">
                                    <label class="control-label">Nombre de la mascota<span class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nommas" required class="form-control" placeholder="Nombre de la mascota..." />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <label class="control-label">Nombre del dueño<span class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="dueno" required class="form-control" placeholder="Nombre del dueño..." />
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
<!--==================================================================================================================================================-->
                       

                            <div class="col-sm-6">
                                <label class="control-label">Precio<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">monetization_on</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" required name="precio" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control money-euro" placeholder="Precio... Ex: $99,99">
                                    </div>
                                </div>
                            </div>


                                <div class="col-sm-4">
                                    <div class="form-group">
                  <label class="control-label">Fecha de inicio<span class="text-danger">*</span></label>
                  <div class='input-group date' name="fechainicio">
                     <input type='datetime-local' name="fechainicio" class="form-control" />
                     <span class="input-group-addon">
                 
                     </span>
                  </div>
               </div>

                                <div class="col-md-6" style="display:none;">
               <div class="form-group">
                  <label class="control-label">Estado</label>
                  <select class="form-control form-control-line"  name="estado">   
                       
                        <option value="0">0</option>
                                     
                    </select>
               </div>
            </div>
                            </div>
                            <div class="container-fluid" align="center">
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <a type="button" href="index.php" class="btn bg-red"><i class="material-icons">cancel</i> LIMPIAR </a>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <button class="btn bg-green" name="agregar">GUARDAR<i class="material-icons">save</i></button>
                                    </div>



                                    
                                </div>
                           </form>     
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
        </div>
    </section>
    <!-- #END# Colored Card - With Loading -->
    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../../assets/js/funciones/tipo.js"></script>
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