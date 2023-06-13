
<?php include './includes/head.inc.html'; ?>
<?php include './includes/header.inc.html'; ?>



<?php include './includes/nav.html'; ?>


<?php 
session_start();

if (isset($_SESSION['table'])) $table - $_SESSION ['table'];
$table=true ;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {}

$prénom = $_POST['firstname'];
$nom = $_POST['lastname'];
$âge = $_POST['age'];
$taille = $_POST['height'];
$genre = $_POST['gender'];


$table = array();
$table ['firstname'] = $prénom;
$table ['age'] = $âge;
$table ['height'] = $taille;
$table ['gender'] = $genre;


$_SESSION['table'] =$table;




?>

<?php if (!isset($table)) {include './includes/home.php';}
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
