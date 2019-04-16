<?php

    include "includes/header.php";
    if(!auth()){
        include "includes/login.php";
    }
    else{
?>

<script>
    $(document).ready(function() {
        $('.category').removeClass('cat-blue');
        $('.gallery-button').addClass('cat-blue');
    })    
</script>

<section class="section-panels">

    <?php include "includes/nav.php" ?>

    <div class="admin-body">
        <div class="panel-head">
            <h2>Gallery</h2>
        </div>
        <div class="panel-body">
            <h2>Albums</h2>
            <div class="gallery-albums">
                <div class="create-new-album album"><p>Create New</p></div>
                <div class="album">
                    <img src="../lib/imgs/gallery-img.png" alt="Image" class="album-image">
                    <p class="album-title">Annual Day</p>
                </div>
                <div class="album">
                    <img src="../lib/imgs/gallery-img.png" alt="Image" class="album-image">
                    <p class="album-title">Christmas Day</p>
                </div>
                

            </div>
        </div>
    </div>
    
</section>

<?php
        include "includes/footer.php";
    }
?>