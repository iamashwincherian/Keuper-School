
<?php
    if(isset($_GET['logout'])){
        $_SESSION['username'] = null;
        header("Location: ../admin");
    }
?>