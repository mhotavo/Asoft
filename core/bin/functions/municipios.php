<?php 

function Municipios() {
	$db = New Conexion();
	 $sql = $db->query("SELECT m.*, d.NOMBRE_DEPARTAMENTO FROM municipios m LEFT JOIN departamento d ON d.ID_DEPARTAMENTO=m.ID_DEPARTAMENTO;");
	if ($db->rows($sql)>0) {
		while ($d=$db->recorrer($sql)) {
			$municipios[$d['ID_MUNICIPIO']]= array(
				'ID_MUNICIPIO' => $d['ID_MUNICIPIO'],
				'ID_DEPARTAMENTO' => $d['ID_DEPARTAMENTO'],
				'NOMBRE_MUNICIPIO' => $d['NOMBRE_MUNICIPIO'],
				'NOMBRE_DEPARTAMENTO' => $d['NOMBRE_DEPARTAMENTO']
				);
		}

	} else {
		$municipios=false;
	}
	$db->liberar($sql);
	$db->close(); 

	return $municipios;
}

 ?>