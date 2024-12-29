<?php ob_start(); ?>

<h1>Blog</h1>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <link rel="stylesheet" href="style.css"> <!-- Liên kết đến tệp CSS để định dạng -->
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 1rem;
        text-align: center;
    }

    .container {
        max-width: 800px;
        margin: auto;
        padding: 2rem;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
    }

    .post {
        margin-bottom: 2rem;
    }

    .post h2 {
        color: #333;
    }

    .post p {
        line-height: 1.6;
    }

    .post .meta {
        font-size: 0.9rem;
        color: #777;
    }

    footer {
        text-align: center;
        padding: 1rem;
        background-color: #333;
        color: #fff;
        position: fixed;
        width: 100%;
        bottom: 0;
    }
    </style>
</head>

<body>
    <header>
        <h1>My Simple Blog</h1>
    </header>
    <div class="container">
        <article class="post">
            <h2>Bài Viết 1</h2>
            <p class="meta">Ngày đăng: 28/12/2024 | Tác giả: Minh</p>
            <p>Đây là nội dung của bài viết đầu tiên trên blog của tôi. Tôi sẽ chia sẻ về những điều thú vị trong cuộc
                sống.</p>
        </article>
        <article class="post">
            <h2>Bài Viết 2</h2>
            <p class="meta">Ngày đăng: 27/12/2024 | Tác giả: My</p>
            <p>Bài viết thứ hai sẽ nói về những trải nghiệm cá nhân của tôi trong hành trình khám phá thế giới.</p>
        </article>
        <article class="post">
            <h2>Bài Viết 3</h2>
            <p class="meta">Ngày đăng: 26/12/2024 | Tác giả: Tri</p>
            <p>Trong bài viết này, tôi muốn chia sẻ những mẹo vặt và kinh nghiệm trong cuộc sống hàng ngày.</p>
        </article>
    </div>
    <footer>
        <p>&copy; 2024 My Simple Blog</p>
    </footer>
</body>

<?php $content = ob_get_clean(); ?>
<?php include (__DIR__ . '/../../../templates/layout.php'); ?>