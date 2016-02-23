<?php 
if (isset($_SESSION['app_id'])) {

	include('html/app/desplazados.php');
	switch (isset($_GET['tab'])) {
		case '1':
			header('location: ?view=datos');
			break;
		
		default:
			# code...
			break;
	}


} else{
	header('location: ?view=index');
}



 ?>