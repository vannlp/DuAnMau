<?php
require_once '../model/KhachHangModel.php';
require_once '../global.php';
require_once URL_MODEL.'HangHoaModel.php';
$data = [];
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    switch ($url) {
        case 'login':
            // echo $_POST['username'];
            if (isset($_POST['submit'])) {
                // móc dữ liệu
                $login = getKhachHang();
                $username = $_POST['username'];
                $pass = md5($_POST['pass']);
                $isLogin = false;
                foreach ($login as $values) {
                    if ($username == $values['ma_kh'] && $pass == $values['mat_khau']) {
                        $_SESSION['login'] = $values;
                        $isLogin = true;
                        break;
                    }
                }
                if ($isLogin) {
                    if ($_SESSION['login']['vai_tro'] == 1) {
                        header('location: ../admin');
                    } else {
                        header('location: ../home');
                    }
                } else {
                    $data['thong_bao'] = 'Đăng nhập thất bại vui lòng kiểm tra lại';
                }
            }
            $page = 'Dang-nhap.php';
            break;
        case 'register':
            if (isset($_POST['btn-submit'])) {
                if ($_POST['pass'] == $_POST['a-pass'] && $_POST['ma_kh'] != '' && strlen($_POST['ma_kh']) >= 10 && $_POST['email'] != '') {
                    $kh = [];
                    $kh['ma_kh'] = $_POST['ma_kh'];
                    $kh['mat_khau'] = md5($_POST['pass']);
                    $kh['email'] = $_POST['email'];
                    setRegister($kh) ? $data['thong-bao'] = 'Đăng ký thành công' : $data['thong-bao'] = 'Đăng ký thất bại';
                } else {
                    $data['thong-bao'] = "Vui lòng kiểm tra lại mật khẩu";
                }
            }
            $page = 'Dang-ky.php';
            break;
        case 'forget-pass':
            $page = 'Quen-mk.php';
            break;
        case 'change-account':
            if (isset($_POST['btn-submit'])) {
                $kh = [];
                $kh['ma_kh'] = $_POST['ten_dn'];
                $kh['ho_ten'] = $_POST['ho_ten'];
                $kh['email'] = $_POST['email'];

                $target_dir = '../public/images/';
                // print_r($_FILES['hinh']);
                if ($_FILES['hinh']['name'] != '') {
                    $kh['hinh'] = save_file('hinh', $target_dir);
                    // echo '123';
                } else {
                    $kh['hinh'] = getHinhByID($kh['ma_kh']);
                    // echo ($kh['hinh']);
                }
                // echo ($kh['hinh']);
                // cap nhap du lieu
                updateKhachHang($kh) ? $data['thong-bao'] = "Cập nhập thành công" : $data['thong-bao'] = "Cập nhập thất bại";
                $_SESSION['login'] = getKhachHangId($kh['ma_kh']);
            }

            // lấy dữ liệu
            $data['account'] = $_SESSION['login'];

            $page = 'Cap-nhap-tk.php';
            break;
        case 'dang-xuat':
            unset($_SESSION['login']);
            header('location: ../home');
            break;
        default:
            $page = '../blog/404.php';
            break;
    }
}

require_once "../layout.php";
