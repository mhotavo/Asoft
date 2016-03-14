<?php 

if (isset($_SESSION['app_id'])) {
		include(HTML_DIR . 'app/desplazados/listarDesplazadosIngresados.php');

} else {
	header('location: ?view=validardesplazados');
}

 ?>
 