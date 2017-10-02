<?php
session_start();
include_once('../model/data.php');
include('../view/template/header.php');
$variable = getInfoProject();
include('../view/indexView.php');
 ?>
