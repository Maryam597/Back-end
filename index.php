<?php
session_start();
?>

<?php include './includes/head.inc.html'; ?>
<?php include './includes/header.inc.html'; ?>


<div class="container-fluid">
  <div class="row">
<nav class="col-md-3">
  <?php if (isset($_SESSION['table'])) : ?>
    <a href="index.php"> <button  name="homebutton" type="button" class="btn btn-dark">Home</button></a>
  <?php endif; ?>

  <a href="index.php?add"> <button type="button" class="btn btn-dark">Ajouter des données</button></a>

  <?php if (!isset($_SESSION['table'])) {
  include_once './includes/home.html'; 
} 
?>
</nav>





<section class="col-md-9">

<?php
// if (!isset($_SESSION['table'])) {
//   include_once './includes/home.html';
// }



if (isset($_GET['add'])) {
  include_once './includes/form.html';
} elseif (isset($_POST['form'])) {

  $table = [
    'firstname' => $_POST['firstname'],
    'lastname' => $_POST['lastname'],
    'age' => $_POST['age'],
    'height' => $_POST['height'],
    'gender' => $_POST['gender']
  ];
  $_SESSION['table'] = $table;
  echo '<h3>Données sauvegardées</h3>';
}

// $delete = filter_input(INPUT_POST, 'delete');
// if ($delete == 1) {
//     session_destroy();
// }


?>
</section>
</div>
</div>
<?php

include './includes/footer.html';

?>







