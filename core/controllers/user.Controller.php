<?php
if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 2 or $_users[$_SESSION['app_id']]['area'] == 5) {
  $isset_id = isset($_GET['id']) and is_numeric($_GET['id']) and $_GET['id'] >= 1;
  require('core/models/class.User.php');
 $users = new Users();
  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'add':
      if($_POST) {
        $users->Add();
      } else {
        include(HTML_DIR . 'users/add_user.php');
      }
    break;
    case 'edit':
      if($isset_id and array_key_exists($_GET['id'],$_users)) {
        if($_POST) {
          $users->Edit();
        } else {
          include(HTML_DIR . 'users/edit_user.php');
        }
      } else {
        header('location: ?view=user');
      }
    break;
    case 'editPass':
      if($isset_id and array_key_exists($_GET['id'],$_users)) {
        if($_POST) {
          $users->EditPass();
        } else {
          include(HTML_DIR . 'users/edit_user.php');
        }
      } else {
        header('location: ?view=user');
      }
    break;
    case 'delete':
      if($isset_id) {
        $users->Delete();
      } else {
        header('location: ?view=user');
      }
    break;
    default:
      include(HTML_DIR . 'users/all_user.php');
    break;
  }
} else {
  header('location: ?view=index');
}
?>
