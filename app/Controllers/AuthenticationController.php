<?php
namespace App\Controllers;

use App\Models\User;
class AuthenticationController {
    
    public function __construct(){
        
    }

    public function authenticate() {
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = (new User())->getUserByUsername($username);
            if ($user && password_verify($password, $user['password_input'])) {
                // User authenticated, save user to session
                session_start();
                $_SESSION['currentUser'] = $user;
    
                // Redirect to index.php
                $_SESSION['flash_message'] = "Login was successful";
                header("Location: ../home/index");
                exit();
            } else {
                // Authentication failed, redirect to signin.php
                // $_SESSION['flash_message'] = "Login has failed";
                header("Location: ../user/signin");
                exit();
            }
        }

        
    }
}