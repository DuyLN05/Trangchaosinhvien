<?php

$name = $email = $major = $skills_input = "";
$errors = [];
$profile_data = null;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $major = trim($_POST['major'] ?? '');
    $skills_input = trim($_POST['skills'] ?? '');

    
    
  
    if (empty($name)) {
        $errors['name'] = "Họ tên không được để trống.";
    }

   
    if (empty($email)) {
        $errors['email'] = "Email không được để trống.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Định dạng email không hợp lệ.";
    }

    
    if (empty($major)) {
        $errors['major'] = "Vui lòng chọn hoặc nhập ngành học.";
    }

    
    if (empty($skills_input)) {
        $errors['skills'] = "Kỹ năng không được để trống.";
    }

    
    if (empty($errors)) {
        
        $skills_array = explode(',', $skills_input);
        
        
        $skills_array = array_map('trim', $skills_array);
       
        $skills_array = array_filter($skills_array); 

        $profile_data = [
            'name' => $name,
            'email' => $email,
            'major' => $major,
            'skills' => $skills_array
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Mini Profile App</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 30px auto; padding: 0 20px; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; font-weight: bold; margin-bottom: 5px; }
        .form-group input, .form-group select { width: 100%; padding: 8px; box-sizing: border-box; }
        .error { color: red; font-size: 14px; margin-top: 5px; }
        .btn { padding: 10px 15px; background: #007BFF; color: #fff; border: none; cursor: pointer; }
        
        /* Style cho Profile Card */
        .profile-card { border: 2px solid #333; padding: 20px; margin-top: 30px; background: #f9f9f9; border-radius: 8px; }
        .profile-card h2 { margin-top: 0; color: #007BFF; }
        .skills-list { padding-left: 20px; }
        .skills-list li { margin-bottom: 5px; }
    </style>
</head>
<body>

    <h1>Mini Profile App</h1>
    
    <form action="" method="POST">
        <div class="form-group">
            <label>Họ tên:</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
            <?php if (isset($errors['name'])): ?>
                <div class="error"><?php echo $errors['name']; ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
            <?php if (isset($errors['email'])): ?>
                <div class="error"><?php echo $errors['email']; ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label>Ngành học:</label>
            <select name="major">
                <option value="">-- Chọn ngành học --</option>
                <option value="Công nghệ thông tin" <?php if($major == "Công nghệ thông tin") echo "selected"; ?>>Công nghệ thông tin</option>
                <option value="Ngôn ngữ anh" <?php if($major == "Ngôn ngữ anh") echo "selected"; ?>>Ngôn ngữ anh</option>
                <option value="Kế toán" <?php if($major == "Kế toán") echo "selected"; ?>>Kế toán</option>
            </select>
            <?php if (isset($errors['major'])): ?>
                <div class="error"><?php echo $errors['major']; ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label>Kỹ năng (phân tách bằng dấu phẩy):</label>
            <input type="text" name="skills" placeholder="Ví dụ: HTML, CSS, PHP, MySQL" value="<?php echo htmlspecialchars($skills_input); ?>">
            <?php if (isset($errors['skills'])): ?>
                <div class="error"><?php echo $errors['skills']; ?></div>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn">Tạo Profile</button>
    </form>

    <?php if ($profile_data): ?>
        <div class="profile-card">
            <h2>Thông tin cá nhân</h2>
            <p><strong>Họ tên:</strong> <?php echo htmlspecialchars($profile_data['name']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($profile_data['email']); ?></p>
            <p><strong>Ngành học:</strong> <?php echo htmlspecialchars($profile_data['major']); ?></p>
            <p><strong>Danh sách kỹ năng:</strong></p>
            <ul class="skills-list">
                <?php foreach ($profile_data['skills'] as $skill): ?>
                    <li><?php echo htmlspecialchars($skill); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

</body>
</html>