<?php 

if (isset($_SESSION['app_id'])) {
	    require('core/models/class.Desplazados.php');
		$desplazados= New Desplazados();
		include(HTML_DIR . 'app/desplazados/listarDesplazadosIngresados.php');

} else {
	header('location: ?view=validardesplazados');
}

 ?>
 