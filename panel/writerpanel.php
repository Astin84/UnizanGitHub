<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['role'] !== 'writer') {
    header('Location: ../index.php');
    exit();
}

// Handling the form submission for posting an article
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Get the article details
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date('Y-m-d H:i:s');

    // Handle image upload
    $image = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
        $image_target = 'uploads/' . uniqid() . '.' . $image_ext; // Set unique filename for the image

        // Move uploaded image to the server's "uploads" directory
        if (move_uploaded_file($image_tmp, $image_target)) {
            $image = $image_target;
        } else {
            echo "<div class='notification error'>Error uploading image. Please try again.</div>";
        }
    }

    // Here, you would normally save the article data and image path to your database
    echo "<div class='notification'>Article posted successfully! Title: $title</div>";
    if ($image) {
        echo "<div class='notification'>Image uploaded: <img src='$image' width='200' alt='Article Image'></div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writer Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Shabnam&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Shabnam', sans-serif;
            background: #f2f2f2;
            color: #333;
        }

        header {
            background: linear-gradient(135deg, #8a2be2, #7a2ee2); /* بنفش */
            color: #fff;
            padding: 30px 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.5rem;
            text-transform: uppercase;
        }

        nav {
            background-color: #6a1b9a; /* بنفش تیره */
            text-align: center;
            padding: 15px 0;
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
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #8a2be2; /* بنفش روشن */
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h2 {
            color: #333;
            font-size: 2rem;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 1rem;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        textarea:focus,
        select:focus,
        input[type="file"]:focus {
            border-color: #8a2be2; /* بنفش */
            outline: none;
        }

        button {
            background: #8a2be2; /* بنفش */
            color: white;
            padding: 15px 25px;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #7a2ee2; /* بنفش تیره */
        }

        .notification {
            background-color: #8a2be2; /* بنفش */
            color: white;
            padding: 15px;
            margin: 15px 0;
            border-radius: 8px;
            text-align: center;
            font-size: 1.1rem;
            font-weight: bold;
        }

        .notification.error {
            background-color: #f44336;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #6a1b9a; /* بنفش تیره */
            color: white;
            font-size: 1rem;
            margin-top: 40px;
        }

        footer a {
            color: #8a2be2; /* بنفش روشن */
            text-decoration: none;
            font-weight: bold;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            nav a {
                margin: 0 10px;
            }

            .container {
                padding: 20px;
            }

            h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Writer Panel</h1>
</header>

<nav>
    <a href="../index.php">Unizan</a>
    <a href="write_article.php">Write Article</a>
    <a href="manage_articles.php">Manage Articles</a>
    <a href="../action/logout.php">Logout</a>
</nav>

<div class="container">
    <h2>Write a New Article</h2>

    <!-- Article writing form -->
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Article Title</label>
            <input type="text" id="title" name="title" required placeholder="Enter article title" />
        </div>

        <div class="form-group">
            <label for="content">Article Content</label>
            <textarea id="content" name="content" rows="6" required placeholder="Write your article content here..."></textarea>
        </div>

        <div class="form-group">
            <label for="image">Article Image</label>
            <input type="file" id="image" name="image" accept="image/*" />
        </div>

        <button type="submit" name="submit">Post Article</button>
    </form>
</div>

<footer>
    <p>&copy; 2024 Unizan</p>
</footer>

</body>
</html>
