<?php
include_once('../model/data.php');
include('../view/template/header.php');
include ('../view/newProjectView.php');
$name = $_POST['name'];
$detail = $_POST['detail'];
$deadline = $_POST['deadline'];

getNewProject($name, $detail, $deadline);
var_dump(getNewProject($name, $detail, $deadline));
 ?>
