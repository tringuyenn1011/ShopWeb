<?php ob_start(); ?>

<?php
session_start();
if (isset($_SESSION['flash_message'])) {
    echo "<script>alert('" . $_SESSION['flash_message'] . "');</script>";
    unset($_SESSION['flash_message']); // Xóa thông báo sau khi đã hiển thị
}
?>
    <h1>product Form</h1>
    <form action="/product/<?= isset($product['id']) ? "update/$product[id]" : 'create' ?>" method="post">

            <label for="productname">Tên sản phẩm:</label>
            <input type="text" id="productname" name="productname" value="<?= isset($product['productname']) ? $product['productname'] : '' ?>" required><br>

            <label for="category">Phân loại:</label>
            <select id="category" name="category" required>
                <option value="" disabled <?= !isset($product['category']) ? 'selected' : '' ?>>Phân loại</option>
                <option value="shirt" <?= isset($product['category']) && $product['category'] === 'shirt' ? 'selected' : '' ?>>Shirt</option>
                <option value="pant" <?= isset($product['category']) && $product['category'] === 'pant' ? 'selected' : '' ?>>Pant</option>
                <option value="hat" <?= isset($product['category']) && $product['category'] === 'hat' ? 'selected' : '' ?>>Hat</option>
            </select><br>

            <label for="price">Giá:</label>
            <input type="tel" id="price" name="price" 
                pattern="[0-9]+(\.[0-9]{1,2})?" 
                value="<?= isset($product['price']) ? $product['price'] : '' ?>" 
                required><br>

            <label for="detail">Mô tả:</label>
            <input type="text" id="detail" name="detail" value="<?= isset($product['detail']) ? $product['detail'] : '' ?>" required><br>

            <label for="urlimage">URL Hình ảnh:</label>
            <input type="url" id="urlimage" name="urlimage" 
                value="<?= isset($product['urlimage']) ? $product['urlimage'] : '' ?>" required><br>
        <input type="submit" value="<?= isset($product['id']) ? 'Update' : 'Create' ?>">
    </form>
    <a href="product/index">Back to product List</a>
    
    <script>
        flatpickr("#dayofbirth", {
            dateFormat: "d/m/Y", // Định dạng dd/mm/yyyy
            allowInput: true,
        });
    </script>
<?php $content = ob_get_clean(); ?>
<?php include(__DIR__ .  '/../../../templates/layout.php'); ?>