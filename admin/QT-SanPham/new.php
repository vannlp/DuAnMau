<h2 class="alert alert-danger">Thêm hàng hóa</h2>
<form action="?url=new" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="">Mã hàng hóa</label>
                <input type="text" name="" id="" class="form-control" readonly placeholder="auto number">
            </div>
            <div class="form-group">
                <label for="">Giảm Giá</label>
                <input type="number" name="giam_gia" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Hàng Đặc Biệt</label>
                <div class="form-control">
                    <input type="radio" name="dac_biet" value="1">Hàng Đặc biệt
                    <input type="radio" name="dac_biet" id="" value="2">Bình thường
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="">Tên Hàng Hóa</label>
                <input type="text" name="ten_hh" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Hình Ảnh</label>
                <input type="file" name="hinh" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Ngày Nhập</label>
                <input type="date" name="ngay" id="" class="form-control">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="">Đơn Giá</label>
                <input type="number" name="don_gia" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Chọn loại hàng</label>
                <select name="ma_loai" class="form-control" id="">
                    <?php foreach ($data['loai'] as $values) {
                        extract($values);
                    ?>
                        <option value="<?= $ma_loai ?>"><?= $ten_loai ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Số Lượt Xem</label>
                <input type="number" name="" id="" class="form-control" readonly placeholder="0">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="">MÔ TẢ</label>
        <textarea name="mo_ta" id="content" class="form-control" cols="30" rows="10"></textarea>
        <script type="text/javascript">
            CKEDITOR.replace('content', {
                width: "100%",
                height: "400px",
                filebrowserUploadMethod: "form",
                filebrowserUploadUrl: "#"
            });
        </script>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit" name="btn-submit">Thêm Mới</button>
        <button class="btn btn-primary" type="reset">Nhập lại</button>
        <a class="btn btn-primary" href="?url=list">Danh Sách</a>
    </div>
</form>
<?php
if (isset($data['thong-bao'])) {
    echo '<h5>' . $data['thong-bao'] . '</h5>';
}

?>