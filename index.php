

<!-- // phpinfo(); -->

<?php include './includes/head.inc.html'; ?>
<?php include './includes/header.inc.html'; ?>



<?php include './includes/nav.html'; ?>


<?php

  if (isset($_GET['new'])) {


    $page = $_GET['new'];

    if ($page === 'data.html') {
      include './includes/data.html';
    } else if ($page === 'home.html') {
      include './includes/home.html';
    }

}
