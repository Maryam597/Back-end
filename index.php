<?php 
session_start(); 
?>

<?php include './includes/head.inc.html'; ?>
<?php include './includes/header.inc.html'; ?>



<?php include './includes/nav.html'; ?>


<?php 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$prénom = $_POST['firstname'];
$nom = $_POST['lastname'];
$âge = $_POST['age'];
$taille = $_POST['height'];
$genre = $_POST['gender'];


$table = array();
$table ['firstname'] = $prénom;
$table ['lastname'] = $nom;
$table ['age'] = $âge;
$table ['height'] = $taille;
$table ['gender'] = $genre;



$_SESSION['table'] =$table;


}


if (isset($_SESSION['table']))
{ $table - $_SESSION ['table'];
$table=true ;}










if (!isset($table)) {include './includes/home.html';}




  if (isset($_GET['new'])) {


    $page = $_GET['new'];

    if ($page === 'form.html') {
      include './includes/form.html';
    } else if ($page === 'home.html') {
      include './includes/home.html';
    }
   


}
?>








<?php include './includes/footer.html'; ?>
