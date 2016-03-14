<?php 

function Proteccion() {
	$db = New Conexion();
	 $sql = $db->query("SELECT * FROM desplazados_proteccion;");
	if ($db->rows($sql)>0) {
		while ($d=$db->recorrer($sql)) {
			$proteccion[$d['DOCUMENTO_DESPLAZADO']]= array(
				'DOCUMENTO_DESPLAZADO' => $d['DOCUMENTO_DESPLAZADO'],
				'SOLICITAR_PROTECCION' => $d['SOLICITAR_PROTECCION'],
				'OTRA_ENTIDAD' => $d['OTRA_ENTIDAD'],
				'AYUDAPOBLAC_DESPLAZA' => $d['AYUDAPOBLAC_DESPLAZA'],
				'MUJER' => $d['MUJER'],
				'ADULTO_MAYOR' => $d['ADULTO_MAYOR'],
				'JOVENES' => $d['JOVENES'],
				'DISCAPACIDAD' => $d['DISCAPACIDAD'],
				'AFILIADO_OPD' => $d['AFILIADO_OPD'],
				'CUAL_OPD' => $d['CUAL_OPD'],
				'PARTICIPA_E_P_P' => $d['PARTICIPA_E_P_P'],
				'CUAL_E_P_P' => $d['CUAL_E_P_P'],
				'PRIORIDAD_1' => $d['PRIORIDAD_1'],
				'PRIORIDAD_2' => $d['PRIORIDAD_2'],
				'PRIORIDAD_3' => $d['PRIORIDAD_3'],
				'PRIORIDAD_4' => $d['PRIORIDAD_4'],
				'PRIORIDAD_5' => $d['PRIORIDAD_5']
				);
		}

	} else {
		$proteccion=false;
	}
	$db->liberar($sql);
	$db->close(); 

	return $proteccion;
}

 ?>