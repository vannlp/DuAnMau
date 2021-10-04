<h2 class="alert alert-danger">Cập nhập tài khoản</h2>
<div class="row">
    <div class="col-4">
        <img src="<?= $URL_IMG . $data['account']['hinh'] ?>" alt="" style="width: 100%;">
    </div>
    <div class="col-8">
        <form action="?url=change-account" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên đăng nhập</label>
                <input type="text" value="<?= $data['account']['ma_kh'] ?>" name="ten_dn" id="" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" value="<?= $data['account']['ho_ten'] ?>" name="ho_ten" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ email</label>
                <input type="email" value="<?= $data['account']['email'] ?>" name="email" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Hình</label>
                <input type="file" name="hinh" id="" class="form-control">
            </div>
            <button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>