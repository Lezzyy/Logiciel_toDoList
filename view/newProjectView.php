<?php
if(isset($_SESSION['identify'])){
  ?>
<div class="container" id="session">
<form action="../controller/signInCtrl.php" method="POST">
  <h2 class="text-center"><?php echo 'Ajoutez un nouveau projet ' .$_SESSION['identify']; ?></h2>
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
<form class="" action="" method="post">
  <h1>New project</h1>
  <input type="text" name="name" value="" placeholder="name">
  <input type="text" name="detail" value="" placeholder="detail">
  <input type="date" name="deadline" value="" placeholder="deadline">
  <h2>Steps</h2>
  <input type="hidden" name="" value="">
  <input type="text" name="title" value="" placeholder="title">
  <input type="text" name="DateEnd" value="" placeholder="end">
  <h2>Tasks</h2>
  <input type="text" name="action" value="" placeholder="action">
  <input type="text" name="limit_date" value="" placeholder="limit_date"><br>
    <form class="" action="../controller/addInfoCtrl.php" method="post">
  <input type="submit" name="" value="envoyer">
</form>
