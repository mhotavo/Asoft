<?php 

class Ayudas {

    private $db;
    private $Documento;
    private $AtencionMenor;
    private $CiudadoInfantil;
    private $ProAlimentacion;
    private $HaceFalta;
    private $Seguridad ;
    private $CompleAlimenticio;
    private $Desayunos;
    private $AyudaSalud;
    private $AyudaAlojamiento;
    private $AyudaAlimentaria;
    private $AyudaAgua;
    private $Usuario;

	public function __construct (){

		$this->db = new Conexion();
        $this->Documento= isset($_GET['id']) ? intval($_GET['id']) : null;
        $this->AtencionMenor= isset($_POST['cboPrograMenorD']) ? $_POST['cboPrograMenorD'] : null;
        $this->CiudadoInfantil= isset($_POST['cboPrograCuInfantilD']) ? $_POST['cboPrograCuInfantilD'] : null;
        $this->ProAlimentacion= isset($_POST['cboPrograAlimentaD']) ? $_POST['cboPrograAlimentaD'] : null;
        $this->HaceFalta= isset($_POST['cboHambreD']) ? $_POST['cboHambreD'] : null;
        $this->Seguridad= isset($_POST['cboRetornoD']) ? $_POST['cboRetornoD'] : null;
        $this->CompleAlimenticio= isset($_POST['cboCompleAlimenD']) ? $_POST['cboCompleAlimenD'] : null;
        $this->Desayunos= isset($_POST['cboDesayunosD']) ? $_POST['cboDesayunosD'] : null;
        $this->AyudaSalud= isset($_POST['AyudaSalud']) ? $_POST['AyudaSalud'] : null;
        $this->AyudaAlojamiento= isset($_POST['AyudaAlojamiento']) ? $_POST['AyudaAlojamiento'] : null;
        $this->AyudaAlimentaria= isset($_POST['AyudaRacionAlimentaria']) ? $_POST['AyudaRacionAlimentaria'] : null;
        $this->AyudaAgua= isset($_POST['AyudaAguaPotable']) ? $_POST['AyudaAguaPotable'] : null;
        $this->Usuario= isset($_SESSION['app_id']) ? $_SESSION['app_id']: null;        

	}


  public function Add() {

        $this->db->query(" INSERT INTO desplazados_ayudasrecibidas
                        (DOCUMENTO_DESPLAZADO, ATENCION_MENOR, CUIDADO_INFANTIL, PRO_ALIMENTACION,
                         HAMBRE_FALTAA, SEGURIDAD_AI, COMPLE_ALIMENTICIO, BENEFI_DESAYUNO, AYUDA_SALUD,
                         AYUDA_ALOJAMIENTO, AYUDA_ALIMENTARIA, AYUDA_AGUA, USUARIOLOG) 
                        VALUES (
                        '$this->Documento',
                        '$this->AtencionMenor',
                        '$this->CiudadoInfantil',
                        '$this->ProAlimentacion', 
                        '$this->HaceFalta',
                        '$this->Seguridad',
                        '$this->CompleAlimenticio',
                        '$this->Desayunos', 
                        '$this->AyudaSalud',
                        '$this->AyudaAlojamiento',
                        '$this->AyudaAlimentaria',
                        '$this->AyudaAgua',
                        '$this->Usuario'
                         );");
 
  } 

  public function Edit() {
      $this->db->query("UPDATE desplazados_ayudasrecibidas SET 
            ATENCION_MENOR='$this->AtencionMenor',
            CUIDADO_INFANTIL ='$this->CiudadoInfantil',
            PRO_ALIMENTACION ='$this->ProAlimentacion',
            HAMBRE_FALTAA ='$this->HaceFalta',
            SEGURIDAD_AI ='$this->Seguridad',
            COMPLE_ALIMENTICIO ='$this->CompleAlimenticio',
            BENEFI_DESAYUNO ='$this->Desayunos',
            AYUDA_SALUD ='$this->AyudaSalud',
            AYUDA_ALOJAMIENTO ='$this->AyudaAlojamiento',
            AYUDA_ALIMENTARIA ='$this->AyudaAlimentaria',
            AYUDA_AGUA ='$this->AyudaAgua',
            LAST_EDIT ='$this->Usuario',

            ;"); 

  }

	public function __destruct (){
		$this->db->close();
	}	

}

 ?>