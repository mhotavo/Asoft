<?php 

function Estabilizacion() {
	$db = New Conexion();
	 $sql = $db->query("SELECT (*) FROM  
						desplazados_datos datos,
						desplazado_discapacidad discapacidad,
						desplazados_ayudasrecibidas ayudas,
						desplazados_economiafamiliar economia,
						desplazados_especialproteccion especial,
						desplazados_familiar familiar,
						desplazados_proteccion proteccion,
						desplazados_reparacion reparacion,
						desplazados_vivienda vivienda,
						desplazamiento,
						estabilizacion 
						WHERE 	datos.DOCUMENTO_DESPLAZADO=discapacidad.DOCUMENTO_DESPLAZADO AND
								datos.DOCUMENTO_DESPLAZADO=ayudas.DOCUMENTO_DESPLAZADO AND
								datos.DOCUMENTO_DESPLAZADO=economia.DOCUMENTO_DESPLAZADO AND
								datos.DOCUMENTO_DESPLAZADO=especial.DOCUMENTO_DESPLAZADO AND
								datos.DOCUMENTO_DESPLAZADO=familiar.DOCUMENTO_DESPLAZADO AND
								datos.DOCUMENTO_DESPLAZADO=proteccion.DOCUMENTO_DESPLAZADO AND
								datos.DOCUMENTO_DESPLAZADO=reparacion.DOCUMENTO_DESPLAZADO AND
								datos.DOCUMENTO_DESPLAZADO=vivienda.DOCUMENTO_DESPLAZADO AND
								datos.DOCUMENTO_DESPLAZADO=desplazamiento.DOCUMENTO_DESPLAZADO AND
								datos.DOCUMENTO_DESPLAZADO=estabilizacion.DOCUMENTO_DESPLAZADO 
						GROUP BY datos.DOCUMENTO_DESPLAZADO
			   ");



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