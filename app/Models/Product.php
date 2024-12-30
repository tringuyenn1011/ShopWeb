<?php

namespace App\Models;

class Product
{
    private $mysqli;

    public function __construct()
    {
        $host = DB_HOST;
        $username = DB_USER;
        $password = DB_PASSWORD;
        $database = DB_NAME;

        $this->mysqli = new \mysqli($host, $username, $password, $database);

        if ($this->mysqli->connect_error) {
            die("Connection failed: " . $this->mysqli->connect_error);
        }
    }

    public function getAllProducts()
    {
        $result = $this->mysqli->query("SELECT * FROM products");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductById($productId)
    {
        $productId = $this->mysqli->real_escape_string($productId);
        $result = $this->mysqli->query("SELECT * FROM products WHERE id = $productId");

        return $result->fetch_assoc();
    }
    
    // public function getUserByUsername($username)
    // {
    //     $userId = $this->mysqli->real_escape_string($username);
    //     $result = $this->mysqli->query("SELECT * FROM users WHERE username = '$username'");

    //     return $result->fetch_assoc();
    // }

    public function createProduct($productname, $category, $price, $detail, $urlimage)
    {
        
        $productName = $this->mysqli->real_escape_string($productname);
        $category = $this->mysqli->real_escape_string($category);
        $price = $this->mysqli->real_escape_string($price);
        $detail = $this->mysqli->real_escape_string($detail);
        $urlImage = $this->mysqli->real_escape_string($urlimage);

        //$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        return $this->mysqli->query("INSERT INTO products (productname, category, price, detail, urlimage) VALUES ('$productname', '$category', '$price', '$detail', '$urlimage')");
    }

    public function updateProduct($productId, $productname, $category, $price, $detail, $urlimage)
    {
        $productId = $this->mysqli->real_escape_string($productId);
        $productname = $this->mysqli->real_escape_string($productname);
        $category = $this->mysqli->real_escape_string($category);
        $price = $this->mysqli->real_escape_string($price);
        $detail = $this->mysqli->real_escape_string($detail);
        $urlimage = $this->mysqli->real_escape_string($urlimage);

        return $this->mysqli->query("UPDATE products SET productname='$productname', category='$category', price='$price', detail='$detail', urlimage='$urlimage' WHERE id=$productId");
    }

    public function deleteProduct($productId)
    {
        $productId = $this->mysqli->real_escape_string($productId);
        $this->mysqli->query("DELETE FROM products WHERE id=$productId");
    }
}

?>