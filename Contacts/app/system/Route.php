<?php namespace System;
use System\View;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Route
 *
 * @author alfred
 */
class Route {
    
    
    
    private $config;
    public function __construct($config) {
        $this->config = $config;
        
        /* $url va contenir un tableau de la route demandée sous la forme ‘/page/’. Quand ‘explode’
        * est exécutée, il trouve un premier ‘/’ dans l’URI1 de la requête que la variable ‘$_SERVER’
        * renvoie. */
        $url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        
        $controller = !empty($url[0]) ? $url[0] : $config['default_controller'];
        
        $method = !empty($url[1]) ? $url[1] : $config['default_method'];
        
        $args = !empty($url[2]) ? array_slice($url, 2) : array();
        
        $class = $config['namespace'] . $controller;
        
        if(!class_exists($class)){
            return $this->not_found();
        }
        
        if(!method_exists($class, $method)){
            return $this ->not_found();
        }
	
        $classInstance = new $class;
        
        call_user_func_array(array($classInstance, $method), $args);
        

    }
    
    public function not_found(){
        $view = new View();
        return $view->render('404');
    }
}