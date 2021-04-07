<?php

namespace Project\Models;

use Exception;

class Manager{
    protected function bdConnect()
    {

        $path="mysql:host=".$_ENV['host'].";dbname=".$_ENV['database'];
        try{
            $bdd = new \PDO($path,$_ENV['username'],$_ENV['password']);
            return $bdd;
        }catch(Exception $e){
            die('Erreur : '. $e->getMessage());
        }
        // try{
        //     $bdd = new \PDO('mysql:host=eu-cdbr-west-01.cleardb.com;dbname=heroku_430ec21d2f36a08;charset=utf8','b5a65838f7b7ff','a461e120');
        //     return $bdd;
        // }catch(Exception $e){
        //     die('Erreur : '. $e->getMessage());
        // }
    }
}

// class Manager{

//     private static $bdd = null;
//     CONST TABLES = 'balala';


//     protected static function bdConnect()
//     {
//         try{
//             if(isset($bdd)){
//                 return self::$bdd;
//             }else{
//                 $bdd = new \PDO('mysql:host=localhost;dbname=huitre_bretagne;charset=utf8','root','');
//             return self::$bdd;
//             }    
//         }catch(Exception $e){
//             die('Erreur : '. $e->getMessage());
//         }
//     }


//     public static function all(){
//         $table = self::managerToTable(get_called_class());

//         $newManager = new Manager();
//         $manager = $newManager->bdConnect();

//         $req = $manager->query("SELECT * FROM `{$table}`");
//         return $req;
//     }

//     private static function managerToTable($managerClass){
//         $tableAry = explode("\\", $managerClass);
//         $manager = $tableAry[count($managerClass)-1];
//         $table = self::TABLES[$manager];

//         return $table;
//     }

// }

