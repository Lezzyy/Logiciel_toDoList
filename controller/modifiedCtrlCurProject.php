<?php
session_start();
include_once('../model/data.php');
include('../view/template/header.php');
$infoProject=showInfoProject($_POST['dataStep']);
$infoStep=getStepId($_POST['dataStep']);
$infoTask=getTaskId($_POST['dataTask']);
include '../view/modifiedViewCurProject.php';
 ?>
