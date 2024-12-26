<?php ob_start(); ?>

<?php
session_start();
if (isset($_SESSION['flash_message'])) {
    echo "<script>alert('" . $_SESSION['flash_message'] . "');</script>";
    unset($_SESSION['flash_message']); // Xóa thông báo sau khi đã hiển thị
}
?>
    <h1>User Form</h1>
    <form action="/user/<?= isset($user['id']) ? "update/$user[id]" : 'create' ?>" method="post">
            <label for="fullname">Họ và tên:</label>
            <input type="text" id="fullname" name="fullname" value="<?= isset($user['fullname']) ? $user['fullname'] : '' ?>" required><br>

            <label for="username">Tên đăng nhập:</label>
            <input type="text" id="username" name="username" value="<?= isset($user['username']) ? $user['username'] : '' ?>" required><br>

            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required><br>

            <label for="dayofbirth">Ngày sinh:</label>
            <input type="text" id="dayofbirth" name="dayofbirth" placeholder="dd/mm/yyyy" 
            value="<?= isset($user['dayofbirth']) ? date('d/m/Y', strtotime($user['dayofbirth'])) : '' ?>" required><br>
            

            <label for="gender">Giới tính:</label>
            <select id="gender" name="gender" required>
                <option value="" disabled <?= !isset($user['gender']) ? 'selected' : '' ?>>Chọn giới tính</option>
                <option value="Nam" <?= isset($user['gender']) && $user['gender'] === 'Nam' ? 'selected' : '' ?>>Nam</option>
                <option value="Nữ" <?= isset($user['gender']) && $user['gender'] === 'Nữ' ? 'selected' : '' ?>>Nữ</option>
                <option value="Khác" <?= isset($user['gender']) && $user['gender'] === 'Khác' ? 'selected' : '' ?>>Khác</option>
            </select><br>

            <label for="phonenumber">Số điện thoại:</label>
            <input type="tel" id="phonenumber" name="phonenumber" pattern="[0-9]{10,11}" 
                value="<?= isset($user['phonenumber']) ? $user['phonenumber'] : '' ?>" required><br>

            <label for="vip">Loại tài khoản (VIP):</label>
            <select id="vip" name="vip" required>
                <option value="" disabled <?= !isset($user['vip']) ? 'selected' : '' ?>>Chọn loại tài khoản</option>
                <option value="0" <?= isset($user['vip']) && $user['vip'] == 0 ? 'selected' : '' ?>>Thường</option>
                <option value="1" <?= isset($user['vip']) && $user['vip'] == 1 ? 'selected' : '' ?>>VIP</option>
            </select><br>

        <input type="submit" value="<?= isset($user['id']) ? 'Update' : 'Create' ?>">
    </form>
    <a href="user/index">Back to User List</a>
    
    <script>
        flatpickr("#dayofbirth", {
            dateFormat: "d/m/Y", // Định dạng dd/mm/yyyy
            allowInput: true,
        });
    </script>
<?php $content = ob_get_clean(); ?>
<?php include(__DIR__ .  '/../../../templates/layout.php'); ?>