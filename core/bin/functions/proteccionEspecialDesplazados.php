<?php 

function ProteccionEspecial() {
	$db = New Conexion();
	 $sql = $db->query("SELECT * FROM desplazados_especialproteccion;");
	if ($db->rows($sql)>0) {
		while ($d=$db->recorrer($sql)) {
			$proteccionEspecial[$d['ID_ESPECIALPROTECCION']]= array(
				'ID_ESPECIALPROTECCION' => $d['ID_ESPECIALPROTECCION'],
				'DOCUMENTO_DESPLAZADO' => $d['DOCUMENTO_DESPLAZADO'],
				'AYUDA_CULTURA' => $d['AYUDA_CULTURA'],
				'AYUDA_18_CULTURA' => $d['AYUDA_18_CULTURA'],
				'FUNCIONARIO_TRATO' => $d['FUNCIONARIO_TRATO'],
				'PUEBLO_INDIGENA' => $d['PUEBLO_INDIGENA'],
				'INDIGENAS_VIOINTRA' => $d['INDIGENAS_VIOINTRA'],
				'DENUNCIADO' => $d['DENUNCIADO'],
				'CUALENTIDAD_DENUN' => $d['CUALENTIDAD_DENUN'],
				'TIPO_VIOLENCIA' => $d['TIPO_VIOLENCIA'],
				'PROMUEVEN_DERECHOS' => $d['PROMUEVEN_DERECHOS']
				);
		}

	} else {
		$proteccionEspecial=false;
	}
	$db->liberar($sql);
	$db->close(); 

	return $proteccionEspecial;
}

 ?>