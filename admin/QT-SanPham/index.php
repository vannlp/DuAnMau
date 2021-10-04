<?php
require_once '../../model/HangHoaModel.php';
require_once '../../model/LoaiModel.php';
require_once '../../global.php';
$data = [];
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    switch ($url) {
        case 'new':
            $data['loai'] = getLoai();

            if (isset($_POST['btn-submit'])) {
                $hang_hoa = [];
                $hang_hoa['ten_hh'] = $_POST['ten_hh'];
                $hang_hoa['don_gia'] = $_POST['don_gia'];
                $hang_hoa['giam_gia'] = $_POST['giam_gia'];
                // $hang_hoa['hinh'] = 'hinh.jpg';

                $target_dir = '../../public/images/';
                $hang_hoa['hinh'] = save_file('hinh', $target_dir);


                $hang_hoa['ma_loai'] = $_POST['ma_loai'];
                $hang_hoa['dac_biet'] = $_POST['dac_biet'];
                $hang_hoa['ngay_nhap'] = $_POST['ngay'];
                $hang_hoa['mo_ta'] = $_POST['mo_ta'];

                setHangHoa($hang_hoa) ? $data['thong-bao'] = 'Thêm thành công' : $data['thong-bao'] = 'Thêm thất bại';
                // echo '123';
            }
            $page = 'new.php';
            break;
        case 'edit':
            if (isset($_POST['btn-submit'])) {
                $hang_hoa = [];
                $hang_hoa['ma_hh'] = $_GET['ma_hh'];
                $hang_hoa['ten_hh'] = $_POST['ten_hh'];
                $hang_hoa['don_gia'] = $_POST['don_gia'];
                $hang_hoa['giam_gia'] = $_POST['giam_gia'];
                // $hang_hoa['hinh'] = 'hinh.jpg';

                $target_dir = '../../public/images/';

                if ($_FILES['hinh']['name'] != '') {
                    $hang_hoa['hinh'] = save_file('hinh', $target_dir);
                } else {
                    $hang_hoa['hinh'] = imgHangHoa($hang_hoa['ma_hh']);
                    // echo ($hang_hoa['hinh']);
                }

                $hang_hoa['ma_loai'] = $_POST['ma_loai'];
                $hang_hoa['dac_biet'] = $_POST['dac_biet'];
                $hang_hoa['ngay_nhap'] = $_POST['ngay'];
                $hang_hoa['mo_ta'] = $_POST['mo_ta'];
                updateHangHoa($hang_hoa) ? $data['thong-bao'] = 'Cập nhập thành công' : $data['thong-bao'] = 'Cập nhập thất bại';
            }
            // Gọi dữ liệu edit 1 bản ghi
            if (isset($_GET['ma_hh'])) {
                $ma_hh = $_GET['ma_hh'];
                $data['loai'] = getLoai();
                $data['hang-hoa-ma'] = getHangHoaID($ma_hh);
            }
            $page = 'edit.php';
            break;
        case 'list':
            $data['list'] = getHangHoa();
            // print_r($data['list']);
            $page = 'list.php';
            break;

        case 'delete':
            if (isset($_REQUEST['ma_hh'])) {
                deleteHangHoa($_REQUEST['ma_hh']);
                header('location: ?url=list');
            }
            break;
        default:
            $page = '../blog/404.php';
            break;
    }
} else {
    $data['loai'] = getLoai();
    $page = 'new.php';
}
require_once "../layout.php";
