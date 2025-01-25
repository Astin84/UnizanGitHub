<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usecase</title>
    <style>
        body {
            font-family: Shabnam, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
            direction: rtl; /* راست‌چین کردن کل صفحه */
        }

        header {
            background: #800080; /* بنفش */
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        nav {
            background: #6a006a; /* بنفش تیره */
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1rem;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1, h2, h3 {
            color: #333;
        }

        article {
            margin-bottom: 20px;
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }

        article:last-child {
            border-bottom: none;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background: #800080;
            color: #fff;
        }

        a {
            color: #0066cc;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .image-center {
            display: block;
            margin: 20px auto;
            width: 60%;
            border-radius: 8px;
        }

        .usecase-desc {
            font-size: 1rem;
            line-height: 1.8;
            color: #555;
        }

        .usecase-title {
            font-size: 1.3rem;
            color: #800080;
        }

        .comments-section {
            margin-top: 30px;
        }

        .comments-section h3 {
            margin-bottom: 15px;
        }

        .comments-section form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .comments-section textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: Shabnam, sans-serif;
        }

        .comments-section button {
            background: #800080;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .comments-section button:hover {
            background: #6a006a;
        }

        .comment {
            margin-top: 10px;
            padding: 10px;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .comment strong {
            color: #800080;
        }
    </style>
</head>
<body>

<nav>
    <a href="index.php">Unizan</a>
    <a href="about2.php">About</a>
    <?php if (isset($_SESSION['role']) && $_SESSION['role'] == "writer") { ?>
        <a href="panel/writerpanel.php">Writer panel</a>
    <?php } ?>
    <?php if (isset($_SESSION['role']) && $_SESSION['role'] == "admin") { ?>
        <a href="panel/adminpanel.php">Admin panel</a>
    <?php } ?>
    <?php if (isset($_SESSION['role']) && $_SESSION['role'] == "user") { ?>
        <a href="panel/userpanel.php">User panel</a>
    <?php } ?>

    <?php if(isset($_SESSION['login'])){ ?>
    <a href="action/logout.php">logout</a>
    <?php } else{ ?>
        <a href="login.php">login</a>
    <?php } ?>
</nav>

<div class="container">
    <article>
        <h2>توضیحات نمودار موارد استفاده (Use Case Diagram):</h2>
        <img src="usecase.jpeg" alt="Use Case Diagram Example" class="image-center">
        <div class="usecase-desc">
            <p class="usecase-title">نمودار موارد استفاده (Use Case Diagram) چیست؟</p>
            <p>
                نمودار **موارد استفاده** ابزاری برای نمایش عملکردهای مختلف سیستم از دیدگاه کاربران است. این نمودار شامل دو بخش اصلی می‌شود:
            </p>
            <ul>
                <li><strong>بازیگران (Actors):</strong> افرادی که با سیستم ارتباط دارند، مانند کاربران، مدیران، و نویسندگان.</li>
                <li><strong>موارد استفاده (Use Cases):</strong> وظایفی که سیستم انجام می‌دهد و کاربران می‌توانند آن‌ها را انجام دهند، مانند ثبت‌نام، نوشتن پست و مشاهده پست‌ها.</li>
            </ul>
            <p>
                ارتباط بین **بازیگران** و **موارد استفاده** با خطوطی نشان داده می‌شود که مشخص می‌کند کدام بازیگر توانایی انجام کدام عملیات را دارد. در اینجا چند مثال از موارد استفاده در سیستم وبلاگ آورده‌ایم:
            </p>
            <ul>
                <li><strong>ادمین:</strong> می‌تواند کاربران را مدیریت کند، پست‌ها را اضافه، ویرایش و حذف کند، گزارش‌ها را بررسی کند.</li>
                <li><strong>نویسنده:</strong> می‌تواند پست‌ها را بنویسد، ویرایش کند و پست‌های خود را منتشر کند.</li>
                <li><strong>کاربر:</strong> می‌تواند پست‌ها را مشاهده کند، نظر بگذارد، و در خبرنامه‌ها عضو شود.</li>
            </ul>
            <p>
                به طور کلی، نمودارهای **موارد استفاده** کمک می‌کنند تا سیستم را از دیدگاه کاربر بررسی کنیم و نیازهای اصلی کاربران را شناسایی کنیم. این نمودارها به تحلیلگران سیستم، طراحان و تیم‌های توسعه کمک می‌کند تا ساختار سیستم و روابط بین اجزای مختلف آن را بهتر درک کنند.
            </p>
        </div>
    </article>

    <div class="comments-section">
        <h3>ارسال نظر:</h3>
        <form action="submit_comment.php" method="POST">
            <textarea name="comment" placeholder="نظر خود را بنویسید..."></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<footer>
    <p>&copy; 2024 Unizan</p>
</footer>

</body>
</html>