<?php
require_once 'pdo.php';

function getBinhLuanAll(){
    $sql = "SELECT * FROM binh_luan order by ma_bl desc";
}
function getBinhLuanByHangHoa($ma_hh){
    $sql = "SELECT b.*, h.ten_hh from binh_luan b join hang_hoa h on h.ma_hh = b.ma_hh where b.ma_hh=?
    order by ngay_bl, b.ma_bl desc";
    return pdo_query($sql, $ma_hh);
}
function setBinhLuan($bl = []){
    extract($bl);
    $sql = "INSERT INTO binh_luan values(null,?,?,?,?)";
    return pdo_execute($sql,$ma_kh, $ma_hh, $noi_dung, $ngay_bl);
}
function deleteBinhLuan ($ma_bl) {
    $sql = "DELETE from binh_luan where ma_bl=?";
    return pdo_execute($sql, $ma_bl);
}

?>