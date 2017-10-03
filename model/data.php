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

function showInfoProject($idproject = NULL){
include('db.php');
if ($idproject != NULL){
  $idproject = ' WHERE id='.$idproject;
}
$response=$bdd->query('SELECT * FROM Project'.$idproject);
return $response->fetchAll();
}

function getInfoStep($idproject){
  include('db.php');
  $reponse = $bdd->query('SELECT * FROM Project p INNER JOIN step s ON s.id_project = p.id WHERE s.id_project ='.$idproject);
  return $reponse->fetchAll();
}

function getInfoTask($idstep){
  include('db.php');
  $reponse = $bdd->query('SELECT * FROM step s INNER JOIN task t ON t.id_step=s.id WHERE t.id_step='.$idstep);
  return $reponse->fetchAll();
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

function showLastTask($idTask, $newInfoTask){
  include('db.php');
  $response=$bdd->prepare('SELECT * FROM task WHERE id=:id and action=:action and limit_date=:limit_date');
  $response->execute(array(
    'id'=>$idTask['task_id'],
    'action'=>$newInfoTask['action'],
    'limitDate'=>$newInfoTask['limit_date']
  ));
  return $response->fetch();
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



// function addInput(){
// echo '<input type="text" name="" value="" placeholder="action">
//   <input type="text" name="limit_date" value="" placeholder="limit_date"><br>
//   <input type="submit" name="" value="envoyer">';
// }


?>
