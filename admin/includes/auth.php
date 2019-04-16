<?php
    function auth(){
        if(isset($_SESSION['username'])){
            return true;
        }
        else{
            return false;
        }
    }
?>