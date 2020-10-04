<?php 
session_start();

if(isset($_SESSION['username'])){
    session_destroy();
    echo"<script type='text/javascript'>
            window.location='index.php';
        </script>";
}
?>