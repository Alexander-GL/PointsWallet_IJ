<?php
   include "../bd/conexion.php";
   
   if(!empty($_POST))
   {
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $EmailNum = $_POST['EmailNum'];
    $Contra = md5($_POST['Contra']);
    $FechaNacimiento = $_POST['FechaNacimiento'];
    $Genero = $_POST['Genero'];
    $Rol = $_POST['Rol'];
   
     $query_insert = mysqli_query($conection,"INSERT INTO usuario(nombre, apellido, emailNum, password, fechaNacimiento, genero, rol)
                                   VALUES('$Nombre', '$Apellido', '$EmailNum', '$Contra', '$FechaNacimiento', '$Genero', '$Rol')");
    
     if($query_insert){
           $alert='<div class="animate__animated animate__fadeInDown text-center"><i class="fa fa-check-circle"></i> Se inserto correctamente. </div>';
         } else {
           $alert='<p class="msg_error text-center"><i class="fas fa-times-circle"></i> Error al insertar. </p>';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
   <!-- Bootstrap CSS -->
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
      integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <!-- Font Awesome -->    
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arbutus+Slab&display=swap" rel="stylesheet">
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
                        <form method="POST" id="generador" enctype="multipart/form-data" onsubmit="verificarPasswords(); return false"  class="pl-2" style="width: 25rem;" keyup>
                            <div id="msg"></div>
                                
                                <h3 class="fw-normal mt-5" style="letter-spacing: 3px;">Registrate</h3>
                                <h6 class="fw-normal mb-1 pb-3" style="letter-spacing: 1px;">Es rápido y fácil.</h6>
                                <div class="form-outline mb-2 row">
                                    <div class="col-6 pr-1">
                                        <input type="text" name="Nombre" class="form-control form-control-md" placeholder="Nombre(s)" required>
                                        <input type="hidden" name="idUsuario" value="">
                                    </div>
                                    <div class="col-6 pl-1">
                                        <input type="text" name="Apellido" class="form-control form-control-md" placeholder="Apellidos" required>
                                        <input type="hidden" name="idUsuario" value="">
                                    </div>
                                </div>
                                <div class="form-outline mb-2">
                                    <input type="text" name="EmailNum" class="form-control form-control-md" placeholder="Correo electrónico o número de teléfono" required>
                                    <input type="hidden" name="idUsuario" value="">
                                </div>
                                <div class="form-outline mb-2">
                                    <input type="password" id="pass1" name="Contra" class="form-control form-control-md" placeholder="Contraseña nueva" minlength="8" required>
                                    <input type="hidden" name="idUsuario" value="">
                                </div>
                                <div class="form-outline mb-2">
                                    <input type="password" id="pass2" name="Contra" class="form-control form-control-md" placeholder="Verificar contraseña" minlength="8" required>
                                    <input type="hidden" name="idUsuario" value="">
                                </div>
                                <div class="form-outline row">
                                    <div class="col-6 pr-1">
                                        <input type="date" name="FechaNacimiento" class="form-control form-control-md" placeholder="Fecha de nacimiento" required>
                                        <input type="hidden" name="idUsuario" value="">
                                    </div>
                                    <div class="col-6 pl-1">
                                        <div class="form-group form-outline">
                                            <select class="form-control" name="Genero" required="">
                                                <option selected="" value="" disabled="" hidden=""> Genero</option>
                                                <optgroup label="">
                                                    <option value="Hombre">Hombre</option>
                                                    <option value="Mujer">Mujer</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-outline row">
                                    <div class="col-6 pr-1">
                                        <div class="form-group">
                                            <select class="form-control" name="Rol" required="">
                                                <option selected="" value="" disabled="" hidden=""> Rol</option>
                                                <optgroup label="">
                                                    <option value="Staff IJ">Staff IJ</option>
                                                    <option value="Adolescente">Adolescente</option>
                                                    <option value="Administrador">Administrador</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-1">
                                        <div class="form-group">
                                            <select class="form-control" name= "Tamaño Qr" id="Sizeqr" required="">
                                                <option selected="" value="" disabled="" hidden=""> Tamaño Qr</option>
                                                <optgroup label="">
                                                    <option value='200'>Grande</option>
                                                    <option value='150'>Mediano</option>
                                                    <option value='100'>Chico</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-1 pr-3 mb-4">
                                    <input name="Enviar" id="login" class="btn btn-info btn-lg btn-block" type="submit" value="Registrarte">
                                    <div class='result'> </div>
                                </div>     
                                <div class="alerta text-center"><?php echo isset($alert) ? $alert : ''; ?></div>
                                <p class="text-center">¿Ya tienes una cuenta? <a href="../index.php" class="link-info">Iniciar sesión</a></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-8 px-0 d-none d-sm-block" style="width:20px">
                        <img src="../images/banner01.jpg"    
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/js-button.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>