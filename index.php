
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
?>
<!-- 
<script type="text/javascript">
    function verify(){
        var forename = document.getElementById("forename").value;
        var surname = document.getElementById("surname").value;
        var comments = document.getElementById("comments").value;

        if(forename == null || forename == ""){
            alert("Forename is empty");
            return false;
        }
        else if(surname == null || surname == ""){
            alert("Surname is empty");
            return false;
        }
        else if(comments == null || comments == ""){
            alert("Comments is empty");
            return false;
        }
        document.register.submit();
    }
    </script> -->




<?php include './includes/footer.html'; ?>
