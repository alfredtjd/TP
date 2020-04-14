<?php namespace System;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author alfred
 */
class View {
    //put your code here
    public function render($path, $data = false){
        if($data){
            foreach($data as $key => $value){
                ${$key} = $value;
            }
        }
        $filepath = "../app/views/$path.php"; //chemin vers les fichiers vue
        if(file_exists($filepath)){
            require $filepath;
        }else{
            die ("Vue : $path chemin non trouvé ");
        }
        
    }
}
