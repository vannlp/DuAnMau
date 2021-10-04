<?php
require_once '../global.php';
require_once '../model/HangHoaModel.php';
$data = [];
if (isset($_GET['url'])) {
    if (isset($_GET['ma_hh'])) {
        $data['hang-hoa-ma'] = getHangHoaID($_GET['ma_hh']);
    }
    $page = 'chitietsp.php';
} else {
    $page = '../blog/404.php';
}
require_once "../layout.php";
