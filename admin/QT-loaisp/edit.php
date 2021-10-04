<h2 class="alert alert-danger">Chỉnh sửa danh mục</h2>
<form action="?url=edit&id=<?= $data['loaiID']['ma_loai'] ?>" method="post">
    <div class="form-group">
        <label for="">Mã loại</label>
        <input type="text" name="" id="" value="<?= $data['loaiID']['ma_loai'] ?>" class="form-control" disabled>
    </div>
    <div class="form-group">
        <label for="">Tên loại</label>
        <input type="text" name="ten_loai" id="" value="<?= $data['loaiID']['ten_loai'] ?>" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary" name="btn-submit">Submit</button>
    <button type="reset" class="btn btn-primary">Nhập lại</button>
    <a href="?url=new" class="btn btn-primary">Thêm</a>
    <a href="?url=list" class="btn btn-primary">Danh sách</a>

</form>
<?php
if (isset($data['thong-bao'])) {
    echo "<h5>" . $data['thong-bao'] . "</h5>";
}
?>