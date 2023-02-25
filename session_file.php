<?php 
if(isset($_GET['lang']) && !empty($_GET['lang'])){
    $_SESSION['lang']=$_GET['lang'];
    if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
        echo"<script type='text/javascript'>Location.reload();</script>";
        
    }
}
    if(isset($_SESSION['lang'])){
        include "language/" . $_SESSION['lang'] . ".php";
    }else{
        include "language/en.php";
    }

?>