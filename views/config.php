<?php
    function __autoload($classe){
        if(file_exists("model/" . $classe . ".class.php")){
            include_once("model/" . $classe . ".class.php");
        }elseif(file_exists("controller/" . $classe . ".class.php")){
            include_once("controller/" . $classe . ".class.php");
        }elseif(file_exists("../model/" . $classe . ".class.php")){
            include_once("../model/" . $classe . ".class.php");
        }elseif(file_exists("../controller/" . $classe . ".class.php")){
            include_once("../controller/" . $classe . ".class.php");
        }
    }
?>