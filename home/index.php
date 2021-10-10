<?php
require_once '../global.php';
require_once '../model/HangHoaModel.php';
$data = [];
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    switch ($url) {
        case 'trangchu':
            /*
            input: số phân trang, trang hiển thị
            */
            $data['listAll'] = getHangHoa();
            $so_item_ht = 6;
            $index = count($data['listAll']);
            $so_trang = ceil($index / $so_item_ht);
            // so start
            if (isset($_GET['trang'])) {
                $trang = $_GET['trang'];
                if ($trang == 1) {
                    $start = 0;
                } else {
                    $start = ($trang - 1) * $so_item_ht;
                }
                $data['hang-hoa'] = phanTrang($start, $so_item_ht);
            } else {
                $trang = 1;
                $start = 0;
                $data['hang-hoa'] = phanTrang($start, $so_item_ht);
            }
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
    /*
    input: số phân trang, trang hiển thị
    */
    $data['listAll'] = getHangHoa();
    $so_item_ht = 6;
    $index = count($data['listAll']);
    $so_trang = ceil($index / $so_item_ht);
    // so start
    if (isset($_GET['trang'])) {
        $trang = $_GET['trang'];
        if ($trang == 1) {
            $start = 0;
        } else {
            $start = ($trang - 1) * $so_item_ht;
        }
        $data['hang-hoa'] = phanTrang($start, $so_item_ht);
    } else {
        $trang = 1;
        $start = 0;
        $data['hang-hoa'] = phanTrang($start, $so_item_ht);
    }
    $page = 'trangchu.php';
}


require_once "../layout.php";
