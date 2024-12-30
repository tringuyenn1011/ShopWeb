<?php

namespace App\Controllers;

use App\Controller;
use App\Models\User;
use App\Models\Banner;
use App\Models\Product;

class HomeController extends Controller
{

    private $homeModel;

    public function __construct()
    {
        $this->homeModel = new User();
    }

    public function index(){
        $bannerModel = new Banner();
        $banners = $bannerModel->getAllBanners();
        $this->render('home/index', ['banners' => $banners]);
    }
    // public function index(){
    //     $bannerModel = new Banner();
    //     $banners = $bannerModel->getAllBanners();
    //     $this->render('home/index', ['banners' => $banners]);
    // }

    // public function homeDisplay()
    // {
    //     $this->render('users\user-list', []);
    // }
    public function banner(){
        $bannerModel = new Banner();
        $banners = $bannerModel->getAllBanners();
        $this->render('home/banner', ['banners' => $banners]);
    }

    public function productList(){
        $productsModel = new Product();
        $products = $this->$productsModel->getAllProducts();
        
        $this->render('products\product-list', ['products' => $products]);
    }

    public function blog(){
        $this->render('home/blog', []);
    }
    public function contact(){
        $this->render('home/contact', []);
    }
    
}


?>