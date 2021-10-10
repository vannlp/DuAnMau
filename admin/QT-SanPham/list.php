<h2 class="alert alert-danger">Danh sách hàng hóa</h2>
<form action="?url=delete" method="post">
    <table class="table">
        <tr>
            <th></th>
            <th>Mã hh</th>
            <th>Tên HH</th>
            <th>Đơn giá</th>
            <th>Giảm giá</th>
            <th>Lượt xem</th>
            <th>Hành động</th>
        </tr>
        <?php foreach ($data['list'] as $values) {
            extract($values);
        ?>
            <tr>
                <td><input type="checkbox" value="<?= $ma_hh ?>" class="checks" name="checks[]" id=""></td>
                <td><?= $ma_hh ?></td>
                <td><?= $ten_hh ?></td>
                <td><?= $don_gia ?></td>
                <td><?= $giam_gia ?></td>
                <td><?= $so_luot_xem ?></td>
                <td>
                    <a href="?url=edit&ma_hh=<?= $ma_hh ?>" class="btn btn-primary">Sửa</a>
                    <a href="?url=delete&ma_hh=<?= $ma_hh ?>" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <ul class="paging">
        <li class="paging__next">
            <a href="#" class="paging__btn">
                <i class="bi bi-chevron-compact-left"></i>
            </a>
        </li>
        <?php
        for ($i = 1; $i <= $so_trang; $i++) {
            echo '
        <li class="paging__item">
            <a href="?url=list&trang=' . $i . '">' . $i . '</a>
        </li>
        ';
        }
        ?>
        <li class="paging__frew">
            <a href="#" class="paging__btn">
                <i class="bi bi-chevron-compact-right"></i>
            </a>
        </li>
    </ul>
    <div class="form-group">
        <a href="?url=new" class="btn btn-primary">Thêm mới</a>
        <button class="btn btn-primary" id="chon_all">Chọn tất cả</button>
        <button class="btn btn-primary" id="bo_chon">Bỏ chọn tất cả</button>
        <button class="btn btn-danger" name="btn-submit" type="submit">Xóa mục đã chọn</button>
    </div>
</form>