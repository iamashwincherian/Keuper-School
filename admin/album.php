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

    if(isset($_GET['id'])){
        $albums = mysqli_query($connect, "SELECT * FROM albums WHERE id={$_GET['id']}");
        $album = mysqli_fetch_assoc($albums);
        $album_id = $album['id'];
?>

    <div class="admin-body">
        <div class="panel-head">
            <a href="gallery"><h2>Gallery</h2></a>
            <a href="?logout"><h3>Logout</h3></a>
        </div>
        <div class="panel-body">
            <h2><?php echo $album['name'] ?></h2>

            <div class="gallery-albums">
                <a href="?delete=<?php echo $album['id'] ?>" class="delete-album"><p>Delete Album</p></a>
                <a href="add?id=<?php echo $album['id'] ?>" class="create-new-album album"><p>Add Photo</p></a>
    <?php  

        $photos = mysqli_query($connect, "SELECT * FROM photos WHERE album_id={$album['id']}");
        
        foreach($photos as $photo){
            echo "<a class='photo' href='?id={$album['id']}&photo_id={$photo['id']}'>";
            echo "<img src='../lib/uploads/photos/{$photo['file']}' alt='{$photo['name']}' class='myImg album-image rounded-image'>";
            echo "</a>";
        };
    

    ?>
            </div>
        </div>
    </div>
    
</section>

<?php include "includes/photo-viewer.php"; ?>

<?php }
    if(isset($_GET['photo_id'])){
        
        $photos = mysqli_query($connect, "SELECT * FROM photos WHERE id={$_GET['photo_id']}");
        $photo = mysqli_fetch_assoc($photos);

        echo "<script>";
        echo "var modal = document.getElementById('myModal');";
        echo "var modalImg = document.getElementById('img01');";
        echo "var captionText = document.getElementById('caption');";
        echo "modal.style.display = 'flex';";
        echo "modalImg.src = '../lib/uploads/photos/{$photo['file']}';";
        echo "captionText.innerHTML = '{$photo['name']}';";
        echo "document.getElementById('delete-button').href='?id={$album_id}&photo_id={$photo['id']}&del';";
        echo "</script>";
    }
?>

<?php 
    if(isset($_GET['del'])){
        $delete_photo = mysqli_query($connect, "Delete from photos where id={$photo['id']}");
        header("Location: album?id={$album_id}");
    }

    if(isset($_GET['delete'])){
        mysqli_query($connect, "Delete from albums Where id = {$_GET['delete']}");
        mysqli_query($connect, "Delete from photos Where album_id = {$_GET['delete']}");
        header("Location: gallery");
    }
?>

<?php

        include "includes/footer.php";
        include "includes/logout.php";

    }
?>