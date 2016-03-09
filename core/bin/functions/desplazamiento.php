<?php 

function Desplazamiento() {
	$db = New Conexion();
	 $sql = $db->query("SELECT * FROM desplazamiento;");
	if ($db->rows($sql)>0) {
		while ($d=$db->recorrer($sql)) {
			$desplazamiento[$d['DOCUMENTO_DESPLAZADO']]= array(
				'DOCUMENTO_DESPLAZADO' => $d['DOCUMENTO_DESPLAZADO'],
				'VECES_DESPLAZADO' => $d['VECES_DESPLAZADO'],
				'ANO1' => $d['ANO1'],
				'LOCALIDAD1' => $d['LOCALIDAD1'],
				'MUNICIPIO1' => $d['MUNICIPIO1'],
				'ANO2' => $d['ANO2'],
				'LOCALIDAD2' => $d['LOCALIDAD2'],
				'MUNICIPIO2' => $d['MUNICIPIO2'],
				'ANO3' => $d['ANO3'],
				'LOCALIDAD3' => $d['LOCALIDAD3'],
				'MUNICIPIO3' => $d['MUNICIPIO3'],
				'CONFRONTACION_ARMADA' => $d['CONFRONTACION_ARMADA'],
				'AMENAZA_INDIRECTA' => $d['AMENAZA_INDIRECTA'],
				'CAMPOS_MINADOS_' => $d['CAMPOS_MINADOS_'],
				'ASESINATO_FAMILIA' => $d['ASESINATO_FAMILIA'],
				'AMENAZA_DIRECTA' => $d['AMENAZA_DIRECTA'],
				'RECLUTAMIENTO_MENORES' => $d['RECLUTAMIENTO_MENORES'],
				'AUSENCIA_GOBIERNO' => $d['AUSENCIA_GOBIERNO'],
				'DESPLAZAMIENTO_MASIVO' => $d['DESPLAZAMIENTO_MASIVO'],
				'NO_PERSONAS_H' => $d['NO_PERSONAS_H'],
				'FAMILIA_SEPARO' => $d['FAMILIA_SEPARO'],
				'S_AYUDA_ESTATAL' => $d['S_AYUDA_ESTATAL'],
				'NUCLEO_UNIFICAR' => $d['NUCLEO_UNIFICAR'],
				'R_AYUDA_ESTATL' => $d['R_AYUDA_ESTATL'],
				'FAMILIA_VIVOS' => $d['FAMILIA_VIVOS'],
				'FAMILIAR_DETENIDO' => $d['FAMILIAR_DETENIDO'],
				'FAMILIAR_V_P' => $d['FAMILIAR_V_P'],
				'FAMILIAR_ASESINADO' => $d['FAMILIAR_ASESINADO'],
				'FAMILIAR_RECLUTADO' => $d['FAMILIAR_RECLUTADO'],
				'FAMILIAR_SECUESTRO' => $d['FAMILIAR_SECUESTRO'],
				'DEMANDA_DESPLAZAMIENTO' => $d['DEMANDA_DESPLAZAMIENTO'],
				'FAMILIAR_VIC_M_A' => $d['FAMILIAR_VIC_M_A'],
				'DEFENSORIA' => $d['DEFENSORIA'],
				'PROCURADURIA' => $d['PROCURADURIA'],
				'DEPA_PROS_SOC' => $d['DEPA_PROS_SOC'],
				'PERSONERIA' => $d['PERSONERIA'],
				'UAO' => $d['UAO'],
				'OTRA' => $d['FAMILIAR_SECUESTRO']
				);
		}

	} else {
		$desplazamiento=false;
	}
	$db->liberar($sql);
	$db->close(); 

	return $desplazamiento;
}

 ?>