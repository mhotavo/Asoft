<?php 

class Discapacidades {

    private $db;
    private $Documento;
    private $AntesDesplazamiento;
    private $IgualCondiciones;
    private $EntidadRehabilitacion;
    private $ReubicacionLaboral;
    private $MarginadoDiscriminado ;
    private $EncuentraPP;
    private $Excluido;
    private $Rehabilitacion;
    private $SubsidioDiscapacidad ;
    private $CapacidadEconomica;
    private $Menores18;
    private $RecibidoAyudaHum ;
    private $OrganizacionDespla; 
    private $ParticipacionOPDS ;

	public function __construct (){
		$this->db = new Conexion();
        $this->Documento= isset($_GET['id']) ? intval($_GET['id']) : null;
        $this->AntesDesplazamiento= isset($_POST['cboDiscaAntesDesplaD'] ) ? $_POST['cboDiscaAntesDesplaD'] : null;
        $this->IgualCondiciones= isset($_POST['cboIguCondicionesD'] ) ? $_POST['cboIguCondicionesD'] : null;
        $this->EntidadRehabilitacion= isset($_POST['cboEntiApoyoD'] ) ? $_POST['cboEntiApoyoD'] : null;
        $this->ReubicacionLaboral= isset($_POST['cboRehuLaboraD'] ) ? $_POST['cboRehuLaboraD'] : null;
        $this->MarginadoDiscriminado= isset($_POST['cboDiscriDiscapaD'] ) ? $_POST['cboDiscriDiscapaD'] : null;
        $this->EncuentraPP= isset($_POST['cboPubliPrivaD'] ) ? $_POST['cboPubliPrivaD'] : null;
        $this->Excluido= isset($_POST['cboExcluidoD'] ) ? $_POST['cboExcluidoD'] : null;
        $this->Rehabilitacion= isset($_POST['cboRehabilitacionD'] ) ? $_POST['cboRehabilitacionD'] : null;
        $this->SubsidioDiscapacidad= isset($_POST['cboDiscaAntesDesplaD'] ) ? $_POST['cboDiscaAntesDesplaD'] : null;
        $this->CapacidadEconomica= isset($_POST['cboCapaEconomicaD'] ) ? $_POST['cboCapaEconomicaD'] : null;
        $this->Menores18= isset($_POST['cboDiscaEstudianD'] ) ? $_POST['cboDiscaEstudianD'] : null;
        $this->RecibidoAyudaHum= isset($_POST['cboProrroAutoD'] ) ? $_POST['cboProrroAutoD'] : null;
        $this->OrganizacionDespla= isset($_POST['cboOrganiDesplaD'] ) ? $_POST['cboOrganiDesplaD'] : null;
        $this->ParticipacionOPDS= isset($_POST['cboOPDSD'] ) ? $_POST['cboOPDSD'] : null;


	}


  public function Add() {

        $this->db->query(" INSERT INTO desplazado_discapacidad
                        (DOCUMENTO_DESPLAZADO, ANTES_DESPLAZAMIENTO, IGUAL_CONDICIONES, ENTIDAD_REHABILITACION,
                         REHUBICACION_LABORAL, MARGINADO_DISCRIMINADO, ENCUENTRA_P_P, EXCLUIDO, REHABILITACION,
                         SUBSIDIO_DISCAPACIDAD, CAPACIDAD_ECONO, MENORES_18, RECIBIO_AYU_HUMA, ORGANIZACION_DESPLA,
                         PARTICIPACION_OPDS)
                        VALUES (
                        '$this->Documento',
                        '$this->AntesDesplazamiento',
                        '$this->IgualCondiciones',
                        '$this->EntidadRehabilitacion', 
                        '$this->ReubicacionLaboral',
                        '$this->MarginadoDiscriminado',
                        '$this->EncuentraPP',
                        '$this->Excluido', 
                        '$this->Rehabilitacion',
                        '$this->SubsidioDiscapacidad', 
                        '$this->CapacidadEconomica',
                        '$this->Menores18',
                        '$this->RecibidoAyudaHum',
                        '$this->OrganizacionDespla',
                        '$this->ParticipacionOPDS'
                        );");
  } 

  public function Edit() {
      $this->db->query("UPDATE desplazado_discapacidad SET 
            ANTES_DESPLAZAMIENTO='$this->AntesDesplazamiento',
            IGUAL_CONDICIONES ='$this->IgualCondiciones',
            ENTIDAD_REHABILITACION ='$this->EntidadRehabilitacion',
            REHUBICACION_LABORAL ='$this->ReubicacionLaboral',
            MARGINADO_DISCRIMINADO ='$this->MarginadoDiscriminado',
            ENCUENTRA_P_P ='$this->EncuentraPP',
            EXCLUIDO ='$this->Excluido',
            REHABILITACION ='$this->Rehabilitacion',
            SUBSIDIO_DISCAPACIDAD ='$this->SubsidioDiscapacidad',
            CAPACIDAD_ECONO ='$this->CapacidadEconomica',
            MENORES_18 ='$this->Menores18',
            RECIBIO_AYU_HUMA ='$this->RecibidoAyudaHum',
            ORGANIZACION_DESPLA ='$this->OrganizacionDespla',
            PARTICIPACION_OPDS ='$this->ParticipacionOPDS'
            WHERE DOCUMENTO_DESPLAZADO='$this->Documento';"); 

  }

	public function __destruct (){
		$this->db->close();
	}	

}

 ?>