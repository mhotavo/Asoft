<?php 

function Reparaciones() {
	$db = New Conexion();
	 $sql = $db->query("SELECT * FROM desplazados_reparacion;");
	if ($db->rows($sql)>0) {
		while ($d=$db->recorrer($sql)) {
			$reparacion[$d['DOCUMENTO_DESPLAZADO']]= array(
				'DOCUMENTO_DESPLAZADO' => $d['DOCUMENTO_DESPLAZADO'],
				'ESTADO_INFORMADO' => $d['ESTADO_INFORMADO'],
				'MIEMBROH_INDEMNIZADO' => $d['MIEMBROH_INDEMNIZADO'],
				'ESTADO_GARANTIAS' => $d['ESTADO_GARANTIAS'],
				'MIEMBROH_RESTITUCION' => $d['MIEMBROH_RESTITUCION'],
				'ENTIDAD_RESTITUCION' => $d['ENTIDAD_RESTITUCION'],
				'ESTADO_RESTITUIDO' => $d['ESTADO_RESTITUIDO'],
				'ESTADO_INDEMNIZACION' => $d['ESTADO_INDEMNIZACION'],
				'MIEMBROH_INDEMNIZACION' => $d['MIEMBROH_INDEMNIZACION'],
				'FAMILIA_REHABILITACION' => $d['FAMILIA_REHABILITACION'],
				'MIEMBROH_BENEFICIARIO' => $d['MIEMBROH_BENEFICIARIO']
				);
		}

	} else {
		$reparacion=false;
	}
	$db->liberar($sql);
	$db->close(); 

	return $reparacion;
}

 ?>