<?php 

function Estabilizacion() {
	$db = New Conexion();
	 $sql = $db->query("SELECT * FROM estabilizacion;");
	if ($db->rows($sql)>0) {
		while ($d=$db->recorrer($sql)) {
			$estabilizacion[$d['DOCUMENTO_DESPLAZADO']]= array(
				'DOCUMENTO_DESPLAZADO' => $d['DOCUMENTO_DESPLAZADO'],
				'RAZONES_LUGAR' => $d['RAZONES_LUGAR'],
				'FAMILIA_RETORNO' => $d['FAMILIA_RETORNO'],
				'ESTUVOESTA_RETORNO' => $d['ESTUVOESTA_RETORNO'],
				'RESIDENCIA_DESEARIA' => $d['RESIDENCIA_DESEARIA'],
				'DONDEQUIERE_REUBICARSE' => $d['DONDEQUIERE_REUBICARSE'],
				'ZONA_RETORNO' => $d['ZONA_RETORNO'],
				'RAZONES_REUBICARSE' => $d['RAZONES_REUBICARSE'],
				'RAZONES_RETORNAR' => $d['RAZONES_RETORNAR'],
				'RAICES_ABANDONADAS' => $d['RAICES_ABANDONADAS'],
				'ALGUNOS_DESPOJADOS' => $d['ALGUNOS_DESPOJADOS'],
				'SOLICITO_PROTECCION' => $d['SOLICITO_PROTECCION']
				);
		}

	} else {
		$estabilizacion=false;
	}
	$db->liberar($sql);
	$db->close(); 

	return $estabilizacion;
}

 ?>