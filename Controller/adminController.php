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
            $row = $test->AdminLog($this->username,md5($this->password));
            if (isset($row['username']) && isset($row['password'])&& md5($this->password) == $row['password']) {
                        $_SESSION['user'] = 'admin';
            } else {
                //die('error');
                //header('location: ./View/login.php');
                die( '
                <main class="h-screen w-full flex flex-col justify-center items-center bg-[#1A2238]">
                    <h1 class="text-9xl font-extrabold text-white tracking-widest">500</h1>
                    <div class="bg-[#FF6A3D] px-2 text-sm rounded rotate-12 absolute">
                        Password or email inccorect
                    </div>
                    <button class="mt-5">
                      <a href = "./View/login.php"
                        class="relative inline-block text-sm font-medium text-[#FF6A3D] group active:text-orange-500 focus:outline-none focus:ring"
                      >
                        <span
                          class="absolute inset-0 transition-transform translate-x-0.5 translate-y-0.5 bg-[#FF6A3D] group-hover:translate-y-0 group-hover:translate-x-0"
                        ></span>
                
                        <span class="relative block px-8 py-3 bg-[#1A2238] border border-current">
                          <router-link to="/">Go To Login</router-link>
                        </span>
                      </a>
                    </button>
                </main>');
               // header('location: ./View/login.php');
            }
        }
    }
    function Logout()
    {
        unset($_SESSION['user']);
    }
}