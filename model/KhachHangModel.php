<?php
require_once 'pdo.php';
function setKhachHang($kh = [])
{
    $id = $kh['ten_dn'];
    $mk = $kh['password'];
    $ho_ten = $kh['ho_ten'];
    $email = $kh['email'];
    $hinh = $kh['hinh'];
    $kich_hoat = $kh['kich_hoat'];
    $vai_tro = $kh['vai_tro'];
    $sql = "INSERT INTO khach_hang
    values(?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $id, $mk, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
}
function getKhachHang()
{
    $sql = "SELECT * from khach_hang";
    return pdo_query($sql);
}
function getKhachHangId($ma_kh)
{
    $sql = "SELECT * from khach_hang where ma_kh=?";
    return pdo_query_one($sql, $ma_kh);
}
function updateKhachHangUser($kh = [])
{
    extract($kh);
    $sql = "UPDATE khach_hang set ho_ten=?, email=?, hinh=? where ma_kh=?";
    return pdo_execute($sql, $ho_ten, $email, $hinh, $ma_kh);
}
function getHinhByID($ma_kh)
{
    $sql = "SELECT hinh from khach_hang where ma_kh=?";
    return pdo_query_value($sql, $ma_kh);
}
function setRegister($kh = [])
{
    $sql = "INSERT INTO khach_hang(ma_kh, email, mat_khau, kich_hoat, vai_tro)
    values(?, ?, ?, 1, 2)";
    extract($kh);
    return pdo_execute($sql, $ma_kh, $email, $mat_khau);
}
