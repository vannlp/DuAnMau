<?php
require_once '../global.php';
if (isset($_SESSION['login'])) {
    if ($_SESSION['login']['vai_tro'] == 1) {
        header("location: ../admin/QT-SanPham/");
    } else {
        header('location: ../home');
    }
} else {
    header('location: ../tai-khoan?url=login');
}
