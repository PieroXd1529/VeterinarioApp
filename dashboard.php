<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>CLINICA VETERINARIA DOGTORAS</title>
    <!-- Google Font - Iconos -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="/app/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="/app/assets/plugins/node-waves/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="/app/assets/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="/app/css/style.css" rel="stylesheet">
    <link href="/app/assets/css/themes/all-themes.css" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="/app/assets/img/lll.png" />

<!-- //Chill owo -->

</head>


    <!-- //LUPA -->

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="administrador"> DOGTORAS - DASHBOARD </a>
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
                    <img src="/app/assets/img/mujerico.png" width="48" height="48" alt="User" />
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
                    <li class="active">
                        <a href="administrador">
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
                                <a href="secciones/usuarios/crear.php">Registrar</a>
                            </li>
                            <li>
                                <a href="secciones/usuarios/index.php">Listar / Modificar</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">inbox</i>
                            <span>PRODUCTOS</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="secciones/producto/crear.php">Registrar</a>
                            </li>
                            <li>
                                <a href="secciones/producto/index.php">Listar / Modificar</a>
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
                                <a href="secciones/categoria/crear.php">Registrar</a>
                            </li>
                            <li>
                                <a href="secciones/categoria/index.php">Listar / Modificar</a>
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
                                <a href="secciones/cliente/crear.php">Registrar</a>
                            </li>
                            <li>
                                <a href="secciones/cliente/index.php">Listar / Modificar</a>
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
                                <a href="secciones/provedores/crear.php">Registrar</a>
                            </li>
                            <li>
                                <a href="secciones/provedores/index.php">Listar / Modificar</a>
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
                                <a href="secciones/veterinario/crear.php">Registrar</a>
                            </li>
                            <li>
                                <a href="secciones/veterinario/index.php">Listar / Modificar</a>
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
                                <a href="secciones/mascota/index.php">Listar / Modificar</a>
                            </li>
                            <li>
                                <a href="secciones/tipo/index.php">Tipos</a>
                            </li>
                            <li>
                                <a href="secciones/raza/index.php">Razas</a>
                            </li>
                        </ul>
</li>
<!--======================================================================================================-->
    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">calendar_today</i>
                            <span>CITAS</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="secciones/citas/crear.php">Registrar</a>
                            </li>
                            <li>
                                <a href="secciones/citas/index.php">Listar / Modificar</a>
                            </li>

                            <li>
                                <a href="secciones/servicios/index.php">Servicio</a>
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
                    
<!--======================================================================================================-->
        <aside id="rightsidebar" class="right-sidebar">
        </aside>
    </section>
<!--=============================================================CONTENIDO DE LA PÁGINA =============================================================-->

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
              
            </div>

            <!-- SubMenu1 -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">

                    	<a href="../../folder/productos">
                        	<div class="icon">
                            	<i class="material-icons">inbox</i>
                        	</div>
                        </a>

                        <?php
$db_host="localhost"; 
$db_user="root";    
$db_password="";    
$db_name="vetdog";    
try
{
    $db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
    $e->getMessage();
}
$sql = "SELECT COUNT(*) total FROM products";
$result = $db->query($sql); //$pdo sería el objeto conexión
$total = $result->fetchColumn();
?>
                        	<div class="content">
                            	<div class="text">PRODUCTOS</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo  $total; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        	</div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                    	<a href="../../folder/categorias">
                        	<div class="icon">
                            	<i class="material-icons">low_priority</i>
                        	</div>
                    	</a>

                        <?php
$db_host="localhost"; 
$db_user="root";    
$db_password="";    
$db_name="vetdog";    
try
{
    $db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
    $e->getMessage();
}
$sql = "SELECT COUNT(*) total FROM category";
$result = $db->query($sql); //$pdo sería el objeto conexión
$total = $result->fetchColumn();
?>
                        <div class="content">
                            <div class="text">CATEGORÍAS</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo  $total; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                    	<a href="../../folder/clientes">
                        <div class="icon">
                            <i class="material-icons">supervisor_account</i>
                        </div>
                        </a>
                        <?php
$db_host="localhost"; 
$db_user="root";    
$db_password="";    
$db_name="vetdog";    
try
{
    $db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
    $e->getMessage();
}
$sql = "SELECT COUNT(*) total FROM owner";
$result = $db->query($sql); //$pdo sería el objeto conexión
$total = $result->fetchColumn();
?>
                        <div class="content">
                            <div class="text">CLIENTES</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo  $total; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                    	<a href="../../folder/compra">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        </a>
<?php
$db_host="localhost"; 
$db_user="root";    
$db_password="";    
$db_name="vetdog";    
try
{
    $db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
    $e->getMessage();
}
$sql = "SELECT SUM(total) FROM compra;";
$result = $db->query($sql); //$pdo sería el objeto conexión
$total = $result->fetchColumn();
?>



                        <div class="content">
                            <div class="text">COMPRAS</div>
                            <div class="number count-to" data-from="0"  data-to= "<?php echo  $total; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>

<!-- SubMenu2 -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                    	<a href="../../folder/proveedores">
                        <div class="icon">
                            <i class="material-icons">business</i>
                        </div>
                    	</a>

           <?php
