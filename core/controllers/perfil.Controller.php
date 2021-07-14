<?php
if(isset($_GET['id']) and array_key_exists($_GET['id'],$_users)) {
  $id = intval($_GET['id']);
  require('core/models/class.Perfil.php');
  $users = new Perfil();
  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'edit':
      if($_POST) {
        $users->Edit();
      } else {
        include(HTML_DIR . 'perfil/editperfil.php');
      }
    break;
    case 'pass':
      $db = new Conexion();

      if($_POST) {
        $pass = Encrypt($_POST['pass']);
      $sql = $db->query("SELECT id FROM users WHERE pass='$pass' AND id='$id';");
        if($db->rows($sql) > 0){
          $error=0;
          $success=0;
          include(HTML_DIR . 'perfil/editpass.php');

        } else {
          $error = 1;
          $success=0;
          
          include(HTML_DIR . 'perfil/verpass.php');

        }
        $db->liberar($sql);
        $db->close();
      }else{
        $success=0;

        $error=0;
        include(HTML_DIR . 'perfil/verpass.php');
      }


    break;
    case 'newpass':

      if($_POST){
        $pass1 = $_POST['pass'];
        $pass2 = $_POST['pass2'];

        if($pass1 == $pass2){
          $db = new Conexion();

          $pass = Encrypt($_POST['pass']);
          $sql = $db->query("UPDATE users SET pass='$pass' WHERE id='$id';");
          $db->liberar($sql);
          $db->close();
          $error = 0;
          $success = 1;
          include(HTML_DIR . 'perfil/verpass.php');

        } else {
          $success = 0;
          $error = 1;
          include(HTML_DIR . 'perfil/editpass.php');

        }

      }else{

        include(HTML_DIR . 'perfil/editpass.php');
      }


    break;
    default:

      include(HTML_DIR . 'perfil/perfil.php');

    break;
  }
} else {
  header('location: ?view=index');
}
?>
