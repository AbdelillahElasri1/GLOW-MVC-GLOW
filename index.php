<?php
require_once './Controller/productsController.php';
require_once './Controller/adminController.php';
require_once './Controller/StatistiqueController.php';
session_start();
$control = new productController;
$admin = new AdminController;
if(isset($_GET['a'])){
   switch($_GET['a']){
        case 'add':
            $control->Add();
            break;
        case 'update':
            $control->update();
            break;
        case 'delete':
            $control->delete();
            break;
        case 't':
            $admin->Admin();
            break;
        case 'out':
            $admin->Logout();
            break;
   }
}
$pages = ['dashboard','catalogue','home','login'];
if (isset($_GET['p'])) {
    if (in_array($_GET['p'], $pages)) {
        require_once './View/' . $_GET['p'] . '.php';
    } 
}else
        require_once './View/home.php';