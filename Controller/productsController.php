<?php
require_once './Model/productModel.php';
class productController  {
    private $post;
    
    // Ajouter un produit
    public function Add(){
        
        if(isset($_POST['submit'])){
            foreach ($_POST['productName'] as $key => $name) {
                    $data[$key]['productName'] = htmlspecialchars($name, ENT_QUOTES);
                    //$data[$key]['productName'] = $_POST['productName'][$key];
                    $data[$key]['productPrice'] = $_POST['productPrice'][$key];
                }
                foreach ($_FILES['productPic']['tmp_name'] as $key => $image) {
                    $data[$key]['productPic'] = file_get_contents($image);
                }
            $Model = new productModel;
            $Model->insert($data);
        }else{
            die('error sdfs');
            //var_dump($_POST['submit']);
        }
    }

    //Supprimer un produits
    public function delete(){
        if($_GET['id']){
            $id = $_GET['id'];
            $Model = new productModel;
            $Model->delete($id);
            header('location:?p=dashboard');
        }
        
    }

    //get un produits ou plusieurs produits
    public function getProducts(){
        $Model = new productModel;
        if(isset($_GET['id'])){
            return $Model->getProduct($_GET['id']);
        }else{
            return $Model->getAllProduct();
        }
    }
    
    //mise a jour un produit
    public function update(){
        if(isset($_POST['update'])){
            if(isset($_FILES['productPic'])&&$_FILES['productPic']['error']===0){
            $bool = true;
        }else{
            $bool = false;
        }
        $this->post=[
            'productPic'=> $bool?file_get_contents($_FILES['productPic']['tmp_name']):'',
            'productName'=>$_POST['productName'],
            'productPrice'=>$_POST['productPrice']
        ];
        $Model = new productModel;
        $Model->update($_GET['id'], $this->post,$bool);
        }else {
            die('error');
        }
        
    }

}