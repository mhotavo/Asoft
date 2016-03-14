<?php 

class Desplazamientos {

    private $db;
    private $Documento;
    private $vecesDesplazado;
    private $Anio1;
    private $Localidad1;
    private $Municipio1;
    private $Causa1;
    private $Anio2 ;
    private $Localidad2;
    private $Municipio2;
    private $Causa2;
    private $Anio3;
    private $Localidad3;
    private $Causa3;
    private $Municipio3;
    private $NoPersonasH;
    private $FamiliaSeparo;
    private $sAyudaEstatal;
    private $rsAyudaEstatal;
    private $NrucleoUnificar;
    private $FamiliaresVivos;
    private $FamiliarDetenido;
    private $FamiliarVP;
    private $FamiliarAsesinado;
    private $FamiliarReclutado;
    private $FamiliarSecuestro;
    private $DemandaDesplazamiento;
    private $FamiliarVictima;
    private $DeclaroAnte;
    private $Usuario;



    public function __construct (){
        $this->db = new Conexion();
        $this->Documento= isset($_GET['id']) ? intval($_GET['id']) : null;
        $this->vecesDesplazado= isset($_POST['cboVictimizadoD']) ? $_POST['cboVictimizadoD'] : null;
        $this->Anio1= isset($_POST['anoDesplazamiento1']) ? $_POST['anoDesplazamiento1'] : null;
        $this->Localidad1= isset($_POST['localidadDesplazamiento1']) ? $_POST['localidadDesplazamiento1'] : null;
        $this->Municipio1= isset($_POST['MunicipioDesplazamiento1']) ? $_POST['MunicipioDesplazamiento1'] : null;
        $this->Causa1= isset($_POST['CausaDesplazamiento1']) ? $_POST['CausaDesplazamiento1'] : null;
        $this->Anio2= isset($_POST['anoDesplazamiento2']) ? $_POST['anoDesplazamiento2'] : null;
        $this->Localidad2= isset($_POST['localidadDesplazamiento2']) ? $_POST['localidadDesplazamiento2'] : null;
        $this->Municipio2= isset($_POST['MunicipioDesplazamiento2']) ? $_POST['MunicipioDesplazamiento2'] : null;
        $this->Causa2= isset($_POST['CausaDesplazamiento2']) ? $_POST['CausaDesplazamiento2'] : null;
        $this->Anio3= isset($_POST['anoDesplazamiento3']) ? $_POST['anoDesplazamiento3'] : null;
        $this->Localidad3= isset($_POST['localidadDesplazamiento3']) ? $_POST['localidadDesplazamiento3'] : null;
        $this->Municipio3= isset($_POST['MunicipioDesplazamiento3']) ? $_POST['MunicipioDesplazamiento3'] : null;
        $this->Causa3= isset($_POST['CausaDesplazamiento3']) ? $_POST['CausaDesplazamiento3'] : null;
        $this->NoPersonasH= isset($_POST['txtNPersonasD'] ) ? $_POST['txtNPersonasD'] : null;
        $this->FamiliaSeparo= isset($_POST['cboFamiliaSeparoD'] ) ? $_POST['cboFamiliaSeparoD'] : null;
        $this->sAyudaEstatal= isset($_POST['cboReunificacionD'] ) ? $_POST['cboReunificacionD'] : null;
        $this->NucleoUnificar= isset($_POST['cboUnificarD'] ) ? $_POST['cboUnificarD'] : null;
        $this->rAyudaEstatal= isset($_POST['cboUnificarEstatalD'] ) ? $_POST['cboUnificarEstatalD'] : null;
        $this->FamiliaresVivos= isset($_POST['cboFamiliaVivoD'] ) ? $_POST['cboFamiliaVivoD'] : null;
        $this->FamiliarDetenido= isset($_POST['cboFamiliarDeteD'] ) ? $_POST['cboFamiliarDeteD'] : null;
        $this->FamiliarVP= isset($_POST['cboFamiliarVPD'] ) ? $_POST['cboFamiliarVPD'] : null;
        $this->FamiliarAsesinado= isset($_POST['cboFamiliarAseD'] ) ? $_POST['cboFamiliarAseD'] : null;
        $this->FamiliarReclutado= isset($_POST['cboFamiliarRecluD'] ) ? $_POST['cboFamiliarRecluD'] : null;
        $this->FamiliarSecuestro= isset($_POST['cboFamiliarSecuesD'] ) ? $_POST['cboFamiliarSecuesD'] : null;
        $this->DemandaDesplazamiento= isset($_POST['cboDemandaVictiD'] ) ? $_POST['cboDemandaVictiD'] : null;
        $this->FamiliarVictima= isset($_POST['cboFamiliarMinaD'] ) ? $_POST['cboFamiliarMinaD'] : null;
        $this->DeclaroAnte= isset($_POST['DeclaroAnte'] ) ? $_POST['DeclaroAnte'] : null;
        $this->Usuario= isset($_SESSION['app_id']) ? $_SESSION['app_id']: null;
    }


