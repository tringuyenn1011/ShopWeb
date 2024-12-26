<?php

namespace App\Models;

class User
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

    public function getAllUsers()
    {
        $result = $this->mysqli->query("SELECT * FROM users");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getUserById($userId)
    {
        $userId = $this->mysqli->real_escape_string($userId);
        $result = $this->mysqli->query("SELECT * FROM users WHERE id = $userId");

        return $result->fetch_assoc();
    }
    
    public function getUserByUsername($username)
    {
        $userId = $this->mysqli->real_escape_string($username);
        $result = $this->mysqli->query("SELECT * FROM users WHERE username = '$username'");

        return $result->fetch_assoc();
    }

    public function createUser($fullname,$username, $password, $dayofbirth, $gender, $phonenumber, $vip)
    {
        $fullname = $this->mysqli->real_escape_string($fullname);
        $username = $this->mysqli->real_escape_string($username);
        $password = $this->mysqli->real_escape_string($password);
        $dayofbirth = $this->mysqli->real_escape_string($dayofbirth);
        $gender = $this->mysqli->real_escape_string($gender);
        $phonenumber = $this->mysqli->real_escape_string($phonenumber);
        $vip = $this->mysqli->real_escape_string($vip);

        if (!empty($dayofbirth)) {
            $dayofbirth = \DateTime::createFromFormat('d/m/Y', $dayofbirth)->format('Y-m-d');
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        return $this->mysqli->query("INSERT INTO users (fullname, username, password, dayofbirth, gender, phonenumber, vip) 
                            VALUES ('$fullname','$username', '$hashedPassword', '$dayofbirth', '$gender', '$phonenumber', '$vip')");
    }

    public function updateUser($userId, $fullname,$username, $password, $dayofbirth, $gender, $phonenumber, $vip)
    {
        $userId = $this->mysqli->real_escape_string($userId);
        $fullname = $this->mysqli->real_escape_string($fullname);
        $username = $this->mysqli->real_escape_string($username);
        $password = $this->mysqli->real_escape_string($password);
        $dayofbirth = $this->mysqli->real_escape_string($dayofbirth);
        $gender = $this->mysqli->real_escape_string($gender);
        $phonenumber = $this->mysqli->real_escape_string($phonenumber);
        $vip = $this->mysqli->real_escape_string($vip);

        if (!empty($dayofbirth)) {
            $dayofbirth = \DateTime::createFromFormat('d/m/Y', $dayofbirth)->format('Y-m-d');
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        return $this->mysqli->query("UPDATE users SET fullname='$fullname', username='$username', password='$hashedPassword', 
                                        dayofbirth='$dayofbirth', gender='$gender', phonenumber='$phonenumber', vip='$vip' WHERE id=$userId");
    }

    public function deleteUser($userId)
    {
        $userId = $this->mysqli->real_escape_string($userId);
        $this->mysqli->query("DELETE FROM users WHERE id=$userId");
    }
}
