<?php ob_start(); ?>

<?php
session_start();
if (isset($_SESSION['flash_message'])) {
    echo "<script>alert('" . $_SESSION['flash_message'] . "');</script>";
    unset($_SESSION['flash_message']); 
}
?>

<head>
    <link rel="stylesheet" href="../../../public/assets/css/user-form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>


<body class="user-form-page">
    <div class="form-container">
        <h1 class="form-title">User Form</h1>
        <form action="/user/<?= isset($user['id']) ? "update/$user[id]" : 'create' ?>" method="post" class="form">
            <label for="fullname" class="form__label">Họ và tên:</label>
            <input type="text" id="fullname" name="fullname"
                value="<?= isset($user['fullname']) ? $user['fullname'] : '' ?>" class="form__input" required><br>

            <label for="username" class="form__label">Tên đăng nhập:</label>
            <input type="text" id="username" name="username"
                value="<?= isset($user['username']) ? $user['username'] : '' ?>" class="form__input" required><br>

            <label for="password" class="form__label">Mật khẩu:</label>
            <input type="password" id="password" name="password"
                value="<?= isset($user['password']) ? $user['password'] : '' ?>" class="form__input" required><br>

            <label for="dayofbirth" class="form__label">Ngày sinh:</label>
            <input type="text" id="dayofbirth" name="dayofbirth" placeholder="dd/mm/yyyy"
                value="<?= isset($user['dayofbirth']) ? date('d/m/Y', strtotime($user['dayofbirth'])) : '' ?>"
                class="form__input" required><br>

            <label for="gender" class="form__label">Giới tính:</label>
            <select id="gender" name="gender" class="form__select" required>
                <option value="" disabled <?= !isset($user['gender']) ? 'selected' : '' ?>>Chọn giới tính</option>
                <option value="Nam" <?= isset($user['gender']) && $user['gender'] === 'Nam' ? 'selected' : '' ?>>Nam
                </option>
                <option value="Nữ" <?= isset($user['gender']) && $user['gender'] === 'Nữ' ? 'selected' : '' ?>>Nữ
                </option>
                <option value="Khác" <?= isset($user['gender']) && $user['gender'] === 'Khác' ? 'selected' : '' ?>>
                    Khác
                </option>
            </select><br>

            <label for="phonenumber" class="form__label">Số điện thoại:</label>
            <input type="tel" id="phonenumber" name="phonenumber" pattern="[0-9]{10,11}"
                value="<?= isset($user['phonenumber']) ? $user['phonenumber'] : '' ?>" class="form__input" required><br>

            <label for="vip" class="form__label">Loại tài khoản (VIP):</label>
            <select id="vip" name="vip" class="form__select" required>
                <option value="" disabled <?= !isset($user['vip']) ? 'selected' : '' ?>>Chọn loại tài khoản</option>
                <option value="vip" <?= isset($user['vip']) && $user['vip'] == 'vip' ? 'selected' : '' ?>>VIP</option>
                <option value="không" <?= isset($user['vip']) && $user['vip'] == 'không' ? 'selected' : '' ?>>Thường
                </option>
            </select><br>

            <input type="submit" value="<?= isset($user['id']) ? 'Update' : 'Create' ?>" class="form__button">
        </form>
        <a href="user/index" class="form__link">Back to User List</a>
    </div>
</body>


<script>
flatpickr("#dayofbirth", {
    dateFormat: "d/m/Y", // Định dạng dd/mm/yyyy
    allowInput: true,
});
</script>
<?php $content = ob_get_clean(); ?>
<?php include(__DIR__ .  '/../../../templates/layout.php'); ?>