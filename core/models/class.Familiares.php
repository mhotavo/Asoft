<?php 

class Familiares {

    private $db;
    private $Identificacion;
    private $DocumentoDesplazado;
    private $TipoIdentificacion;
    private $Nombres;
    private $PrimerApellido;
    private $SegundoApellido;
    private $Genero ;
    private $FechaNacimiento;
    private $EnfoqueDiferencial;
    private $EstadoCivil;
    private $Parentesco ;
    private $Separado;
    private $Discapacitado;
    private $Discapacidad ;
    private $CualDiscapacidad; 
    private $VictimaMina ;
    private $AuxilioTransporte;
    private $Medicamentos;
    private $CirugiaPlastica;
    private $CirugiaVascular;
    private $Osteoporosis;
    private $Protesis;
    private $Ortesis;
    private $Terapias;
    private $OtraAyudaMedica;
    private $IndAyudaHumanitaria;
    private $IndLesiones;
    private $IndIncapacidad;
    private $AfiliadoSalud;
    private $Regimen;                   
    private $CualRegimen;         
    private $AtencionMental;         
    private $ApoyoPsicosocial;         
    private $SaludReproductiva;         
    private $Vacunas;                   
    private $CualesVacunas;             
    private $EnfermedadCronica;               
    private $CualEnfermedad;               
    private $EstadoSalud;           
    private $Estudiaba;               
    private $Estudia;                   
    private $AcompaEscolar;       
    private $CostoEducativo;                   
    private $SabeLeer;                   
    private $NivelAlcanzado;               
    private $CompetenciaLaboral;           
    private $CompetenciaCertificada;                   
    private $CapacitarseEn;           
    private $HorarioCapacitacion;                   
    private $ActividadLaboral;         
    private $RamaActividad;       
    private $ContraroLaboral;             
    private $JornadaTrabajo;                   
    private $SeguroRiesgos;             
    private $Usuario;             

