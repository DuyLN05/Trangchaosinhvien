<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form đăng ký cơ bản</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container{
            width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
        input{
            width: 100%;
            padding: 8px;
            margin: 5px 0 10px;
        }
        button{
            padding: 8px 15px;
        }
        .success{
            color: green;
            font-weight: bold;
        }
        .error{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Đăng ký tài khoản</h2>

    <form method="POST">
        <label>Họ tên:</label>
        <input type="text" name="hoten">

        <label>Email:</label>
        <input type="text" name="email">

        <label>Mật khẩu:</label>
        <input type="password" name="matkhau">

        <button type="submit">Đăng ký</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $hoten = trim($_POST["hoten"]);
        $email = trim($_POST["email"]);
        $matkhau = $_POST["matkhau"];

        if(empty($hoten)){
            echo "<p class='error'>Họ tên không được rỗng!</p>";
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<p class='error'>Email không hợp lệ!</p>";
        }
        elseif(strlen($matkhau) < 6){
            echo "<p class='error'>Mật khẩu phải có ít nhất 6 ký tự!</p>";
        }
        else{
            echo "<p class='success'>Đăng ký thành công!</p>";

            echo "<h3>Thông tin người dùng:</h3>";
            echo "Họ tên: " . htmlspecialchars($hoten) . "<br>";
            echo "Email: " . htmlspecialchars($email) . "<br>";
        }
    }
    ?>
</div>

</body>
</html>