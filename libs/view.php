<?php

class View{
    function __construct(){
        echo "Vista base";
    }

    function render($nombre){
        error_log('views/' . $nombre . 'php'); 
        require 'views/' . $nombre . '.php';
    }
}