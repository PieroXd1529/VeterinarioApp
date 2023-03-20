<?php
 include("./bd.php");

  if(isset($_POST['login'])) {
    $errMsg = '';

    // Get data from FORM
    $usuario = $_POST['usuario'];
    
    $contra = MD5($_POST['contra']);

    if($usuario == '')
      $errMsg = 'Digite su usuario';
    if($contra == '')
      $errMsg = 'Digite su contraseña';

    if($errMsg == '') {
      try {
$stmt = $conexion->prepare('SELECT id,  usuario, contra,correo, id_cargo FROM usuarios WHERE usuario = :usuario');


        $stmt->execute(array(
          ':usuario' => $usuario
          
          
          ));
        $registro = $stmt->fetch(PDO::FETCH_ASSOC);

        if($registro == false){
          $errMsg = "User $usuario no encontrado.";
        }
        else {
          if($contra == $registro['contra']) {

            $_SESSION['id'] = $registro['id'];
            $_SESSION['usuario'] = $registro['usuario'];
            $_SESSION['correo'] = $registro['correo'];
            $_SESSION['contra'] = $registro['contra'];
            $_SESSION['id_cargo'] = $registro['id_cargo'];
            
            
    if($_SESSION['id_cargo'] == 1){
          header('Location: dashboard.php');
        
        }
            exit;
          }
          else
            $errMsg = 'Contraseña incorrecta.';
        }
      }
      catch(PDOException $e) {
        $errMsg = $e->getMessage();
      }
    }
  }
?>  



<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Vetdog - Vetdog Admin Template</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"


    />
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />

    
    <link rel="stylesheet" href="css/login.css">  
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
  
  </head>
  <body>
  <div class="contenedor-formulario contenedor ">
        <div class="imagen-formulario">

        </div>

    <div class="flex items-center min-h-screen p-6  dark:bg-gray-900">
      <div
        
      >
        <div >
         
          <div >
            <div >
              <form  autocomplete="off" method="POST"  role="form">
              <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                Iniciar Sesion
              </h1>
              <?php
    if(isset($errMsg)){
    echo '<div style="color:#FF0000;text-align:center;font-size:20px;">'.$errMsg.'</div>';  
         }
?>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Usuario</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Usuario" name="usuario" value="<?php if(isset($_POST['usuario'])) echo $_POST['usuario'] ?>" autocomplete="off"
                />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Contraseña</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="***************"
                  type="password" required="true" name="contra" value="<?php if(isset($_POST['contra'])) echo MD5($_POST['contra']) ?>"
                />
              </label>


              <hr class="my-8" />
              <button class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"  name='login' type="submit">Acceder</button>
               </form>
               <div id="msg_error" class="alert alert-danger" role="alert" style="display: none"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>