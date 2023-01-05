<?php
class App{
    function _construct(){
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        echo $url;
    }
}