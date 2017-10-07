<?php
include_once('../model/data.php');
include('../view/template/header.php');

// showInfoProject();



if (isset($_POST['action']) and isset($_POST['limit_date'])) {
    $action=htmlspecialchars($_POST['action']);
    $limit_date=htmlspecialchars($_POST['limit_date']);
    $data=maxIdProject();
    $idStep=maxIdStep();

    if (!empty($action) and !empty($limit_date)) {
        sendTask($idStep, $_POST);
        getInfoTask($_GET['idStep']);

        // header('Location: seeProjectCtrl.php');
    } else {
        echo "veuillez remplir tous les champs";
    }

}

include('../view/addTaskView.php');
