<?php 

function Departamentos() {
	$db = New Conexion();
	 $sql = $db->query("SELECT * FROM departamento;");
	if ($db->rows($sql)>0) {
		while ($d=$db->recorrer($sql)) {
			$departamentos[$d['Documento']]= array(
				'ID_DEPARTAMENTO' => $d['ID_DEPARTAMENTO'],
				'NOMBRE_DEPARTAMENTO' => $d['NOMBRE_DEPARTAMENTO']
				);
		}

	} else {
		$departamentos=false;
	}
	$db->liberar($sql);
	$db->close(); 

	return $departamentos;
}

 ?>