<?php

namespace App\Controllers;

use App\Controller;

class HomeController extends Controller
{
    public function index(){
        $this->render('home/index', []);
    }

    // public function homeDisplay()
    // {
    //     $this->render('users\user-list', []);
    // }
}


?>