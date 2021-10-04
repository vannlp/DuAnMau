<h2 class="alert alert-danger">Danh sách danh mục</h2>
<table class="table">
    <tr>
        <th></th>
        <th>Mã loại</th>
        <th>Tên loại</th>
        <th></th>
    </tr>
    <?php
    foreach ($data['list-all'] as $values) {
        echo '
        <tr>
            <td><input type="checkbox" name="" id=""></td>
            <td>' . $values['ma_loai'] . '</td>
            <td>' . $values['ten_loai'] . '</td>
            <td><a href="?url=edit&id=' . $values['ma_loai'] . '" class="btn btn-primary">Sửa</a>
                <a href="?url=delete&id=' . $values['ma_loai'] . '" class="btn btn-primary">Xóa</a>
            </td>
        </tr>
        ';
    }
    ?>
    <!-- <tr>
        <td><input type="checkbox" name="" id=""></td>
        <td>1</td>
        <td>tên loại 1</td>
        <td><a href="#" class="btn btn-primary">Sửa</a>
            <a href="#" class="btn btn-primary">Xóa</a>
        </td>
    </tr> -->

</table>
<a href="?url=new" class="btn btn-primary">Thêm mới</a>
<button class="btn btn-primary">Chọn tất cả</button>