<?php 

class Desplazamientos {

    private $db;
    private $Documento;
    private $vecesDesplazado;
    private $Anio1;
    private $Localidad1;
    private $Municipio1;
    private $Anio2 ;
    private $Localidad2;
    private $Municipio2;
    private $Anio3;
    private $Localidad3;
    private $Municipio3;
    private $ConfrontacionArmada;
    private $AmenazaIndireta;
    private $CamposMinados;
    private $AsesinatoFamiliar;
    private $AmenazaDirecta;
    private $ReclutamientoMenores;
    private $AusenciaGobierno;
    private $DesplazamientoMasivo;
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
    private $Defensoria;
    private $Procuraduria;
    private $DepaPros;
    private $Personeria;
    private $UAO;
    private $OTRA;


    public function __construct (){
        $this->db = new Conexion();
        $this->Documento= isset($_GET['id']) ? intval($_GET['id']) : null;
        $this->vecesDesplazado= isset($_POST['cboVictimizadoD']) ? $_POST['cboVictimizadoD'] : null;
        $this->Anio1= isset($_POST['anoDesplazamiento1']) ? $_POST['anoDesplazamiento1'] : null;
        $this->Localidad1= isset($_POST['localidadDesplazamiento1']) ? $_POST['localidadDesplazamiento1'] : null;
        $this->Municipio1= isset($_POST['MunicipioDesplazamiento1']) ? $_POST['MunicipioDesplazamiento1'] : null;
        $this->Anio2= isset($_POST['anoDesplazamiento2']) ? $_POST['anoDesplazamiento2'] : null;
        $this->Localidad2= isset($_POST['localidadDesplazamiento2']) ? $_POST['localidadDesplazamiento2'] : null;
        $this->Municipio2= isset($_POST['MunicipioDesplazamiento2']) ? $_POST['MunicipioDesplazamiento2'] : null;
        $this->Anio3= isset($_POST['anoDesplazamiento3']) ? $_POST['anoDesplazamiento3'] : null;
        $this->Localidad3= isset($_POST['localidadDesplazamiento3']) ? $_POST['localidadDesplazamiento3'] : null;
        $this->Municipio3= isset($_POST['MunicipioDesplazamiento3']) ? $_POST['MunicipioDesplazamiento3'] : null;
        $this->Causas= isset($_POST['CausaDesplazamiento']) ? $_POST['CausaDesplazamiento'] : null;
        $this->ConfrontacionArmada= isset($_POST['cboConfrontacionArmadaD']) ? $_POST['cboConfrontacionArmadaD'] : null;
        $this->AmenazaIndireta= isset($_POST['amenazaIndirectaD']) ? $_POST['amenazaIndirectaD'] : null;
        $this->CamposMinados= isset($_POST['cboCamposMinadosD']) ? $_POST['cboCamposMinadosD'] : null;
        $this->AsesinatoFamiliar= isset($_POST['cboAsesinatoFamiliaD']) ? $_POST['cboAsesinatoFamiliaD'] : null;
        $this->AmenazaDirecta= isset($_POST['cboAmenazaDirectaD'] ) ? $_POST['cboAmenazaDirectaD'] : null;
        $this->ReclutamientoMenores= isset($_POST['cboRecluMenoresD'] ) ? $_POST['cboRecluMenoresD'] : null;
        $this->AusenciaGobierno= isset($_POST['cboAusenGobiernoD'] ) ? $_POST['cboAusenGobiernoD'] : null;
        $this->DesplazamientoMasivo= isset($_POST['cboDesplaMasivoD'] ) ? $_POST['cboDesplaMasivoD'] : null;
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
        $this->Defensoria= isset($_POST['cboDefensoriaD'] ) ? $_POST['cboDefensoriaD'] : null;
        $this->Procuraduria= isset($_POST['cboProcuraduriaD'] ) ? $_POST['cboProcuraduriaD'] : null;
        $this->DepaPros= isset($_POST['cboProspeD'] ) ? $_POST['cboProspeD'] : null;
        $this->Personeria= isset($_POST['cboPersoneriaD'] ) ? $_POST['cboPersoneriaD'] : null;
        $this->UAO= isset($_POST['cboUAOD'] ) ? $_POST['cboUAOD'] : null;
        $this->OTRA= isset($_POST['cboOtraD'] ) ? $_POST['cboOtraD'] : null;
    }


