<?php
foreach ($infoProject as $info){
  $allInfoStep=getInfoStep($info['id']);
?>
<form class="" action="" method="post">
  <h1>New project</h1>
  <input type="text" name="name" value="<?php echo $info['name']; ?>" placeholder="name">
  <input type="text" name="detail" value="<?php echo $info['detail']; ?>" placeholder="detail">
  <input type="date" name="deadline" value="<?php echo $info['deadline']; ?>" placeholder="deadline">
<?php foreach ($infoStep as $data) { ?>
  <h2>Steps</h2>
  <input type="hidden" name="" value="">
  <input type="text" name="title" value="<?php echo $data['title']; ?>" placeholder="title">
  <input type="text" name="DateEnd" value="<?php echo $data['DateEnd']; ?>" placeholder="end">
  <h2>Tasks</h2>
  <?php $allInfoTask=getInfoTask($data['id']);
  foreach ($allInfoTask as $task): ?>
  <input type="text" name="action" value="<?php echo $task['action']; ?>" placeholder="action">
  <input type="text" name="limit_date" value="<?php echo $task['limit_date']; ?>" placeholder="limit_date"><br>
  <?php endforeach; ?>
  <input type="submit" name="" value="envoyer">
</form>
<?php
}
}
 ?>
