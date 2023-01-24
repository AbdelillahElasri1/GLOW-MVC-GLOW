<?php
require_once 'Model/AdminModel.php';
class AdminController
{
    private $username;
    private $password;
    function Admin()
    {
        if (isset($_POST["submit"])) {
            $this->username = $_POST["email"];
            $this->password = $_POST["password"];
            $test = new AdminModel;
            $row = $test->AdminLog($this->username,$this->password);
            if (isset($row['username']) && isset($row['password'])&& $this->password == $row['password']) {
                        $_SESSION['user'] = 'admin';
            } else {
                die('error');
            }
        }
    }
    function Logout()
    {
        unset($_SESSION['user']);
    }
}