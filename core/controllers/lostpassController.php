<?php
if(!isset($_SESSION['app_id']) and isset($_GET['key'])) {
  $db = new Conexion();
  $keypass = $db->real_escape_string($_GET['key']);
  $sql = $db->query("SELECT ID, NEWPASS FROM usuarios WHERE KEYPASS='$keypass' LIMIT 1;");
 
  if($db->rows($sql) > 0) {
    $data = $db->recorrer($sql);
    $id_user = $data[0];
    $new_pass = Encrypt($data[1]);
    $password = $data[1];
    $db->query("UPDATE usuarios SET KEYPASS='',NEWPASS='',PASS='$new_pass' WHERE ID='$id_user';");
    include('html/public/lostpass_mensaje.php');
  } else {
    header('location: ?view=index');
  }
  $db->liberar($sql);
  $db->close();
} else {
      include('html/public/lostpass_mensaje.php');
}
?>