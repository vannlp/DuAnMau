<?php
require_once '../../global.php';
require_once URL_MODEL.'BinhLuan.php';
require_once URL_MODEL.'ThongKe.php';
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    if ($url == 'tong-hop') {
        $items = getThongKeBL();
        $page = 'tong-hop-bl.php';
    } else if ($url == 'chi-tiet') {
        if (isset($_GET['ma_hh'])) {
            $items = getBinhLuanByHangHoa($_GET['ma_hh']);
        }
        $page = 'chi-tiet-bl.php';
    }else if ($url == 'delete'){
        if (isset($_GET['ma_bl']) && isset($_GET['ma_hh'])) {
            $ma_bl = $_GET['ma_bl'];
            $ma_hh = $_GET['ma_hh'];
            deleteBinhLuan($ma_bl);
            header('location: ?url=chi-tiet&ma_hh='.$ma_hh);
        }
    }
} else {
    $items = getThongKeBL();
    $page = 'tong-hop-bl.php';
}
require_once "../layout.php";
