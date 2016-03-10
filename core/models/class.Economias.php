<?php 

class Economias {

    private $db;
    private $Documento;
    private $IngresosMensuales;
    private $GastosMensuales;
    private $Gasto1;
    private $Gasto2;
    private $Gasto3 ;
    private $NoComidasDia;
    private $Adultos;
    private $Ninos;
    private $Menores2Años ;
    private $AlimentacionCultura;
    private $AlimentacionAdecuada;
    private $Fuente1 ;
    private $Fuente2; 
    private $Fuente3 ;
    private $Es_Jefe_de_Hogar;
    private $Territorio;

	public function __construct (){
		$this->db = new Conexion();
        $this->Documento= isset($_GET['id']) ? intval($_GET['id']) : null;
        $this->IngresosMensuales= isset($_POST['']) ? $_POST[''] : null;
        $this->GastosMensuales= isset($_POST['']) ? $_POST[''] : null;
        $this->Gasto1= isset($_POST['']) ? $_POST[''] : null;
        $this->Gasto2= isset($_POST['']) ? $_POST[''] : null;
        $this->Gasto3= isset($_POST['']) ? $_POST[''] : null;
        $this->NoComidasDia= isset($_POST['']) ? $_POST[''] : null;
        $this->Adultos= isset($_POST['']) ? $_POST[''] : null;
        $this->Ninos= isset($_POST['']) ? $_POST[''] : null;
        $this->Menores2Años= isset($_POST['']) ? $_POST[''] : null;
        $this->AlimentacionCultura= isset($_POST['']) ? $_POST[''] : null;
        $this->AlimentacionAdecuada= isset($_POST['']) ? $_POST[''] : null;
        $this->Fuente1= isset($_POST['']) ? $_POST[''] : null;
        $this->Fuente2= isset($_POST['']) ? $_POST[''] : null;
        $this->Fuente3= isset($_POST['']) ? $_POST[''] : null;
        $this->Es_Jefe_de_Hogar= isset($_POST['']) ? $_POST[''] : null;
        $this->Territorio= isset($_POST['']) ? $_POST[''] : null;

	}


  public function Add() {

        $this->db->query(" INSERT INTO desplazados_economiafamiliar
                        (DOCUMENTO_DESPLAZADO, INGRESOS_MENSUALES, GASTOS_MENSUALES, 1_GASTO,
                         2_GASTO, 3_GASTO, NO_COMIDAS_DIA, ADULTOS, NINOS, MENORES_2ANOS,
                         ALIMENTACION_CULTURA, ALIMENTACION_ADECUADA, FUENTE_1, FUENTE_2, FUENTE_3)
                        VALUES (
                        '$this->Documento',
                        '$this->IngresosMensuales',
                        '$this->GastosMensuales',
                        '$this->Gasto1', 
                        '$this->Gasto2',
                        '$this->Gasto3',
                        '$this->NoComidasDia',
                        '$this->Adultos', 
                        '$this->Ninos',
                        '$this->Menores2Años', 
                        '$this->AlimentacionCultura',
                        '$this->AlimentacionAdecuada',
                        '$this->Fuente1',
                        '$this->Fuente2',
                        '$this->Fuente3');
                        ");

  } 

  public function Edit() {
      $this->db->query("UPDATE desplazados_economiafamiliar SET 
            INGRESOS_MENSUALES='$this->IngresosMensuales',
            GASTOS_MENSUALES ='$this->GastosMensuales',
            1_GASTO ='$this->Gasto1',
            2_GASTO ='$this->Gasto2',
            3_GASTO ='$this->Gasto3',
            NO_COMIDAS_DIA ='$this->NoComidasDia',
            ADULTOS ='$this->Adultos',
            NINOS ='$this->Ninos',
            MENORES_2ANOS ='$this->Menores2Años',
            ALIMENTACION_CULTURA ='$this->AlimentacionCultura',
            ALIMENTACION_ADECUADA ='$this->AlimentacionAdecuada',
            FUENTE_1 ='$this->Fuente1',
            FUENTE_2 ='$this->Fuente2',
            FUENTE_3 ='$this->Fuente3' 
            WHERE DOCUMENTO_DESPLAZADO='$this->Documento';"); 

  }


	public function __destruct (){
		$this->db->close();
	}	

}

 ?>