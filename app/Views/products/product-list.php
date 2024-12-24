<?php ob_start(); ?>

    <h1>Product List</h1>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Category</th>
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
                    <td><?php echo ($product['productName']); ?></td>
                    <td><?php echo ($product['category']); ?></td>
                    <td><?php echo ($product['price']); ?></td>
                    <td><?php echo ($product['detail']); ?></td>
                    <td><?php echo ($product['urlImage']); ?></td>
                    <td>
                        <a href="index.php?action=show&id=<?php echo $product['id']; ?>"
                            class="btn btn-info btn-sm">View</a>
                        <a href="index.php?action=update&id=<?php echo $product['id']; ?>"
                            class="btn btn-warning btn-sm">Edit</a>
                        <a href="index.php?action=delete&id=<?php echo $product['id']; ?>"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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
<?php include (__DIR__ . '/../../../templates/layout.php'); ?>
<!--
</body>
</html>
-->