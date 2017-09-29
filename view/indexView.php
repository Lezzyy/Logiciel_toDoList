<!--project card-->
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
<h2 class="text-center">Veuillez-vous connecter</h2>
<?php
}
?>

<?php
foreach ($variable as $data) {
 ?>
<form class="" action="" method="post">
<div class="card text-center">
  <div class="card-header">
  <p>Catégorie</p>
  <h1><?php echo $data['name']; ?></h1>
  </div>
  <div class="card-body">
    <h2 class="card-title"><?php echo $data['deadline']; ?></h2>
    <p class="card-text"><?php echo $data['detail']; ?></p>
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
<!--end project card-->


    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
