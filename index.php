<?php

require_once './commons/app_config.php';
require_once './dao/system_dao.php';
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        require_once './business/homepage.php';
        index();
        break;
    case 'cp-admin/dashboard':
        require_once './business/admin/dashboard.php';
        dashboard_info();
        break;
    case 'cp-admin/tai-khoan':
        require_once "./business/admin/account.php";
        account_index();
        break;
    default:
        echo "Đường dẫn bạn đang truy cập chưa được định nghĩa";
        break;
}

?>