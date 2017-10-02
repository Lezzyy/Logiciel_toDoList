<!-- sign out -->
<?php
if(isset($_SESSION['identify'])){
  ?>
<div class="container" id="session">
<form action="../controller/signInCtrl.php" method="POST">
  <h2 class="text-center"><?php echo 'Bienvenue ' .$_SESSION['identify']; ?></h2>
  <input type="submit" class="btn btn-custom" value="Sign out">
</form>
<hr>
<?php
}
else{
  ?>
  <!-- <div class="container">
    <form class="" action="../controller/signInCtrl.php" method="post">
      <h2 class="text-center">Veuillez-vous connecter</h2>
      <input type="submit" name="" value="sign in">
    </form>
</div> -->
<?php
}
?>
<!-- end sign out -->

<!-- add new project -->
<div class="container" id="new_project">
  <form class="" action="../controller/newProjectCtrl.php" method="post">
    <input type="submit" name="" value="Add new project">
  </form>
</div>

<!-- end add new project -->


<!--current project card-->
<?php
foreach ($variable as $data) {
 ?>
<form class="" action="../controller/seeProjectCtrl.php" method="post">
<div class="card text-center">
  <div class="card-header">
  <p>Catégorie</p>
  <h1><?php echo $data['name']; ?></h1>
  </div>
  <div class="card-body">
    <h2 class="card-title"><?php echo $data['deadline']; ?></h2>
    <p class="card-text"><?php echo $data['detail']; ?></p>
    <input type="hidden" name="dataStep" value="<?php echo $data["id"];?>">
    <input type="hidden" name="dataTask" value="<?php echo $data["id"];?>">
    <input type="submit" name="" value="See more">
  </div>
  <div class="card-footer text-muted">
    publishing day
  </div>
</div>
</form>
<?php
}
 ?>
<!--end  current project card-->


</html>
