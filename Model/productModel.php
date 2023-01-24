<?php
require_once './Model/connection.php';
class productModel extends db{

    function insert($data)
    {
        foreach ($data as $product) {
            $stmt = db::connection()->prepare('INSERT INTO product (productPic,productName,productPrice) VALUES (:productPic,:productName,:productPrice)');
            $stmt->bindParam(':productName', $product['productName'], PDO::PARAM_STR);
            $stmt->bindParam(':productPrice', $product['productPrice'], PDO::PARAM_STR);
            $stmt->bindParam(':productPic', $product['productPic'], PDO::PARAM_STR);
            $stmt->execute();
            $stmt = null;
        }
        return 'ok';
        }
    function getAllProduct(){
        $stmt = db::connection()->prepare('select * from product');
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    function getProduct($id){
        $stmt = db::connection()->prepare('select * from product where id ='.$id.' Limit 1');
        $stmt->execute();
        $result=$stmt->fetchAll();
        return $result;
    }
    function delete($id){
        $stmt = db::connection()->prepare('delete from product where id = '.$id);
        $stmt->execute();
    }

    function update($id,$post,$bool){
        $conn = $this->connection();
        if($bool){
            $stmt = db::connection()->prepare('UPDATE product SET productName = :productName, productPic =  :productPic, productPrice= :productPrice WHERE id = '.$id);
            $stmt->bindParam(':productName', $post['productName'], PDO::PARAM_STR);
            $stmt->bindParam(':productPrice', $post['productPrice'], PDO::PARAM_STR);
            $stmt->bindParam(':productPic', $post['productPic'], PDO::PARAM_STR);
            $stmt->execute();
            $stmt = null;
        }else{
            $stmt = db::connection()->prepare('UPDATE product SET productName = :productName, productPrice= :productPrice WHERE id = '.$id);
            $stmt->bindParam(':productName', $post['productName'], PDO::PARAM_STR);
            $stmt->bindParam(':productPrice', $post['productPrice'], PDO::PARAM_STR);
            $stmt->execute();
            $stmt = null;
        } 
    }
}