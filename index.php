<?php 
session_start(); 
?>



<?php include './includes/head.inc.html'; ?>
<?php include './includes/header.inc.html'; ?>



<?php include './includes/nav.html'; ?>


<?php 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$height = $_POST['height'];
$gender = $_POST['gender'];


$table = array();
$table ['firstname'] = $firstname;
$table ['lastname'] = $lastname;
$table ['age'] = $age;
$table ['height'] = $height;
$table ['gender'] = $gender;



$_SESSION['table'] =$table;



}


if (isset($_SESSION['table']))
{ $table - $_SESSION ['table'];
$table=true ;}










// if (!isset($table)) {include './includes/home.html';}




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


