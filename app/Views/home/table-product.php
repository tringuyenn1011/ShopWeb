<head>
    <title>Product Grid</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <!-- <h1 class="text-center mb-4">Danh Sách Sản Phẩm</h1> -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
            <div class="col">
                <div class="card h-100">
                    <style></style>
                    <img src="<?php echo htmlspecialchars($product['urlimage']); ?>" class="card-img-top"
                        alt="Product Image" style="width: 100%;height:350px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($product['productname']); ?></h5>
                        <p class="card-text">Giá: <strong><?php echo htmlspecialchars($product['price']); ?>
                                đ</strong>
                        </p>
                        <a href="#" class="btn btn-info btn-sm view-detail" data-id="<?= $product['id'] ?>"
                            data-productName="<?= $product['productname'] ?>"
                            data-category="<?= $product['category'] ?>" data-price="<?= $product['price'] ?>"
                            data-detail="<?= $product['detail'] ?>" data-urlImage="<?= $product['urlimage'] ?>">Chi
                            tiết</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php else: ?>
            <p class="text-center">Không có sản phẩm nào.</p>
            <?php endif; ?>
        </div>
    </div>
    <?php

include __DIR__ . '/../products/product-detail.php';
?>
</body>