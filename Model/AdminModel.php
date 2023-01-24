<?php 
require_once './Model/connection.php';
class AdminModel extends db{
    public function AdminLog($email,$password){
        $conn = $this->connection();
        $sql = "select * from `admin` where ";
        $stmt=$conn->query("select * from admin where username='$email' OR password='$password'");
        $result=$stmt->fetch();
        return $result;
    }
}