  public function Add() {

        $this->db->query(" INSERT INTO desplazamiento
                        (DOCUMENTO_DESPLAZADO, VECES_DESPLAZADO, ANO1, LOCALIDAD1, MUNICIPIO1, ANO2, 
                         LOCALIDAD2, MUNICIPIO2, ANO3, LOCALIDAD3, MUNICIPIO3, CAUSAS, CONFRONTACION_ARMADA, 
                         AMENAZA_INDIRECTA, CAMPOS_MINADOS_, ASESINATO_FAMILIA, AMENAZA_DIRECTA, 
                         RECLUTAMIENTO_MENORES, AUSENCIA_GOBIERNO, DESPLAZAMIENTO_MASIVO, NO_PERSONAS_H,
                         FAMILIA_SEPARO, S_AYUDA_ESTATAL, NUCLEO_UNIFICAR, R_AYUDA_ESTATL, FAMILIA_VIVOS, 
                         FAMILIAR_DETENIDO, FAMILIAR_V_P, FAMILIAR_ASESINADO, FAMILIAR_RECLUTADO, 
                         FAMILIAR_SECUESTRO, DEMANDA_DESPLAZAMIENTO, FAMILIAR_VIC_M_A, DEFENSORIA, 
                         PROCURADURIA, DEPA_PROS_SOC, PERSONERIA, UAO, OTRA)
                        VALUES (
                        '$this->Documento',
                        '$this->vecesDesplazado',
                        '$this->Anio1',
                        '$this->Localidad1', 
                        '$this->Municipio1',
                        '$this->Anio2',
                        '$this->Localidad2',
                        '$this->Municipio2', 
                        '$this->Anio3',
                        '$this->Localidad3',
                        '$this->Municipio3',
                        '$this->Causas',
                        '$this->ConfrontacionArmada',
                        '$this->AmenazaIndireta',
                        '$this->CamposMinados',
                        '$this->AsesinatoFamiliar',
                        '$this->AmenazaDirecta',
                        '$this->ReclutamientoMenores',
                        '$this->AusenciaGobierno',
                        '$this->DesplazamientoMasivo',
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
                        '$this->Defensoria',
                        '$this->Procuraduria',
                        '$this->DepaPros',
                        '$this->Personeria',
                        '$this->UAO',
                        '$this->OTRA');");
 

  } 

  public function Edit() {
      $this->db->query("UPDATE desplazados_ayudasrecibidas SET 
                      VECES_DESPLAZADO ='$this->vecesDesplazado',
                      ANO1 ='$this->Anio1',
                      LOCALIDAD1 ='$this->Localidad1',
                      MUNICIPIO1 ='$this->Municipio1',
                      ANO2 ='$this->Anio2',
                      LOCALIDAD2 ='$this->Localidad2',
                      MUNICIPIO2 ='$this->Municipio2',
                      ANO3 ='$this->Anio3',
                      LOCALIDAD3 ='$this->Localidad3',
                      MUNICIPIO3 ='$this->Municipio3',
                      CAUSAS ='$this->Causas',
                      CONFRONTACION_ARMADA ='$this->ConfrontacionArmada',
                      AMENAZA_INDIRECTA ='$this->AmenazaIndireta',
                      CAMPOS_MINADOS_ ='$this->CamposMinados',
                      ASESINATO_FAMILIA ='$this->AsesinatoFamiliar',
                      AMENAZA_DIRECTA ='$this->AmenazaDirecta',
                      RECLUTAMIENTO_MENORES ='$this->ReclutamientoMenores',
                      AUSENCIA_GOBIERNO ='$this->AusenciaGobierno',
                      DESPLAZAMIENTO_MASIVO ='$this->DesplazamientoMasivo',
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
                      DEFENSORIA ='$this->Defensoria',
                      PROCURADURIA ='$this->Procuraduria',
                      DEPA_PROS_SOC ='$this->DepaPros',
                      PERSONERIA ='$this->Personeria',
                      UAO ='$this->UAO',
                      OTRA='$this->OTRA';
                    "); 

  }



    public function __destruct (){
        $this->db->close();
    }   

}

 ?>