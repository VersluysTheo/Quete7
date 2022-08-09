<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include "includes/head.php" ; ?>

<body>
    <section>
        <?php include "includes/header.php" ; ?>
    </section>
    <section>
    <?php 
    // Inclusion des documents

    if (isset($_GET['lundi'])) {
        include "includes/lundi.php" ;
    } elseif(isset($_GET['mardi'])) {
        include "includes/mardi.php" ;
    } elseif(isset($_GET['mercredi'])) {
        include "includes/mercredi.php" ;
    } elseif(isset($_GET['jeudi'])) {
        include "includes/jeudi.php" ;
    } elseif(isset($_GET['vendredi'])) {
        include "includes/vendredi.php" ;
    } elseif(isset($_GET['samedi'])) {
        include "includes/samedi.php" ;
    } elseif(isset($_GET['dimanche'])) {
        include "includes/dimanche.php" ;
    } else include "includes/none.php" ;

        ?>
    <div> <img src="./images/reactopia.PNG" alt=""></div>
    </section>

</body>
<br><br><br>
<footer>
    <!-- Footer -->
    <?php include "includes/footer.php" ; ?>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>