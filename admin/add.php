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

        $('#file-upload').change(function() {
            $('#file-name').css("display", "unset");
            var i = $(this).prev('label').clone();
            var file = $('#file-upload')[0].files[0].name;
            $(this).prev('label').text(file);
        });
    })    
</script>

<section class="section-panels">

    <?php include "includes/nav.php" ?>

<?php 
    if(isset($_GET['id'])){
?>

    <div class="admin-body">
        <div class="panel-head">
            <a href="gallery"><h2>Gallery</h2></a>
            <a href="?logout"><h3>Logout</h3></a>
        </div>
        <div class="panel-body">
            <h2>Add Photo</h2>
            <form action="" method="POST" class="album-form" name="album-form" enctype="multipart/form-data">
                <div class="input-group">
                    <input type="text" class="form-input" name="name" required>
                    <label for="name" class="form-label" id="photo-label-name">Photo Name</label>
                </div>
                <div class="input-file">
                    <label for="name" class="form-label" id="photo-label-file">Photo</label>
                    <label for="file-upload" class="custom-file-upload">Upload Photo</label>
                    <label id="file-name" style="display: none;">Upload Photo</label>
                    <input id="file-upload" name='image' type="file" style="display:none;">
                </div>
                <button type="submit" class="form-button" name="addPhoto"><i class="fas fa-plus button-icon"></i>Add</button>
            </form>
<?php

    if(isset($_POST['addPhoto'])){
        move_uploaded_file($_FILES['image']['tmp_name'], "../lib/uploads/photos/{$_FILES['image']['name']}");
        
        echo "<p>Ok</p>";

        $query = "INSERT INTO photos(album_id,name,file) ";
        $query .= "VALUES( '{$_GET['id']}','{$_POST['name']}','{$_FILES['image']['name']}' )";
        $result = mysqli_query($connect, $query);
        if(!$result){
            die("Query Failed!" . mysqli_error($connect));
            header("Location: ../index");

        }
        header("Location: album?id={$_GET['id']}");
    }

}

?>
        </div>
    </div>
    
</section>

<?php
        include "includes/footer.php";
        include "includes/logout.php";

    }
?>