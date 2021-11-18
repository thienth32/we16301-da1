<?php
function account_index(){
    $sql = "select * from users";
    $users = executeQuery($sql);

    admin_render('account/index.php', [
        'dsTaiKhoan' => $users,
    ]);
}

function account_remove(){
    // lấy id từ đường dẫn
    $id = $_GET['id'];
    // thực thi câu lệnh xóa dựa vào id
    $sql = "delete from users where id = $id";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'tai-khoan');
}

function account_add_form(){

    admin_render('account/add-form.php');
}
function account_save_add(){
    // nhận dữ liệu từ form gửi lên
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // mã hóa mật khẩu
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    // lưu ảnh vào thư mục public/uploads
    $file = $_FILES['avatar'];
    $avatar = "";
    // Lưu ảnh
    if($file['size'] > 0){
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], './public/uploads/avatars/' . $filename);
        $avatar = "uploads/avatars/" . $filename;
    }

    // tạo ra câu sql insert tài khoản mới
    $sql = "insert into users 
                (name, email, password, avatar) 
            values 
                ('$name', '$email', '$passwordHash', '$avatar')";
    // Thực thi câu sql với db
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'tai-khoan');
}

?>