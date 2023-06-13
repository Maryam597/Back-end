
<?php include './includes/head.inc.html'; ?>
<?php include './includes/header.inc.html'; ?>



<?php include './includes/nav.html'; ?>


<?php 
session_start();

if (isset($_SESSION['table'])) $table - $_SESSION ['table'];
$table=true
?>

<?php if (!isset($table)) {include './includes/home.php';
}
?>



<?php

  if (isset($_GET['new'])) {


    $page = $_GET['new'];

    if ($page === 'data.html') {
      include './includes/data.html';
    } else if ($page === 'home.html') {
      include './includes/home.html';
    }
   


}
?>







<?php include './includes/footer.html'; ?>
