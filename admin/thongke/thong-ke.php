<h2 class="alert alert-danger">Thống kê hàng hóa theo từng loại</h2>
<table class="table">
    <tr>
        <th>LOẠI HÀNG</th>
        <th>SỐ LƯỢNG</th>
        <th>GIÁ CAO NHẤT</th>
        <th>GIÁ THẤP NHẤT</th>
        <th>GIÁ TRUNG BÌNH</th>
    </tr>
    <?php
    foreach ($items as $val) {
        extract($val);
        $gia_max = number_format($gia_max);
        $gia_min = number_format($gia_min);
        $gia_avg = number_format($gia_avg);
        echo '
        <tr>
            <td>'.$ten_loai.'</td>
            <td>'.$so_luong.'</td>
            <td>'.$gia_max.'</td>
            <td>'.$gia_min.'</td>
            <td>'.$gia_avg.'</td>
        </tr>
        ';
    }
    ?>
    <!-- <tr>
        <td>loại 1</td>
        <td>11</td>
        <td>100</td>
        <td>90</td>
        <td>95</td>
    </tr> -->
</table>
<a href="?url=bieu-do" class="btn btn-primary">Biểu đồ chi tiết</a>