<h2 class="alert alert-danger">Đăng ký</h2>
<form action="?url=register" method="post">
    <div class="form-group">
        <label for="">Nhập tên đăng nhập</label>
        <input type="text" name="ma_kh" class="form-control" id="" placeholder="Tên đăng nhập">
    </div>
    <div class="form-group">
        <label for="">Nhập email</label>
        <input type="email" name="email" class="form-control" id="" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="">Nhập mật khẩu</label>
        <input type="password" name="pass" class="form-control" id="" placeholder="Mật khẩu">
    </div>
    <div class="form-group">
        <label for="">Nhập lại mật khẩu</label>
        <input type="password" name="a-pass" class="form-control" id="" placeholder="Mật khẩu">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary" name="btn-submit">Đăng ký</button>
        <a href="?url=login" class="btn btn-primary">Đăng nhập</a>
    </div>
</form>

<?php
if (isset($data['thong-bao'])) {
    echo '<h5>' . $data['thong-bao'] . '</h5>';
}
?>