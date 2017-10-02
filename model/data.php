<?php

// function register_signIn($identify, $password){
//   include('db.php');
//   $req=$bdd->prepare('INSERT INTO Admin (identify, password) VALUES (:identify, :password)');
//   $req->execute(array(
//     'identify'=>$identify,
//     'password'=>$password
//   ));
// }

function signIn($identify, $password){
  include('db.php');
  $response=$bdd->prepare('SELECT * FROM Admin WHERE identify=:identify and password=:password');
  $response->execute(array(
    'identify'=>$identify,
    'password'=>$password
  ));
  return $response->fetch();
}

function getNewProject($name, $detail, $deadline){
  include('db.php');
$req=$bdd->prepare('INSERT INTO Project (name, detail, deadline) VALUES (:name, :detail, :deadline)');
$req->execute(array(
  'name'=>$name,
  'detail'=>$detail,
  'deadline'=>$deadline
));
}

function showInfoProject(){
include('db.php');
$response=$bdd->query('SELECT * FROM Project ORDER BY deadline LIMIT 0,20');
return $response->fetchAll();
}

function maxIdProject(){
  include('db.php');
  $req=$bdd->query('SELECT MAX(id) as project_id FROM Project');
  $data=$req->fetch();
  return $data;
}

function sendStep($idProject, $infoStep){
  include('db.php');
  $req=$bdd->prepare('INSERT INTO step SET id_project=?, title=?, DateEnd=?');
  $req->execute([$idProject['project_id'], $infoStep['title'], $infoStep['DateEnd']]);
}

function maxIdStep(){
  include('db.php');
  $req=$bdd->query('SELECT MAX(id) as step_id FROM step');
  $data=$req->fetch();
  return $data;
}

function maxIdTask(){
  include('db.php');
  $req=$bdd->query('SELECT MAX(id) as task_id FROM task');
  $data=$req->fetch();
  return $data;
}

function sendTask($idStep, $infoTask){
  include('db.php');
  $req=$bdd->prepare('INSERT INTO task SET id_step=?, action=?, limit_date=?');
  $req->execute([$idStep['step_id'], $infoTask['action'], $infoTask['limit_date']]);
}

function getStepId($getStepId){
include('db.php');
  $reponse = $bdd->prepare('SELECT * FROM Project p INNER JOIN step s ON s.id_project = p.id and s.id = ?');
  $reponse->execute(array($getStepId));
  return $reponse->fetchAll();
}

function getTaskId($getTaskId){
  include('db.php');
    $reponse = $bdd->prepare('SELECT * FROM step s INNER JOIN task t ON t.id_step = s.id and t.id = ?');
    $reponse->execute(array($getTaskId));
    return $reponse->fetchAll();
}


function getInfoProject(){
  include('db.php');
   $reponse = $bdd->query('SELECT * FROM Project p INNER JOIN step s ON s.id_project = p.id INNER JOIN task t ON t.id_step=s.id');
   return $reponse->fetchAll();
}

// function addInput(){
// echo '<input type="text" name="" value="" placeholder="action">
//   <input type="text" name="limit_date" value="" placeholder="limit_date"><br>
//   <input type="submit" name="" value="envoyer">';
// }


?>
