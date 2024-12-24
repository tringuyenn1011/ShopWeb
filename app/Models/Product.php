<?php

namespace App\Models;

class Product
{
    private $mysqli;

    public function __construct()
    {
        // Replace these values with your actual database configuration
        $host = DB_HOST;
        $username = DB_USER;
        $password = DB_PASSWORD;
        $database = DB_NAME;

        $this->mysqli = new \mysqli($host, $username, $password, $database);

        // Check connection
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

    public function createProduct($productName, $category, $price, $detail, $urlImage)
    {
        
        $productName = $this->mysqli->real_escape_string($productName);
        $category = $this->mysqli->real_escape_string($category);
        $price = $this->mysqli->real_escape_string($price);
        $detail = $this->mysqli->real_escape_string($detail);
        $urlImage = $this->mysqli->real_escape_string($urlImage);

        //$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        return $this->mysqli->query("INSERT INTO products (productName, category, price, detail, urlImage) VALUES ('$productName', '$category', '$price', '$detail', '$urlImage')");
    }

    public function updateUser($userId, $username, $password, $email)
    {
        $userId = $this->mysqli->real_escape_string($userId);
        $username = $this->mysqli->real_escape_string($username);
        $password = $this->mysqli->real_escape_string($password);
        $email = $this->mysqli->real_escape_string($email);

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        return $this->mysqli->query("UPDATE users SET username='$username', password_input='$hashedPassword', email='$email' WHERE id=$userId");
    }

    public function deleteUser($userId)
    {
        $userId = $this->mysqli->real_escape_string($userId);
        $this->mysqli->query("DELETE FROM users WHERE id=$userId");
    }
}

?>