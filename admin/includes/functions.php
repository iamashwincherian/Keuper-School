<?php



    function findPhotoId($src){
        $connect = mysqli_connect('localhost', 'root', '', 'Keuper');
        $photoId = mysqli_query($connect, "SELECT * FROM photos WHERE file='{$src}'");
        foreach($photoId as $photo){
            return $photo['id'];
        }
    }

?>