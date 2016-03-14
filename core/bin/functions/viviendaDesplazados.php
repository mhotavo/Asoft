<?php 

function Viviendas() {
	$db = New Conexion();
	 $sql = $db->query("SELECT * FROM desplazados_vivienda;");
	if ($db->rows($sql)>0) {
		while ($d=$db->recorrer($sql)) {
			$viviendas[$d['DOCUMENTO_DESPLAZADO']]= array(
				'DOCUMENTO_DESPLAZADO' => $d['DOCUMENTO_DESPLAZADO'],
				'ACTUAL_VIVIENDA' => $d['ACTUAL_VIVIENDA'],
				'TENENCIA' => $d['TENENCIA'],
				'TIPO_CONTRATO' => $d['TIPO_CONTRATO'],
				'ZONA_VIVIENDA' => $d['ZONA_VIVIENDA'],
				'ZONA_ALTORIESGO' => $d['ZONA_ALTORIESGO'],
				'PAREDES' => $d['PAREDES'],
				'PISO' => $d['PISO'],
				'TECHO' => $d['TECHO'],
				'S_ACUEDUCTO' => $d['S_ACUEDUCTO'],
				'S_TELEFONO' => $d['S_TELEFONO'],
				'S_ENERGIA_ELECTRICA' => $d['S_ENERGIA_ELECTRICA'],
				'S_ALCANTARILLADO' => $d['S_ALCANTARILLADO'],
				'S_GAS' => $d['S_GAS'],
				'S_REBASURAS' => $d['S_REBASURAS'],
				'NO_HABIT_ANTES' => $d['NO_HABIT_ANTES'],
				'NO_HABIT_ACTUAL' => $d['NO_HABIT_ACTUAL'],
				'NO_FAMILI_CASA' => $d['NO_FAMILI_CASA'],
				'RECIBI_SUBSIDIO' => $d['RECIBI_SUBSIDIO']
				);
		}

	} else {
		$viviendas=false;
	}
	$db->liberar($sql);
	$db->close(); 

	return $viviendas;
}

 ?>