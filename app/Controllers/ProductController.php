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
        // Fetch all users and display them in a view
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
            $this->render('users\user-form', ['user' => []]);
        }
        
    }

    private function processForm(){
            // // Retrieve form data
            // $username = $_POST['username'];
            // $password = $_POST['password'];
            // $email = $_POST['email'];

            // // Call the model to create a new user
            // $user = $this->productModel->createProduct($username, $password, $email);

            // if ($user) {
            //     // Redirect to the user list page or show a success message
            //     header('Location: /user/index');
            //     exit();
            // } else {
            //     // Handle the case where the user creation failed
            //     echo 'User creation failed.';
            // }
    }
       

    public function update($userId)
    {
        // // Handle form submission to update a user
        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     $this->processFormUpdate($userId);            
        // } else {
        //     // Fetch the user data and display the form to update
        //     $user = $this->productModel->getUserById($userId);       
            
        //     $this->render('users\user-form', ['user' => $user]);

        // }

        
    }
    
    private function processFormUpdate($userId){

        // Retrieve form data
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
       
        
        // Call the model to update the user
        $user = $this->productModel->updateUser($userId, $username, $password, $email);

        if ($user) {
            // Redirect to the user list page or show a success message
            header('Location: /user/index');
            exit();
        } else {
            // Handle the case where the user creation failed
            echo 'User update failed.';
        }
    }

    public function delete($userId)
    {
        // Call the model to delete the user
        $this->productModel->deleteUser($userId);

        // Redirect to the user list page after deletion
        header('Location: /index.php');
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