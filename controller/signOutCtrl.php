<?php
session_start();
session_unset();
session_destroy();
include'indexCtrl.php';
include '../view/template/header.php';
 ?>
