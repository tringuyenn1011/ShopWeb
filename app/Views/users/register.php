<?php ob_start(); ?>

<h2>Register</h2>

<form action="/user/create" method="post">
    <label for="fullname">Fullname:</label>
    <input type="text" id="fullname" name="fullname" required>
    <br>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <label for="day_of_birth">Date of birth:</label>
    <input type="date" id="day_of_birth" name="day_of_birth" required>
    <br>
    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
    <br>
    <label for="phone_number">Phone Number:</label>
    <input type="tel" id="phone_number" name="phone_number" required>
    <br>
    <input type="submit" value="Đồng Ý">
</form>

<?php $content = ob_get_clean(); ?>
<?php include (__DIR__ . '/../../../templates/layout.php'); ?>