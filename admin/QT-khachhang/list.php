<h2 class="alert alert-danger">Danh sách khách hàng</h2>
<table class="table">
    <tr>
        <th></th>
        <th>Họ tên</th>
        <th>Email</th>
        <th>Vai trò</th>
        <th>Hành động</th>
    </tr>
    <?php
    foreach ($data['khach_hang'] as $values) {
        if ($values['vai_tro'] == 1) {
            $vai_tro = 'Admin';
        } else {
            $vai_tro = 'User';
        }
        echo '
        <tr>
            <td><input type="checkbox" name="" id=""></td>
            <td>' . $values['ho_ten'] . '</td>
            <td>' . $values['email'] . '</td>
            <td>' . $vai_tro . '</td>
            <td>
                <a href="?url=edit&ma_kh=' . $values['ma_kh'] . '" class="btn btn-primary">Sửa</a>
                <a href="?url=delete&ma_kh=' . $values['ma_kh'] . '" class="btn btn-primary">Xóa</a>
            </td>
        </tr>
        ';
    }

    ?>
    <!-- <tr>
        <td><input type="checkbox" name="" id=""></td>
        <td>Khách hàng 1</td>
        <td>khachhang1@gmail.com</td>
        <td>admin</td>
        <td>
            <a href="?url=edit" class="btn btn-primary">Sửa</a>
            <a href="?url=delete" class="btn btn-primary">Xóa</a>
        </td>
    </tr> -->
</table>