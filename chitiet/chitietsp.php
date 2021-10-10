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
        <?php
        if (empty($data['binh_luan'])) {
            echo '<h5>Hiện tại không có bình luận nào</h5>';
        }else{
            foreach ($data['binh_luan'] as $val) {
                extract($val);
                echo '
                <li class="chitiet__li">
                    <span>
                        '.$noi_dung.'
                    </span>
                    <span>
                        '.$ma_kh.': '.$ngay_bl.'
                    </span>
                </li>
                ';
            }
        }
        ?>
        <!-- <li class="chitiet__li">
            <span>
                Sản phẩm rất tốt
            </span>
            <span>
                HoaPT: 2018-4-12
            </span>
        </li> -->
    </ul>
    <?php
    if (isset($_SESSION['login'])){
        echo '
        <form action="?url&ma_hh='.$ma_hh.'" method="post" class="chitiet__form">
            <div class="form-group">
                <input type="text" name="noi_dung" id="" class="chitiet__input" placeholder="nhập bình luận">
                <button type="submit" name="submit" class="btn btn-primary">Gửi</button>
            </div>
        </form>
        ';
    }
    else{
        echo '
        <h4>Bạn cần đăng nhập để được bình luận</h4>
        ';
    }
    ?>
</div>
<div class="chitiet__bl">
    <h3 class="chitiet__h3">HÀNG CÙNG LOẠI</h3>
    <ul>
        <?php 
        foreach ($data['hang-cung-loai'] as $val) {
            echo '<li><a href="?url&ma_hh='.$val['ma_hh'].'">'.$val['ten_hh'].'</a></li>';
        }
        ?>

    </ul>
</div>