<?php 

if(!empty($_POST['user']) and !empty($_POST['pass'])) {
  $db = new Conexion();
   $data = $db->real_escape_string($_POST['user']);
   $pass = Encrypt($_POST['pass']);
   $sql = $db-> query("SELECT ID FROM usuarios WHERE (USER='$data' OR EMAIL='$data') AND PASS='$pass' LIMIT 1;");
  if($db->rows($sql) > 0) {
    if($_POST['sesion']) { ini_set('session.cookie_lifetime', time() + (60)); }
    $_SESSION['app_id'] = $db->recorrer($sql)[0];
    $_SESSION['time_online'] = time() - (60);
    echo 1;
  } else {
    echo '
  <div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>ERROR:</strong> Las usuario o clave incorrectos.
  </div>';
  }
  $db->liberar($sql);
  $db->close();
} else {
  echo '
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>ERROR:</strong> Todos los datos deben estar llenos.
</div>';
}

 ?>