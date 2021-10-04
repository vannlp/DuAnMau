<?php
require_once '../global.php';
require_once '../model/HangHoaModel.php';
$data = [];
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    switch ($url) {
        case 'trangchu':
            $data['hang-hoa'] = getHangHoa();
            $page = 'trangchu.php';
            break;
        case 'gioithieu':
            $page = 'gioithieu.php';
            break;
        case 'lienhe':
            $page = 'lienhe.php';
            break;

        default:
            $page = '../blog/404.php';
            break;
    }
} else {
    $data['hang-hoa'] = getHangHoa();
    $page = 'trangchu.php';
}


require_once "../layout.php";
