<?php
function account_index(){
    $sql = "select * from users";
    $users = executeQuery($sql);
    include_once './views/admin/account/index.php';
}

?>