<?php
require_once 'pdo.php';
function setHangHoa($hang_hoa = [])
{
    $sql = "INSERT INTO hang_hoa values(null,?,?,?,?,?,?,?,?,?)";
    $ten_hh = $hang_hoa['ten_hh'];
    $don_gia = $hang_hoa['don_gia'];
    $giam_gia = $hang_hoa['giam_gia'];
    $hinh = $hang_hoa['hinh'];
    $ma_loai = $hang_hoa['ma_loai'];
    $dac_biet = $hang_hoa['dac_biet'];
    $so_luot_xem = 0;
    $ngay_nhap = $hang_hoa['ngay_nhap'];
    $mo_ta = $hang_hoa['mo_ta'];
    return pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
}
function getHangHoa()
{
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh desc";
    return pdo_query($sql);
}
function getHangHoaID($ma_hh)
{
    $sql = "SELECT * FROM hang_hoa where ma_hh=?";
    return pdo_query_one($sql, $ma_hh);
}
function updateHangHoa($hang_hoa = [])
{
    extract($hang_hoa);
    $sql = "UPDATE hang_hoa set ten_hh=?, don_gia=?, giam_gia=?, hinh=?, ma_loai=?,
    dac_biet=?, ngay_nhap=?, mo_ta=? where ma_hh=?";
    return pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $ngay_nhap, $mo_ta, $ma_hh);
}
function imgHangHoa($ma_hh)
{
    $sql = "SELECT hinh FROM hang_hoa where ma_hh=?";
    return pdo_query_value($sql, $ma_hh);
}
function deleteHangHoa($ma_hh)
{
    $sql = "DELETE from hang_hoa where ma_hh=?";
    return pdo_execute($sql, $ma_hh);
}
function getHangHoaMaLoai($ma_loai)
{
    $sql = "SELECT * from hang_hoa where ma_loai=?";
    return pdo_query($sql, $ma_loai);
}
function getLuotXem($ma_hh)
{
    $sql = "SELECT so_luot_xem from hang_hoa where ma_hh=?";
    return pdo_query_value($sql, $ma_hh);
}

function tangLuotXem($ma_hh)
{
    $so_luot_xem = getLuotXem($ma_hh);
    $so_luot_xem = (int)$so_luot_xem;
    $so_luot_xem++;
    $sql = "UPDATE hang_hoa set so_luot_xem=? where ma_hh=?";
    return pdo_execute($sql, $so_luot_xem, $ma_hh);
}
function top10HangHoa()
{
    $sql = "SELECT * from hang_hoa order by so_luot_xem desc limit 10";
    return pdo_query($sql);
}
function phanTrang ($ht_trang, $trang) {
    $sql = "SELECT * from hang_hoa order by ma_hh desc limit $ht_trang, $trang";
    $con = pdo_get_connection();
    $datas = $con->query($sql);
    $data = $datas->fetchAll();
    return $data;
}
function deleteHangHoa_s($ma_hh = []){
    for ($i = 0; $i < count($ma_hh); $i++) {
        $sql = "DELETE from hang_hoa where ma_hh=?";
        pdo_execute($sql, $ma_hh[$i]);
    }
}
function timKiemHangHoa ($noi_dung) {
    $sql = "SELECT * FROM hang_hoa hh INNER JOIN loai lo ON lo.ma_loai=hh.ma_loai
            WHERE ten_hh LIKE '%$noi_dung%' OR ten_loai LIKE '%$noi_dung%'";
    $con = pdo_get_connection();
    $datas = $con->query($sql);
    $data = $datas->fetchAll();
    return $data;
}
function hangCungLoai($ma_loai){
    $sql = "SELECT * from hang_hoa where ma_loai=?";
    return pdo_query($sql, $ma_loai);
}
