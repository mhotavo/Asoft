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
    private $AyudaMedica;
    private $OtraAyudaMedica;
    private $IndemnizacionMina;
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

	public function __construct (){

		$this->db = new Conexion();
        $this->DocumentoDesplazado= isset($_GET['id']) ? intval($_GET['id']) : null;
        $this->Identificacion= isset($_POST['txtIdentificacionD']) ? $_POST['txtIdentificacionD'] : null;
        $this->TipoIdentificacion= isset($_POST['cboTipoIdentificacionD']) ? $_POST['cboTipoIdentificacionD'] : null;
        $this->Nombres= isset($_POST['txtNombresD']) ? $_POST['txtNombresD'] : null;
        $this->PrimerApellido= isset($_POST['txtPrimerApellido']) ? $_POST['txtPrimerApellido'] : null;
        $this->SegundoApellido= isset($_POST['txtSegundoApellido']) ? $_POST['txtSegundoApellido'] : null;
        $this->Genero= isset($_POST['cboGeneroD']) ? $_POST['cboGeneroD'] : null;
        $this->FechaNacimiento= isset($_POST['txtFechaNacimientoD']) ? $_POST['txtFechaNacimientoD'] : null;
        $this->EnfoqueDiferencial= isset($_POST['cboEnfoqueD']) ? $_POST['cboEnfoqueD'] : null;
        $this->EstadoCivil= isset($_POST['cboEstadoCivilD']) ? $_POST['cboEstadoCivilD'] : null;
        $this->Parentesco= isset($_POST['cboParentescoD']) ? $_POST['cboParentescoD'] : null;
        $this->Separado= isset($_POST['cboSeparadoD']) ? $_POST['cboSeparadoD'] : null;
        $this->Discapacitado= isset($_POST['cboDiscapacitadoD']) ? $_POST['cboDiscapacitadoD'] : null;
        $this->Discapacidad= isset($_POST['cboDiscapacidadD']) ? $_POST['cboDiscapacidadD'] : null;
        $this->CualDiscapacidad= isset($_POST['txtOtraDiscapacidadD']) ? $_POST['txtOtraDiscapacidadD'] : null;
        $this->VictimaMina= isset($_POST['cboVictimaMinaD']) ? $_POST['cboVictimaMinaD'] : null;
        $this->AuxilioTransporte= isset($_POST['auxilioTransporteD']) ? $_POST['auxilioTransporteD'] : null;
        $this->AyudaMedica= isset($_POST['checkboxAyudaMedicaD']) ? $_POST['checkboxAyudaMedicaD'] : null;
        $this->OtraAyudaMedica= isset($_POST['txtOtraAyudaD']) ? $_POST['txtOtraAyudaD'] : null;
        $this->IndemnizacionMina= isset($_POST['checkboxIndemnizacionD']) ? $_POST['checkboxIndemnizacionD'] : null;
        $this->AfiliadoSalud= isset($_POST['cboAfiliadoSaludD']) ? $_POST['cboAfiliadoSaludD'] : null;
        $this->Regimen= isset($_POST['cboRegimenD']) ? $_POST['cboRegimenD'] : null;
        $this->CualRegimen= isset($_POST['txtCualRegimenD']) ? $_POST['txtCualRegimenD'] : null;
        $this->AtencionMental= isset($_POST['cboSaludMentalD']) ? $_POST['cboSaludMentalD'] : null;
        $this->ApoyoPsicosocial= isset($_POST['cboPsicosocialD']) ? $_POST['cboPsicosocialD'] : null;
        $this->SaludReproductiva= isset($_POST['cboSaludReproductivaD']) ? $_POST['cboSaludReproductivaD'] : null;
        $this->Vacunas= isset($_POST['cboVacunasD']) ? $_POST['cboVacunasD'] : null;
        $this->CualesVacunas= isset($_POST['txtCualesVacunasD']) ? $_POST['txtCualesVacunasD'] : null;
        $this->EnfermedadCronica= isset($_POST['txtCualEnfCronicaD']) ? $_POST['txtCualEnfCronicaD'] : null;
        $this->CualEnfermedad= isset($_POST['txtCualEnfermedadD']) ? $_POST['txtCualEnfermedadD'] : null;
        $this->EstadoSalud= isset($_POST['califEstadoSalud']) ? $_POST['califEstadoSalud'] : null;
        $this->Estudiaba= isset($_POST['cboEstudiabaAntesD']) ? $_POST['cboEstudiabaAntesD'] : null;
        $this->Estudia= isset($_POST['cboEstudiaAD']) ? $_POST['cboEstudiaAD'] : null;
        $this->AcompaEscolar= isset($_POST['cboProEscolarD']) ? $_POST['cboProEscolarD'] : null;
        $this->CostoEducativo= isset($_POST['cboCostoEduD']) ? $_POST['cboCostoEduD'] : null;
        $this->SabeLeer= isset($_POST['cboSabeLeerD']) ? $_POST['cboSabeLeerD'] : null;
        $this->NivelAlcanzado= isset($_POST['cboNivelAlcanzadoD']) ? $_POST['cboNivelAlcanzadoD'] : null;
        $this->CompetenciaLaboral= isset($_POST['cboCompeLaboralD']) ? $_POST['cboCompeLaboralD'] : null;
        $this->CompetenciaCertificada= isset($_POST['cboCompeCertificadaD']) ? $_POST['cboCompeCertificadaD'] : null;
        $this->CapacitarseEn= isset($_POST['cboCapacitacionD']) ? $_POST['cboCapacitacionD'] : null;
        $this->HorarioCapacitacion= isset($_POST['cboHoraCapacitacionD']) ? $_POST['cboHoraCapacitacionD'] : null;
        $this->ActividadLaboral= isset($_POST['cboActiLaboralD']) ? $_POST['cboActiLaboralD'] : null;
        $this->RamaActividad= isset($_POST['cboRamaActualD']) ? $_POST['cboRamaActualD'] : null;
        $this->ContraroLaboral= isset($_POST['cboContraLaboralD']) ? $_POST['cboContraLaboralD'] : null;
        $this->JornadaTrabajo= isset($_POST['cboJornadaD']) ? $_POST['cboJornadaD'] : null;
        $this->SeguroRiesgos= isset($_POST['cboSSocialRProfeD']) ? $_POST['cboSSocialRProfeD'] : null;

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
                        SE_OTORGO_AYUDA_M,
                        OTRA_A_M,
                        EN_CUANTO_INDEMNIZACION,
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
                        S_SOCIAL_R_P) VALUES 
                       ('$this->Identificacion',
                        '$this->DocumentoDesplazado',
                        '$this->TipoIdentificacion',
                        '$this->Nombres',
                        '$this->PrimerApellido', 
                        '$this->SegundoApellido',
                        '$this->Genero',
                         STR_TO_DATE( '$this->FechaNacimiento', '%d-%m-%Y' ),
                        '$this->EnfoqueDiferencial', 
                        '$this->EstadoCivil',
                        '$this->Parentesco', 
                        '$this->Separado',
                        '$this->Discapacitado',
                        '$this->Discapacidad',
                        '$this->CualDiscapacidad',
                        '$this->VictimaMina',
                        '$this->AuxilioTransporte',
                        '$this->AyudaMedica',
                        '$this->IndemnizacionMina',
                        '$this->AfiliadoSalud',
                        '$this->Regimen',
                        '$this->CualRegimen',
                        '$this->AtencionMental',
                        '$this->ApoyoPsicosocial',
                        '$this->SaludReproductiva',
                        '$this->AyudaMedica',
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
                        '$this->SeguroRiesgos'); ");
     //header('location: ?view=listarfamiliares&mode=add&id='.$this->Identificacion);
  } 

  public function Edit() {
      $this->db->query("UPDATE desplazados_datos SET 
            TipoIdentificacion_COMPLETO='$this->TipoIdentificacion',
            Nombres ='$this->Nombres',
            PrimerApellido ='$this->PrimerApellido',
            SegundoApellido ='$this->SegundoApellido',
            Genero ='$this->Genero',
            FechaNacimiento ='$this->FechaNacimiento',
            EnfoqueDiferencial ='$this->EnfoqueDiferencial',
            EstadoCivil ='$this->EstadoCivil',
            Parentesco ='$this->Parentesco',
            Separado ='$this->Separado',
            Discapacitado ='$this->Discapacitado',
            Discapacidad ='$this->Discapacidad',
            CualDiscapacidad ='$this->CualDiscapacidad',
            VictimaMina ='$this->VictimaMina',
            AuxilioTransporte ='$this->AuxilioTransporte',
            AyudaMedica ='$this->AyudaMedica'
            WHERE Identificacion='$this->Identificacion';"); 
            //header('location: ?view=datosdesplazado&mode=edit&id='.$this->Identificacion);
            header('location: ?view=listarfamiliares&mode=add&id='.$this->Identificacion);
  }
  public function Delete() {
    $this->id = intval($_GET['id']);
    $this->db->query("DELETE FROM foros WHERE id='$this->id';");
    header('location: ?view=datosdesplazado&success=true');
  }

  public function Buscar() {
    $this->id = intval($_POST['numIdentificacion']); 
    $sql= $this->db->query("SELECT * FROM  desplazados_datos  WHERE Identificacion_DESPLAZADO='$this->id';");
    if ($this->db->rows($sql)>0) {
    	return 1;
    } else {
    	return 0;
    }
    
  }

	public function __destruct (){
		$this->db->close();
	}	

}

 ?>