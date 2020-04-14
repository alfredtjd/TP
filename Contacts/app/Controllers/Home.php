<?php namespace App;
require '../system/BaseController.php';
use System\BaseController;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author alfred
 */
class Home extends BaseController {
   
   public function index(){
       return $this->view->render('default');
   }
   
   public function sio(){
       return $this->view->render('sio');
   }
}