$db_host="localhost"; 
$db_user="root";    
$db_password="";    
$db_name="vetdog";    
try
{
    $db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
    $e->getMessage();
}
$sql = "SELECT COUNT(*) total FROM supplier";
$result = $db->query($sql); //$pdo sería el objeto conexión
$total = $result->fetchColumn();
?>             
                        <div class="content">
                            <div class="text">PROVEEDORES</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo  $total; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                    	<a href="../../folder/veterinarios">
                        <div class="icon">
                            <i class="material-icons">person_pin</i>
                        </div>
                        </a>

         <?php
$db_host="localhost"; 
$db_user="root";    
$db_password="";    
$db_name="vetdog";    
try
{
    $db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
    $e->getMessage();
}
$sql = "SELECT COUNT(*) total FROM veterinarian";
$result = $db->query($sql); //$pdo sería el objeto conexión
$total = $result->fetchColumn();
?>                
                        <div class="content">
                            <div class="text">VETERINARIOS</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo  $total; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                    	<a href="../../folder/venta">
                        <div class="icon">
                            <i class="material-icons">trending_up</i>
                        </div>
                        </a>

           <?php
$db_host="localhost"; 
$db_user="root";    
$db_password="";    
$db_name="vetdog";    
try
{
    $db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
    $e->getMessage();
}
$sql = "SELECT SUM(total) FROM venta;";
$result = $db->query($sql); //$pdo sería el objeto conexión
$total = $result->fetchColumn();
?>             
                        <div class="content">
                            <div class="text">VENTAS</div>
                            <div class="number count-to" data-from="0"  data-to="<?php echo  $total;?> " data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>



				

            </div>

        
  


<div class="row clearfix">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">

                <div class="panel-body">

                    <div id="containers"></div>

                </div>

            </div>           
    </div>
</div>


<div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                <?php
                    //set timezone
                    date_default_timezone_set('America/El_Salvador');
                    $year = date('Y');
                ?>
                                    <h2>PODUCTOS DEL AÑO <?php echo $year; ?></h2>
                                </div>
                                
                                

                            </div>
                        </div>
    <div id="chart-container">
      <canvas id="mycanvas"></canvas>
    </div>
                    </div>
                </div>
</div>



<div class="row clearfix">
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-6 col-sm-6">
                                    <h2><strong>ULTIMOS PRODUCTOS</strong></h2>
                                </div>
                                <a href="../../folder/productos" class="btn btn-sm btn-danger btn-flat pull-right">Ver todos</a>
                              <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>CÓDIGO</th>
                                        <th>PRODUCTO</th>
                                        <th>STOCK</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php 
Class Connection{
 
    private $server = "mysql:host=localhost;dbname=vetdog";
    private $username = "root";
    private $password = "";
    private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
    protected $conn;
    
    public function open(){
        try{
            $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
            return $this->conn;
        }
        catch (PDOException $e){
            echo "Hubo un problema con la conexión: " . $e->getMessage();
        }
    }
    public function close(){
        $this->conn = null;
    }
}
            $database = new Connection();
            $db = $database->open();
            try{    
                $sql = 'SELECT * FROM products ORDER BY id_prod DESC  LIMIT 5 ';
                foreach ($db->query($sql) as $row) {
                    ?>
                    <tr>
                        <td><label class="badge badge-primary"><?php echo $row['codigo']; ?></label></td>
                        
                        <td><?php echo $row['nompro']; ?></td>
                        <td><?php echo $row['stock']; ?></td>
                        
                    </tr>
                    <?php 
                }
            }
            catch(PDOException $e){
                echo "Hubo un problema en la conexión: " . $e->getMessage();
            }

            //Cerrar la Conexion
            $database->close();
    ?>
                                    
                                </tbody>
                                  
                              </table>

                            </div>
                        </div>
   
                    </div>


<!-- ACA VA LAS VENTAS -->



                </div>
</div>



    <?php include('data.php'); ?>
    <!-- Jquery Core Js -->
   
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
<script src="/app/assets/js/Chart.min.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
$(function () { 
    var data_click = <?php echo $click; ?>;
    var data_viewer = <?php echo $viewer; ?>;
    $('#containers').highcharts({
        chart: {
            type: 'column'
        },

        title: {

            text: 'COMPARATIVA DE VENTAS Y COMPRAS '

        },

        xAxis: {

            categories: ['2021','2022','2023', '2024','2025','2026','2027']

        },

        yAxis: {

            title: {

                text: 'MONTO'
            }

        },
        series: [{

            name: 'Compras',

            data: data_click
        }, {  
            name: 'Ventas',
            data: data_viewer

        }]

    });

});


</script>

<script type="text/javascript">
      $(document).ready(function(){
  $.ajax({
    url: "http://localhost/vetdog/vista/panel-admin/drap.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var player = [];
      var stock = [];

      for(var i in data) {
        player.push("Codigo " + data[i].codigo);
        stock.push(data[i].stock);
      }

      var chartdata = {
        labels: player,
        datasets : [
          {
            label: 'Productos stock',
            backgroundColor: 'rgba(200, 200, 200, 0.75)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: stock
          }
        ]
      };

      var ctx = $("#mycanvas");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});

      
    </script>

    <!-- Bootstrap Core Js -->
    <script src="/app/assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Js Booststrap -->
    <script src="/app/assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!--Js Scroll - Barra de Desplazamiento del Menú -->
    <script src="/app/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!--Js Efectos de Página Completa -->
    <script src="/app/assets/plugins/node-waves/waves.js"></script>

    <!-- JS Conteo de Números del SubMenú-->
    <script src="/app/assets/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Custom Js -->
    <script src="/app/assets/js/admin.js"></script>
    <script src="/app/assets/js/pages/index.js"></script>
