

<?php

$url_base="http://localhost/app/";


?>
<?php
include("../../bd.php");
if($_POST){
  print_r($_POST);

  print_r($_FILES);
  $codigo=(isset($_POST["codigo"])?$_POST["codigo"]:"");
  $id_cate=(isset($_POST["id_cate"])?$_POST["id_cate"]:"");
  $nompro=(isset($_POST["nompro"])?$_POST["nompro"]:"");
  $foto=(isset($_FILES["foto"]['name'])?$_FILES["foto"]['name']:"");
  $peso=(isset($_POST["peso"])?$_POST["peso"]:"");
  $id_prove=(isset($_POST["id_prove"])?$_POST["id_prove"]:"");
  $descp=(isset($_POST["descp"])?$_POST["descp"]:"");
  $preciC=(isset($_POST["preciC"])?$_POST["preciC"]:"");
  $precioV=(isset($_POST["precioV"])?$_POST["precioV"]:"");
  $stock=(isset($_POST["stock"])?$_POST["stock"]:"");
  $estado=(isset($_POST["estado"])?$_POST["estado"]:"");

  

  $sentencia=$conexion->prepare("INSERT INTO `productos` (`id_pro`, `codigo`, `id_cate`, `foto`, `nompro`, `peso`, `id_prove`, `descp`,  `preciC`, `precioV`, `stock`, `estado`)
  VALUES (NULL, :codigo, :id_cate,:foto,  :nompro, :peso, :id_prove, :descp,:stock,  :preciC, :precioV,:estado);");





 $sentencia->bindParam(":codigo",$codigo);
 $sentencia->bindParam(":id_cate",$id_cate);
$sentencia->bindParam(":nompro",$nompro);
 $sentencia->bindParam(":id_prove",$id_prove);
 $sentencia->bindParam(":descp",$descp);
 $sentencia->bindParam(":stock",$stock);
  $sentencia->bindParam(":peso",$peso);
  $sentencia->bindParam(":preciC",$preciC);
  $sentencia->bindParam(":precioV",$precioV);
  $sentencia->bindParam(":estado",$estado);


  $fecha_=new DateTime();

  $nombreArchivo_foto=($foto!='')?$fecha_->getTimestamp()."_".$_FILES["foto"]['name']:"";
  $tmp_foto=$_FILES["foto"]['tmp_name'];

  if($tmp_foto!=''){
    move_uploaded_file($tmp_foto,"./".$nombreArchivo_foto);
  }



  

  $sentencia->bindParam(":foto",$nombreArchivo_foto);   


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


                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">inbox</i>
                            <span>PRODUCTOS</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="<?php echo $url_base; ?>secciones/producto/crear.php">Registrar</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo $url_base; ?>secciones/producto/">Listar / Modificar</a>
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
                    <li >
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">business</i>
                            <span>PROVEEDORES</span>
                        </a>
                        <ul class="ml-menu">
                            <li >
                                <a href="<?php echo $url_base; ?>secciones/provedores/crear.php">Registrar</a>
                            </li>
                            <li >
                                <a href="<?php echo $url_base; ?>secciones/provedores/">Listar / Modificar</a>
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
                            <li>
                                <a href="<?php echo $url_base; ?>secciones/mascota/crear.php">Registrar</a>
                            </li>
                            <li>
                                <a href="<?php echo $url_base; ?>secciones/mascota">Listar / Modificar</a>
                            </li>
                            <li>
                                <a href="<?php echo $url_base; ?>secciones/tipo">Tipos</a>
                            </li>
                            <li >
                                <a href="<?php echo $url_base; ?>secciones/raza">Razas</a>
                            </li>
                        </ul>
</li>
<!--======================================================================================================-->
                    <li  >
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
    </section>===========CONTENIDO DE LA PÁGINA ==========================================================-->


<section class="content">
        <div class="container-fluid">
            <!-- Input -->
<div class="alert alert-info">
  <strong>Estimado usuario!</strong>    Los campos remarcados con <span class="text-danger">*</span> son necesarios.
</div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="header">
                            <h2>
                                REGISTRO DE PRODUCTOS
                                <small>Registra cualquier producto...</small>
                            </h2>
                        </div>

                    <div class="body">
                        <form method="POST"  autocomplete="off" enctype="multipart/form-data">
                            <div class="row clearfix">
<?php 

        class tools{

    public function randomCode() {
                $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                $pass = array();
                $pass[]="0"; 
                $alphaLength = strlen($alphabet) - 1; 
                for ($i = 0; $i < 13; $i++) {
                    $n = rand(0, $alphaLength);
                    $pass[] = $alphabet[$n];
                }
                return implode($pass); 
    }
}

        $instancia = new tools();
        $codigo = $instancia->randomCode();
     ?>
                                <div class="col-sm-4">
                                    <label class="control-label">Código de barra del producto</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input id="codigo_barras" readonly value="<?php echo $codigo?>" type="text" name="codigo" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="14" required class="form-control" placeholder="Código de barra del producto..." />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <label class="control-label">Nombre del producto<span class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nompro"  required class="form-control" placeholder="Nombre del producto*" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <label class="control-label">Categoría del producto</label>
                                    <select class="form-control show-tick"  name="id_cate">
                                        <option value="">-- Seleccione una Categoría --</option>
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
 $stmt = $dbcon->prepare('SELECT * FROM categoria');
        $stmt->execute();
        
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            ?>
            <option value="<?php echo $id_cate; ?>"><?php echo $nomcate; ?></option>
            <?php
        }
        ?>
?>
                                        
                                    </select>
                                </div>

                                <div class="col-sm-5">
                                    <label class="control-label">Proveedor<span class="text-danger">*</span></label>
                                    <select class="form-control show-tick" required  name="id_prove">
                                        <option value="">-- Seleccione un proveedor --</option>
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
 $stmt = $dbcon->prepare('SELECT * FROM provedor');
        $stmt->execute();
        
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            ?>
            <option value="<?php echo $id_prove; ?>"><?php echo $nomprove; ?></option>
            <?php
        }
        ?>
?>                                        
                                    </select>
                                </div>

                                <div class="col-sm-3">
                                    <label class="control-label">Precio compra<span class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="preciC"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required class="form-control" placeholder="Precio compra..." />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <label class="control-label">Precio venta<span class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="precV"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required class="form-control" placeholder="Precio venta..." />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <label class="control-label">Peso del producto<span class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="peso" maxlength="5" required class="form-control" placeholder="Peso..." />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-4">
                                    <label class="control-label">Stock del producto<span class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="stock" maxlength="5" required class="form-control" placeholder="stock..." />
                                        </div>
                                    </div>
                                </div>
                                     

                            
                                <div class="col-sm-6">
                                     <label class="control-label">Foto del producto <span class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <input type="file"class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="foto">             
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <label class="control-label">Descripcion del producto</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" name="descp" class="form-control no-resize" placeholder="Descripcion..."></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-5" style="display:none;">
                                    <select name="estado" class="form-control show-tick">
                                        
                                        <option value="1">1</option>
                                        
                                    </select>
                                </div>



                            </div>

                                <div class="container-fluid" align="center">
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <a type="button" href="../../folder/productos" class="btn bg-red"><i class="material-icons">cancel</i> LIMPIAR </a>
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
            </div>
            <!-- #END# Input -->
        </div>
    </section>

    <!-- Jquery Core Js -->
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