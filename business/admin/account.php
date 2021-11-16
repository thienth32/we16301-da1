<?php
function account_index(){
    $sql = "select * from users";
    $users = executeQuery($sql);
    $businessView = "./views/admin/account/index.php";
    include_once './views/admin/layouts/main.php';
}

?>