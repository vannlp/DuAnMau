<div class="row">
    <?php
    if (!empty($data['hang-hoa'])) {
        foreach ($data['hang-hoa'] as $value) {
            extract($value);
            $giam_gia = number_format($giam_gia);
    ?>
            <div class="col-xl-4 col-md-5 col-12">
                <div class="product">
                    <img src="<?= $URL_IMG . $hinh ?>" alt="" class="product__img">
                    <div class="product__desc">
                        <h4 class="product__title"><?= $ten_hh ?></h4>
                        <div class="product__prices">
                            <span class="product__gia"><?= $don_gia ?>VND</span>
                            <span class="product__price"><?= $giam_gia ?>VND</span>
                        </div>
                        <div class="product__btn">
                            <a href="../chitiet?url&ma_hh=<?= $ma_hh ?>" class="btn btn-buying">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
    <?php }
    }else{ ?>
        
        <h5 style="margin: 30px;">Ko tìm được sản phẩm nào</h5>
    <?php }?>

</div>