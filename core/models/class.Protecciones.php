<?php 

class Protecciones {

    private $db;
    private $Documento;
    private $SolicitarProteccion;
    private $OtraEntidad;
    private $AyudaPoblac;
    private $Mujer;
    private $AdultoMayor ;
    private $Jovenes;
    private $Discapacidad;
    private $AfiliadoOPD;
    private $CualOPD;
    private $ParticipaEPP;
    private $CualEPP;
    private $AyudaHumanitaria;
    private $Salud;
    private $GeneracionIngresos;
    private $AtencionVivienda;
    private $EducacionOtra;
    private $Prioridad1;
    private $Prioridad2;
    private $Prioridad3;
    private $Prioridad4;
    private $Prioridad5;


    public function __construct (){
        $this->db = new Conexion();
        $this->Documento= isset($_GET['id']) ? intval($_GET['id']) : null;
        $this->SolicitarProteccion= isset($_POST['']) ? $_POST[''] : null;
        $this->OtraEntidad= isset($_POST['']) ? $_POST[''] : null;
        $this->AyudaPoblac= isset($_POST['']) ? $_POST[''] : null;
        $this->Mujer= isset($_POST['']) ? $_POST[''] : null;
        $this->AdultoMayor= isset($_POST['']) ? $_POST[''] : null;
        $this->Jovenes= isset($_POST['']) ? $_POST[''] : null;
        $this->Discapacidad= isset($_POST['']) ? $_POST[''] : null;
        $this->AfiliadoOPD= isset($_POST['']) ? $_POST[''] : null;
        $this->CualOPD= isset($_POST['']) ? $_POST[''] : null;
        $this->ParticipaEPP= isset($_POST['']) ? $_POST[''] : null;
        $this->CualEPP= isset($_POST['']) ? $_POST[''] : null;
        $this->AyudaHumanitaria= isset($_POST['']) ? $_POST[''] : null;
        $this->Salud= isset($_POST['']) ? $_POST[''] : null;
        $this->GeneracionIngresos= isset($_POST['']) ? $_POST[''] : null;
        $this->AtencionVivienda= isset($_POST['']) ? $_POST[''] : null;
        $this->EducacionOtra= isset($_POST['']) ? $_POST[''] : null;
        $this->Prioridad1= isset($_POST['']) ? $_POST[''] : null;
        $this->Prioridad2= isset($_POST['']) ? $_POST[''] : null;
        $this->Prioridad3= isset($_POST['']) ? $_POST[''] : null;
        $this->Prioridad4= isset($_POST['']) ? $_POST[''] : null;
        $this->Prioridad5= isset($_POST['']) ? $_POST[''] : null;

    }


  public function Add() {

        $this->db->query(" INSERT INTO desplazados_proteccion
                        (DOCUMENTO_DESPLAZADO, SOLICITAR_PROTECCION, OTRA_ENTIDAD, AYUDAPOBLAC_DESPLAZA, 
                         MUJER, ADULTO_MAYOR, JOVENES, DISCAPACIDAD, AFILIADO_OPD, CUAL_OPD, PARTICIPA_E_P_P, 
                         CUAL_E_P_P, AYUDA_HUMANITARIA, SALUD, GENERACION_INGRESOS, ATENCION_VIVIENDA, 
                         EDUCACION_OTRA, PRIORIDAD_1, PRIORIDAD_2, PRIORIDAD_3, PRIORIDAD_4, PRIORIDAD_5)
                        VALUES (
                        '$this->Documento',
                        '$this->SolicitarProteccion',
                        '$this->OtraEntidad',
                        '$this->AyudaPoblac', 
                        '$this->Mujer',
                        '$this->AdultoMayor',
                        '$this->Jovenes',
                        '$this->Discapacidad', 
                        '$this->AfiliadoOPD',
                        '$this->CualOPD',
                        '$this->ParticipaEPP',
                        '$this->CualEPP',
                        '$this->AyudaHumanitaria',
                        '$this->Salud',
                        '$this->GeneracionIngresos',
                        '$this->AtencionVivienda',
                        '$this->EducacionOtra',
                        '$this->Prioridad1',
                        '$this->Prioridad2',
                        '$this->Prioridad3',
                        '$this->Prioridad4',
                        '$this->Prioridad5'
                        );");
 

  } 

  public function Edit() {
      $this->db->query("UPDATE desplazados_proteccion SET 
                      SOLICITAR_PROTECCION ='$this->SolicitarProteccion',
                      OTRA_ENTIDAD ='$this->OtraEntidad',
                      AYUDAPOBLAC_DESPLAZA ='$this->AyudaPoblac',
                      MUJER ='$this->Mujer',
                      ADULTO_MAYOR ='$this->AdultoMayor',
                      JOVENES ='$this->Jovenes',
                      DISCAPACIDAD ='$this->Discapacidad',
                      AFILIADO_OPD ='$this->AfiliadoOPD',
                      CUAL_OPD ='$this->CualOPD',
                      PARTICIPA_E_P_P ='$this->ParticipaEPP',
                      CONFRONTACION_ARMADA ='$this->CualEPP',
                      AYUDA_HUMANITARIA ='$this->AyudaHumanitaria',
                      SALUD ='$this->Salud',
                      GENERACION_INGRESOS ='$this->GeneracionIngresos',
                      ATENCION_VIVIENDA ='$this->AtencionVivienda',
                      EDUCACION_OTRA ='$this->EducacionOtra',
                      PRIORIDAD_1 ='$this->Prioridad1',
                      PRIORIDAD_2 ='$this->Prioridad2',
                      PRIORIDAD_3 ='$this->Prioridad3',
                      PRIORIDAD_4 ='$this->Prioridad4',
                      PRIORIDAD_5 ='$this->Prioridad5'
                      WHERE DOCUMENTO_DESPLAZADO='$this->Documento';
                    "); 

  }



    public function __destruct (){
        $this->db->close();
    }   

}

 ?>