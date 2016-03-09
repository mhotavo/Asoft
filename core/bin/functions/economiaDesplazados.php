<?php 

function EconomiaDesplazados() {
	$db = New Conexion();
	 $sql = $db->query("SELECT * FROM desplazados_economiafamiliar;");
	if ($db->rows($sql)>0) {
		while ($d=$db->recorrer($sql)) {
			$economiaDesplazados[$d['DOCUMENTO_DESPLAZADO']]= array(
				'DOCUMENTO_DESPLAZADO' => $d['DOCUMENTO_DESPLAZADO'],
				'INGRESOS_MENSUALES' => $d['INGRESOS_MENSUALES'],
				'GASTOS_MENSUALES' => $d['GASTOS_MENSUALES'],
				'1_GASTO' => $d['1_GASTO'],
				'2_GASTO' => $d['2_GASTO'],
				'3_GASTO' => $d['3_GASTO'],
				'NO_COMIDAS_DIA' => $d['NO_COMIDAS_DIA'],
				'ADULTOS' => $d['ADULTOS'],
				'NINOS' => $d['NINOS'],
				'MENORES_2ANOS' => $d['MENORES_2ANOS'],
				'ALIMENTACION_CULTURA' => $d['ALIMENTACION_CULTURA'],
				'ALIMENTACION_ADECUADA' => $d['ALIMENTACION_ADECUADA'],
				'FUENTE_1' => $d['FUENTE_1'],
				'FUENTE_2' => $d['FUENTE_2'],
				'FUENTE_3' => $d['FUENTE_3']
				);
		}

	} else {
		$economiaDesplazados=false;
	}
	$db->liberar($sql);
	$db->close(); 

	return $economiaDesplazados;
}

 ?>