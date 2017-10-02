<?php
session_start();
include_once('../model/data.php');
include('../view/template/header.php');
getInfoProject();
$infoStep=getStepId($_POST['dataStep']);
$infoTask=getTaskId($_POST['dataTask']);
include '../view/seeProjectView.php';
include '../view/template/footer.php';

 ?>
