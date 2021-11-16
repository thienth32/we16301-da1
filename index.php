<?php

$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        require_once './business/homepage.php';
        index();
        break;
    case 'cp-admin/dashboard':
        echo "Trang quản trị";
        break;
    case 'cp-admin/tai-khoan':
        echo "Quản trị tài khoản";
        break;
    default:
        echo "Đường dẫn bạn đang truy cập chưa được định nghĩa";
        break;
}

?>