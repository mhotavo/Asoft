<?php 

if (isset($_SESSION['app_id'])) {
	include('html/app/desplazados/ingresarDatosDesplazados.php');
} else{
	header('location: ?view=index');
}



?>