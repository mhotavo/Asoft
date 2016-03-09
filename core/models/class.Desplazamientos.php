<?php 

class Ayudas {

    private $db;
    private $Documento;
    private $AtencionMenor;
    private $CiudadoInfantil;
    private $ProAlimentacion;
    private $HaceFalta;
    private $Seguridad ;
    private $CompleAlimenticio;
    private $Desayunos;
    private $AyudaMunicipio;

    public function __construct (){
        $this->db = new Conexion();
        $this->Documento= isset($_GET['id']) ? intval($_GET['id']) : null;
        $this->AtencionMenor= isset($_POST['']) ? $_POST[''] : null;
        $this->CiudadoInfantil= isset($_POST['']) ? $_POST[''] : null;
        $this->ProAlimentacion= isset($_POST['']) ? $_POST[''] : null;
        $this->HaceFalta= isset($_POST['']) ? $_POST[''] : null;
        $this->Seguridad= isset($_POST['']) ? $_POST[''] : null;
        $this->CompleAlimenticio= isset($_POST['']) ? $_POST[''] : null;
        $this->Desayunos= isset($_POST['']) ? $_POST[''] : null;
        $this->AyudaMunicipio= isset($_POST['']) ? $_POST[''] : null;

    }


  public function Add() {

        $this->db->query(" INSERT INTO desplazados_ayudasrecibidas
                        (DOCUMENTO_DESPLAZADO, ATENCION_MENOR, CUIDADO_INFANTIL, PRO_ALIMENTACION, 
                         HAMBRE_FALTAA, SEGURIDAD_AI, COMPLE_ALIMENTICIO, BENEFI_DESAYUNO, AYUDA_MUNICIPIO) 
                        VALUES (
                        '$this->Documento',
                        '$this->AtencionMenor',
                        '$this->CiudadoInfantil',
                        '$this->ProAlimentacion', 
                        '$this->HaceFalta',
                        '$this->Seguridad',
                        '$this->CompleAlimenticio',
                        '$this->Desayunos', 
                        '$this->AyudaMunicipio');");
 

  } 

  public function Edit() {
      $this->db->query("UPDATE desplazados_ayudasrecibidas SET 
            ATENCION_MENOR='$this->AtencionMenor',
            CUIDADO_INFANTIL ='$this->CiudadoInfantil',
            PRO_ALIMENTACION ='$this->ProAlimentacion',
            HAMBRE_FALTAA ='$this->HaceFalta',
            SEGURIDAD_AI ='$this->Seguridad',
            COMPLE_ALIMENTICIO ='$this->CompleAlimenticio',
            BENEFI_DESAYUNO ='$this->Desayunos',
            AYUDA_MUNICIPIO ='$this->AyudaMunicipio';"); 

  }



    public function __destruct (){
        $this->db->close();
    }   

}

 ?>