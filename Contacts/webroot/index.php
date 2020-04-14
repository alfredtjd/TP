
<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php namespace App;
        
            if(file_exists('../vendor/autoload.php')){
                require '../vendor.autoload.php';
            }else{
                echo 'autoload n\'est pas chargé';
            }
            //positionnement du niveau d'environnement
            define('ENVIRONMENT','development');
            /*
             * 
             */
            if(defined('ENVIRONMENT')){
                switch (ENVIRONMENT){
                    case 'development':
                        error_reporting(E_ALL);
                        break;
                    
                    case 'production' :
                        error_reporting(0);
                        break;
                    default:
                        exit('L\'environnement de l\'application n\'a pas été défini correctement');
                }
            }
            
            $config = App\Config::get();
            new System\Route($config);
            
        ?>
    </body>
</html>
