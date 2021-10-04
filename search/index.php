<?php
require_once '../global.php';
require_once '../model/HangHoaModel.php';
$data = [];
if (isset($_GET['danh-muc'])) {
    $ma_loai = $_GET['danh-muc'];
    $data['hang-hoa'] = getHangHoaMaLoai($ma_loai);
    $page = 'danh-muc.php';
}
require_once '../layout.php';
