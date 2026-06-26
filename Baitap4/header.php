<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Website PHP</title>
    <style>
       body{
            font-family: Arial, sans-serif;
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header{
            background: #007bff;
            color: white;
            padding: 15px;
        }

        nav a{
            color: white;
            text-decoration: none;
            margin-right: 15px;
        }

        .content{
            flex: 1;
            padding: 20px;
        }

        footer{
            background: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>

<header>
    <h2>PHP WEBSITE</h2>

    <nav>
        <a href="index4.php">Trang chủ</a>
        <a href="about.php">Giới thiệu</a>
    </nav>
</header>

<div class="content">