<?php 
function Users(){

	$db = New Conexion();
	$sql= $db->query("SELECT * FROM usuarios;");
	if ($db->rows($sql)>0) {

		while ($d= $db->recorrer($sql)) {
			$users[$d['ID']]=array(
				'ID' => $d['ID'],
				'USER' => $d['USER'],
				'DOC' => $d['DOC'],
				'PASS' => $d['PASS'],
				'EMAIL' => $d['EMAIL'],
				'NOMBRES' => $d['NOMBRES'],
				'P_APELLIDO' => $d['P_APELLIDO'],
				'S_APELLIDO' => $d['S_APELLIDO'],
				'NOM_COMPLETO' => $d['NOMBRES'].' '.$d['P_APELLIDO'].' '.$d['S_APELLIDO'],

				);
		}
	} else {
		$users=false;
	}

	$db->liberar($sql);
	$db->close();

	return $users;
}

 ?>