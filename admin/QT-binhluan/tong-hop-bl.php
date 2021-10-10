<h2 class="alert alert-danger">
    Tổng hợp bình luận
</h2>
<table class="table">
    <tr>
        <th>HÀNG HÓA</th>
        <th>SỐ BL</th>
        <th>MỚI NHẤT</th>
        <th>CŨ NHẤT</th>
        <th>HÀNH ĐỘNG</th>
    </tr>
    <?php 
    foreach ($items as $val){
        extract($val);
    ?>
    <tr>
        <td><?=$ten_hh?></td>
        <td><?=$so_luong?></td>
        <td><?=$cu_nhat?></td>
        <td><?=$moi_nhat?></td>
        <td>
            <a href="?url=chi-tiet&ma_hh=<?=$ma_hh?>" class="btn btn-primary">Chi tiết</a>
        </td>
    </tr>
    <?php }?>
</table>