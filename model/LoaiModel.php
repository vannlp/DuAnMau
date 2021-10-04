<?php
require_once "pdo.php";
function setLoai($ten_loai)
{
    $sql = "INSERT INTO loai values(null, ?)";
    pdo_execute($sql, $ten_loai);
}
function getLoai()
{
    $sql = "SELECT * from loai";
    return pdo_query($sql);
}
function getLoaiID($ma_loai)
{
    $sql = "SELECT * from loai where ma_loai=?";
    return pdo_query_one($sql, $ma_loai);
}
function updateLoai($ma_loai, $ten_loai)
{
    $sql = "UPDATE loai set ten_loai=? where ma_loai=?";
    return pdo_execute($sql, $ten_loai, $ma_loai);
}
function deleteLoai($ma_loai)
{
    $sql = "DELETE from loai where ma_loai=?";
    pdo_execute($sql, $ma_loai);
}
