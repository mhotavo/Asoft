<?php 

class Desplazados {

    private $db;
    private $Documento;
    private $Nombre;
    private $Primer_Apellido;
    private $Segundo_Apellido;
    private $Tipo_de_Documento;
    private $Fecha_de_Victimizacion ;
    private $Codigo_RUPV;
    private $Departamento;
    private $Municipio;
    private $Zona ;
    private $Localidad;
    private $Direccion;
    private $Telefono ;
    private $Estado_Civil; 
    private $Parentesco ;
    private $Es_Jefe_de_Hogar;
    private $Territorio;

	public function __construct (){
		$this->db = new Conexion();
        $this->Documento= isset($_GET['id']) ? intval($_GET['id']) : null;
        $this->Nombre= isset($_POST['txtNombre']) ? $_POST['txtNombre'] : null;
        $this->Primer_Apellido= isset($_POST['txtPrimerApellido']) ? $_POST['txtPrimerApellido'] : null;
        $this->Segundo_Apellido= isset($_POST['txtSegundoApellido']) ? $_POST['txtSegundoApellido'] : null;
        $this->Tipo_de_Documento= isset($_POST['cboTipoDocumentoD']) ? $_POST['cboTipoDocumentoD'] : null;
        $this->Fecha_de_Victimizacion= isset($_POST['txtFechaVictimizacionD']) ? $_POST['txtFechaVictimizacionD'] : null;
        $this->Codigo_RUPV= isset($_POST['txtCodigoRUPVD']) ? $_POST['txtCodigoRUPVD'] : null;
        $this->Departamento= isset($_POST['cboDepartamentoD']) ? $_POST['cboDepartamentoD'] : null;
        $this->Municipio= isset($_POST['cboMunicipioD']) ? $_POST['cboMunicipioD'] : null;
        $this->Zona= isset($_POST['cboZonaD']) ? $_POST['cboZonaD'] : null;
        $this->Localidad= isset($_POST['txtLocalidadD']) ? $_POST['txtLocalidadD'] : null;
        $this->Direccion= isset($_POST['txtDireccionD']) ? $_POST['txtDireccionD'] : null;
        $this->Telefono= isset($_POST['txtTelefonoD']) ? intval($_POST['txtTelefonoD']) : null;
        $this->Estado_Civil= isset($_POST['estaCivil']) ? $_POST['estaCivil'] : null;
        $this->Parentesco= isset($_POST['Parentesco']) ? $_POST['Parentesco'] : null;
        $this->Es_Jefe_de_Hogar= isset($_POST['JefeDeHogar']) ? $_POST['JefeDeHogar'] : null;
        $this->Territorio= isset($_POST['txtTerritorioD']) ? $_POST['txtTerritorioD'] : null;

	}


  public function Add() {

    exit();
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
    //header('location: ?view=datosdesplazado&mode=add&success=true');
  }

  public function Edit() {
    //$this->Errors('?view=datosdesplazado&mode=edit&id='.$this->id.'&error=');
      $this->db->query("UPDATE desplazados_datos SET 
            Nombre_Completo='$this->Nombre',
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
            WHERE Documento='$this->Documento';"); 
            header('location: ?view=datosdesplazado&mode=edit&id='.$this->Documento);
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