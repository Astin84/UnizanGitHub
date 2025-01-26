<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unizan</title>
    <link href="https://fonts.googleapis.com/css2?family=Shabnam&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Shabnam', sans-serif;
            background: #f0f4f8;
            color: #333;
            line-height: 1.6;
        }

        header {
            background: linear-gradient(135deg, #8a2be2, #7a2ee2); /* بنفش */
    color: white;
    padding: 30px 0;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: center;
    align-items: center;
}

.header-logo {
    position: absolute;
    left: 20px;
    top: 20px;
    width: 80px;
    height: auto;
}
        

        header h1 {
            font-size: 2.5rem;
        }

        nav {
            background-color: #6a1b9a; /* بنفش تیره */
            text-align: center;
            padding: 12px 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 20px;
            font-size: 1rem;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        nav a:hover {
            color: #8a2be2; /* بنفش روشن */
        }

        .container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 0 20px;
        }

        article {
            background: white;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        article:hover {
            transform: translateY(-10px);
        }

        article h2 {
            padding: 20px;
            font-size: 1.8rem;
            color: #333;
        }

        article p {
            padding: 0 20px 20px;
            color: #777;
            font-size: 1rem;
        }

        article a {
            display: inline-block;
            padding: 10px 20px;
            margin: 0 20px 20px;
            background: #8a2be2; /* بنفش */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        article a:hover {
            background: #7a2ee2; /* بنفش تیره */
        }

        footer {
            background: #6a1b9a; /* بنفش تیره */
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 1rem;
        }

        footer a {
            color: #8a2be2; /* بنفش روشن */
            text-decoration: none;
            font-weight: bold;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Media Queries for Mobile */
        @media (max-width: 768px) {
            nav a {
                margin: 0 10px;
            }

            article h2 {
                font-size: 1.6rem;
            }

            footer {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>

<header>
    <img src="bahonar_logo.png" alt="Bahonar University Logo" class="header-logo">
    <h1>Unizan</h1>
</header>

<nav>
    <a href="index.php">Unizan</a>
    <a href="about2.php">About</a>
    <?php if (isset($_SESSION['role']) && $_SESSION['role'] == "writer") { ?>
        <a href="panel/writerpanel.php">Writer Panel</a>
    <?php } ?>
    <?php if (isset($_SESSION['role']) && $_SESSION['role'] == "admin") { ?>
        <a href="panel/adminpanel.php">Admin Panel</a>
    <?php } ?>
    <?php if (isset($_SESSION['role']) && $_SESSION['role'] == "user") { ?>
        <a href="panel/userpanel.php">User Panel</a>
    <?php } ?>

    <?php if(isset($_SESSION['login'])){ ?>
    <a href="action/logout.php">Logout</a>
    <?php } else{ ?>
        <a href="login.php">Login</a>
    <?php } ?>
</nav>

<div class="container">
    <article>
        <h2>Usecase Diagram</h2>
        <p>نمودار **موارد استفاده** ابزاری برای نمایش عملکردهای مختلف سیستم از دیدگاه کاربران است. این نمودار شامل دو بخش اصلی می‌شود</p>
        <nav>
        <a href="usecase.php">Read More...</a>
        </nav>
    </article>

    <article>
        <h2>Activity Diagram</h2>
        <p>نمودار **فعالیت** یکی از ابزارهای گرافیکی است که جریان فرآیندها و فعالیت‌های مختلف سیستم را به صورت بصری نمایش می‌دهد. این نمودار به طراحان کمک می‌کند تا روند اجرای یک فرآیند را بهتر درک کنند و نقاط کلیدی آن را شناسایی کنند</p>
        <nav>
        <a href="activity.php">Read More...</a>
        </nav>
    </article>

    <article>
        <h2>Class Diagram</h2>
        <p>نمودار **کلاس** یکی از انواع نمودارهای ساختاری در UML است که ساختار کلی سیستم را از طریق نمایش کلاس‌ها، ویژگی‌ها، عملیات، و روابط بین آن‌ها نشان می‌دهد. این نمودار به طور گسترده در طراحی سیستم‌های شیءگرا استفاده می‌شود</p>
        <nav>
        <a href="class.php">Read More...</a>
        </nav>
    </article>

    <article>
        <h2>Sequence Diagram</h2>
        <p>نمودار **توالی** یکی از نمودارهای مهم در UML است که نحوه تعامل اشیا را در یک سناریوی خاص نمایش می‌دهد. این نمودار ترتیب زمانی پیام‌ها و تعاملات بین اشیا را نشان می‌دهد</p>
        <nav>
        <a href="sequence.php">Read More...</a>
        </nav>
    </article>

    <article>
        <h2>Machine Diagram</h2>
        <p>نمودار **ماشین حالت** ابزاری برای نمایش تغییر وضعیت‌های یک شیء یا سیستم در طول چرخه حیات آن است. این نمودار شامل عناصر زیر است</p>
        <nav>
        <a href="machine.php">Read More...</a>
        </nav>
    </article>

    <article>
        <h2>نظرسنجی کتابخانه دانشگاه</h2>
        <p>نمودار **ماشین حالت** ابزاری برای نمایش تغییر وضعیت‌های یک شیء یا سیستم در طول چرخه حیات آن است. این نمودار شامل عناصر زیر است</p>
        <nav>
        <a href="votelib.php">Read More...</a>
        </nav>
    </article>
</div>

<footer>
    <p>&copy; 2024 Unizan</p>
</footer>

</body>
</html>
