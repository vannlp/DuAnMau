<?php
extract($data['hang-hoa-ma']);
$giam_gia = number_format($giam_gia);
$don_gia = number_format($don_gia);
?>
<div class="chitiet">
    <h3><?= $ten_hh ?></h3>
    <div class="chitiet__imgs">
        <img src="<?= $URL_IMG . $hinh ?>" alt="" class="chitiet__img">
    </div>
    <ul class="chitiet__ul">
        <li>Mã hh: <?= $ma_hh ?></li>
        <li>Tên hh: <?= $ten_hh ?></li>
        <li>Đơn giá: <?= $don_gia ?>VND</li>
        <li>Giảm giá: <?= $giam_gia ?>VND</li>
    </ul>
    <div>
        <?= $mo_ta ?>
    </div>
</div>
<div class="chitiet__bl">
    <h3 class="chitiet__h3">BÌNH LUẬN</h3>
    <ul class="chitiet__blct">
        <li class="chitiet__li">
            <span>
                Sản phẩm rất tốt
            </span>
            <span>
                HoaPT: 2018-4-12
            </span>
        </li>
    </ul>
    <form action="" method="post" class="chitiet__form">
        <div class="form-group">
            <input type="text" name="" id="" class="chitiet__input" placeholder="nhập bình luận">
            <button type="submit" class="btn btn-primary">Gửi</button>
        </div>
    </form>
</div>
<div class="chitiet__bl">
    <h3 class="chitiet__h3">HÀNG CÙNG LOẠI</h3>
    <ul>
        <li><a href="#">Hàng thứ 1</a></li>
        <li><a href="#">Hàng thứ 2</a></li>
        <li><a href="#">Hàng thứ 3</a></li>
    </ul>
</div>