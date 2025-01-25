<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About page</title>
    <style>
        body {
            font-family: Shabnam, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background: linear-gradient(135deg, #8a2be2, #7a2ee2); 
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        nav {
            background: #6a1b9a; 
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
            color: #8a2be2; 
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-size: 1rem;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        button {
            background: #8a2be2;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
        }

        button:hover {
            background: #7a2ee2;
        }

        .notification {
            background-color: #8a2be2;
            color: white;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            text-align: center;
        }

        .notification.error {
            background-color: #f44336;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background: #6a1b9a;
            color: #fff;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<nav>
    <a href="index.php">Unizan</a>
</nav>

<div class="container">
    <p style="margin-left: 22em;">
        Ali Setayesh - 402407025<br><br><br>
        Matin Saeed - 402407026<br><br><br>
        Yasin Firoozi - 402405032
    </p>
</div>

<footer>
    <p>&copy; 2024 Unizan</p>
</footer>

</body>
</html>
