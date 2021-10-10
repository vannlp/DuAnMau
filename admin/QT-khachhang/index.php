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
            if (isset($_POST['btn-submit'])){
                $kh = [];
                $kh['ma_kh'] = $_GET['ma_kh'];
                $kh['ho_ten'] = $_POST['ho_ten'];
                $kh['email'] = $_POST['email'];
                
                $target_dir = '../../public/images/';

                if ($_FILES['hinh']['name'] != '') {
                    $kh['hinh'] = save_file('hinh', $target_dir);
                } else {
                    $kh['hinh'] = imgKhachHang($kh['ma_kh']);
                    // echo ($hang_hoa['hinh']);
                }

                $kh['vai_tro'] = $_POST['vai_tro'];
                $data['thong-bao'] = updateKhachHangUser($kh) ? 'Cập nhập thành công' : 'Cập nhập thất bại';
            }
            if (isset($_GET['ma_kh'])) {
                $ma_kh = $_GET['ma_kh'];
                $data['khach-hang-one'] = getKhachHangId($ma_kh);
            }
            $page = 'edit.php';
            break;
        case 'list':
            $data['khach_hang'] = getKhachHang();
            $page = 'list.php';
            break;
        case 'delete':
            if(isset($_GET['ma_kh'])){
                deleteKhachHang($_GET['ma_kh']);
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
