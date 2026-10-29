<?php
require_once 'Router.php';

class App{    

    public static function main(){
        $router = new Router();
        $router->dispatch();
    }
}