	public function __construct (){

		$this->db = new Conexion();
        $this->DocumentoDesplazado= !empty($_GET['id']) ? intval($_GET['id']) : null;
        $this->Identificacion= !empty($_POST['txtIdentificacionD']) ? $_POST['txtIdentificacionD'] : null;
        $this->TipoIdentificacion= !empty($_POST['cboTipoIdentificacionD']) ? $_POST['cboTipoIdentificacionD'] : null;
        $this->Nombres= !empty($_POST['txtNombresD']) ? $_POST['txtNombresD'] : null;
        $this->PrimerApellido= !empty($_POST['txtPrimerApellido']) ? $_POST['txtPrimerApellido'] : null;
        $this->SegundoApellido= !empty($_POST['txtSegundoApellido']) ? $_POST['txtSegundoApellido'] : null;
        $this->Genero= !empty($_POST['cboGeneroD']) ? $_POST['cboGeneroD'] : null;
        $this->FechaNacimiento= !empty($_POST['txtFechaNacimientoD']) ? $_POST['txtFechaNacimientoD'] : null;
        $this->EnfoqueDiferencial= !empty($_POST['cboEnfoqueD']) ? $_POST['cboEnfoqueD'] : null;
        $this->EstadoCivil= !empty($_POST['cboEstadoCivilD']) ? $_POST['cboEstadoCivilD'] : null;
        $this->Parentesco= !empty($_POST['cboParentescoD']) ? $_POST['cboParentescoD'] : null;
        $this->Separado= !empty($_POST['cboSeparadoD']) ? $_POST['cboSeparadoD'] : null;
        $this->Discapacitado= !empty($_POST['cboDiscapacitadoD']) ? $_POST['cboDiscapacitadoD'] : null;
        $this->Discapacidad= !empty($_POST['cboDiscapacidadD']) ? $_POST['cboDiscapacidadD'] : 'Ninguna';
        $this->CualDiscapacidad= !empty($_POST['txtOtraDiscapacidadD']) ? $_POST['txtOtraDiscapacidadD'] : 'Ninguna';
        $this->VictimaMina= !empty($_POST['cboVictimaMinaD']) ? $_POST['cboVictimaMinaD'] : null;
        $this->AuxilioTransporte= !empty($_POST['auxilioTransporteD']) ? $_POST['auxilioTransporteD'] : 'No';
        $this->Medicamentos= !empty($_POST['Medicamentos']) ? $_POST['Medicamentos'] : 'No';
        $this->CirugiaPlastica= !empty($_POST['CirugiaPlastica']) ? $_POST['CirugiaPlastica'] : 'No';
        $this->CirugiaVascular= !empty($_POST['CirugiaVascular']) ? $_POST['CirugiaVascular'] : 'No';
        $this->Osteoporosis= !empty($_POST['Osteosintesis']) ? $_POST['Osteosintesis'] : 'No';
        $this->Protesis= !empty($_POST['Protesis']) ? $_POST['Protesis'] : 'No';
        $this->Ortesis= !empty($_POST['Ortesis']) ? $_POST['Ortesis'] : 'No';
        $this->Terapias= !empty($_POST['Terapias']) ? $_POST['Terapias'] : 'Ninguna';        
        $this->OtraAyudaMedica= !empty($_POST['txtOtraAyudaD']) ? $_POST['txtOtraAyudaD'] : 'No';        
        $this->IndAyudaHumanitaria= !empty($_POST['IndAyudaHumanitaria']) ? $_POST['IndAyudaHumanitaria'] : 'No';
        $this->IndLesiones= !empty($_POST['IndLesiones']) ? $_POST['IndLesiones'] : 'No';
        $this->IndIncapacidad= !empty($_POST['IndIncapacidad']) ? $_POST['IndIncapacidad'] : 'No';
        $this->AfiliadoSalud= !empty($_POST['cboAfiliadoSaludD']) ? $_POST['cboAfiliadoSaludD'] : null;
        $this->Regimen= !empty($_POST['cboRegimenD']) ? $_POST['cboRegimenD'] : 'Ninguno';
        $this->CualRegimen= !empty($_POST['txtCualRegimenD']) ? $_POST['txtCualRegimenD'] : 'Ninguno';
        $this->AtencionMental= !empty($_POST['cboSaludMentalD']) ? $_POST['cboSaludMentalD'] : null;
        $this->ApoyoPsicosocial= !empty($_POST['cboPsicosocialD']) ? $_POST['cboPsicosocialD'] : null;
        $this->SaludReproductiva= !empty($_POST['cboSaludReproductivaD']) ? $_POST['cboSaludReproductivaD'] : null;
        $this->Vacunas= !empty($_POST['cboVacunasD']) ? $_POST['cboVacunasD'] : null;
        $this->CualesVacunas= !empty($_POST['txtCualesVacunasD']) ? $_POST['txtCualesVacunasD'] : 'Ninguna';
        $this->EnfermedadCronica= !empty($_POST['cboEnfCronicaD']) ? $_POST['cboEnfCronicaD'] : null;
        $this->CualEnfermedad= !empty($_POST['txtOtraDiscapacidadD']) ? $_POST['txtOtraDiscapacidadD'] : 'Ninguna';
        $this->EstadoSalud= !empty($_POST['txtCalifEstadoSaludD']) ? $_POST['txtCalifEstadoSaludD'] : null;
        $this->Estudiaba= !empty($_POST['cboEstudiabaAntesD']) ? $_POST['cboEstudiabaAntesD'] : null;
        $this->Estudia= !empty($_POST['cboEstudiaAD']) ? $_POST['cboEstudiaAD'] : null;
        $this->AcompaEscolar= !empty($_POST['cboProEscolarD']) ? $_POST['cboProEscolarD'] : null;
        $this->CostoEducativo= !empty($_POST['cboCostoEduD']) ? $_POST['cboCostoEduD'] : null;
        $this->SabeLeer= !empty($_POST['cboSabeLeerD']) ? $_POST['cboSabeLeerD'] : null;
        $this->NivelAlcanzado= !empty($_POST['cboNivelAlcanzadoD']) ? $_POST['cboNivelAlcanzadoD'] : null;
        $this->CompetenciaLaboral= !empty($_POST['cboCompeLaboralD']) ? $_POST['cboCompeLaboralD'] : null;
        $this->CompetenciaCertificada= !empty($_POST['cboCompeCertificadaD']) ? $_POST['cboCompeCertificadaD'] : null;
        $this->CapacitarseEn= !empty($_POST['cboCapacitacionD']) ? $_POST['cboCapacitacionD'] : null;
        $this->HorarioCapacitacion= !empty($_POST['cboHoraCapacitacionD']) ? $_POST['cboHoraCapacitacionD'] : null;
        $this->ActividadLaboral= !empty($_POST['cboActiLaboralD']) ? $_POST['cboActiLaboralD'] : null;
        $this->RamaActividad= !empty($_POST['cboRamaActualD']) ? $_POST['cboRamaActualD'] : null;
        $this->ContraroLaboral= !empty($_POST['cboContraLaboralD']) ? $_POST['cboContraLaboralD'] : null;
        $this->JornadaTrabajo= !empty($_POST['cboJornadaD']) ? $_POST['cboJornadaD'] : null;
        $this->SeguroRiesgos= !empty($_POST['cboSSocialRProfeD']) ? $_POST['cboSSocialRProfeD'] : null;
        $this->Usuario= !empty($_SESSION['app_id']) ? $_SESSION['app_id'] : null;

	}


