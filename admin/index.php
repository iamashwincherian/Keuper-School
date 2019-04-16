
<?php
    include "includes/header.php";
    include "includes/auth.php";
?>

    <a style="padding: 10px;" href="?logout">Logout</a>

    <?php 
        if(isset($_GET['logout'])){
            header("Location: logout");
        }
    ?>

<?php include "includes/footer.php"; ?>