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

    public function __construct (){
        $this->db = new ConeTelefonoion();
        $this->Documento= isset($_GET['id']) ? intval($_GET['id']) : null;
        $this->ActualVivienda= isset($_POST['']) ? $_POST[''] : null;
        $this->Tenencia= isset($_POST['']) ? $_POST[''] : null;
        $this->TipoContrato= isset($_POST['']) ? $_POST[''] : null;
        $this->ZonaVivienda= isset($_POST['']) ? $_POST[''] : null;
        $this->ZonaAltoRiesgo= isset($_POST['']) ? $_POST[''] : null;
        $this->Paredes= isset($_POST['']) ? $_POST[''] : null;
        $this->Piso= isset($_POST['']) ? $_POST[''] : null;
        $this->Techo= isset($_POST['']) ? $_POST[''] : null;
        $this->Acueducto= isset($_POST['']) ? $_POST[''] : null;
        $this->Telefono= isset($_POST['']) ? $_POST[''] : null;
        $this->EnergiaElectrica= isset($_POST['']) ? $_POST[''] : null;
        $this->Alcantarillado=  isset($_POST['']) ? $_POST[''] : null;
        $this->Gas= isset($_POST['']) ? $_POST[''] : null;
        $this->Basuras= isset($_POST['']) ? $_POST[''] : null;
        $this->NoHabAntes= isset($_POST['']) ? $_POST[''] : null;
        $this->NoHabActual= isset($_POST['']) ? $_POST[''] : null;
        $this->NoFamiliaCasa= isset($_POST['']) ? $_POST[''] : null;
        $this->RecibiSubsidio= isset($_POST['']) ? $_POST[''] : null;

    }


  public function Add() {

        $this->db->query(" INSERT INTO desplazados_vivienda
                        (DOCUMENTO_DESPLAZADO, ACTUAL_VIVIENDA, TENENCIA, TIPO_CONTRATO,
                         ZONA_VIVIENDA, ZONA_ALTORIESGO, PAREDES, PISO, TECHO, S_ACUEDUCTO,
                         S_TELEFONO, S_ENERGIA_ELECTRICA, S_ALCANTARILLADO, S_GAS, S_REBASURAS,
                         NO_HABIT_ANTES, NO_HABIT_ACTUAL, NO_FAMILI_CASA, RECIBI_SUBSIDIO)
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
                        '$this->RecibiSubsidio'
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
            RECIBI_SUBSIDIO ='$this->RecibiSubsidio'
            WHERE DOCUMENTO_DESPLAZADO='$this->Documento';"); 

  }


    public function __destruct (){
        $this->db->close();
    }   

}

 ?>