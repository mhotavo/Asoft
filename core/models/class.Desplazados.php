<?php 

class Desplazados {

	private $db;
	private $id;
	private $nombre;

	public function __construct (){
		$this->db = new Conexion();
	}

  private function Errors($url) {
    try {
      if(empty($_POST['nombre'])) {
        throw new Exception(1);
      } else {
        $this->nombre = $this->db->real_escape_string($_POST['nombre']);
      }
    } catch(Exception $error) {
      header('location: '.$url .$error->getMessage());
      exit;
    }
  }

	public function Add(){
		$this->db->query("");
		$this->Errors('?view=desplazados&mode=add&error=');

	}

	public function Edit(){
		$this->db->query("");
		$this->id = intval($_GET['id']);
		$this->Errors('?view=desplazados&mode=add&id='.$this->id.'&error=');

	}

	public function Delete(){
		$this->db->query("");
		$this->id = intval($_GET['id']);
		$this->Errors('?view=desplazados&mode=add&id='.$this->id.'&error=');
	}

  public function Buscar() {
    $this->id = intval($_POST['numDocumento']);
   // $this->Errors('?view=validar&id='.$this->id.'&error=');
    $sql= $this->db->query("SELECT * FROM  desplazados_datos  WHERE Documento='$this->id';");
    if ($this->db->rows($sql)>0) {
    	header('location: ?view=validardesplazados&success=true');
    } else {
    	header('location: ?view=validardesplazados&success=false');
    }
    
  }

	public function __destruct (){
		$this->db->close();
	}	

}

 ?>