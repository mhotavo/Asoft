<?php 

class Desplazados {

	private $db;
	private $id;
	private $nombre;

	public function __construct (){
		$this->db = new Conexion();
	}

  private function Errors($url) {
    try {
      if(empty($_POST['nombre'])) {
        throw new Exception(1);
      } else {
        $this->nombre = $this->db->real_escape_string($_POST['nombre']);
      }
    } catch(Exception $error) {
      header('location: '.$url .$error->getMessage());
      exit;
    }
  }

  public function Add() {
    $this->Errors('?view=datosdesplazado&mode=add&error=',true);
    $this->db->query("INSERT INTO desplazados_datos (Documento,Nombre_Completo,Primer_Apellido,Segundo_Apellido,Tipo_de_Documento,Fecha_de_Victimizacion,Codigo_RUPV,Departamento, Municipio, Zona, Localidad, Direccion, Telefono, Estado_Civil, Parentesco, Es_Jefe_de_Hogar, Territorio)
    VALUES ('$this->Documento','$this->Nombre_Completo','$this->Primer_Apellido','$this->Segundo_Apellido','$this->Tipo_de_Documento','$this->Fecha_de_Victimizacion','$this->Codigo_RUPV','$Departamento->Municipio','$this->Zona','$this->Localidad','$this->Direccion','$this->Telefono','$this->Estado_Civil','$this->Parentesco','$this->Es_Jefe_de_Hogar','$this->Territorio');");
    header('location: ?view=datosdesplazado&mode=add&success=true');
  }
  public function Edit() {
    $this->id = intval($_GET['id']);
    $this->Errors('?view=datosdesplazado&mode=edit&id='.$this->id.'&error=');
    $this->db->query("UPDATE foros SET nombre='$this->nombre', descrip='$this->descrip',
    id_categoria='$this->categoria', estado='$this->estado' WHERE id='$this->id';");
    header('location: ?view=datosdesplazado&mode=edit&id='.$this->id.'&success=true');
  }
  public function Delete() {
    $this->id = intval($_GET['id']);
    $this->db->query("DELETE FROM foros WHERE id='$this->id';");
    header('location: ?view=datosdesplazado&success=true');
  }

  public function Buscar() {
    $this->id = intval($_POST['numDocumento']);
   // $this->Errors('?view=validar&id='.$this->id.'&error=');
    $sql= $this->db->query("SELECT * FROM  desplazados_datos  WHERE Documento='$this->id';");
    if ($this->db->rows($sql)>0) {
    	header('location: ?view=validardesplazados&id='.$this->id.'&success=true');
    } else {
    	header('location: ?view=validardesplazados&id='.$this->id.'&success=false');
    }
    
  }

	public function __destruct (){
		$this->db->close();
	}	

}

 ?>