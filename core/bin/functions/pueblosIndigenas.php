<?php 

function PueblosIndigenas() {
	$db = New Conexion();
	 $sql = $db->query("SELECT * FROM pueblo_indigena;");
	if ($db->rows($sql)>0) {
		while ($d=$db->recorrer($sql)) {
			$pueblosIndigenas[$d['ID_PUEBLO']]= array(
				'ID_PUEBLO' => $d['ID_PUEBLO'],
				'NOM_PUEBLO' => $d['NOM_PUEBLO']
				);
		}

	} else {
		$pueblosIndigenas=false;
	}
	$db->liberar($sql);
	$db->close(); 

	return $pueblosIndigenas;
}

 ?>