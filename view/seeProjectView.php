<?php
foreach ($infoStep as $data) {
?>
<form class="" action="../controller/modifiedCtrlCurProject.php" method="post">
<div class="card text-center">
  <div class="card-header">
  <p>Catégorie</p>
  <h1><?php echo $data['name']; ?></h1>
  </div>
  <div class="card-body">
    <input type="submit" name="modified" value="Modified project">
    <h1>Project</h1>
    <h2 class="card-title"><?php echo $data['deadline']; ?></h2>
    <p class="card-text"><?php echo $data['detail']; ?></p>
    <h2>Steps</h2>
    <h3><?php echo $data['title']; ?></h3>
    <p><?php echo $data['DateEnd']; ?></p>
    <?php foreach ($infoTask as $data): ?>
    <h2>Tasks</h2>
      <h3><?php echo $data['action']; ?></h3>
      <p><?php echo $data['limit_date']; ?></p>
      <input type="hidden" name="dataStep" value="<?php echo $infoStep;?>">
      <input type="hidden" name="dataTask" value="<?php echo $infoTask;?>">
    </form>
        <form class="" action="../controller/addTaskCtrl.php" method="post">
          <input type="hidden" name="dataStep" value="<?php echo $infoStep;?>">
          <input type="hidden" name="dataTask" value="<?php echo $infoTask;?>">
          <input type="submit" name="addTask" value="Add task">
          <h3><?php echo $data['action']; ?></h3>
          <p><?php echo $data['limit_date']; ?></p>
        </form>
    <?php endforeach; ?>
  <div class="card-footer text-muted">
    publishing day
  </div>
</div>

<?php
}
 ?>
