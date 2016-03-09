<?php 

function Discapacidad() {
	$db = New Conexion();
	 $sql = $db->query("SELECT * FROM desplazado_discapacidad;");
	if ($db->rows($sql)>0) {
		while ($d=$db->recorrer($sql)) {
			$discapacidad[$d['DOCUMENTO_DESPLAZADO']]= array(
				'DOCUMENTO_DESPLAZADO' => $d['DOCUMENTO_DESPLAZADO'],
				'ANTES_DESPLAZAMIENTO' => $d['ANTES_DESPLAZAMIENTO'],
				'IGUAL_CONDICIONES' => $d['IGUAL_CONDICIONES'],
				'ENTIDAD_REHABILITACION' => $d['ENTIDAD_REHABILITACION'],
				'REHUBICACION_LABORAL' => $d['REHUBICACION_LABORAL'],
				'MARGINADO_DISCRIMINADO' => $d['MARGINADO_DISCRIMINADO'],
				'ENCUENTRA_P_P' => $d['ENCUENTRA_P_P'],
				'EXCLUIDO' => $d['EXCLUIDO'],
				'REHABILITACION' => $d['REHABILITACION'],
				'SUBSIDIO_DISCAPACIDAD' => $d['SUBSIDIO_DISCAPACIDAD'],
				'CAPACIDAD_ECONO' => $d['CAPACIDAD_ECONO'],
				'MENORES_18' => $d['MENORES_18'],
				'RECIBIO_AYU_HUMA' => $d['RECIBIO_AYU_HUMA'],
				'ORGANIZACION_DESPLA' => $d['ORGANIZACION_DESPLA'],
				'PARTICIPACION_OPDS' => $d['PARTICIPACION_OPDS']
				);
		}

	} else {
		$discapacidad=false;
	}
	$db->liberar($sql);
	$db->close(); 

	return $discapacidad;
}

 ?>