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
            <a href="?logout"><h3>Logout</h3></a>
        </div>
        <div class="panel-body">
            <h2>New Album</h2>
            <form action="" method="GET" class="album-form" name="album-form">
                <input type="text" class="form-input" name="name" required>
                <label for="name" class="form-label" id="label-name">Album Name</label>
                <button type="submit" class="form-button" name="submit"><i class="fas fa-plus button-icon"></i>Create</button>
            </form>
<?php

    if(isset($_GET['submit'])){
        $name = $_GET['name'];

        $query = "INSERT INTO albums(name) VALUES('{$name}')";
        $result = mysqli_query($connect, $query);
        if(!$result){
            die("Query Failed!" . mysqli_error($connect));
        }
        header("Location: gallery");
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