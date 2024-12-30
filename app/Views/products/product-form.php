<?php ob_start(); ?>
<?php
session_start();
if (isset($_SESSION['flash_message'])) {
    echo "<script>alert('" . $_SESSION['flash_message'] . "');</script>";
    unset($_SESSION['flash_message']); // Xóa thông báo sau khi đã hiển thị
}
?>
<div class="form-container">
    <h1>Product Form</h1>
    <form action="/product/<?= isset($product['id']) ? "update/$product[id]" : 'create' ?>" method="post">
        <label for="productname">Tên sản phẩm:</label>
        <input class="form-input" type="text" id="productname" name="productname"
            value="<?= isset($product['productname']) ? $product['productname'] : '' ?>" required>

        <label for="category">Phân loại:</label>
        <select class="form-input" id="category" name="category" required>
            <option value="" disabled <?= !isset($product['category']) ? 'selected' : '' ?>>Phân loại</option>
            <option value="shirt"
                <?= isset($product['category']) && $product['category'] === 'shirt' ? 'selected' : '' ?>>Shirt</option>
            <option value="pant"
                <?= isset($product['category']) && $product['category'] === 'pant' ? 'selected' : '' ?>>Pant</option>
            <option value="hat" <?= isset($product['category']) && $product['category'] === 'hat' ? 'selected' : '' ?>>
                Hat</option>
        </select>

        <label for="price">Giá:</label>
        <input class="form-input" type="tel" id="price" name="price" pattern="[0-9]+(\.[0-9]{1,2})?"
            value="<?= isset($product['price']) ? $product['price'] : '' ?>" required>

        <label for="detail">Mô tả:</label>
        <input class="form-input" type="text" id="detail" name="detail"
            value="<?= isset($product['detail']) ? $product['detail'] : '' ?>" required>

        <label for="urlimage">URL Hình ảnh:</label>
        <input class="form-input" type="url" id="urlimage" name="urlimage"
            value="<?= isset($product['urlimage']) ? $product['urlimage'] : '' ?>" required>

        <input class="form-button" type="submit" value="<?= isset($product['id']) ? 'Update' : 'Create' ?>">
    </form>
    <a href="product/index">Back to Product List</a>

</div>

<link rel="stylesheet" href="../../../public/assets/css/product-form.css">
<script>
flatpickr("#dayofbirth", {
    dateFormat: "d/m/Y", // Định dạng dd/mm/yyyy
    allowInput: true,
});
</script>
<?php $content = ob_get_clean(); ?>
<?php include(__DIR__ .  '/../../../templates/layout.php'); ?>