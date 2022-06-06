<?php
include "../bd/conexion.php"; 
session_start();
 
if (isset($_POST['register'])) {
 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $emailNum = $_POST['emailNum'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $genero = $_POST['genero'];
    $rol = $_POST['rol'];
 
    $query = $conection->prepare("SELECT * FROM usuario WHERE EMAILNUM=:emailNum");
    $query->bindParam("emailNum", $emailNum, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
      $alert = '<p class="msg_error small text-center text-danger"><i class="fa fa-times-circle"></i>  ¡La dirección del correo electrónico o número de celular ya ha sido registrado!';
    }
 
    if ($query->rowCount() == 0) {
        $query = $conection->prepare("INSERT INTO usuario(NOMBRE, APELLIDO, EMAILNUM, PASSWORD, FECHANACIMIENTO, GENERO, ROL) VALUES (:nombre, :apellido, :emailNum, :password_hash, :fechaNacimiento, :genero, :rol)");
        $query->bindParam("nombre", $nombre, PDO::PARAM_STR);
        $query->bindParam("apellido", $apellido, PDO::PARAM_STR);
        $query->bindParam("emailNum", $emailNum, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("fechaNacimiento", $fechaNacimiento, PDO::PARAM_STR);
        $query->bindParam("genero", $genero, PDO::PARAM_STR);
        $query->bindParam("rol", $rol, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            $alert='<div id="success" class="small text-center text-success"><i class="fa fa-check-circle"></i> ¡Tu registro fue exitoso! </div>';
        } else {
            $alert='<div id="error" class="small text-center text-danger"><i class="fa fa-times-circle"></i> ¡Error al insertar! </div>';
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
    <link rel="shortcut icon" href="../images/IJ_blanco.png">
</head>

<body>
    <style>
        .visually-hidden { 
            border: 0;
            padding: 0;
            margin: 0;
            position: absolute !important;
            height: 1px; 
            width: 1px;
            overflow: hidden;
            clip: rect(1px 1px 1px 1px); /* IE6, IE7 - a 0 height clip, off to the bottom right of the visible 1px box */
            clip: rect(1px, 1px, 1px, 1px); /*maybe deprecated but we need to support legacy browsers */
            clip-path: inset(50%); /*modern browsers, clip-path works inwards from each corner*/
            white-space: nowrap; /* added line to stop words getting smushed together (as they go onto seperate lines and some screen readers do not understand line feeds as a space */
        }


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
                        <div class="px-5 ms-xl-5 mb-3 mt-5">
                            <img src="../images/IJ_azul.png" alt="Login image">
                        </div>
    
                        <div class="d-flex align-items-center h-custom-2 pl-5 px-5 ms-xl-4 pt-5 pt-xl-0 mt-xl-n5">                            
                            <form method="POST" action="" name="signin-form" onsubmit="verificarPasswords(); return false" keyup>
                            <div id="msg"></div>
                                
                                <h3 class="fw-normal mt-5" style="letter-spacing: 3px;">Registrate</h3>
                                <h6 class="fw-normal mb-1 pb-3" style="letter-spacing: 1px;">Es rápido y fácil.</h6>
                                <div class="form-outline mb-2 row">
                                    <div class="col-6 pr-1">
                                        <input type="text" name="nombre" class="form-control form-control-md" placeholder="Nombre(s)" required>
                                        <input type="hidden" name="idUsuario" value="">
                                    </div>
                                    <div class="col-6 pl-1">
                                        <input type="text" name="apellido" class="form-control form-control-md" placeholder="Apellidos" required>
                                        <input type="hidden" name="idUsuario" value="">
                                    </div>
                                </div>
                                <div class="form-outline mb-2">
                                    <input type="text" name="emailNum" class="form-control form-control-md" placeholder="Correo electrónico o número de teléfono" required>
                                    <input type="hidden" name="idUsuario" value="">
                                </div>
                                <div class="form-outline mb-2">
                                    <input type="password" id="pass1" name="password" class="form-control form-control-md" placeholder="Contraseña nueva" minlength="8" required>
                                    <input type="hidden" name="idUsuario" value="">
                                </div>
                                <div class="form-outline mb-2">
                                    <input type="password" id="pass2" name="password" class="form-control form-control-md" placeholder="Verificar contraseña" minlength="8" required>
                                    <input type="hidden" name="idUsuario" value="">
                                </div>
                                <div class="form-outline row">
                                    <div class="col-6 pr-1">
                                        <input type="date" name="fechaNacimiento" class="form-control form-control-md" placeholder="Fecha de nacimiento" required>
                                        <input type="hidden" name="idUsuario" value="">
                                    </div>
                                    <div class="col-6 pl-1">
                                        <div class="form-group form-outline">
                                            <select class="form-control" name="genero" required="">
                                                <option selected="" value="" disabled="" hidden=""> Genero</option>
                                                <optgroup label="">
                                                    <option value="Hombre">Hombre</option>
                                                    <option value="Mujer">Mujer</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="rol" required="">
                                        <option selected="" value="" disabled="" hidden=""> Rol</option>
                                        <optgroup label="">
                                            <option value="Staff IJ">Staff IJ</option>
                                            <option value="Adolescente">Adolescente</option>
                                            <option value="Administrador">Administrador</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="pt-1 pr-3 mb-4">
                                    <input name="register" value="register" class="btn btn-info btn-lg btn-block" type="submit" value="Registrarte">
                                </div>     
                                <div class="alerta text-center"><?php echo isset($alert) ? $alert : ''; ?></div>
                                <p class="text-center">¿Ya tienes una cuenta? <a href="../index.php" class="link-info">Iniciar sesión</a></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-8 px-0 d-none d-sm-block" style="width:20px">
                        <img src="https://scontent-qro1-1.xx.fbcdn.net/v/t1.6435-9/136137913_180679570471367_138499995960672079_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeFYTuHGABvczIyFXWBkGRoaj2wM6OPQUP2PbAzo49BQ_RyWZ5iGmxhDMu7lfUoCYHGjxMpaGdjVMLiWwClyYMpQ&_nc_ohc=zJGmLQZu71sAX9bOGaj&_nc_ht=scontent-qro1-1.xx&oh=00_AT_RP9IopZCuR2Ejt7KkKyQsYJVDodSBTZASK47QjMlKlA&oe=628D1B7C"
                            alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript">
      function confirmation() {
         if (confirm("¿Estas seguro de enviar este formulario?")) {
            return true;
         } else {
            return false;
         }
      }

      function verificarPasswords() {

         // Obtenemos los valores de los campos de contraseñas 
         pass1 = document.getElementById('pass1');
         pass2 = document.getElementById('pass2');

         // Verificamos si las constraseñas no coinciden 
         if (pass1.value != pass2.value) {

            // Si las constraseñas no coinciden mostramos un mensaje 
            document.getElementById("error").classList.add("mostrar");

            return false;
         } else {

            // Si las contraseñas coinciden ocultamos el mensaje de error
            document.getElementById("error").classList.remove("mostrar");

            // Mostramos un mensaje mencionando que las Contraseñas coinciden 
            document.getElementById("ok").classList.remove("ocultar");

            // Desabilitamos el botón de login 
            document.getElementById("login").disabled = true;

            // Refrescamos la página (Simulación de envío del formulario) 
            setTimeout(function () {
               location.reload();
            }, 3000);

            return true;
         }
      }
   </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>