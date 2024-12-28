<?php ob_start(); ?>
    <h1>User List</h1>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Họ và tên</th>
                    <th>Tên tài khoản</th>
                    <th>Số điện thoại</th>
                    <th>Vip</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo ($user['id']); ?></td>
                    <td><?php echo ($user['fullname']); ?></td>
                    <td><?php echo ($user['username']); ?></td>
                    <td><?php echo ($user['phonenumber']); ?></td>
                    <td><?php echo ($user['vip']); ?></td>
                    <td>
                        <a href="#" 
                            class="btn btn-info btn-sm view-detail" 
                            data-id="<?= $user['id'] ?>" 
                            data-fullname="<?= $user['fullname'] ?>" 
                            data-username="<?= $user['username'] ?>" 
                            data-password="<?= $user['password'] ?>" 
                            data-dayofbirth="<?= $user['dayofbirth'] ?>"
                            data-gender="<?= $user['gender'] ?>"
                            data-phonenumber="<?= $user['phonenumber'] ?>"
                            data-vip="<?= $user['vip'] ?>">View</a>
                        <a href="/user/update/<?= $user['id'] ?>"
                            class="btn btn-warning btn-sm">Edit</a>
                        <a href="/user/delete/<?= $user['id'] ?>"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- <ul>
        <?php foreach ($users as $user): ?>
            <li>
                
                <a href="/user/show/<?= $user['id'] ?>">
                    <?= $user['username'] ?>
                </a>
                
                | <a href="/user/update/<?= $user['id'] ?>">Edit</a>
                | <a href="/user/delete/<?= $user['id'] ?>">Delete</a>
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
    <a href="/user/create">Add User</a>
<?php $content = ob_get_clean(); ?>
<?php 
    include (__DIR__ . '/../../../templates/layout.php'); 
    include (__DIR__ . '/user-detail.php'); 
?>
<!--
</body>
</html>
-->

<script src="../../../public/assets/js/script.js"></script>
