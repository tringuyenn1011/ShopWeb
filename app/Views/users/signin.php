<?php ob_start(); ?>

<link rel="stylesheet" href="../../../public/assets/css/signin.css">

<body>
    <div class="form-container">
        <h2>Sign In</h2>
        <form action="/auth/validate" method="post" class="form form--signin">
            <label for="username" class="form__label">Username:</label>
            <input type="text" id="username" name="username" class="form__input" required>
            <br>
            <label for="password" class="form__label">Password:</label>
            <input type="password" id="password" name="password" class="form__input">
            <br>
            <input type="submit" value="Sign In" class="form__button">
        </form>

        <form action="/user/register" method="get" class="form form--register">
            <p class="form__text">Nếu bạn chưa có Tài khoản</p>
            <input type="submit" value="Register" class="form__button form__button--register">
        </form>
    </div>
</body>
<?php

    session_start();
    if(isset($_SESSION['flash_message'])) {
        $message = $_SESSION['flash_message'];
        unset($_SESSION['flash_message']);
        echo $message . '<br>';
    }
    ?>
<?php $content = ob_get_clean(); ?>
<?php include(__DIR__ .  '/../../../templates/layout.php'); ?>