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
$response=$bdd->query('SELECT * FROM Project');
return $response->fetchAll();
}

?>
