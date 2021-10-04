<h2 class="alert alert-danger">Đăng nhập</h2>
<form action="?url=login" method="post">
    <div class="form-group">
        <label for="">Tên đăng nhập</label>
        <input type="text" name="username" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Mật khẩu</label>
        <input type="password" name="pass" id="" class="form-control">
    </div>
    <div class="form-group">
        <input type="checkbox" name="" id=""> Ghi nhớ đăng nhập
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <a href="?url=register" class="btn btn-primary">Đăng ký</a>
        <a href="?url=forget-pass" class="btn btn-primary">Quên mật khẩu</a>
    </div>
</form>
<?php
if (isset($data['thong_bao'])) {
    echo '<h5>' . $data['thong_bao'] . '</h5';
}
?>