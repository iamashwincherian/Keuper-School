<?php

    include "includes/header.php";
    if(!auth()){
        include "includes/login.php";
    }
    else{
        include "includes/panels.php";
    }
    include "includes/footer.php";

?>