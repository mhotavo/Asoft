<?php 

class Estabilizaciones {

    private $db;
    private $Documento;
    private $Nombre;
    private $Primer_Apellido;
    private $Segundo_Apellido;
    private $Tipo_de_Documento;
    private $Fecha_de_Victimizacion ;
    private $Codigo_RUPV;
    private $Departamento;
    private $Municipio;
    private $Zona ;
    private $Localidad;
    private $Direccion;
    private $Telefono ;
    private $Estado_Civil; 
    private $Parentesco ;
    private $Es_Jefe_de_Hogar;
    private $Territorio;

    public function __construct (){
        $this->db = new Conexion();
        $this->Documento= isset($_GET['id']) ? intval($_GET['id']) : null;
        $this->Nombre= isset($_POST['']) ? $_POST[''] : null;
        $this->Primer_Apellido= isset($_POST['']) ? $_POST[''] : null;
        $this->Segundo_Apellido= isset($_POST['']) ? $_POST[''] : null;
        $this->Tipo_de_Documento= isset($_POST['']) ? $_POST[''] : null;
        $this->Fecha_de_Victimizacion= isset($_POST['']) ? $_POST[''] : null;
        $this->Codigo_RUPV= isset($_POST['']) ? $_POST[''] : null;
        $this->Departamento= isset($_POST['']) ? $_POST[''] : null;
        $this->Municipio= isset($_POST['']) ? $_POST[''] : null;
        $this->Zona= isset($_POST['']) ? $_POST[''] : null;
        $this->Localidad= isset($_POST['']) ? $_POST[''] : null;
        $this->Direccion= isset($_POST['']) ? $_POST[''] : null;
        $this->Telefono=  isset($_POST['']) ? $_POST[''] : null;
        $this->Estado_Civil= isset($_POST['']) ? $_POST[''] : null;
        $this->Parentesco= isset($_POST['']) ? $_POST[''] : null;
        $this->Es_Jefe_de_Hogar= isset($_POST['']) ? $_POST[''] : null;
        $this->Territorio= isset($_POST['']) ? $_POST[''] : null;

    }


  public function Add() {

        $this->db->query(" INSERT INTO desplazados_datos
                        (DOCUMENTO_DESPLAZADO, NOMBRE_COMPLETO, PRIMER_APELLIDO, 
                        SEGUNDO_APELLIDO, TIPO_DE_DOCUMENTO, FECHA_DE_VICTIMIZACION,
                        CODIGO_RUPV, DEPARTAMENTO, MUNICIPIO, ZONA, LOCALIDAD, DIRECCION, 
                        TELEFONO, ESTADO_CIVIL, PARENTESCO, ES_JEFE_DE_HOGAR, TERRITORIO) 
                        VALUES (
                        '$this->Documento',
                        '$this->Nombre',
                        '$this->Primer_Apellido',
                        '$this->Segundo_Apellido', 
                        '$this->Tipo_de_Documento',
                        '$this->Fecha_de_Victimizacion',
                        '$this->Codigo_RUPV',
                        '$this->Departamento', 
                        '$this->Municipio',
                        '$this->Zona', 
                        '$this->Localidad',
                        '$this->Direccion',
                        '$this->Telefono',
                        '$this->Estado_Civil',
                        '$this->Parentesco',
                        '$this->Es_Jefe_de_Hogar',
                        '$this->Territorio');");

  } 

  public function Edit() {
      $this->db->query("UPDATE desplazados_datos SET 
            NOMBRE_COMPLETO='$this->Nombre',
            PRIMER_APELLIDO ='$this->Primer_Apellido',
            SEGUNDO_APELLIDO ='$this->Segundo_Apellido',
            TIPO_DE_DOCUMENTO ='$this->Tipo_de_Documento',
            FECHA_DE_VICTIMIZACION ='$this->Fecha_de_Victimizacion',
            CODIGO_RUPV ='$this->Codigo_RUPV',
            DEPARTAMENTO ='$this->Departamento',
            MUNICIPIO ='$this->Municipio',
            ZONA ='$this->Zona',
            LOCALIDAD ='$this->Localidad',
            DIRECCION ='$this->Direccion',
            TELEFONO ='$this->Telefono',
            ESTADO_CIVIL ='$this->Estado_Civil',
            PARENTESCO ='$this->Parentesco',
            ES_JEFE_DE_HOGAR ='$this->Es_Jefe_de_Hogar',
            TERRITORIO ='$this->Territorio'
            WHERE Documento='$this->Documento';"); 

  }


    public function __destruct (){
        $this->db->close();
    }   

}

 ?>