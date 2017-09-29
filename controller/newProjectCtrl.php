<?php
session_start();
include_once('../model/data.php');
include('../view/template/header.php');
include ('../view/newProjectView.php');

if(isset($_POST['name']) AND isset($_POST['detail']) AND isset($_POST['deadline'])){

$name = $_POST['name'];
$detail = $_POST['detail'];
$deadline = $_POST['deadline'];
if (!empty($name) and !empty($detail) and !empty($deadline)){
getNewProject($name, $detail, $deadline);
} else{
  echo "veuillez remplir tous les champs";
}
}
