<?php 

class ProteccionesEspeciales {

    private $db;
    private $Documento;
    private $AyudaCultura;
    private $Ayuda18Cultura;
    private $FuncionarioTrato;
    private $PuebloIndigena;
    private $IndigenasViointra ;
    private $Denunciado;
    private $CualEntidad;
    private $TipoViolencia;
    private $PromuevenDerechos ;


    public function __construct (){
        $this->db = new Conexion();
        $this->Documento= isset($_GET['id']) ? intval($_GET['id']) : null;
        $this->AyudaCultura= isset($_POST['']) ? $_POST[''] : null;
        $this->Ayuda18Cultura= isset($_POST['']) ? $_POST[''] : null;
        $this->FuncionarioTrato= isset($_POST['']) ? $_POST[''] : null;
        $this->PuebloIndigena= isset($_POST['']) ? $_POST[''] : null;
        $this->IndigenasViointra= isset($_POST['']) ? $_POST[''] : null;
        $this->Denunciado= isset($_POST['']) ? $_POST[''] : null;
        $this->CualEntidad= isset($_POST['']) ? $_POST[''] : null;
        $this->TipoViolencia= isset($_POST['']) ? $_POST[''] : null;
        $this->PromuevenDerechos= isset($_POST['']) ? $_POST[''] : null;

    }


  public function Add() {

        $this->db->query(" INSERT INTO desplazados_especialproteccion
                        (DOCUMENTO_DESPLAZADO, AyudaCultura_COMPLETO, Ayuda18Cultura, 
                        FuncionarioTrato, PuebloIndigena, IndigenasViointra,
                        Denunciado, CualEntidad, TipoViolencia, PromuevenDerechos, LOCALIDAD, DIRECCION, 
                        TELEFONO, ESTADO_CIVIL, PARENTESCO, ES_JEFE_DE_HOGAR, TERRITORIO) 
                        VALUES (
                        '$this->Documento',
                        '$this->AyudaCultura',
                        '$this->Ayuda18Cultura',
                        '$this->FuncionarioTrato', 
                        '$this->PuebloIndigena',
                        '$this->IndigenasViointra',
                        '$this->Denunciado',
                        '$this->CualEntidad', 
                        '$this->TipoViolencia',
                        '$this->PromuevenDerechos'
                         );");

  } 

  public function Edit() {
      $this->db->query("UPDATE desplazados_especialproteccion SET 
            AyudaCultura_COMPLETO='$this->AyudaCultura',
            Ayuda18Cultura ='$this->Ayuda18Cultura',
            FuncionarioTrato ='$this->FuncionarioTrato',
            PuebloIndigena ='$this->PuebloIndigena',
            IndigenasViointra ='$this->IndigenasViointra',
            Denunciado ='$this->Denunciado',
            CualEntidad ='$this->CualEntidad',
            TipoViolencia ='$this->TipoViolencia',
            PromuevenDerechos ='$this->PromuevenDerechos'
            WHERE DOCUMENTO_DESPLAZADO='$this->Documento';"); 

  }


    public function __destruct (){
        $this->db->close();
    }   

}

 ?>