<?php 

function familiaresDesplazados() {
	$db = New Conexion();
	 $sql = $db->query("SELECT * FROM desplazados_familiar;");
	if ($db->rows($sql)>0) {
		while ($d=$db->recorrer($sql)) {
			$desplazados[$d['Documento']]= array(
				'Documento' => $d['Documento'],
				'Nombre_Completo' => $d['Nombre_Completo'],
				'Primer_Apellido' => $d['Primer_Apellido'],
				'Segundo_Apellido' => $d['Segundo_Apellido'],
				'Tipo_de_Documento' => $d['Tipo_de_Documento'],
				'Fecha_de_Victimizacion' => $d['Fecha_de_Victimizacion'],
				'Codigo_RUPV' => $d['Codigo_RUPV'],
				'Departamento' => $d['Departamento'],
				'Municipio' => $d['Municipio'],
				'Zona' => $d['Zona'],
				'Localidad' => $d['Localidad'],
				'Direccion' => $d['Direccion'],
				'Telefono' => $d['Telefono'],
				'Estado_Civil' => $d['Estado_Civil'],
				'Parentesco' => $d['Parentesco'],
				'JefeDeHogar' => $d['Es_Jefe_de_Hogar'],
				'Territorio' => $d['Territorio']
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