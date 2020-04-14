<?php namespace App\Controllers;
require '../system/BaseController.php';
use System\BaseController;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contacts
 *
 * @author alfred
 */
class Contacts extends BaseController {
    
    public function index(){
        $contact = new Contact();
        $contacts = $contact -> getContacts();
    }
}
