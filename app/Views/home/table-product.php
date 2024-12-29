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
            <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo htmlspecialchars($product['id']); ?></td>
                <td><?php echo htmlspecialchars($product['productname']); ?></td>
                <td><?php echo htmlspecialchars($product['category']); ?></td>
                <td><?php echo htmlspecialchars($product['price']); ?></td>
                <td><?php echo htmlspecialchars($product['detail']); ?></td>
                <td>
                    <?php if (!empty($product['urlimage'])): ?>
                    <img src="<?php echo htmlspecialchars($product['urlimage']); ?>" alt="Product Image"
                        style="width: 100px; height: auto;">
                    <?php else: ?>
                    No Image
                    <?php endif; ?>
                </td>
                <td>
                    <!-- Add your action buttons or links here -->
                </td>
            </tr>
            <?php endforeach; ?>
            <?php else: ?>
            <tr>
                <td colspan="7">No products available</td>
            </tr>
            <?php endif; ?>
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


<a href="/product/create">Add Product</a>