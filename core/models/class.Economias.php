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

	public function __construct (){
		$this->db = new Conexion();
        $this->Documento= isset($_GET['id']) ? intval($_GET['id']) : null;
        $this->IngresosMensuales= isset($_POST['cboIngreMensualesD'] ) ? $_POST['cboIngreMensualesD'] : null;
        $this->GastosMensuales= isset($_POST['cboGastosMensualesD'] ) ? $_POST['cboGastosMensualesD'] : null;
        $this->Gasto1= isset($_POST['cboOrdenGastosD'] ) ? $_POST['cboOrdenGastosD'] : null;
        $this->Gasto2= isset($_POST['cboOrdenGastos2D'] ) ? $_POST['cboOrdenGastos2D'] : null;
        $this->Gasto3= isset($_POST['cboOrdenGastos3D'] ) ? $_POST['cboOrdenGastos3D'] : null;
        $this->NoComidasDia= isset($_POST['cboComidasDiaD'] ) ? $_POST['cboComidasDiaD'] : null;
        $this->Adultos= isset($_POST['cboAlimConsumenAdulD'] ) ? $_POST['cboAlimConsumenAdulD'] : null;
        $this->Ninos= isset($_POST['cboAlimConsumenNinosD'] ) ? $_POST['cboAlimConsumenNinosD'] : null;
        $this->Menores2Años= isset($_POST['cboAlimConsumenMe2D'] ) ? $_POST['cboAlimConsumenMe2D'] : null;
        $this->AlimentacionCultura= isset($_POST['cboAlimAcordeD'] ) ? $_POST['cboAlimAcordeD'] : null;
        $this->AlimentacionAdecuada= isset($_POST['cboAlimAdecuadaD'] ) ? $_POST['cboAlimAdecuadaD'] : null;
        $this->Fuente1= isset($_POST['cboFuente1D'] ) ? $_POST['cboFuente1D'] : null;
        $this->Fuente2= isset($_POST['cboFuente2D'] ) ? $_POST['cboFuente2D'] : null;
        $this->Fuente3= isset($_POST['cboFuente3D'] ) ? $_POST['cboFuente3D'] : null;

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