  public function Add() {

    $this->db->query(" INSERT INTO desplazados_familiar (
                        IDENTIFICACION_FAMILIAR,
                        DOCUMENTO_DESPLAZADO, 
                        TIPO_IDENTIFICACION, 
                        NOMBRES, 
                        PRIMER_APELLIDO, 
                        SEGUNDO_APELLIDO, 
                        GENERO, 
                        FECHA_NACIMIENTO, 
                        ENFOQUE_DIFERENCIAL, 
                        ESTADO_CIVIL, 
                        PARENTESCO, 
                        ESTUVO_SEPARADO, 
                        DISCAPACITADO, 
                        DISCAPACIDAD, 
                        CUAL_D, 
                        HA_SIDO_VICTIMA_M_A_, 
                        RECIBIO_AUXILIO_T_E_C_A, 
                        AYUDA_MEDICAMENTOS, 
                        CIRUGIA_PLASTICA, 
                        CIRUGIA_VASCULAR, 
                        OSTEOPOROSIS, 
                        PROTESIS, 
                        ORTESIS, 
                        TERAPIAS, 
                        OTRA_A_M, 
                        IND_AYUDA_HUMANITARIA, 
                        IND_LESIONES, 
                        IND_INCAPACIDAD_PERMANENTE, 
                        AFILIADO_SALUD, 
                        REGIMEN, 
                        CUAL_R, 
                        RECIBIO_ATENCION_S_M, 
                        RECIBIO_APOYO_PSICOSOCIAL, 
                        ASISTIO_PROGRAMA_S_R, 
                        VACUNAS, 
                        CUALES_VACUNAS, 
                        DIAGNOSTICADO_E_C, 
                        CUAL_ENFERMEDAD_, 
                        CALIFIQUE_E_S, 
                        ESTUDIABA_ANTES_V, 
                        ESTUDIA_ACTUALMENTE, 
                        PROGRAMA_A_E, 
                        CANCELA_COSTO_E, 
                        SABE_LEER, 
                        NIVEL_ALCANZADO, 
                        COMPETENCIA_LABORAL, 
                        COMPETENCIA_CERTIFICADA, 
                        GUSTARIA__CAPACITARSE_, 
                        HORARIO_CAPACITACION_, 
                        ACTIVIDAD_LABORAL_ACTUAL, 
                        RAMA_ACTIVIDAD_ACTUAL, 
                        CONTRATO_ESCRITO, 
                        TRABAJA_JORNADA, 
                        S_SOCIAL_R_P, 
                        USUARIOLOG) VALUES 
                       ('$this->Identificacion',
                        '$this->DocumentoDesplazado',
                        '$this->TipoIdentificacion',
                        '$this->Nombres',
                        '$this->PrimerApellido', 
                        '$this->SegundoApellido',
                        '$this->Genero',
                        '$this->FechaNacimiento',
                        '$this->EnfoqueDiferencial', 
                        '$this->EstadoCivil',
                        '$this->Parentesco', 
                        '$this->Separado',
                        '$this->Discapacitado',
                        '$this->Discapacidad',
                        '$this->CualDiscapacidad',
                        '$this->VictimaMina',
                        '$this->AuxilioTransporte',
                        '$this->Medicamentos',
                        '$this->CirugiaPlastica',
                        '$this->CirugiaVascular',
                        '$this->Osteoporosis',
                        '$this->Protesis',
                        '$this->Ortesis',
                        '$this->Terapias',
                        '$this->OtraAyudaMedica',
                        '$this->IndAyudaHumanitaria',
                        '$this->IndLesiones',
                        '$this->IndIncapacidad',
                        '$this->AfiliadoSalud',
                        '$this->Regimen',
                        '$this->CualRegimen',
                        '$this->AtencionMental',
                        '$this->ApoyoPsicosocial',
                        '$this->SaludReproductiva',
                        '$this->Vacunas',
                        '$this->CualesVacunas',
                        '$this->EnfermedadCronica',
                        '$this->CualEnfermedad',
                        '$this->EstadoSalud',
                        '$this->Estudiaba',
                        '$this->Estudia',
                        '$this->AcompaEscolar',
                        '$this->CostoEducativo',
                        '$this->SabeLeer',
                        '$this->NivelAlcanzado',
                        '$this->CompetenciaLaboral',
                        '$this->CompetenciaCertificada',
                        '$this->CapacitarseEn',
                        '$this->HorarioCapacitacion',
                        '$this->ActividadLaboral',
                        '$this->RamaActividad',
                        '$this->ContraroLaboral',
                        '$this->JornadaTrabajo',
                        '$this->SeguroRiesgos',
                        '$this->Usuario'

                        ); ");  

  } 

