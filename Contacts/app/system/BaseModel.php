<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace System;
    use App\Config;
    use App\Helpers\Database;
/**
 * Description of BaseModel
 *
 * @author alfred
 */
class BaseModel {
    protected $db;
    public function __construct() {
        $config = Config::get();
        
    }
}
