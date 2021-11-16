<?php
function account_index(){
    $sql = "select * from users";
    $users = executeQuery($sql);
    admin_render('account/index.php', [
        'dsTaiKhoan' => $users,
    ]);
}

?>