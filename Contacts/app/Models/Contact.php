<?php namespace App\Models;
require '../system/BaseModel.php';
use System\BaseModel;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contact
 *
 * @author alfred
 */
class Contact extends BaseModel{
    //put your code here
    public function getContacts(){
        return $this->db->select('*FROM contacts');
        //['Glen','Sophie','Fabrice','Thomas','Alexandre'];
    }
}
