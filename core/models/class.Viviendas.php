<?php 

class Viviendas {

    private $db;
    private $Documento;
    private $ActualVivienda;
    private $Tenencia;
    private $TipoContrato;
    private $ZonaVivienda;
    private $ZonaAltoRiesgo ;
    private $Paredes;
    private $Piso;
    private $Techo;
    private $Acueducto ;
    private $Telefono;
    private $EnergiaElectrica;
    private $Alcantarillado ;
    private $Gas; 
    private $Basuras ;
    private $NoHabAntes;
    private $NoHabActual;
    private $NoFamiliaCasa;
    private $RecibiSubsidio;
    private $Usuario;

    public function __construct (){
        $this->db = new Conexion();
        $this->Documento= isset($_GET['id']) ? intval($_GET['id']) : null;
        $this->ActualVivienda= isset($_POST['cboActualViviendaD'] ) ? $_POST['cboActualViviendaD'] : null;
        $this->Tenencia= isset($_POST['cboTenenciaD'] ) ? $_POST['cboTenenciaD'] : null;
        $this->TipoContrato= isset($_POST['cboTipoContraD'] ) ? $_POST['cboTipoContraD'] : null;
        $this->ZonaVivienda= isset($_POST['cboZonaViviendaD'] ) ? $_POST['cboZonaViviendaD'] : null;
        $this->ZonaAltoRiesgo= isset($_POST['cboZonaAltoRD'] ) ? $_POST['cboZonaAltoRD'] : null;
        $this->Paredes= isset($_POST['cboParedesD'] ) ? $_POST['cboParedesD'] : null;
        $this->Piso= isset($_POST['cboPisoD'] ) ? $_POST['cboPisoD'] : null;
        $this->Techo= isset($_POST['cboTechoD'] ) ? $_POST['cboTechoD'] : null;
        $this->Acueducto= isset($_POST['cboAcueductoD'] ) ? $_POST['cboAcueductoD'] : null;
        $this->Telefono= isset($_POST['cboTelefonoD'] ) ? $_POST['cboTelefonoD'] : null;
        $this->EnergiaElectrica= isset($_POST['cboEElectricaD'] ) ? $_POST['cboEElectricaD'] : null;
        $this->Alcantarillado=  isset($_POST['cboAlcantarilladoD'] ) ? $_POST['cboAlcantarilladoD'] : null;
        $this->Gas= isset($_POST['cboGasDomiciliarioD'] ) ? $_POST['cboGasDomiciliarioD'] : null;
        $this->Basuras= isset($_POST['cboReBasurasD'] ) ? $_POST['cboReBasurasD'] : null;
        $this->NoHabAntes= isset($_POST['txtNHabiAnteD'] ) ? $_POST['txtNHabiAnteD'] : null;
        $this->NoHabActual= isset($_POST['txtNHAbiActuD'] ) ? $_POST['txtNHAbiActuD'] : null;
        $this->NoFamiliaCasa= isset($_POST['txtNFamiliasD'] ) ? $_POST['txtNFamiliasD'] : null;
        $this->RecibiSubsidio= isset($_POST['cboSubsViviendaD'] ) ? $_POST['cboSubsViviendaD'] : null;
        $this->Usuario= isset($_SESSION['app_id']) ? $_SESSION['app_id']: null;        

    }


  public function Add() {

        $this->db->query(" INSERT INTO desplazados_vivienda
                        (DOCUMENTO_DESPLAZADO, ACTUAL_VIVIENDA, TENENCIA, TIPO_CONTRATO,
                         ZONA_VIVIENDA, ZONA_ALTORIESGO, PAREDES, PISO, TECHO, S_ACUEDUCTO,
                         S_TELEFONO, S_ENERGIA_ELECTRICA, S_ALCANTARILLADO, S_GAS, S_REBASURAS,
                         NO_HABIT_ANTES, NO_HABIT_ACTUAL, NO_FAMILI_CASA, RECIBI_SUBSIDIO, USUARIOLOG)
                        VALUES (
                        '$this->Documento',
                        '$this->ActualVivienda',
                        '$this->Tenencia',
                        '$this->TipoContrato', 
                        '$this->ZonaVivienda',
                        '$this->ZonaAltoRiesgo',
                        '$this->Paredes',
                        '$this->Piso', 
                        '$this->Techo',
                        '$this->Acueducto', 
                        '$this->Telefono',
                        '$this->EnergiaElectrica',
                        '$this->Alcantarillado',
                        '$this->Gas',
                        '$this->Basuras',
                        '$this->NoHabAntes',
                        '$this->NoHabActual',
                        '$this->NoFamiliaCasa',
                        '$this->RecibiSubsidio',
                        '$this->Usuario'
                        );");

  } 

  public function Edit() {

      $this->db->query("UPDATE desplazados_datos SET 
            ACTUAL_VIVIENDA='$this->ActualVivienda',
            TENENCIA ='$this->Tenencia',
            TIPO_CONTRATO ='$this->TipoContrato',
            ZONA_VIVIENDA ='$this->ZonaVivienda',
            ZONA_ALTORIESGO ='$this->ZonaAltoRiesgo',
            PAREDES ='$this->Paredes',
            PISO ='$this->Piso',
            TECHO ='$this->Techo',
            S_ACUEDUCTO ='$this->Acueducto',
            S_TELEFONO ='$this->Telefono',
            S_ENERGIA_ELECTRICA ='$this->EnergiaElectrica',
            S_ALCANTARILLADO ='$this->Alcantarillado',
            S_GAS ='$this->Gas',
            S_REBASURAS ='$this->Basuras',
            NO_HABIT_ANTES ='$this->NoHabAntes',
            NO_HABIT_ACTUAL ='$this->NoHabActual',
            NO_FAMILI_CASA ='$this->NoFamiliaCasa',
            RECIBI_SUBSIDIO ='$this->RecibiSubsidio',
            LAST_EDIT ='$this->Usuario'
            WHERE DOCUMENTO_DESPLAZADO='$this->Documento';"); 

  }


    public function __destruct (){
        $this->db->close();
    }   

}

 ?>