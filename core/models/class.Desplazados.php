<?php 

class Desplazados {

	private $db;
	private $id;
	private $txtNombre;

	public function __construct (){
		$this->db = new Conexion();
	}

  public function Add() {
    $this->db->query("INSERT INTO desplazados_datos 
        (Documento, Nombre_Completo, Primer_Apellido, Segundo_Apellido,
         Tipo_de_Documento, Fecha_de_Victimizacion, Codigo_RUPV, Departamento,
         Municipio, Zona, Localidad, Direccion, Telefono,
         Estado_Civil, Parentesco, Es_Jefe_de_Hogar, Territorio)

    VALUES ('$this->Documento',
            '$this->Nombre_Completo',
            '$this->Primer_Apellido',
            '$this->Segundo_Apellido',
            '$this->Tipo_de_Documento',
            '$this->Fecha_de_Victimizacion',
            '$this->Codigo_RUPV',
            '$this->Departamento',
            '$this->Municipio',
            '$this->Zona',
            '$this->Localidad',
            '$this->Direccion',
            '$this->Telefono',
            '$this->Estado_Civil',
            '$this->Parentesco',
            '$this->Es_Jefe_de_Hogar',
            '$this->Territorio'
            );");
    header('location: ?view=datosdesplazado&mode=add&success=true');
  }
  public function Edit() {

    echo $this->Documento = intval($_GET['id']);
    $this->txtNombre = $_POST['txtNombre'];
    $this->Primer_Apellido = $_POST['txtPrimerApellido'];
    $this->Segundo_Apellido = $_POST['txtSegundoApellido'];
    $this->Tipo_de_Documento = $_POST['cboTipoDocumentoD'];
    $this->Fecha_de_Victimizacion = $_POST['txtFechaVictimizacionD'];
    $this->Codigo_RUPV = $_POST['txtCodigoRUPVD'];
    $this->Departamento = $_POST['cboDepartamentoD'];
    $this->Municipio = $_POST['cboMunicipioD'];
    $this->Zona = $_POST['cboZonaD'];
    $this->Localidad = $_POST['txtLocalidadD'];
    $this->Direccion = $_POST['txtDireccionD'];
    $this->Telefono = $_POST['txtTelefonoD'];
    $this->Estado_Civil = $_POST['estaCivil'];
    $this->Parentesco = $_POST['Parentesco'];
    $this->Es_Jefe_de_Hogar = $_POST['JefeDeHogar'];
    $this->Territorio = $_POST['txtTerritorioD'];

     $this->db->query("UPDATE desplazados_datos SET 
            Nombre_Completo='$this->txtNombre',
            Primer_Apellido ='$this->Primer_Apellido',
            Segundo_Apellido ='$this->Segundo_Apellido',
            Tipo_de_Documento ='$this->Tipo_de_Documento',
            Fecha_de_Victimizacion ='$this->Fecha_de_Victimizacion',
            Codigo_RUPV ='$this->Codigo_RUPV',
            Departamento ='$this->Departamento',
            Municipio ='$this->Municipio',
            Zona ='$this->Zona',
            Localidad ='$this->Localidad',
            Direccion ='$this->Direccion',
            Telefono ='$this->Telefono',
            Estado_Civil ='$this->Estado_Civil',
            Parentesco ='$this->Parentesco',
            Es_Jefe_de_Hogar ='$this->Es_Jefe_de_Hogar',
            Territorio ='$this->Territorio'
           WHERE Documento='$this->Documento'

    ;"); 
    header('location: ?view=datosdesplazado&mode=view&id='.$this->id);
  }
  public function Delete() {
    $this->id = intval($_GET['id']);
    $this->db->query("DELETE FROM foros WHERE id='$this->id';");
    header('location: ?view=datosdesplazado&success=true');
  }

  public function Buscar() {
    $this->id = intval($_POST['numDocumento']);
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