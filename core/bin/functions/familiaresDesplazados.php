<?php 

function familiaresDesplazados($DocumentoDesplazado) {
	 $db = New Conexion();
	 $sql = $db->query("SELECT *, YEAR(CURDATE())-YEAR(FECHA_NACIMIENTO) + IF(DATE_FORMAT(CURDATE(),'%m-%d') > DATE_FORMAT(FECHA_NACIMIENTO,'%m-%d'), 0, -1) AS EDAD_ACTUAL , 
	 					DATE_FORMAT(FECHA_NACIMIENTO,'%d-%m-%Y')  AS FECHA_NACIMIENTO2
	 					FROM desplazados_familiar WHERE DOCUMENTO_DESPLAZADO='$DocumentoDesplazado';");
	if ($db->rows($sql)>0) {
		while ($d=$db->recorrer($sql)) {
			$FamiliaresDesplazados[$d['IDENTIFICACION_FAMILIAR']]= array(
				'IDENTIFICACION_FAMILIAR' => $d['IDENTIFICACION_FAMILIAR'],
				'DOCUMENTO_DESPLAZADO' => $d['DOCUMENTO_DESPLAZADO'],
				'TIPO_IDENTIFICACION' => $d['TIPO_IDENTIFICACION'],
				'NOMBRES' => $d['NOMBRES'],
				'PRIMER_APELLIDO' => $d['PRIMER_APELLIDO'],
				'SEGUNDO_APELLIDO' => $d['SEGUNDO_APELLIDO'],
				'NOMBRE_COMPLETO' => $d['NOMBRES']. ' ' .$d['PRIMER_APELLIDO']. ' ' .$d['SEGUNDO_APELLIDO'],
				'GENERO' => $d['GENERO'],
				'FECHA_NACIMIENTO' => $d['FECHA_NACIMIENTO2'],
				'EDAD' => $d['EDAD_ACTUAL'],
				'ENFOQUE_DIFERENCIAL' => $d['ENFOQUE_DIFERENCIAL'],
				'ESTADO_CIVIL' => $d['ESTADO_CIVIL'],
				'PARENTESCO' => $d['PARENTESCO'],
				'ESTUVO_SEPARADO' => $d['ESTUVO_SEPARADO'],
				'DISCAPACITADO' => $d['DISCAPACITADO'],
				'DISCAPACIDAD' => $d['DISCAPACIDAD'],
				'CUAL_D' => $d['CUAL_D'],
				'HA_SIDO_VICTIMA_M_A_' => $d['HA_SIDO_VICTIMA_M_A_'],
				'RECIBIO_AUXILIO_T_E_C_A' => $d['RECIBIO_AUXILIO_T_E_C_A'],
				'SE_OTORGO_AYUDA_M' => $d['SE_OTORGO_AYUDA_M'],
				'OTRA_A_M' => $d['OTRA_A_M'],
				'EN_CUANTO_INDEMNIZACION' => $d['EN_CUANTO_INDEMNIZACION'],
				'AFILIADO_SALUD' => $d['AFILIADO_SALUD'],
				'REGIMEN' => $d['REGIMEN'],
				'CUAL_R' => $d['CUAL_R'],
				'RECIBIO_ATENCION_S_M' => $d['RECIBIO_ATENCION_S_M'],
				'RECIBIO_APOYO_PSICOSOCIAL' => $d['RECIBIO_APOYO_PSICOSOCIAL'],
				'ASISTIO_PROGRAMA_S_R' => $d['ASISTIO_PROGRAMA_S_R'],
				'VACUNAS' => $d['VACUNAS'],
				'CUALES_VACUNAS' => $d['CUALES_VACUNAS'],
				'DIAGNOSTICADO_E_C' => $d['DIAGNOSTICADO_E_C'],
				'CUAL_ENFERMEDAD_' => $d['CUAL_ENFERMEDAD_'],
				'CALIFIQUE_E_S' => $d['CALIFIQUE_E_S'],
				'ESTUDIABA_ANTES_V' => $d['ESTUDIABA_ANTES_V'],
				'ESTUDIA_ACTUALMENTE' => $d['ESTUDIA_ACTUALMENTE'],
				'PROGRAMA_A_E' => $d['PROGRAMA_A_E'],
				'CANCELA_COSTO_E' => $d['CANCELA_COSTO_E'],
				'SABE_LEER' => $d['SABE_LEER'],
				'NIVEL_ALCANZADO' => $d['NIVEL_ALCANZADO'],
				'COMPETENCIA_LABORAL' => $d['COMPETENCIA_LABORAL'],
				'COMPETENCIA_CERTIFICADA' => $d['COMPETENCIA_CERTIFICADA'],
				'GUSTARIA__CAPACITARSE_' => $d['GUSTARIA__CAPACITARSE_'],
				'HORARIO_CAPACITACION_' => $d['HORARIO_CAPACITACION_'],
				'ACTIVIDAD_LABORAL_ACTUAL' => $d['ACTIVIDAD_LABORAL_ACTUAL'],
				'RAMA_ACTIVIDAD_ACTUAL' => $d['RAMA_ACTIVIDAD_ACTUAL'],
				'CONTRATO_ESCRITO' => $d['CONTRATO_ESCRITO'],
				'TRABAJA_JORNADA' => $d['TRABAJA_JORNADA'],
				'S_SOCIAL_R_P' => $d['S_SOCIAL_R_P']
				);
		}

	} else {
		$FamiliaresDesplazados=false;
	}
	$db->liberar($sql);
	$db->close(); 

	return $FamiliaresDesplazados;
}

 ?>