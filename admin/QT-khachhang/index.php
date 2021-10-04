<?php
require_once '../../model/KhachHangModel.php';
require_once '../../global.php';
$data = [];
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    switch ($url) {
        case 'new':
            if (isset($_POST['submit'])) {
                $kh = [];
                $kh['ten_dn'] = $_POST['ten_dn'];
                $kh['ho_ten'] = $_POST['ho_ten'];
                $kh['password'] = md5($_POST['pass']);
                $kh['email'] = $_POST['email'];

                $target_dir = '../../public/images/';
                $kh['hinh'] = save_file('hinh', $target_dir);

                $kh['kich_hoat'] = $_POST['kich_hoat'];
                $kh['vai_tro'] = $_POST['vai_tro'];
                setKhachHang($kh);
                $data['thong_bao'] = "Thêm thành viên thành công!!!";
            }
            $page = 'new.php';
            break;
        case 'edit':
            $page = 'edit.php';
            break;
        case 'list':
            $data['khach_hang'] = getKhachHang();
            $page = 'list.php';
            break;

        default:
            $page = '../blog/404.php';
            break;
    }
} else {
    $page = 'new.php';
}

require_once "../layout.php";
