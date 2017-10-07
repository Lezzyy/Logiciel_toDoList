<?php
session_start();
include_once('../model/data.php');
include('../view/template/header.php');
$infoProject=showInfoProject($_POST['dataStep']);


include '../view/seeProjectView.php';
// getInfoTask();
// $infoStep=getStepId($_POST['dataStep']);
// $infoTask=getTaskId($_POST['dataTask']);
include '../view/template/footer.php';

 ?>
