<?php
session_start();
include_once('../model/data.php');
include('../view/template/header.php');
include ('../view/newProjectView.php');

if(isset($_POST['name']) AND isset($_POST['detail']) AND isset($_POST['deadline']) AND isset($_POST['title']) AND isset($_POST['DateEnd']) AND isset($_POST['action']) AND isset($_POST['limit_date'])){

$name =htmlspecialchars($_POST['name']);
$detail =htmlspecialchars($_POST['detail']);
$deadline =htmlspecialchars($_POST['deadline']);
$title=htmlspecialchars($_POST['title']);
$DateEnd=htmlspecialchars($_POST['DateEnd']);
$action=htmlspecialchars($_POST['action']);
$limit_date=htmlspecialchars($_POST['limit_date']);
$data=maxIdProject();
$idStep=maxIdStep();
if (!empty($name) and !empty($detail) and !empty($deadline) and !empty($title) and !empty($DateEnd) and !empty($action) and !empty($limit_date)){
getNewProject($name, $detail, $deadline);
sendStep($data, $_POST);
sendTask($idStep, $_POST);
} else{
  echo "veuillez remplir tous les champs";
}
}
