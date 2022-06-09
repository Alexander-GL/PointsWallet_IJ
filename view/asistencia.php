<?php
    require_once "../bd/conexion.php";
    if(isset($_POST['text'])){
        $text = $_POST['text'];
        $sql = "INSERT INTO asistencia_puntos(nombre, fecha_asistencia) VALUES ('$text', NOW())";

        if($conection->query($sql) === TRUE){
            echo "Insertado correctamente";
        } else {
            echo "Error : " . $sql . "<br>" . $conection->error;
        }
    }
    $conection->close();
?>