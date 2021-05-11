<?php

    //yung function na to yung mag a autoload ng function natin na bmisloader na nasa baba niya 
    spl_autoload_register('bmisautoloader');

    //etong function naman na to yung kukuha nung mga main at sub classes natin sa classes folder
    function bmisautoloader($classnames) {
        $path = "classes";
        $extenstion = ".class.php";
        $fullpath = $path . $classnames . $extenstion;

        //eto yung statement na mag v validate kung existing yung hinahanap sa sa class files natin
        if(!file_exists($fullpath)) {
            return false;
        }
        
        include_once $fullpath;
    }
?>