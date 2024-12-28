<?php ob_start(); ?>

    <h1>Product List</h1>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th class="filter-header" data-filter="category">Category</th>
                    <th>Price</th>
                    <th>Detail</th>
                    <th>UrlImage</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo ($product['id']); ?></td>
                    <td><?php echo ($product['productname']); ?></td>
                    <td><?php echo ($product['category']); ?></td>
                    <td><?php echo ($product['price']); ?></td>
                    <td><?php echo ($product['detail']); ?></td>
                    <td>
                        <?php if (!empty($product['urlimage'])): ?>
                            <img src="<?php echo htmlspecialchars($product['urlimage']); ?>" alt="Product Image" style="width: 100px; height: auto;">
                        <?php else: ?>
                            No Image
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="#" 
                            class="btn btn-info btn-sm view-detail" 
                            data-id="<?= $product['id'] ?>" 
                            data-productName="<?= $product['productname'] ?>" 
                            data-category="<?= $product['category'] ?>" 
                            data-price="<?= $product['price'] ?>" 
                            data-detail="<?= $product['detail'] ?>"
                            data-urlImage="<?= $product['urlimage'] ?>">View</a>
                        <a href="/product/update/<?= $product['id'] ?>"
                            class="btn btn-warning btn-sm">Edit</a>
                        <a href="/product/delete/<?= $product['id'] ?>"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Dropdowns -->
    <div id="categoryFilter" class="filter-dropdown" style="display: none;">
        <div data-category="all">All</div>
        <div data-category="shirt">Shirt</div>
        <div data-category="pant">Pant</div>
        <div data-category="hat">Hat</div>
    </div>

    <!-- <ul>
        <?php foreach ($products as $product): ?>
            <li>
                
                <a href="/product/show/<?= $product['id'] ?>">
                    <?= $product['productname'] ?>
                </a>
                
                | <a href="/product/update/<?= $product['id'] ?>">Edit</a>
                | <a href="/product/delete/<?= $product['id'] ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul> -->
    
    <?php
    session_start();

    if(isset($_SESSION['flash_message'])) {
        $message = $_SESSION['flash_message'];
        unset($_SESSION['flash_message']);
        echo $message . '<br>';
    }
    
    ?>
    <a href="/product/create">Add Product</a>
<?php $content = ob_get_clean(); ?>
<?php 
    
    include (__DIR__ . '/../../../templates/layout.php'); 
    include (__DIR__ . '/product-detail.php');        
?>
<!--
</body>
</html>
-->