  public function Add() {
        $this->db->query(" INSERT INTO desplazamiento
                        (DOCUMENTO_DESPLAZADO, VECES_DESPLAZADO, ANO1, LOCALIDAD1, MUNICIPIO1, CAUSA1, ANO2, 
                         LOCALIDAD2, MUNICIPIO2, CAUSA2, ANO3, LOCALIDAD3, MUNICIPIO3, CAUSA3, NO_PERSONAS_H,
                         FAMILIA_SEPARO, S_AYUDA_ESTATAL, NUCLEO_UNIFICAR, R_AYUDA_ESTATL, FAMILIA_VIVOS, 
                         FAMILIAR_DETENIDO, FAMILIAR_V_P, FAMILIAR_ASESINADO, FAMILIAR_RECLUTADO, 
                         FAMILIAR_SECUESTRO, DEMANDA_DESPLAZAMIENTO, FAMILIAR_VIC_M_A, DECLARO_ANTE, USUARIOLOG)
                        VALUES (
                        '$this->Documento',
                        '$this->vecesDesplazado',
                        '$this->Anio1',
                        '$this->Localidad1', 
                        '$this->Municipio1',
                        '$this->Causa1',
                        '$this->Anio2',
                        '$this->Localidad2',
                        '$this->Municipio2', 
                        '$this->Causa2',
                        '$this->Anio3',
                        '$this->Localidad3',
                        '$this->Municipio3',
                        '$this->Causa3',
                        '$this->NoPersonasH',
                        '$this->FamiliaSeparo',
                        '$this->sAyudaEstatal',
                        '$this->NucleoUnificar',
                        '$this->rAyudaEstatal',                        
                        '$this->FamiliaresVivos',
                        '$this->FamiliarDetenido',
                        '$this->FamiliarVP',
                        '$this->FamiliarAsesinado',
                        '$this->FamiliarReclutado',
                        '$this->FamiliarSecuestro',
                        '$this->DemandaDesplazamiento',
                        '$this->FamiliarVictima',
                        '$this->DeclaroAnte',
                        '$this->Usuario'
                        );");  

  } 

  public function Edit() {
      $this->db->query("UPDATE desplazamiento SET 
                      VECES_DESPLAZADO ='$this->vecesDesplazado',
                      ANO1 ='$this->Anio1',
                      LOCALIDAD1 ='$this->Localidad1',
                      MUNICIPIO1 ='$this->Municipio1',
                      CAUSA1 ='$this->Causa1',
                      ANO2 ='$this->Anio2',
                      LOCALIDAD2 ='$this->Localidad2',
                      MUNICIPIO2 ='$this->Municipio2',
                      CAUSA2 ='$this->Causa2',
                      ANO3 ='$this->Anio3',
                      LOCALIDAD3 ='$this->Localidad3',
                      MUNICIPIO3 ='$this->Municipio3',
                      CAUSA3 ='$this->Causa3',
                      NO_PERSONAS_H ='$this->NoPersonasH',
                      FAMILIA_SEPARO ='$this->FamiliaSeparo',
                      S_AYUDA_ESTATAL ='$this->sAyudaEstatal',
                      R_AYUDA_ESTATL ='$this->rAyudaEstatal',
                      NUCLEO_UNIFICAR ='$this->NucleoUnificar',
                      FAMILIA_VIVOS ='$this->FamiliaresVivos',
                      FAMILIAR_DETENIDO ='$this->FamiliarDetenido',
                      FAMILIAR_V_P ='$this->FamiliarVP',
                      FAMILIAR_ASESINADO ='$this->FamiliarAsesinado',
                      FAMILIAR_RECLUTADO ='$this->FamiliarReclutado',
                      FAMILIAR_SECUESTRO ='$this->FamiliarSecuestro',
                      DEMANDA_DESPLAZAMIENTO ='$this->DemandaDesplazamiento',
                      FAMILIAR_VIC_M_A ='$this->FamiliarVictima',
                      DECLARO_ANTE ='$this->DeclaroAnte',
                      LAST_EDIT ='$this->Usuario'
                      ;  "); 

  }



    public function __destruct (){
        $this->db->close();
    }   

}

 ?>