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
    
<?php

    $query = "SELECT * FROM albums";
    $result = mysqli_query($connect, $query);

?>

    <div class="admin-body">
        <div class="panel-head">
            <a href="gallery"><h2>Gallery</h2></a>
            <a href="?logout"><h3>Logout</h3></a>
        </div>
        <div class="panel-body">
            <h2>Albums</h2>
            <div class="gallery-albums">
                <?php 
                    if(mysqli_num_rows(mysqli_query($connect, 'SELECT * FROM albums')) == 0){
                        echo "<a href='new' class='create-new-album album'><p>Album is Empty<br>Create New</p></a>";
                    }else {
                ?>
                <a href="new" class="create-new-album album"><p>Create New</p></a>
<?php  }
    foreach($result as $album){ 
        echo "<a href='album?id={$album['id']}' class='album'>";
        echo "<img src='../lib/imgs/gallery-img.png' alt='Image' class='album-image'>";
        echo "<p class='album-title'>{$album['name']}</p>";
        echo "</a>";
    };
?>
                <!-- <div class="album">
                    <img src="../lib/imgs/gallery-img.png" alt="Image" class="album-image">
                    <p class="album-title">Annual Day</p>
                </div>
                <div class="album">
                    <img src="../lib/imgs/gallery-img.png" alt="Image" class="album-image">
                </div> -->
            </div>
        </div>
    </div>
    
</section>

<?php
        include "includes/footer.php";
        include "includes/logout.php";

    }
?>