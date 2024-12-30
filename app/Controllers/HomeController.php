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
        $productsModel = new Product();
        $products = $productsModel->getAllProducts();
        $this->render('home/table-product', ['products' => $products]);
    }
    

    // public function productList()
    // {
    //     $productsModel = new Product();
    //     $products = $productsModel->getAllProducts();
    //     $this->render('home/table-product', ['products' => $products]);
    // }

    public function blog(){
        $this->render('home/blog', []);
    }
    public function contact(){
        $this->render('home/contact', []);
    }
    
}

?>