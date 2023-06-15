<?php
session_start();
?>

<?php include './includes/head.inc.html'; ?>
<?php include './includes/header.inc.html'; ?>

<nav style="padding-left: 10px; padding-top: 20px;">
<?php if (isset($_SESSION['table'])) : ?>
    <a href="index.php"> <button type="button" class="btn btn-dark">Home</button></a>
<?php endif; ?>

<a href="index.php?add"> <button type="button" class="btn btn-dark">Ajouter des données</button></a>
</nav>

<?php
if (isset($_SESSION['table'])) {
  include_once './includes/home.html';
}

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
  echo '<h3>Vos données ont été enregistrées</h3>';
}

include './includes/footer.html';
?>