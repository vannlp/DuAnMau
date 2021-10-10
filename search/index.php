<?php
require_once '../global.php';
require_once URL_MODEL.'HangHoaModel.php';
$data = [];
if (isset($_GET['danh-muc'])) {
    $ma_loai = $_GET['danh-muc'];
    $data['hang-hoa'] = getHangHoaMaLoai($ma_loai);
    $page = 'danh-muc.php';
}else if (array_key_exists('search', $_REQUEST)) {
    $noi_dung = $_POST['search'];
    $data['hang-hoa'] = timKiemHangHoa($noi_dung);

    $page = 'search.php';
}
require_once '../layout.php';
