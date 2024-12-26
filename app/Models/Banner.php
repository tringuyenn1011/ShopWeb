<?php
namespace App\Models;
class Banner{
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
    
    public function getAllBanners()
    {
        $sql = "SELECT url FROM banner";
        $result = $this->mysqli->query($sql);

        $banners = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $banners[] = $row['url'];
            }
        }

        return $banners;
    }
    
    public function __destruct()
    {
        $this->mysqli->close();
    }
}

?>