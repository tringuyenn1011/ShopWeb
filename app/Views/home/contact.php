<?php ob_start(); ?>

<style>
body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

h1 {
    text-align: center;
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

th,
td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
</style>

<body>
    <h1>Contact</h1>
    <table border="1" style="width:100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>Họ và tên</th>
                <th>Facebook</th>
                <th>Số điện thoại</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nguyễn Đình Nhật Minh</td>
                <td><a href="https://facebook.com/rum2k3" target="_blank">Facebook</a></td>
                <td>0332991854</td>
            </tr>
            <tr>
                <td>Dương Thị Trà My</td>
                <td><a href="https://www.facebook.com/trisnguyennn1011/friends/" target="_blank">Facebook</a></td>
                <td>0862645589</td>
            </tr>
            <tr>
                <td>Nguyễn Ngọc Trí</td>
                <td><a href="https://www.facebook.com/trisnguyennn1011" target="_blank">Facebook</a></td>
                <td>0856772808</td>
            </tr>
        </tbody>
    </table>
</body>



<?php $content = ob_get_clean(); ?>
<?php include (__DIR__ . '/../../../templates/layout.php'); ?>