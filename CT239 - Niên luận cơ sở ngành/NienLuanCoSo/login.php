<?php
include "connect.php"; // kết nối với file connect

session_start();

// Kiểm tra đăng nhập 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["email"])) { $email = $_POST['email']; }
    if(isset($_POST["password"])) { $password = $_POST['password']; }

    //Code kiểm tra tài khoản trong cơ sở dữ liệu
    $sql = "SELECT * FROM taikhoan WHERE tentaikhoan = '$email' AND matkhau = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Tài khoản hợp lệ, tiến hành đăng nhập
        $_SESSION['email'] = $email;
        header('location: admin.php');
    }
}

$emailtext = "";
$passtext = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["emailtext"])) { $emailtext = $_POST['emailtext']; }
    if(isset($_POST["passtext"])) { $passtext = $_POST['passtext']; }
   

    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO taikhoan (tentaikhoan, matkhau)
    VALUES ('$emailtext', '$passtext')";
    if ($conn->query($sql) === TRUE) {
        // Insert thành công
        // echo 'thành công';
    } else {
        // Insert thất bại
        // echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="font/themify-icons/themify-icons.css">
    <title>Đăng nhập</title>
</head>

<body>

    <div class="box_content loginForm">
        <div class="box_icon-user">
            <i class="ti-user"></i>
        </div>
        <h2>Đăng nhập</h2>
        <form action="login.php" method="post">
            <div>
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="input_pass">
                <input type="password" name="password" placeholder="Password" class="pas3">
                <span class="show__pass" id="show-3">show</span>
            </div>
            <div class="new__acc">
                <p class="register">Đăng ký thành viên</p>
            </div>
            <button type="submit" name="dangnhap" class="btn">Đăng nhập</button>
        </form>
    </div>

    <div class="box_content registerForm hide">
        <div class="box_icon-user">
            <i class="ti-user"></i>
        </div>
        <h2>Đăng Ký</h2>
        <form action="login.php" method="post">
            <div>
                <input type="text" name="emailtext" placeholder="Email">
            </div>
            <div class="input_pass">
                <input type="password" name="passtext" placeholder="New password" class="pas1">
                <span class="show__pass" id="show-1">show</span>
            </div>
            <div class="input_pass">
                <input type="password" placeholder="Re-type password" class="pas2">
                <span class="show__pass" id="show-2">show</span>
            </div>
            <div class="login_btn">
                <p class="">Đăng nhập</p>
            </div>
            <button type="submit" class="btn registerBtn">Đăng ký</button>
        </form>
    </div>
</body>
<script src="js/login.js"></script>
</html>