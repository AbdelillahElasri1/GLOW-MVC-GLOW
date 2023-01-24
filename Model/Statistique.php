<?php 
require_once './Model/connection.php';
class StatistiqueModel extends db{
     
    private $totalProducts ;

    function countfromDB(){
        $stmt = db::connection()->prepare('select count(productName) from product;');
        $stmt->execute();
        $stmt = $stmt->fetch();
        return $stmt['count(productName)'];
    }

    function maxPricefromDB(){
        $stmt = db::connection()->prepare('select max(productPrice) from product;');
        $stmt->execute();
        $stmt = $stmt->fetch();
        return $stmt['max(productPrice)'];
    }

    function minPrice(){
        $stmt = db::connection()->prepare('select min(productPrice) from product;');
        $stmt->execute();
        $stmt = $stmt->fetch();
        return $stmt['min(productPrice)'];
    }

    function AllPrices(){
        $stmt = db::connection()->prepare('select productPrice from product;');
        $stmt->execute();
        $stmt = $stmt->fetchAll();
        return $stmt;
    }
}
