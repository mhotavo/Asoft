<?php 
if (isset($_SESSION['app_id'])) {
require('core/models/class.Desplazados.php');
$isset_id= isset($_GET['id']) and is_numeric($_GET['id']) and $_GET['id']>=1;
$desplazados = new Desplazados();

switch (isset($_GET['mode']) ?  $_GET['mode'] : null ) {
	case 'add':
		if ($_POST) {
			$desplazados->Add();
		}else {

		}
		break;	
	case 'edit':
		if ($isset_id) {
			if ($_POST) {
				$desplazados->Edit();
			} else {

			}
			
		}
		else{
			header('location: ?view=desplazados');
		}
		break;	

	case 'delete':
		if ($isset_id) {
			$desplazados->Delete();
		}
		break;
	
	default:
		
		break;
}


} else {

}

 ?>