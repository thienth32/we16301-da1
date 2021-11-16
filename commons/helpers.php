<?php

function admin_render($viewpath, $data = []){

    extract($data);
    $businessView = "./views/admin/" . $viewpath;
    include_once './views/admin/layouts/main.php';
}

?>