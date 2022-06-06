<?php 
	
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'pointsWallet_IJ';

	$conection = @mysqli_connect($host,$user,$password,$db);

	if(!$conection){
		echo "Error en la conexión";
	}
?>