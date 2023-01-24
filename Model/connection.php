<?php

class db {
    static function connection (){
            try {
                $database = new PDO("mysql:host=localhost;dbname=glow", 'root', '');
                $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $database ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
                return $database;
            } catch(Exception $e) {
                die('Erreur : '.$e->getMessage());
                //var_dump($e);
            }
        }
}