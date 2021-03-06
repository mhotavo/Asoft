<?php 

class Reparaciones {

    private $db;
    private $Documento;
    private $EstadoInformado;
    private $MiembroIndemnizado;
    private $EstadoGarantias;
    private $MiembroRestitucion ;
    private $EntidadRestitucion;
    private $EstadoRestituido;
    private $EstadoIndemnizacion;
    private $MiembroIndemnizacion ;
    private $FamiliarRehabilitacion;
    private $MiembroBenificiario;
    private $Usuario;

    public function __construct (){
        $this->db = new Conexion();
        $this->Documento= isset($_GET['id']) ? intval($_GET['id']) : null;
        $this->EstadoInformado= isset($_POST['cboViolaDHD'] ) ? $_POST['cboViolaDHD'] : null;
        $this->MiembroIndemnizado= isset($_POST['cboRepaIndemnizadoD'] ) ? $_POST['cboRepaIndemnizadoD'] : null;
        $this->EstadoGarantias= isset($_POST['cboGarantiasD'] ) ? $_POST['cboGarantiasD'] : null;
        $this->MiembroRestitucion= isset($_POST['cboSoliRestitucionT'] ) ? $_POST['cboSoliRestitucionT'] : null;
        $this->EntidadRestitucion= isset($_POST['txtQueEntidad'] ) ? $_POST['txtQueEntidad'] : null;
        $this->EstadoRestituido= isset($_POST['cboRestitucionBienes'] ) ? $_POST['cboRestitucionBienes'] : null;
        $this->EstadoIndemnizacion= isset($_POST['cboSoliEstadoD'] ) ? $_POST['cboSoliEstadoD'] : null;
        $this->MiembroIndemnizacion= isset($_POST['cboReciEstadoD'] ) ? $_POST['cboReciEstadoD'] : null;
        $this->FamiliarRehabilitacion= isset($_POST['cboRehabilitacionD'] ) ? $_POST['cboRehabilitacionD'] : null;
        $this->MiembroBenificiario= isset($_POST['cboSancionD'] ) ? $_POST['cboSancionD'] : null;
        $this->Usuario= isset($_SESSION['app_id']) ? $_SESSION['app_id']: null;

    }


  public function Add() {

        $this->db->query(" INSERT INTO desplazados_reparacion
                        (DOCUMENTO_DESPLAZADO, ESTADO_INFORMADO, MIEMBROH_INDEMNIZADO, ESTADO_GARANTIAS,
                         MIEMBROH_RESTITUCION, ENTIDAD_RESTITUCION, ESTADO_RESTITUIDO, ESTADO_INDEMNIZACION,
                         MIEMBROH_INDEMNIZACION, FAMILIA_REHABILITACION, MIEMBROH_BENEFICIARIO, USUARIOLOG)
                        VALUES (
                        '$this->Documento',
                        '$this->EstadoInformado',
                        '$this->MiembroIndemnizado',
                        '$this->EstadoGarantias',
                        '$this->MiembroRestitucion',
                        '$this->EntidadRestitucion',
                        '$this->EstadoRestituido', 
                        '$this->EstadoIndemnizacion',
                        '$this->MiembroIndemnizacion', 
                        '$this->FamiliarRehabilitacion',
                        '$this->MiembroBenificiario',
                        '$this->Usuario'
                        );");

  } 

  public function Edit() {
    $this->db->query("UPDATE desplazados_reparacion SET 
            ESTADO_INFORMADO ='$this->EstadoInformado',
            MIEMBROH_INDEMNIZADO ='$this->MiembroIndemnizado',
            ESTADO_GARANTIAS ='$this->EstadoGarantias',
            MIEMBROH_RESTITUCION ='$this->MiembroRestitucion',
            ENTIDAD_RESTITUCION ='$this->EntidadRestitucion',
            ESTADO_RESTITUIDO ='$this->EstadoRestituido',
            ESTADO_INDEMNIZACION ='$this->EstadoIndemnizacion',
            MIEMBROH_INDEMNIZACION ='$this->MiembroIndemnizacion',
            FAMILIA_REHABILITACION ='$this->FamiliarRehabilitacion',
            MIEMBROH_BENEFICIARIO ='$this->MiembroBenificiario',
            LAST_EDIT ='$this->Usuario'
            WHERE DOCUMENTO_DESPLAZADO='$this->Documento';");

  }


    public function __destruct (){
        $this->db->close();
    }   

}

 ?>