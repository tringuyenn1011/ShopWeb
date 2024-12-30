<?php ob_start(); ?>
<h1>Product Index Page</h1>

<?php
    session_start();

    if(isset($_SESSION['flash_message'])) {
        $message = $_SESSION['flash_message'];
        unset($_SESSION['flash_message']);
        echo $message . '<br>';
    }
    

    // Assuming you have a function to check if a product is logged in
    function isproductLoggedIn() {
        return isset($_SESSION['currentproduct']) && !empty($_SESSION['currentproduct']);
    }
    
    // Include your header or common HTML structure here

    // Display login or logout button based on session
    if (isproductLoggedIn()) {
        echo '<p>You have logged in</p>';
        echo '<h2>product index page content</h2>';
        echo '<form method="post" action="/product/logout">';

        echo '<input type="submit" name="logout" value="Logout">';
        echo '</form>';
    } else {
        echo '<p>You need to login to view content</p>';
        echo '<form method="post" action="/product/signin">';

        echo '<input type="submit" name="login" value="Login">';
        echo '</form>';
    }

    ?>

<a href="/product/create" class="add-product-bth">Add product</a>

<?php $content = ob_get_clean(); ?>
<?php include (__DIR__ . '/../../../templates/layout.php'); ?>