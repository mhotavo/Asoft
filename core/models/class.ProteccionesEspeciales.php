<?php 

class ProteccionesEspeciales {

    private $db;
    private $Documento;
    private $AyudaCultura;
    private $Ayuda18Cultura;
    private $FuncionarioTrato;
    private $PuebloIndigena;
    private $IndigenasViointra ;
    private $Denunciado;
    private $CualEntidad;
    private $TipoViolencia;
    private $PromuevenDerechos ;
    private $Usuario;


    public function __construct (){
        $this->db = new Conexion();
        $this->Documento= isset($_GET['id']) ? intval($_GET['id']) : null;
        $this->AyudaCultura= isset($_POST['cboEsProteccionD'] ) ? $_POST['cboEsProteccionD'] : null;
        $this->Ayuda18Cultura= isset($_POST['cboEducaCulturaD'] ) ? $_POST['cboEducaCulturaD'] : null;
        $this->FuncionarioTrato= isset($_POST['cboTratoD'] ) ? $_POST['cboTratoD'] : null;
        $this->PuebloIndigena= isset($_POST['cboPuebloIndiD'] ) ? $_POST['cboPuebloIndiD'] : null;
        $this->IndigenasViointra= isset($_POST['cboViolenciaD'] ) ? $_POST['cboViolenciaD'] : null;
        $this->Denunciado= isset($_POST['cboDenunciadoD'] ) ? $_POST['cboDenunciadoD'] : null;
        $this->CualEntidad= isset($_POST['txtCualEntidadD'] ) ? $_POST['txtCualEntidadD'] : null;
        $this->TipoViolencia= isset($_POST['cboTipoViolenciaD'] ) ? $_POST['cboTipoViolenciaD'] : null;
        $this->PromuevenDerechos= isset($_POST['cboPromuevenDereD'] ) ? $_POST['cboPromuevenDereD'] : null;
        $this->Usuario= isset($_SESSION['app_id']) ? $_SESSION['app_id']: null;
    }


  public function Add() {

        $this->db->query(" INSERT INTO desplazados_especialproteccion
                        (DOCUMENTO_DESPLAZADO, AYUDA_CULTURA, AYUDA_18_CULTURA, FUNCIONARIO_TRATO,
                        PUEBLO_INDIGENA, INDIGENAS_VIOINTRA, DENUNCIADO, CUALENTIDAD_DENUN, 
                        TIPO_VIOLENCIA, PROMUEVEN_DERECHOS, USUARIOLOG) 
                        VALUES (
                        '$this->Documento',
                        '$this->AyudaCultura',
                        '$this->Ayuda18Cultura',
                        '$this->FuncionarioTrato', 
                        '$this->PuebloIndigena',
                        '$this->IndigenasViointra',
                        '$this->Denunciado',
                        '$this->CualEntidad', 
                        '$this->TipoViolencia',
                        '$this->PromuevenDerechos',
                        '$this->Usuario'
                         );");

  } 

  public function Edit() {
      $this->db->query("UPDATE desplazados_especialproteccion SET 
            AYUDA_CULTURA='$this->AyudaCultura',
            AYUDA_18_CULTURA ='$this->Ayuda18Cultura',
            FUNCIONARIO_TRATO ='$this->FuncionarioTrato',
            PUEBLO_INDIGENA ='$this->PuebloIndigena',
            INDIGENAS_VIOINTRA ='$this->IndigenasViointra',
            DENUNCIADO ='$this->Denunciado',
            CUALENTIDAD_DENUN ='$this->CualEntidad',
            TIPO_VIOLENCIA ='$this->TipoViolencia',
            PROMUEVEN_DERECHOS ='$this->PromuevenDerechos',
            LAST_EDIT ='$this->Usuario'
            WHERE DOCUMENTO_DESPLAZADO='$this->Documento';"); 

  }


    public function __destruct (){
        $this->db->close();
    }   

}

 ?>