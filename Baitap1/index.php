
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chào sinh viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .card {
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

        p {
            font-size: 18px;
        }

        .message {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
    $hoTen = "Lý Phong";
    $tuoi = 25;
    $nganhHoc = "Công nghệ thông tin";
    $email = "youngtobiedasik@gmail.com";
?>

<div class="card">
    <h2>Thông tin sinh viên</h2>

    <p><strong>Họ tên:</strong> <?php echo $hoTen; ?></p>
    <p><strong>Tuổi:</strong> <?php echo $tuoi; ?></p>
    <p><strong>Ngành học:</strong> <?php echo $nganhHoc; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>

    <?php
        if ($tuoi >= 18) {
            echo "<p class='message'>Đủ tuổi học đại học</p>";
        } else {
            echo "<p class='message'>Chưa đủ tuổi học đại học</p>";
        }
    ?>
</div>

</body>
</html>