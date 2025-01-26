<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>َClass</title>
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

        .diagram-desc {
            font-size: 1rem;
            line-height: 1.8;
            color: #555;
        }

        .diagram-title {
            font-size: 1.3rem;
            color: #800080;
        }

        .rating-section {
            text-align: center;
            margin: 20px 0;
        }

        .rating-stars {
            display: flex;
            justify-content: center;
            gap: 5px;
        }

        .rating-stars label {
            cursor: pointer;
            font-size: 2rem;
            color: #ddd;
            transition: color 0.3s;
        }

        .rating-stars input {
            display: none;
        }

        .rating-stars input:checked ~ label,
        .rating-stars input:checked ~ label ~ label {
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
        <h2>توضیحات نمودار کلاس (Class Diagram):</h2>
        <img src="images/class.jpeg" alt="Class Diagram Example" class="image-center">
        <div class="diagram-desc">
            <p class="diagram-title">نمودار کلاس (Class Diagram) چیست؟</p>
            <p>
                نمودار **کلاس** یکی از انواع نمودارهای ساختاری در UML است که ساختار کلی سیستم را از طریق نمایش کلاس‌ها، ویژگی‌ها، عملیات، و روابط بین آن‌ها نشان می‌دهد. این نمودار به طور گسترده در طراحی سیستم‌های شیءگرا استفاده می‌شود.
            </p>
            <p>
                اجزای اصلی یک نمودار کلاس عبارتند از:
            </p>
            <ul>
                <li><strong>کلاس:</strong> نمایش‌دهنده یک موجودیت در سیستم که شامل ویژگی‌ها (Attributes) و عملیات (Methods) است.</li>
                <li><strong>ارتباطات:</strong> روابط بین کلاس‌ها شامل وابستگی (Dependency)، تعمیم (Generalization)، و تجمع (Aggregation).</li>
                <li><strong>قیدها:</strong> محدودیت‌هایی که بر روابط یا ویژگی‌های کلاس‌ها اعمال می‌شود.</li>
            </ul>
            <p>
                نمودار کلاس به طراحان و توسعه‌دهندگان کمک می‌کند تا ساختار سیستم را بهتر درک کنند و ارتباط بین اجزای مختلف سیستم را مدل‌سازی کنند.
            </p>
        </div>
    </article>

    <div class="rating-section">
        <h3>امتیاز شما:</h3>
        <form action="submit_rating.php" method="POST">
            <div class="rating-stars">
                <input type="radio" id="star5" name="rating" value="5">
                <label for="star5">&#9733;</label>
                <input type="radio" id="star4" name="rating" value="4">
                <label for="star4">&#9733;</label>
                <input type="radio" id="star3" name="rating" value="3">
                <label for="star3">&#9733;</label>
                <input type="radio" id="star2" name="rating" value="2">
                <label for="star2">&#9733;</label>
                <input type="radio" id="star1" name="rating" value="1">
                <label for="star1">&#9733;</label>
            </div>
            <button type="submit">ارسال امتیاز</button>
        </form>
    </div>

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
