<?php namespace App;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config
 *
 * @author alfred
 */
class Config {
    //put your code here

    public static function get() {
        return [
            
            // indication du namespace pour le routage
            'namespace' => 'App\Controllers',
            //indication du contrôleur par défaut
            'default_controller' => 'Home',
            //indication de la méthode par défaut
            'default_method' => 'index',
            
            //accès à la base de données
            'db_type' => 'pgsql',
            'db_host' => 'localhost',
            'db_port' => '5432',
            'db_name' => 'contacts',
            'db_username' => 'postgres',
            'db_password' => '7894561230Alfred'
        ]; 
    }
    
    
            
}