  public function Edit() {

    $this->db->query("UPDATE desplazados_familiar SET 
                TIPO_IDENTIFICACION = '$this->TipoIdentificacion',
                NOMBRES =  '$this->Nombres',
                PRIMER_APELLIDO =  '$this->PrimerApellido',
                SEGUNDO_APELLIDO =  '$this->SegundoApellido',
                GENERO =  '$this->Genero',
                FECHA_NACIMIENTO = '$this->FechaNacimiento',
                ENFOQUE_DIFERENCIAL =  '$this->EnfoqueDiferencial',
                ESTADO_CIVIL =  '$this->EstadoCivil',
                PARENTESCO =  '$this->Parentesco',
                ESTUVO_SEPARADO =  '$this->Separado',
                DISCAPACITADO =  '$this->Discapacitado',
                DISCAPACIDAD =  '$this->Discapacidad',
                CUAL_D =  '$this->CualDiscapacidad',
                HA_SIDO_VICTIMA_M_A_ = '$this->VictimaMina',
                RECIBIO_AUXILIO_T_E_C_A =  '$this->AuxilioTransporte',
                AYUDA_MEDICAMENTOS =  '$this->Medicamentos',
                CIRUGIA_PLASTICA =  '$this->CirugiaPlastica',
                CIRUGIA_VASCULAR =  '$this->CirugiaVascular',
                OSTEOPOROSIS =  '$this->Osteoporosis',
                PROTESIS =  '$this->Protesis',
                ORTESIS =  '$this->Ortesis',
                TERAPIAS =  '$this->Terapias',
                OTRA_A_M =  '$this->OtraAyudaMedica',
                IND_AYUDA_HUMANITARIA =  '$this->IndAyudaHumanitaria',
                IND_LESIONES =  '$this->IndAyudaHumanitaria',
                IND_INCAPACIDAD_PERMANENTE =  '$this->IndAyudaHumanitaria',
                AFILIADO_SALUD =  '$this->AfiliadoSalud',
                REGIMEN =  '$this->Regimen',
                CUAL_R =  '$this->CualRegimen',
                RECIBIO_ATENCION_S_M =  '$this->AtencionMental',
                RECIBIO_APOYO_PSICOSOCIAL =  '$this->ApoyoPsicosocial',
                ASISTIO_PROGRAMA_S_R =  '$this->SaludReproductiva',
                VACUNAS =  '$this->Vacunas',
                CUALES_VACUNAS =  '$this->CualesVacunas',
                DIAGNOSTICADO_E_C =  '$this->EnfermedadCronica',
                CUAL_ENFERMEDAD_ =  '$this->CualEnfermedad',
                CALIFIQUE_E_S =  '$this->EstadoSalud',
                ESTUDIABA_ANTES_V =  '$this->Estudiaba',
                ESTUDIA_ACTUALMENTE =  '$this->Estudia',
                PROGRAMA_A_E = '$this->AcompaEscolar',
                CANCELA_COSTO_E =  '$this->CostoEducativo',
                SABE_LEER =  '$this->SabeLeer',
                NIVEL_ALCANZADO =  '$this->NivelAlcanzado',
                COMPETENCIA_LABORAL =  '$this->CompetenciaLaboral',
                COMPETENCIA_CERTIFICADA =  '$this->CompetenciaCertificada',
                GUSTARIA__CAPACITARSE_ =  '$this->CapacitarseEn',
                HORARIO_CAPACITACION_ =  '$this->HorarioCapacitacion',
                ACTIVIDAD_LABORAL_ACTUAL =  '$this->ActividadLaboral',
                RAMA_ACTIVIDAD_ACTUAL =  '$this->RamaActividad',
                CONTRATO_ESCRITO =  '$this->ContraroLaboral',
                TRABAJA_JORNADA =  '$this->JornadaTrabajo',
                S_SOCIAL_R_P = '$this->SeguroRiesgos',
                LAST_EDIT = '$this->Usuario'
            WHERE IDENTIFICACION_FAMILIAR='$this->Identificacion';");  

  }
  public function Delete() {
    $this->id = intval($_GET['familiar']);
    $this->db->query("DELETE FROM desplazados_familiar WHERE IDENTIFICACION_FAMILIAR='$this->id';");
  }


  public function Buscar() {
    $this->id = $_POST['numDocumento']; 
    $sql= $this->db->query("SELECT * FROM desplazados_familiar f LEFT JOIN desplazados_datos d ON d.DOCUMENTO_DESPLAZADO=f.DOCUMENTO_DESPLAZADO WHERE IDENTIFICACION_FAMILIAR='$this->id';");
    $data=$this->db->recorrer($sql);
    //$infoDesplazado= $data['NOMBRE_COMPLETO'].' '.$data['PRIMER_APELLIDO'].' '.$data['SEGUNDO_APELLIDO'].' con Documento: '.$data['DOCUMENTO_DESPLAZADO'];
    $infoDesplazado= $data['DOCUMENTO_DESPLAZADO'];
    if ($this->db->rows($sql)>0) {
        return $infoDesplazado ;
    } 
  }

	public function __destruct (){
		$this->db->close();
	}	

}

 ?>