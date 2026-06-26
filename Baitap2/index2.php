<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách khóa học</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }

        h2 {
            text-align: center;
            color: blue;
        }
    </style>
</head>
<body>

<?php
    $khoaHoc = ["HTML", "CSS", "JavaScript", "PHP"];
?>

<div class="container">
    <h2>Danh sách khóa học</h2>

    <ul>
        <?php foreach ($khoaHoc as $khoa): ?>
            <li>
                <?php
                    echo $khoa;

                    if ($khoa == "PHP") {
                        echo " - Đang học";
                    }
                ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

</body>
</html>