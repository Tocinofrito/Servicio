<?php

class App{
    function __construct(){
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        
        $url = rtrim($url, '/');
        //Separa en un array cada parametro que está entre las diagonales   
        $url = explode("/",$url);
        //var_dump($url);
        //Si no existe parámetro(Controller a llamar)
        if(empty($url[0])){
            error_log("APP::Construct -> no hay controlador para ese parametro");

        }
        //Si existe lo llamamos
        $archivoController = 'controller/' . $url[0] . '.php';
        //var_dump($archivoController);
        //Verificamos si existe el controlador
        if(file_exists($archivoController)){
            require_once $archivoController;
            $controller = new $url[0];

            if(isset($url[1])){
                $controller->{$url[1]}();
            }
        }else {
            $controller = new Errores();
        }


    }

}