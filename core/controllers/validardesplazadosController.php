<?php  
if (isset($_SESSION['app_id'])) {
	if (isset($_GET['mode']) ?  $_GET['mode'] : null ) {

		require('core/models/class.Desplazados.php');
		require('core/models/class.Familiares.php');

		$desplazados = new Desplazados();
		$buscar=$desplazados->Buscar();		

		if ($buscar==1) { 
			header('location: ?view=validardesplazados&id='.$_POST['numDocumento'].'&success=true');
		} else {
				$familiares = new Familiares();
			    $buscarFamiliar=$familiares->Buscar(); 
			    if (!empty($buscarFamiliar)) {
			    	header('location: ?view=validardesplazados&id='.$_POST['numDocumento'].'&familiar='.$buscarFamiliar);
			    } else {
			    	header('location: ?view=validardesplazados&id='.$_POST['numDocumento'].'&success=false');
			    }

			
		}




	} else {
		include('html/app/validarDesplazados.php');
	}
} else {
	header('location: ?view=index');
}


 ?>