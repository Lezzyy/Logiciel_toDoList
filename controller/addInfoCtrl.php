<?php
include_once('../model/data.php');
include('../view/template/header.php');
addInput();
include('../view/seeProjectView.php');
header('Location: seeProjectCtrl.php');
 ?>
