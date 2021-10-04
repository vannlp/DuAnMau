<?php if (!empty($data['hang-hoa'])) { ?>
    <div class="products">
        <div class="row">

            <?php
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
            <?php } ?>

        </div>
        <nav aria-label="Page navigation example ">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
<?php } ?>
<?php if (empty($data['hang-hoa'])) { ?>
    <h2>Không có hàng hóa nào trong danh mục này</h2>
<?php } ?>