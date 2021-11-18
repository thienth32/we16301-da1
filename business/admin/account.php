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
    $sql = "delete from users where id = $id";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'tai-khoan');
}

?>