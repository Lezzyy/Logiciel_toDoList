<?php
session_start();
include_once('../model/data.php');
// include('../view/template/header.php');
include('../view/signInView.php');

// register_signIn($identify, $password);
// echo 'bonjour';

if (isset($_POST['identify']) and isset($_POST['password'])){

$identify=strtolower($_POST['identify']);
$pass = $_POST['password'];
$password=sha1($pass);

    if (!empty($identify) and !empty($password)) {
      $connect=signIn($identify, $password);
    if ($identify == $connect['identify'] and $password == $connect['password']) {
      var_dump($identify);
        // echo'bonjour';
        $_SESSION['identify']=$identify;
        header('Location: indexCtrl.php');
    } else {
      $_SESSION['erreur']["connexion"]="erreur";
      header('Location: signInCtrl.php');
      echo"veuillez vous connecter";
    }
  }
}
