<?php

    $Apellido=$_POST['Apellido'];//Recibo la variable pasada por post
    $Sizeqr=$_POST['Sizeqr'];//Recibo la variable pasada por post
    include('../vendor/autoload.php');//Llamare el autoload de la clase que genera el QR
    use Endroid\QrCode\QrCode;
    
    $qrCode = new QrCode($Apellido);//Creo una nueva instancia de la clase
    $qrCode->setSize($Sizeqr);//Establece el tamaño del qr
    header('Content-Type: '.$qrCode->getContentType());
    $image= $qrCode->writeString();//Salida en formato de texto 
    $imageData = base64_encode($image);//Codifico la imagen usando base64_encode
    
    echo '<img src="data:image/png;base64,'.$imageData.'">';
    
   ?>