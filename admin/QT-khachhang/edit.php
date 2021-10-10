<h2 class="alert alert-danger">Chỉnh sửa khách hàng</h2>
<form action="?url=edit&ma_kh=<?=$data['khach-hang-one']['ma_kh']?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Nhập họ tên:</label>
        <input type="text" name="ho_ten" value="<?= $data['khach-hang-one']['ho_ten'] ?>" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Nhập email:</label>
        <input type="email" name="email" id="" value="<?= $data['khach-hang-one']['email'] ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Ảnh đại diện</label>
        <input type="file" name="hinh" id="" value="" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Vai trò</label>
        <select name="vai_tro" id="" class="form-control">
            <!-- <option value="0">Admin</option>
            <option value="1">User</option> -->
            <?php
            if ($data['khach-hang-one']['vai_tro'] == 1) {
                echo '<option selected value="1">Admin</option>';
                echo '<option value="2">User</option>';
            } else {
                echo '<option  value="1">Admin</option>';
                echo '<option selected value="2">User</option>';
            }

            ?>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-primary">Nhập lại</button>
        <a href="?url=list" class="btn btn-primary">Danh sách</a>
    </div>
</form>
<?php
if(isset($data['thong-bao'])){
    echo '<h5>'.$data['thong-bao'].'</h5>';
}
?>