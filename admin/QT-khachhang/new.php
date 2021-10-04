<h2 class="alert alert-danger">Thêm khách hàng</h2>
<form action="?url=new" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Tên đăng nhập</label>
        <input type="text" name="ten_dn" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Nhập họ tên:</label>
        <input type="text" name="ho_ten" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Nhập email:</label>
        <input type="email" name="email" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Nhập mật khẩu:</label>
        <input type="password" name="pass" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Ảnh đại diện</label>
        <input type="file" name="hinh" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Vai trò</label>
        <select name="vai_tro" id="" class="form-control">
            <option value="1">Admin</option>
            <option value="2">User</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Tình trạng tài khoản</label>
        <div class="form-control">
            <input type="radio" name="kich_hoat" id="" value="1">kích hoạt
            <input type="radio" name="kich_hoat" id="" value="2">chưa kích hoạt
        </div>
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-primary">Nhập lại</button>
        <a href="?url=list" class="btn btn-primary">Danh sách</a>
    </div>
</form>
<?php
if (isset($data['thong_bao'])) {
    echo "<h5>" . $data['thong_bao'] . "</h5>";
}
?>