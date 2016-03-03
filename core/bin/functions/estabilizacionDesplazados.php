<?php 

function Desplazados() {
	$db = New Conexion();
	 $sql = $db->query("SELECT * FROM desplazados_datos;");
	if ($db->rows($sql)>0) {
		while ($d=$db->recorrer($sql)) {
			$desplazados[$d['Documento']]= array(
				'Documento' => $d['DOCUMENTO_DESPLAZADO'],
				'Nombre_Completo' => $d['NOMBRE_COMPLETO'],
				'Primer_Apellido' => $d['PRIMER_APELLIDO'],
				'Segundo_Apellido' => $d['SEGUNDO_APELLIDO'],
				'Tipo_de_Documento' => $d['TIPO_DE_DOCUMENTO'],
				'Fecha_de_Victimizacion' => $d['FECHA_DE_VICTIMIZACION'],
				'Codigo_RUPV' => $d['CODIGO_RUPV'],
				'Departamento' => $d['DEPARTAMENTO'],
				'Municipio' => $d['MUNICIPIO'],
				'Zona' => $d['ZONA'],
				'Localidad' => $d['LOCALIDAD'],
				'Direccion' => $d['DIRECCION'],
				'Telefono' => $d['TELEFONO'],
				'Estado_Civil' => $d['ESTADO_CIVIL'],
				'Parentesco' => $d['PARENTESCO'],
				'JefeDeHogar' => $d['ES_JEFE_DE_HOGAR'],
				'Territorio' => $d['TERRITORIO']
				);
		}

	} else {
		$desplazados=false;
	}
	$db->liberar($sql);
	$db->close(); 

	return $desplazados;
}

 ?>