<h2 class="alert alert-danger">Chi tiết bình luận</h2>
<?php 
foreach ($items as $val) {
    echo '<h3>Hàng hóa: '.$val['ten_hh'].'</h3>';
    break;
}
?>
<!-- <h3>Hàng hóa: Hàng hóa số 1</h3> -->
<table class="table">
    <tr>
        <th></th>
        <th>NỘI DUNG</th>
        <th>NGÀY BL</th>
        <th>NGƯỜI BL</th>
        <th></th>
    </tr>
    <?php
    foreach ($items as $val) {
        extract($val);
        echo '
        <tr>
            <td><input type="checkbox" name="" id=""></td>
            <td>'.$noi_dung.'</td>
            <td>'.$ngay_bl.'</td>
            <td>'.$ma_kh.'</td>
            <td>
                <a href="?url=delete&ma_bl='.$ma_bl.'&ma_hh='.$ma_hh.'" class="btn btn-danger">Xóa</a>
            </td>
        </tr>
        ';
    }
    ?>
</table>