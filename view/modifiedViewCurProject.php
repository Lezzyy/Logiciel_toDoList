<?php
foreach ($infoStep as $data) {
?>
<form class="" action="" method="post">
  <h1>New project</h1>
  <input type="text" name="name" value="<?php echo $data['name']; ?>" placeholder="name">
  <input type="text" name="detail" value="<?php echo $data['detail']; ?>" placeholder="detail">
  <input type="date" name="deadline" value="<?php echo $data['deadline']; ?>" placeholder="deadline">
  <h2>Steps</h2>
  <input type="hidden" name="" value="">
  <input type="text" name="title" value="<?php echo $data['title']; ?>" placeholder="title">
  <input type="text" name="DateEnd" value="<?php echo $data['DateEnd']; ?>" placeholder="end">
  <h2>Tasks</h2>
  <?php foreach ($infoTask as $data): ?>
  <input type="text" name="action" value="<?php echo $data['action']; ?>" placeholder="action">
  <input type="text" name="limit_date" value="<?php echo $data['limit_date']; ?>" placeholder="limit_date"><br>
  <?php endforeach; ?>
  <input type="submit" name="" value="envoyer">
</form>
<?php
}
 ?>
