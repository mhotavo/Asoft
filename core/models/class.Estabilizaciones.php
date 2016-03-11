<?php 

class Estabilizaciones {

    private $db;
    private $Documento;
    private $RazonesLugar;
    private $FamiliaRetorno;
    private $EstuvoEstaRetorno;
    private $ResidenciaDesearia;
    private $DondeReubicar ;
    private $ZonaRetorno;
    private $RazonesReubicar;
    private $RazonesRetornar;
    private $RaicesAbandonadas;
    private $AlgunosDespojados ;
    private $SolicitoProteccion; 

	public function __construct (){
		$this->db = new Conexion();
        $this->Documento= isset($_GET['id']) ? intval($_GET['id']) : null;
        $this->RazonesLugar= isset($_POST['Razones'] ) ? $_POST['Razones'] : null;
        $this->FamiliaRetorno= isset($_POST['cboRetorno'] ) ? $_POST['cboRetorno'] : null;
        $this->EstuvoEstaRetorno= isset($_POST['cboEstuEstaRetorno'] ) ? $_POST['cboEstuEstaRetorno'] : null;
        $this->ResidenciaDesearia= isset($_POST['cboDesearia'] ) ? $_POST['cboDesearia'] : null;
        $this->DondeReubicar= isset($_POST['txtDondeRetornar'] ) ? $_POST['txtDondeRetornar'] : null;
        $this->ZonaRetorno= isset($_POST['cboZonaRetorno'] ) ? $_POST['cboZonaRetorno'] : null;
        $this->RazonesReubicar= isset($_POST['RazonesReu'] ) ? $_POST['RazonesReu'] : null;
        $this->RazonesRetornar= isset($_POST['RazonesNoRetor'] ) ? $_POST['RazonesNoRetor'] : null;
        $this->RaicesAbandonadas= isset($_POST['cboBienesAbandonadas'] ) ? $_POST['cboBienesAbandonadas'] : null;
        $this->AlgunosDespojados= isset($_POST['cboDespojados'] ) ? $_POST['cboDespojados'] : null;
        $this->SolicitoProteccion= isset($_POST['cboProteccion'] ) ? $_POST['cboProteccion'] : null;
	}


  public function Add() {

        $this->db->query(" INSERT INTO estabilizacion
                         (DOCUMENTO_DESPLAZADO, RAZONES_LUGAR, FAMILIA_RETORNO, ESTUVOESTA_RETORNO,
                          RESIDENCIA_DESEARIA, DONDEQUIERE_REUBICARSE, ZONA_RETORNO, RAZONES_REUBICARSE,
                          RAZONES_RETORNAR, RAICES_ABANDONADAS, ALGUNOS_DESPOJADOS, SOLICITO_PROTECCION)
                        VALUES (
                        '$this->Documento',
                        '$this->RazonesLugar',
                        '$this->FamiliaRetorno',
                        '$this->EstuvoEstaRetorno', 
                        '$this->ResidenciaDesearia',
                        '$this->DondeReubicar',
                        '$this->ZonaRetorno',
                        '$this->RazonesReubicar', 
                        '$this->RazonesRetornar',
                        '$this->RaicesAbandonadas',
                        '$this->AlgunosDespojados',
                        '$this->SolicitoProteccion'
                         );");

  } 

  public function Edit() {
      $this->db->query("UPDATE estabilizacion SET 
                RAZONES_LUGAR='$this->RazonesLugar',
                FAMILIA_RETORNO ='$this->FamiliaRetorno',
                ESTUVOESTA_RETORNO ='$this->EstuvoEstaRetorno',
                RESIDENCIA_DESEARIA ='$this->ResidenciaDesearia',
                DONDEQUIERE_REUBICARSE ='$this->DondeReubicar',
                ZONA_RETORNO ='$this->ZonaRetorno',
                RAZONES_REUBICARSE ='$this->RazonesReubicar',
                RAZONES_RETORNAR ='$this->RazonesRetornar',
                RAICES_ABANDONADAS ='$this->RaicesAbandonadas',
                ALGUNOS_DESPOJADOS ='$this->AlgunosDespojados',
                SOLICITO_PROTECCION ='$this->SolicitoProteccion'
            WHERE DOCUMENTO_DESPLAZADO='$this->Documento';"); 

  }


	public function __destruct (){
		$this->db->close();
	}	

}

 ?>