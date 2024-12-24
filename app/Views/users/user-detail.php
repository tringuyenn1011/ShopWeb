<?php ob_start(); ?>
    <h1>User Form</h1>
    <form action="/user/index/<?= isset($user['id']) ? "show/$user[id]" : 'create' ?>" method="post">

        <!-- Popup Modal -->
        <div id="popupModal" class="modal">
            <div class="modal-content">
                <span class="close-button">&times;</span>
                <h2>Thông tin chi tiết</h2>
                <p>Đây là nội dung bạn muốn hiển thị trong bảng popup.</p>
            </div>
        </div>    

        <script src="script.js"></script>

        <!-- <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?= isset($user['username']) ? $user['username'] : '' ?>" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= isset($user['email']) ? $user['email'] : '' ?>" required><br> -->

        <input type="submit" value="<?= isset($user['id']) ? 'Update' : 'Create' ?>">
    </form>
    <a href="/index.php">Back to User List</a>
<?php $content = ob_get_clean(); ?>
<?php include(__DIR__ .  '/../../../templates/layout.php'); ?>