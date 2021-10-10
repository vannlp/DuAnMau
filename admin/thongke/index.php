<?php
require_once '../../global.php';
require_once URL_MODEL.'ThongKe.php';
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    if ($url == 'thong-ke') {
        $page = 'thong-ke.php';
    } else if ($url == 'bieu-do') {
        
        $page = 'bieu-do.php';
    } else {
        $page = '404.php';
    }
} else {
    $items = getThongKeHH();
    $page = 'thong-ke.php';
}
require_once "../layout.php";
