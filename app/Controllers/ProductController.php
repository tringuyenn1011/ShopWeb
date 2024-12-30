<?php

namespace App\Controllers;

use App\Models\Product;
use App\Controller;

class ProductController extends Controller
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new Product();
    }

    public function index(){
        $this->render('products\index', []);
    }

    public function productList()
    {
        $products = $this->productModel->getAllProducts();
        
        $this->render('products\product-list', ['products' => $products]);
    }

    public function show($userId)
    {
        // Fetch a single user by ID and display in a view
        //$user = $this->productModel->getUserById($userId);
        
        // $this->render('users\user-form', ['user' => $user]);

    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->processForm();
        } else {
            // Display the form for creating a new user            
            $this->render('products\product-form', ['product' => []]);
        }
        
    }

    private function processForm(){
            // Retrieve form data
            $productname = $_POST['productname'];
            $category = $_POST['category'];
            $price = $_POST['price'];
            $detail = $_POST['detail'];
            $urlimage = $_POST['urlimage'];

            // Call the model to create a new user
            $product = $this->productModel->createProduct($productname, $category, $price, $detail, $urlimage);

            if ($product) {
                // Redirect to the user list page or show a success message
                header('Location: /product/index');
                exit();
            } else {
                // Handle the case where the user creation failed
                echo 'User creation failed.';
            }
    }
       

    public function update($productId)
    {
        // Handle form submission to update a user
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->processFormUpdate($productId);            
        } else {
            // Fetch the user data and display the form to update
            $product = $this->productModel->getProductById($productId);       
            
            $this->render('products\product-form', ['product' => $product]);

        }

        
    }
    
    private function processFormUpdate($productId){

        // Retrieve form data
        $productname = $_POST['productname'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $detail = $_POST['detail'];
        $urlimage = $_POST['urlimage'];
       
        
        // Call the model to update the user
        $product = $this->productModel->updateProduct($productId, $productname, $category, $price, $detail, $urlimage);

        if ($product) {
            // Redirect to the user list page or show a success message
            header('Location: /product/index');
            exit();
        } else {
            // Handle the case where the user creation failed
            echo 'User update failed.';
        }
    }

    public function delete($productId)
    {
        // Call the model to delete the user
        $this->productModel->deleteProduct($productId);

        // Redirect to the user list page after deletion
        header('Location: product/index');
    }

    public function signin(){        
        $this->render('users\signin', []);
    }

    public function logout(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            session_start();
            if(isset($_SESSION['currentUser'])){
                unset($_SESSION['currentUser']);
                session_destroy();
                header("Location: ../index");
                exit();
            }
        }
    }
}