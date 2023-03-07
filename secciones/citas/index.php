
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>DOGTORAS| DOGTORAS CLINICA VETERINARIA<</title>
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

        <link href="../../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
        


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


                <!-- Menu -->
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
                                <span>PRODUCTOS</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="../productos/nuevo">Registrar</a>
                                </li>
                                <li>
                                    <a href="../../folder/productos">Listar / Modificar</a>
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
                                    <a href="../clientes/nuevo">Registrar</a>
                                </li>
                                <li>
                                    <a href="../../folder/clientes">Listar / Modificar</a>
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
                                    <a href="../veterinarios/nuevo">Registrar</a>
                                </li>
                                <li>
                                    <a href="../../folder/veterinarios">Listar / Modificar</a>
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
                                    <a href="../mascotas/nuevo">Registrar</a>
                                </li>
                                <li>
                                    <a href="../../folder/mascotas">Listar / Modificar</a>
                                </li>
                                <li>
                                    <a href="../../folder/tipo">Tipos</a>
                                </li>
                                <li>
                                    <a href="../../folder/raza">Razas</a>
                                </li>
                            </ul>
    </li>
    <!--======================================================================================================-->
                        <li class="active">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">calendar_today</i>
                                <span>CITAS</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="active">
                                    <a href="<?php echo $url_base; ?>secciones/citas/crear.php">Registrar</a>
                                </li>
                                <li>
                                    <a href="<?php echo $url_base; ?>secciones/citas/">Listar / Modificar</a>
                                </li>
                                <li>
                                    <a href="../../folder/servicio">Servicio</a>
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
                                            <input type="text" name="title" class="form-control" placeholder="Nombre de la cita..." />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <label class="control-label">Veterinario<span class="text-danger">*</span></label>
                                    <select class="form-control show-tick" required name="id_vet"  id="vete">
                                        <option value="">-- Seleccione un veterinario --</option>
  

                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <label class="control-label">Tipo de mascota<span class="text-danger">*</span></label>
                                    <select class="form-control show-tick" required name="id_tiM" id="tipomas">
                                        <option value="">-- Seleccione el tipo de mascota --</option>


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
                  <div class='input-group date' name="start">
                     <input type='datetime-local' name="start" class="form-control" />
                     <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                  </div>
               </div>
                                </div>

                                <div class="col-sm-4">
                                    <label class="control-label">Fecha de fin<span class="text-danger">*</span></label>
                                    <div class="form-group">
                 
                  <div class='input-group date' name="end">
                     <input type='datetime-local' name="end" class="form-control" />
                     <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                  </div>
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
                                        <a type="button" href="../../folder/citas" class="btn bg-red"><i class="material-icons">cancel</i> LIMPIAR </a>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    


     



    section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Listado de los Tipos de Mascotas :
                            </h2><br>

                            <a type="button" href="crear.php" class="btn bg-light-green waves-effect">
                                <span>NUEVO</span>
                                <i class="material-icons">call_missed</i> 
                            </a>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                        <th>Nº</th>
                                        <th>NOMBRE</th>
                                        <th>HISTORIA</th>
                                        <th>FOTO</th>
                                        <th>TIPO</th>
                                        <th>RAZA</th>
                                        <th>SEXO</th>
                                        <th>EDAD</th>
                                        <th>TAMAÑO</th>
                                        <th>PESO</th>
                                        <th>DUEÑO</th>
                                        <th>OBSERVACIONES</th>
                                        <th>FECHA</th>
                                        <th>ESTADO</th>
                                        <th>ACCIONES</th>
                                      
                                    </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php foreach($lista_pets as $registro){?>
                <tr class="">
                    <td scope="row"><?php echo $registro['id_pet'];?></td>
                    <td ><?php echo $registro['nom_mas'];?></td>
                    <td ><?php echo $registro['historia'];?></td>
                    <td ><?php echo $registro['foto'];?></td>
                    <td ><?php echo $registro['tipo'];?></td>
                    <td ><?php echo $registro['raza'];?></td>
                    <td ><?php echo $registro['sexo'];?></td>
                    <td ><?php echo $registro['edad'];?></td>
                    <td ><?php echo $registro['tamaño'];?></td>
                    <td ><?php echo $registro['peso'];?></td>
                    <td ><?php echo $registro['due'];?></td>
                    <td ><?php echo $registro['observ'];?></td>
                    <td ><?php echo $registro['fecha'];?></td>
                    <td ><?php echo $registro['estado'];?></td>

                   
<td><?php    

if($registro['estado']==1)  { ?> 
<form  method="get" action="javascript:activo('<?php echo $registro['id_raza']; ?>')">
   
    <span class="label label-success">Activo</span>
</form>
<?php  }   else {?> 

    <form  method="get" action="javascript:inactivo('<?php echo $registro['id_raza']; ?>')"> 
        <button type="submit" class="btn btn-danger btn-xs">Inactivo</button>
     </form>
        <?php  } ?></td> 

                   
                   
        <td><a name="" id="" class="btn btn-info" href="editar.php?txtID=<?php echo $registro['id_raza'];?>"  class="btn bg-blue btn-circle waves-effect waves-circle waves-float">
                    <i class="material-icons">autorenew</i>
                </a>
                <a name="" id="" class="btn btn-danger" href="index.php?txtID=<?php echo $registro['id_raza'];?>"  class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                    <i class="material-icons">delete</i>
                </a>
              

                                        </tr>
                                       
                            <?php
                                    
                                    
                              }
                              ?>  
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
        </section>

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

<!-- Jquery DataTable Plugin Js -->
<script src="../../assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="../../assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="../../assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="../../assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="../../assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="../../assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="../../assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="../../assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- Custom Js -->
<script src="../../assets/js/admin.js"></script>
<script src="../../assets/js/pages/tables/jquery-datatable.js"></script>

<!-- Demo Js -->
<script src="../../assets/js/demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!--------------------------------script edit cate----------------------------->

