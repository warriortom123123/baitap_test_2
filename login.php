<?php
session_start();

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Check login credentials
    if($username === 'admin' && $password === 'admin') {
        $_SESSION['username'] = $username;
        $_SESSION['login_success'] = true; // Setting a session variable to indicate login success
        header('Location: student-list.php');
        exit();
    } else {
        echo "Tên đăng nhập hoặc mật khẩu không đúng.";
    }
}
?>
<form action="login.php" method="post">
    taikhoan: <input type="text" name="txtusername"><br>
    Mật khẩu: <input type="password" name="txtmatkhau"><br>
    <input type="submit" value="Đăng nhập">
</form>
