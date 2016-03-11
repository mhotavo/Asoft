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

    }


  public function Add() {

        $this->db->query(" INSERT INTO desplazados_especialproteccion
                        (DOCUMENTO_DESPLAZADO, AyudaCultura_COMPLETO, Ayuda18Cultura, 
                        FuncionarioTrato, PuebloIndigena, IndigenasViointra,
                        Denunciado, CualEntidad, TipoViolencia, PromuevenDerechos, LOCALIDAD, DIRECCION, 
                        TELEFONO, ESTADO_CIVIL, PARENTESCO, ES_JEFE_DE_HOGAR, TERRITORIO) 
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
                        '$this->PromuevenDerechos'
                         );");

  } 

  public function Edit() {
      $this->db->query("UPDATE desplazados_especialproteccion SET 
            AyudaCultura_COMPLETO='$this->AyudaCultura',
            Ayuda18Cultura ='$this->Ayuda18Cultura',
            FuncionarioTrato ='$this->FuncionarioTrato',
            PuebloIndigena ='$this->PuebloIndigena',
            IndigenasViointra ='$this->IndigenasViointra',
            Denunciado ='$this->Denunciado',
            CualEntidad ='$this->CualEntidad',
            TipoViolencia ='$this->TipoViolencia',
            PromuevenDerechos ='$this->PromuevenDerechos'
            WHERE DOCUMENTO_DESPLAZADO='$this->Documento';"); 

  }


    public function __destruct (){
        $this->db->close();
    }   

}

 ?>