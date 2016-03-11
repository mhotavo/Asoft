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


    }


  public function Add() {

        $this->db->query(" INSERT INTO desplazados_reparacion
                        (DOCUMENTO_DESPLAZADO, ESTADO_INFORMADO, MIEMBROH_INDEMNIZADO, ESTADO_GARANTIAS, 
                        MIEMBROH_RESTITUCION, ENTIDAD_RESTITUCION, ESTADO_RESTITUIDO, ESTADO_INDEMNIZACION, 
                        EMBROH_INDEMNIZACION, FAMILIA_REHABILITACION, MIEMBROH_BENEFICIARIO)
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
                        '$this->MiembroBenificiario'
                        );");

  } 

  public function Edit() {
      $this->db->query("UPDATE desplazados_reparacion SET 
            DOCUMENTO_DESPLAZADO='$this->EstadoInformado',
            ESTADO_INFORMADO ='$this->MiembroIndemnizado',
            MIEMBROH_INDEMNIZADO ='$this->Segundo_Apellido',
            ESTADO_GARANTIAS ='$this->EstadoGarantias',
            MIEMBROH_RESTITUCION ='$this->MiembroRestitucion',
            ENTIDAD_RESTITUCION ='$this->EntidadRestitucion',
            ESTADO_RESTITUIDO ='$this->EstadoRestituido',
            ESTADO_INDEMNIZACION ='$this->EstadoIndemnizacion',
            EMBROH_INDEMNIZACION ='$this->MiembroIndemnizacion',
            FAMILIA_REHABILITACION ='$this->FamiliarRehabilitacion',
            MIEMBROH_BENEFICIARIO ='$this->MiembroBenificiario'
            WHERE DOCUMENTO_DESPLAZADO='$this->Documento';"); 

  }


    public function __destruct (){
        $this->db->close();
    }   

}

 ?>