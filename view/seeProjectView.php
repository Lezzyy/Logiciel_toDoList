<?php
foreach ($infoProject as $info){
  $allInfoStep=getInfoStep($info['id']);
  ?>
  <form class="" action="../controller/modifiedCtrlCurProject.php" method="post">
  <div class="card text-center">
  <div class="card-header">
  <p>Catégorie</p>
  <h1><?php echo $info['name']; ?></h1>
</div>
<div class="card-body">
  <input type="submit" name="modified" value="Modified project">
  <h1>Project</h1>
  <h2 class="card-title"><?php echo $info['deadline']; ?></h2>
  <p class="card-text"><?php echo $info['detail']; ?></p>
  <?php
foreach ($allInfoStep as $data) {
?>
    <h2>Steps</h2>
    <h3><?php echo $data['title']; ?></h3>
    <p><?php echo $data['DateEnd']; ?></p>
    <?php
    $allInfoTask=getInfoTask($data['id']);
    foreach ($allInfoTask as $task): ?>
    <h2>Tasks</h2>
      <h3><?php echo $task['action']; ?></h3>
      <p><?php echo $task['limit_date']; ?></p>
      <input type="hidden" name="dataStep" value="<?php echo $data['id'];?>">
      <input type="hidden" name="dataTask" value="<?php echo $task['id'];?>">
    </form>
        <form class="" action="../controller/addTaskCtrl.php" method="post">
          <input type="hidden" name="dataStep" value="<?php echo $data['id'];?>">
          <input type="hidden" name="dataTask" value="<?php echo $task['id'];?>">
    <?php endforeach; ?>
    <input type="submit" name="addTask" value="Add task">
    <input type="submit" name="" value="Add step">
  </form>

<?php
}
}
 ?>
 <div class="card-footer text-muted">
   publishing day
 </div>
</div>
