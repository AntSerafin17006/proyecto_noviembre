<?php
require_once 'controller.php';
class Router{
    public function __construct(){

    }
    public function dispatch(){
        if (isset($_GET['menu'])){
            $opcion = $_GET['menu'];
            switch($opcion){
                case 'pintalaa':
                    $controller=new controller();
                    $controller->pintaa();

                break;

                case 'pintalab':
                    $controller=new controller();
                    $controller->pintab();
                
                break;
            }
            }
        }
    }