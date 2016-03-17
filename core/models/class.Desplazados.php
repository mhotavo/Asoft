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
    private $Municipio;
    private $Zona ;
    private $Localidad;
    private $Direccion;
    private $Telefono ;
    private $Estado_Civil; 
    private $Parentesco ;
    private $Es_Jefe_de_Hogar;
    private $Territorio;
    private $Usuario;

	public function __construct (){
		$this->db = new Conexion();
        $this->Documento= isset($_POST['Documento']) ? $_POST['Documento'] : null;
        $this->Nombre= isset($_POST['txtNombre']) ? $_POST['txtNombre'] : null;
        $this->Primer_Apellido= isset($_POST['txtPrimerApellido']) ? $_POST['txtPrimerApellido'] : null;
        $this->Segundo_Apellido= isset($_POST['txtSegundoApellido']) ? $_POST['txtSegundoApellido'] : null;
        $this->Tipo_de_Documento= isset($_POST['cboTipoDocumentoD']) ? $_POST['cboTipoDocumentoD'] : null;
        $this->Fecha_de_Victimizacion= isset($_POST['txtFechaVictimizacionD']) ? $_POST['txtFechaVictimizacionD'] : null;
        $this->Codigo_RUPV= isset($_POST['txtCodigoRUPVD']) ? $_POST['txtCodigoRUPVD'] : null;
        $this->Municipio= isset($_POST['cboMunicipioD']) ? $_POST['cboMunicipioD'] : null;
        $this->Zona= isset($_POST['cboZonaD']) ? $_POST['cboZonaD'] : null;
        $this->Localidad= isset($_POST['txtLocalidadD']) ? $_POST['txtLocalidadD'] : null;
        $this->Direccion= isset($_POST['txtDireccionD']) ? $_POST['txtDireccionD'] : null;
        $this->Telefono= isset($_POST['txtTelefonoD']) ? $_POST['txtTelefonoD'] : null;
        $this->Estado_Civil= isset($_POST['estaCivil']) ? $_POST['estaCivil'] : null;
        $this->Parentesco= isset($_POST['Parentesco']) ? $_POST['Parentesco'] : null;
        $this->Es_Jefe_de_Hogar= isset($_POST['JefeDeHogar']) ? $_POST['JefeDeHogar'] : null;
        $this->Territorio= isset($_POST['txtTerritorioD']) ? $_POST['txtTerritorioD'] : null;
        $this->Usuario= isset($_SESSION['app_id']) ? $_SESSION['app_id']: null;

	}


  public function Add() {

       $this->db->query(" INSERT INTO desplazados_datos
                        (DOCUMENTO_DESPLAZADO, NOMBRE_COMPLETO, PRIMER_APELLIDO, 
                        SEGUNDO_APELLIDO, TIPO_DE_DOCUMENTO, FECHA_DE_VICTIMIZACION,
                        CODIGO_RUPV, MUNICIPIO, ZONA, LOCALIDAD, DIRECCION, 
                        TELEFONO, ESTADO_CIVIL, PARENTESCO, ES_JEFE_DE_HOGAR, TERRITORIO, 
                        USUARIOLOG, FECHA_REGISTRO) 
                        VALUES (
                        '$this->Documento',
                        '$this->Nombre',
                        '$this->Primer_Apellido',
                        '$this->Segundo_Apellido', 
                        '$this->Tipo_de_Documento',
                        '$this->Fecha_de_Victimizacion',
                        '$this->Codigo_RUPV',
                        '$this->Municipio',
                        '$this->Zona', 
                        '$this->Localidad',
                        '$this->Direccion',
                        '$this->Telefono',
                        '$this->Estado_Civil',
                        '$this->Parentesco',
                        '$this->Es_Jefe_de_Hogar',
                        '$this->Territorio',
                        '$this->Usuario',
                         NOW()
                        );"); 
 
 
  } 

  public function Edit() {

     $this->db->query("UPDATE desplazados_datos SET 
            NOMBRE_COMPLETO='$this->Nombre',
            PRIMER_APELLIDO ='$this->Primer_Apellido',
            SEGUNDO_APELLIDO ='$this->Segundo_Apellido',
            TIPO_DE_DOCUMENTO ='$this->Tipo_de_Documento',
            FECHA_DE_VICTIMIZACION ='$this->Fecha_de_Victimizacion',
            CODIGO_RUPV ='$this->Codigo_RUPV',
            MUNICIPIO ='$this->Municipio',
            ZONA ='$this->Zona',
            LOCALIDAD ='$this->Localidad',
            DIRECCION ='$this->Direccion',
            TELEFONO ='$this->Telefono',
            ESTADO_CIVIL ='$this->Estado_Civil',
            PARENTESCO ='$this->Parentesco',
            ES_JEFE_DE_HOGAR ='$this->Es_Jefe_de_Hogar',
            TERRITORIO ='$this->Territorio',
            LAST_EDIT ='$this->Usuario'
            WHERE DOCUMENTO_DESPLAZADO='$this->Documento';" );  
      
  }

  public function Delete($id) {

    $this->db->query("DELETE FROM desplazado_discapacidad WHERE DOCUMENTO_DESPLAZADO='$this->Documento';");
    $this->db->query("DELETE FROM desplazados_ayudasrecibidas WHERE DOCUMENTO_DESPLAZADO='$this->Documento';");
    $this->db->query("DELETE FROM desplazados_economiafamiliar WHERE DOCUMENTO_DESPLAZADO='$this->Documento';");
    $this->db->query("DELETE FROM desplazados_especialproteccion WHERE DOCUMENTO_DESPLAZADO='$this->Documento';");
    $this->db->query("DELETE FROM desplazados_familiar WHERE DOCUMENTO_DESPLAZADO='$this->Documento';");
    $this->db->query("DELETE FROM desplazados_proteccion WHERE DOCUMENTO_DESPLAZADO='$this->Documento';");
    $this->db->query("DELETE FROM desplazados_reparacion WHERE DOCUMENTO_DESPLAZADO='$this->Documento';");
    $this->db->query("DELETE FROM desplazados_vivienda WHERE DOCUMENTO_DESPLAZADO='$this->Documento';");
    $this->db->query("DELETE FROM desplazamiento WHERE DOCUMENTO_DESPLAZADO='$this->Documento';");
    $this->db->query("DELETE FROM estabilizacion WHERE DOCUMENTO_DESPLAZADO='$this->Documento';");
    $this->db->query("DELETE FROM desplazados_datos WHERE DOCUMENTO_DESPLAZADO='$this->Documento';");

  }

  public function Buscar() {
    $this->id = $_POST['numDocumento']; 
    $sql= $this->db->query("SELECT * FROM  desplazados_datos  WHERE DOCUMENTO_DESPLAZADO='$this->id';");
    if ($this->db->rows($sql)>0) {
    	return 1;
    } else {
    	return 0;
    }
    
  }

  public function Estado($id) {
    $sql=$this->db->query("SELECT count(*) FROM  
                        desplazados_datos datos,
                        desplazado_discapacidad discapacidad,
                        desplazados_ayudasrecibidas ayudas,
                        desplazados_economiafamiliar economia,
                        desplazados_especialproteccion especial,
                        desplazados_familiar familiar,
                        desplazados_proteccion proteccion,
                        desplazados_reparacion reparacion,
                        desplazados_vivienda vivienda,
                        desplazamiento,
                        estabilizacion 
                        WHERE  
                        datos.DOCUMENTO_DESPLAZADO=discapacidad.DOCUMENTO_DESPLAZADO AND
                        datos.DOCUMENTO_DESPLAZADO=ayudas.DOCUMENTO_DESPLAZADO AND
                        datos.DOCUMENTO_DESPLAZADO=economia.DOCUMENTO_DESPLAZADO AND
                        datos.DOCUMENTO_DESPLAZADO=especial.DOCUMENTO_DESPLAZADO AND
                        datos.DOCUMENTO_DESPLAZADO=familiar.DOCUMENTO_DESPLAZADO AND
                        datos.DOCUMENTO_DESPLAZADO=proteccion.DOCUMENTO_DESPLAZADO AND
                        datos.DOCUMENTO_DESPLAZADO=reparacion.DOCUMENTO_DESPLAZADO AND
                        datos.DOCUMENTO_DESPLAZADO=vivienda.DOCUMENTO_DESPLAZADO AND
                        datos.DOCUMENTO_DESPLAZADO=desplazamiento.DOCUMENTO_DESPLAZADO AND
                        datos.DOCUMENTO_DESPLAZADO=estabilizacion.DOCUMENTO_DESPLAZADO AND
                        datos.DOCUMENTO_DESPLAZADO='$id'
                        GROUP BY datos.DOCUMENTO_DESPLAZADO");
        if ($this->db->rows($sql)>0) {
            return '<b style="color:#00B200;">Terminado <i class="fa fa-check-square"></i> </b>';
        } else {
            return '<b style="color:red;">Incompleto <i class="fa fa-times"></i> </b>';
        }
    

  }





	public function __destruct (){
		$this->db->close();
	}	

}

 ?>