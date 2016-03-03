<?php 

function ayudasayudasDesplazados() {
	$db = New Conexion();
	 $sql = $db->query("SELECT * FROM ayudasDesplazados_ayudasrecibidas;");
	if ($db->rows($sql)>0) {
		while ($d=$db->recorrer($sql)) {
			$ayudasDesplazados[$d['ID_AYUDASRECIBIDAS']]= array(
				'ID_AYUDASRECIBIDAS' => $d['ID_AYUDASRECIBIDAS'],
				'DOCUMENTO_DESPLAZADO' => $d['DOCUMENTO_DESPLAZADO'],
				'ATENCION_MENOR' => $d['ATENCION_MENOR'],
				'CUIDADO_INFANTIL' => $d['CUIDADO_INFANTIL'],
				'PRO_ALIMENTACION' => $d['PRO_ALIMENTACION'],
				'HAMBRE_FALTAA' => $d['HAMBRE_FALTAA'],
				'SEGURIDAD_AI' => $d['SEGURIDAD_AI'],
				'COMPLE_ALIMENTICIO' => $d['COMPLE_ALIMENTICIO'],
				'BENEFI_DESAYUNO' => $d['BENEFI_DESAYUNO'],
				'AYUDA_MUNICIPIO' => $d['AYUDA_MUNICIPIO']
				);
		}

	} else {
		$ayudasDesplazados=false;
	}
	$db->liberar($sql);
	$db->close(); 

	return $ayudasDesplazados;
}

 ?>