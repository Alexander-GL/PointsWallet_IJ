<?php
    //Comprobamos si esta definida la sesión 'tiempo'.
    if(isset($_SESSION['nuevo_intento']) ) {

        //nuevo_intento en segundos para dar vida a la sesión.
        $inactivo = 300;//5min en este caso.

        //Calculamos nuevo_intento de vida inactivo.
        $vida_session = time() - $_SESSION['nuevo_intento'];

            //Compraración para redirigir página, si la vida de sesión sea mayor a el nuevo_intento insertado en inactivo.
            if($vida_session > $inactivo)
            {
                //Removemos sesión.
                session_unset();
                //Destruimos sesión.
                session_destroy();              
                //Redirigimos pagina.
                header("Location: index.php");

                exit();
            }
    } else {
        //Activamos sesion nuevo_intento.
        $_SESSION['nuevo_intento'] = time();
    }
?>