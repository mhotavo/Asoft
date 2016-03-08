<?php 

if (isset($_SESSION['app_id'])  and isset($_GET['id']) and !empty($_GET['id']) ) {
		$_familiaresDesplazados=familiaresDesplazados($_GET['id']);
		include(HTML_DIR . 'app/desplazados/listarFamiliares.php');

} else {
	header('location: ?view=validardesplazados');
}

 ?>
 