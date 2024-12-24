<?php ob_start(); ?>

    <h1>User List</h1>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo ($user['id']); ?></td>
                    <td><?php echo ($user['username']); ?></td>
                    <td><?php echo ($user['firstname']); ?></td>
                    <td><?php echo ($user['lastname']); ?></td>
                    <td><?php echo ($user['email']); ?></td>
                    <td>
                        <a href="/user/show/<?= $user['id'] ?>"
                            class="btn btn-info btn-sm">View</a>
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
<?php include (__DIR__ . '/../../../templates/layout.php'); ?>
<!--
</body>
</html>
-->