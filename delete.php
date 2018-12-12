<?php 

  require_once 'templates/header.php';
  if (!Session::exist_session('username')) {
    header('Location:first.php');
  }

  $id = $_GET['id_status'];
  if($uac->deleteData($id)){
      header('Location: profil.php');
  }
?>