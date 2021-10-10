<?php
require_once '../global.php';
require_once '../model/HangHoaModel.php';
require_once URL_MODEL.'BinhLuan.php';
$data = [];
if (isset($_GET['url'])) {
    if (isset($_GET['ma_hh'])) {
        $data['hang-hoa-ma'] = getHangHoaID($_GET['ma_hh']);
        tangLuotXem($_GET['ma_hh']);

        if (isset($_POST['submit'])) {
            $bl = [];
            $bl['noi_dung'] = $_POST['noi_dung'];
            $bl['ma_kh'] = $_SESSION['login']['ma_kh'];
            $bl['ma_hh'] = $_GET['ma_hh'];
            
            $bl['ngay_bl'] = date('Y-m-d');
            // echo $bl['ngay_bl'];
            setBinhLuan($bl);
        }
        // get binh luaan
        $data['binh_luan'] = getBinhLuanByHangHoa($_GET['ma_hh']);

        $data['hang-cung-loai'] = hangCungLoai($data['hang-hoa-ma']['ma_loai']);
    }
    $page = 'chitietsp.php';
} else {
    $page = '../blog/404.php';
}
require_once "../layout.php";
