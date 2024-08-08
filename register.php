<?php
require_once "config.php";

// Check if the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // ... (PHP code remains unchanged)
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;600&display=swap');

        body {
            font-family: 'Prompt', sans-serif;
            background-color: #f0f8ff;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .register-container {
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 113, 195, 0.1);
            overflow: hidden;
        }
        .register-image {
            background: url('https://source.unsplash.com/random/1000x800?blue') center/cover no-repeat;
            min-height: 400px;
        }
        .register-form {
            padding: 40px;
        }
        .register-title {
            color: #0071C3;
            margin-bottom: 30px;
            font-weight: 600;
        }
        .form-control, .form-select {
            border-radius: 10px;
            padding: 12px;
            border: 2px solid #e0e0e0;
            transition: all 0.3s;
        }
        .form-control:focus, .form-select:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 113, 195, 0.25);
            border-color: #0071C3;
        }
        .btn-register {
            padding: 12px;
            font-size: 18px;
            font-weight: 600;
            border-radius: 10px;
            background-color: #0071C3;
            border: none;
            color: #fff;
            transition: all 0.3s;
        }
        .btn-register:hover {
            background-color: #005a9e;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 113, 195, 0.3);
        }
        .input-group-text {
            background-color: transparent;
            border: none;
            color: #0071C3;
        }
        .form-floating > label {
            padding-left: 40px;
        }
        .form-floating > .form-control, .form-floating > .form-select {
            padding-left: 40px;
        }
        .input-icon {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            z-index: 10;
            color: #0071C3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="register-container row">
            <div class="col-md-6 register-image"></div>
            <div class="col-md-6 register-form">
                <h2 class="register-title text-center">ลงทะเบียน</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-floating mb-3 position-relative">
                        <i class="fas fa-user input-icon"></i>
                        <input type="text" id="username" name="username" class="form-control" placeholder="ชื่อผู้ใช้" required>
                        <label for="username">ชื่อผู้ใช้</label>
                    </div>
                    <div class="form-floating mb-3 position-relative">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" id="password" name="password" class="form-control" placeholder="รหัสผ่าน" required>
                        <label for="password">รหัสผ่าน</label>
                    </div>
                    <div class="form-floating mb-3 position-relative">
                        <i class="fas fa-user-circle input-icon"></i>
                        <input type="text" id="First_name" name="First_name" class="form-control" placeholder="ชื่อ" required>
                        <label for="First_name">ชื่อ</label>
                    </div>
                    <div class="form-floating mb-3 position-relative">
                        <i class="fas fa-user-circle input-icon"></i>
                        <input type="text" id="Last_name" name="Last_name" class="form-control" placeholder="นามสกุล" required>
                        <label for="Last_name">นามสกุล</label>
                    </div>
                    <div class="form-floating mb-3 position-relative">
                        <i class="fas fa-home input-icon"></i>
                        <input type="text" id="room_number" name="room_number" class="form-control" placeholder="เลขห้อง" required>
                        <label for="room_number">เลขห้อง</label>
                    </div>
                    <div class="form-floating mb-4 position-relative">
                        <i class="fas fa-user-tag input-icon"></i>
                        <select id="role" name="role" class="form-select" required>
                            <option value="" disabled selected>เลือกบทบาท</option>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                            <option value="3">Technician</option>
                        </select>
                        <label for="role">บทบาท</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-register">ลงทะเบียน</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>