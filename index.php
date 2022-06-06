<?php 

$alert = '';
session_start();


if(!empty($_SESSION['active']))
{
  header('location: index.php');
}else{

  /* AQUÍ HACEMOS LA COMPROBACIÓN */  
  if(!empty($_POST))
  {
    if(!isset($_SESSION['intentos'])){ //Si no se ha creado "intentos" es que aún no ha hecho ningún intento, por tanto la creamos.
      $_SESSION['intentos'] = 0;
    }else if($_SESSION['intentos'] >= 5) { //Si existe "intentos" y ya hecho 3 comprobaciones devolvemos el mensaje de error. Esta comprobación la hacemos aquí arriba porque si ya ha hecho 3 intentos ni siquiera hay que conectar a la BD
      $alert = '<p class="msg_error small text-center text-danger"><strong>  ¡Cuenta bloqueada! <br> <small>Solicita una nueva contraseña al Administrador.</small></strong>';
      require('view/nuevo_intento.php');
    }  
    if(empty($_POST['emailNum']) || empty($_POST['password']) || !isset($_SESSION['intentos']))
    { 
      $alert = '<p class="msg_error small text-center text-danger"> Ingresa tu correo electrónico o no. de teléfono y tu contraseña.';
      $_SESSION['intentos'] += 1;
    } else if($_SESSION['intentos'] >= 5) { //Si existe "intentos" y ya hecho 5 comprobaciones devolvemos el mensaje de error. Esta comprobación la hacemos aquí arriba porque si ya ha hecho 5 intentos ni siquiera hay que conectar a la BD
      $alert = '<p class="msg_error small text-center text-danger"><strong>  ¡Cuenta bloqueada! <br> <small>Solicita una nueva contraseña al Administrador.</small></strong>';
      require('view/nuevo_intento.php');
      
    }
    
    else{
      
      require_once "bd/conexion.php";
      
      $user = mysqli_real_escape_string($conection,$_POST['emailNum']);
      $pass = md5(mysqli_real_escape_string($conection,$_POST['password']));

      $query = mysqli_query($conection,"SELECT * FROM usuario WHERE emailNum = '$user'");
      $result = mysqli_num_rows($query);

      if($result > 0)
      {
        $query = mysqli_query($conection,"SELECT * FROM usuario WHERE emailNum = '$user' 
                                          AND password = '$pass'");
          $result1 = mysqli_num_rows($query); 
          mysqli_close($conection);
          
          if($result1 > 0)
          {
            $data = mysqli_fetch_array($query);
        $_SESSION['intentos'] = 0;
        $_SESSION['active'] = true;
        $_SESSION['emailNum']  = $data['emailNum'];
        $_SESSION['nombre']  = $data['nombre']; 
        $_SESSION['rol']  = $data['rol'];

        header('location: view/main.php');
      } else{
           $alert = '<p class="msg_error small text-center text-danger">La contraseña es incorrecta.</p> ';
           $_SESSION['intentos'] += 1;
          }
        
      } else{
        $alert = '<p class="msg_error small text-center text-danger">El dato ingresado es incorrecto o no existe.</p>';
        $_SESSION['intentos'] += 1;

        
      }
    } 
      
    } 
} 
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iglesia Juvenil Adolescentes</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css">
    <link rel="shortcut icon" href="images/IJ_blanco.png">
            <!-- Font Awesome -->    
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arbutus+Slab&display=swap" rel="stylesheet">
</head>

<body>
    <style>
        .bg-image-vertical {
            position: relative;
            overflow: hidden;
            background-repeat: no-repeat;
            background-position: right center;
            background-size: auto 70%;
        }

        @media (min-width: 1025px) {
            .h-custom-2 {
                height: 85%;
            }
        }

    </style>
        <section class="vh-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4 text-black">
                        <div class="px-5 ms-xl-5 mt-5">
                            <img src="images/IJ_azul.png" alt="Login image">
                        </div>
    
                        <div class="d-flex align-items-center h-custom-2 pl-5 px-5 ms-xl-4 pt-5 pt-xl-0 mt-xl-n5">
                            <form method="POST" class="pl-2" style="width: 25rem;">
                                <h3 class="fw-normal mb-1 pb-3" style="letter-spacing: 3px;">Inicio de sesión</h3>
                                <div class="form-outline mb-4">
                                    <input type="text" name="emailNum" id="emailNum" class="form-control form-control-md" placeholder="Correo electrónico o número de celular" />
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" name="password" id="password" class="form-control form-control-md" placeholder="Contraseña" />
                                </div>
    
                                <div class="pt-1 pr-3 mb-4">
                                    <button name="login" id="login" class="btn btn-info btn-lg btn-block" type="submit">Iniciar sesión</button>
                                </div>
                                
                                <p class="small text-center"><a class="text-muted" href="#!">¿Olvidaste tu contraseña?</a></p>
                                <div class="alerta text-center"><?php echo isset($alert) ? $alert : ''; ?></div>
                                <p class="text-center">¿No tienes una cuenta? <a href="view/signup.php" class="link-info">Crear nueva cuenta</a></p>
                            </form>
                        </div>
    
                    </div>
                    <div class="col-sm-8 px-0 d-none d-sm-block" style="width:20px">
                        <img src="images/banner01.jpg"
                            alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                    </div>
                </div>
            </div>
        </section>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
</body>

</html>