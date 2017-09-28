<?php

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
$response=$bdd->query('SELECT name, detail, DATE_FORMAT(deadline, '%d/%m/%Y') FROM Project');
return $response->fetchAll();
}

?>
