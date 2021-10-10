<?php
require_once '../../global.php';
require_once URL_MODEL . 'loaiModel.php';
$data = [];
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    switch ($url) {
        case 'new':
            $page = 'new.php';
            if (isset($_POST['submit'])) {
                setLoai($_POST['ten_loai']);
            }
            break;
        case 'edit':
            if (isset($_POST['btn-submit'])) {
                $ma_loai = $_GET['id'];
                $ten_loai = $_POST['ten_loai'];
                if (updateLoai($ma_loai, $ten_loai)) {
                    $data['thong-bao'] = 'Cập nhập thành công';
                } else {
                    $data['thong-bao'] = 'Cập nhập thất bại';
                }
            }
            if (isset($_GET['id'])) {
                $ma_loai = $_GET['id'];
                $data['loaiID'] = getLoaiID($ma_loai);
            }
            $page = 'edit.php';
            break;
        case 'list':
            $data['list-all'] = getLoai();
            $page = 'list.php';
            break;
        case 'delete':
            if (isset($_GET['id'])) {
                $ma_loai = $_GET['id'];
                deleteLoai($ma_loai);
                header('location: ?url=list');
            }
            break;
        default:
            $page = '../blog/404.php';
            break;
    }
} else {
    $page = 'new.php';
}
require_once "../layout.php";
